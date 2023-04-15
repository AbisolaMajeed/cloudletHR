<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminFeedbackController extends Controller
{
    public function viewActiveFeedback(){
        $feedbacks = Feedback::paginate(5);
        return view('pages.admin.feedback.active-view', compact('feedbacks'));
    }

    public function viewInActiveFeedback(){
        $inactivefeedbacks = Feedback::onlyTrashed()->paginate(5);
        return view('pages.admin.feedback.inactive-view', compact('inactivefeedbacks'));
    }

    public function toggleStatus($id)
    {
        $feedback = Feedback::where('id', $id)->withTrashed()->first();
        if(null != $feedback->deleted_at)
        {
            $feedback->restore();
        }
        else{
            $feedback->delete();
        }

        return back()->with('success','Action Completed Successfully');
    }
}
