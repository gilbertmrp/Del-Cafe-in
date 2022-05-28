<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Level;
use App\Models\Coupon;
use App\Models\MenuType;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\ClaimCoupon;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class TransactionController extends Controller
{
    public function index() {
        $transaction = Transaction::where('user_id', '=', Auth::user()->id)->orderBy('id','desc')->get();
        return view('user.transaction', [
            'title' => 'Transaction History'
        ], compact('transaction'));
    }

    public function ubahPesanan($id) {
        $transaction = Transaction::find($id);
        //check 2 hours
        if(time()+7200 > strtotime($transaction->menuType->menu_time)){
            return redirect()->back()->with('error', 'Sudah melewati batas perubahan pesanan. Perubahan maksimal 2 jam sebelum sesi makan');
        }
        $menu = Menu::where('id', '=', $transaction->menu_id)->first();
        return view('user.ubahpesanan', [
            'title' => 'Change Order'
        ], compact('transaction','menu'));
    }

    public function updatePesanan(Request $request,$id) {
        $transaction = Transaction::find($id);
        $transaction->lauk = $request->lauk;
        $transaction->save();
        return redirect()->route('transaction')->with('success', 'Pesanan anda berhasil di ubah');
    }

    public function payments($id) {
        $payments = Menu::find($id);
        $coupons = DB::table('coupons')
            ->join('claim_coupons', 'coupons.id', '=', 'claim_coupons.coupon_id')
            ->where('claim_coupons.user_id', '=', Auth::user()->id)
            ->where('coupons.status', '=', 'Active')
            ->where('claim_coupons.used_status', '=', 'Not Used')
            ->get();

        return view('user.list-menu.payment', [
            'title' => 'Payment'
        ], compact('payments','coupons'));
    }

    public function storePayments(Request $request, $id) {
        $balance = Auth::user()->balance;
        $menu = Menu::find($id);
        $coupon = Coupon::find($request->coupon);
        if($request->coupon != 0){
            $total = $menu->harga - ($menu->harga*$coupon->discount_percent/100);
        }else{
            $total = $menu->harga;
        }
        if($balance < $total){
            return redirect()->back()->with('error', 'Saldo tidak cukup. Silahkan top up ke bagian admin.');
        }
        
        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->menu_type_id = $menu->menu_type_id;
        $transaction->lauk = $request->lauk;
        $transaction->sayur = $menu->sayur;
        $transaction->minuman = $menu->minuman;
        $transaction->harga = $menu->harga;
        if($request->coupon != 0){
            $transaction->coupon_id = $request->coupon;
        }
        $transaction->day_id = $menu->day_id;
        $transaction->menu_id = $menu->id;
        $transaction->save();

        $user = Auth::user();
        $user->balance -= $total;
        $user->save();

        if($request->coupon != 0){
            $claimCoupon = ClaimCoupon::where('user_id', '=', Auth::user()->id)->where('coupon_id','=',$request->coupon)->first();
            $claimCoupon->used_status = 'Used';
            $claimCoupon->save();
        }
        return redirect()->route('transaction')->with('success', 'Transaksi anda berhasil! Silahkan beri ulasan terkait pesanan');
    }

    // For admin
    public function tampilTransaksi(Request $request) {
        if($request->has('search')) {
            $dataTransaksi = Transaction::where('user_id', 'LIKE', '%'.$request->search.'%')->paginate(10);
        }else {
            $dataTransaksi = Transaction::paginate(10);
        }
        return view('admin.transaction',
        [
            'title' => 'Transaksi'
        ], compact('dataTransaksi'));
    }


    public function transaksiAllPDF() {
        $dataTransaksi = Transaction::all();
        $pdf = PDF::loadView('admin.transactionPDF', ['dataTransaksi' => $dataTransaksi ]);

        return $pdf->download('all-transaction.pdf');
    }

    public function viewTransaksi($id) {
        $dataUserTransaksi = Transaction::find($id);
        return view('admin.viewTransaction',[
            "title" => 'View Transaksi'
        ], compact('dataUserTransaksi'));
    }

    public function viewTransaksiPDF($id) {
        $dataUserTransaksi = Transaction::find($id);
        $pdf = PDF::loadView('admin.viewTransactionPDF', ['dataUserTransaksi' => $dataUserTransaksi]);
        return $pdf->download('transaction-view.pdf');
    }
    
}
