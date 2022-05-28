<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use App\Models\Coupon;
use App\Models\MenuType;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() 
    {
        if(Auth::user()->hasRole('user')) {
            $menuType = MenuType::all();
            return view('user.dashboard', [
                'title' => 'Dashboard'
            ], compact('menuType'));
        }elseif(Auth::user()->hasRole('pelayan')) {
            // dd(Auth::user());
            return view('pelayan.dashboard');
        }elseif(Auth::user()->hasRole('admin')) {
            return view('admin.dashboard', [
                "title" => 'Dashboard'
            ]);
        }
    }

    public function roles(Request $request) {
        if($request->has('search')) {
            $dataUser = User::where('name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('email', 'LIKE', '%'.$request->search.'%')
            ->paginate(10);
        }else {
            $dataUser = User::paginate(10);
        }
        return view('admin.roles',[
            "title" => 'Roles'
        ], compact('dataUser'));
    }

    public function rolesPDF() {
        $dataUser = User::all();
        $pdf = PDF::loadView('admin.rolesPDF', ['dataUser' => $dataUser]);
        return $pdf->download('data-roles.pdf');
    }

    public function changePass() {
        return view('admin.settings', [
            "title" => 'Setting'
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'current_password' =>'required',
            'password' =>'required|min:8|confirmed',
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('toast_success', 'Password berhasil diupdate');
        }

            throw ValidationException::withMessages([
                'current_password' => 'Your Current Password does not match with our record'
            ]);
    }

    public function view($id) {
        $dataUser = User::find($id);
        return view('admin.viewRoles', [
            "title" => 'View Roles'
        ], compact('dataUser'));
    }

    public function aboutus() {
        return view('user.aboutus', [
            "title" => "About Us"
        ]);
    }

    
}
