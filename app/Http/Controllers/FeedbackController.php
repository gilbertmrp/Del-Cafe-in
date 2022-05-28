<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Feedback;
use App\Models\Transaction;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index() {
        $feedbacks = Feedback::all();
        return view('pelayan.feedback', compact('feedbacks'));
    }

    public function view($id) {
        $viewFeed = Feedback::find($id);
        return view('pelayan.view', compact('viewFeed'));
    }

    //For user
    public function getFeedback($id) {
        $dataFeed = Transaction::find($id);
        $dataUser = User::all();
        return view('user.list-menu.feedback', [
            'title' => 'Add Feedback'
        ],compact('dataFeed', 'dataUser'));
    }

    public function addFedback(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required'
        ]);

        $newFeedback = new Feedback();
        $newFeedback->user_id = $request->user_id;
        $newFeedback->description = $request->description;

        $newFeedback->save();
        return redirect()->route('transaction');
    }
    
    public function review() {
        $review = Feedback::all();
        return view('user.review', [
            'title' => 'Review'
        ], compact('review'));
    }
}
