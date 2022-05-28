<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\ClaimCoupon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClaimCouponController extends Controller
{
    public function index() {
        $coupons = Coupon::all();
        $claimCoupons = ClaimCoupon::where('user_id','=',Auth::user()->id)->get();
        return view('user.coupon', [
            'title' => 'Claim Coupon'
        ], compact('coupons','claimCoupons'));
    }

    public function claim($id) {
        $claim = new ClaimCoupon();
        $claim->user_id = Auth::user()->id;
        $claim->coupon_id = $id;
        $claim->save();
        return redirect()->back()->with('success', 'Coupon berhasil di klaim');
    }
}
