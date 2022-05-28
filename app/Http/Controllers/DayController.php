<?php

namespace App\Http\Controllers;

use App\Models\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function publishMenu() {
        $days = Day::all();
        return view('pelayan.publishmenu', compact('days'));
    }

    public function publish($id) {
        $days = Day::where('status', '=', 'Published')->first();
        if($days!=null){
            $days->status = 'unPublished';
            $days->save();
        }
        

        $days = Day::find($id);
        $days->status = 'Published';
        $days->save();
        return redirect()->back();
    }

    
}
