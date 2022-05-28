<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Coupon;
use App\Models\MenuType;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function coupon() {
        $dataCoupon = Coupon::all();
        return view('admin.coupon.index', [
            "title" => 'Coupon'
        ], compact('dataCoupon'));
    }

    public function addCoupon() {
        return view('admin.coupon.addCoupon', [
            "title" => 'Add Coupon'
        ]);
    }

    public function addCouponProcess(Request $request) {
        $request->validate([
            'code' => 'required',
            'discount_percent' => 'required',
            'expired' => 'required',
            'status' => 'required'
        ]);
        $newCoupon = new Coupon();
        $newCoupon->code = $request->code;
        $newCoupon->discount_percent = $request->discount_percent;
        $newCoupon->expired = $request->expired;
        $newCoupon->status = $request->status;
        
        $newCoupon->save();
        return redirect()->route('coupon')->with('toast_success', 'Coupon berhasil disimpan');
    }

    public function editCoupon($id) {
        $coupon = Coupon::find($id);
        return view('admin.coupon.editCoupon', [
            "title" => 'Edit Coupon'
        ], compact('coupon'));
    }

    public function updateCoupon(Request $request, $id) {
        $request->validate([
            'code' => 'required',
            'discount_percent' => 'required',
            'expired' => 'required',
            'status' => 'required'
        ]);

        Coupon::where('id', $id)->update([
            'code' => $request->code,
            'discount_percent' => $request->discount_percent,
            'expired' => $request->expired,
            'status' => $request->status
        ]);

        return redirect()->route('coupon')->with('status', 'Coupon berhasil diupdate');
    }

    public function delete($id) {
        $data = Coupon::find($id);
        $data->delete();
        return redirect()->route('coupon')->with('status', 'Coupon berhasil dihapus');
    }
}
