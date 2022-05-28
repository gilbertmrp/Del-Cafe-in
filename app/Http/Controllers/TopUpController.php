<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopUpController extends Controller
{
    public function index(Request $request) {
        if($request->has('search')) {
            $dataRole = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id', '=', 3)
            ->where('name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('email', 'LIKE', '%'.$request->search.'%')
            ->paginate(10);
        } else {
            $dataRole = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id', '=', 3)
            ->paginate(10);
        }
        return view('admin.top-up.index',[
            "title" => 'Top Up'
        ], compact('dataRole'));
    }

    public function addTopUp($id) {
        $dataUser = User::find($id);
        return view('admin.top-up.addTopUp',[
            "title" => 'Add Top Up'
        ], compact('dataUser'));
    }

    public function store(Request $request, $user_id) {
        $request->validate([
            'balance' => 'required'
        ]);

        $dataTopUp = User::find($user_id);
        $dataTopUp->balance = $dataTopUp->balance + $request->balance;
        $dataTopUp->save();
        return redirect()->route('topup');
    }
}
