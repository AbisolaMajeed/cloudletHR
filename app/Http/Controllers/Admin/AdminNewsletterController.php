<?php

namespace App\Http\Controllers\Admin;

use App\Events\SendNewsletterEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminNewsLetterFormRequest;
use Illuminate\Http\Request;
use App\Models\Newsletter;

class AdminNewsletterController extends Controller
{
    public function viewNewsLetter()
    {
        $newsletters = Newsletter::paginate(4);
        return view('pages.admin.newsletter.view', compact('newsletters'));
    }

    public function addNewsLetter()
    {
        $newsletter = new Newsletter;
        return view('pages.admin.newsletter.add-newsletter')->with('newsletter', $newsletter);
    }

    public function storeNewsLetter(AdminNewsLetterFormRequest $request)
    {
        $newsletter = array(
            'subject' => $request->subject,
            'email' => $request->email,
            'category' => $request->category,
            'content' => $request->content
        );

        Newsletter::create($newsletter);
        return redirect('dashboard/newsletter/view')->with('success', 'Newsletter added successfully');
    }

    public function editNewsLetter($id)
    {
        $newsletter = Newsletter::find($id);
        return view('pages.admin.newsletter.add-newsletter')->with('newsletter', $newsletter);
    }

    public function updateNewsLetter(AdminNewsLetterFormRequest $request)
    {
        $newsletter = Newsletter::find($request->id);
        $newsletter->subject = $request->subject;
        $newsletter->email = $request->email;
        $newsletter->category = $request->category;
        $newsletter->content = $request->content;
        $newsletter->save();
        return redirect('dashboard/newsletter/view')->with('success', 'Newsletter Updated successfully');
    }

    public function deleteNewsLetter($id)
    {
        $newsletter = Newsletter::where('id', $id)->delete();
        return back()->with('success', 'Newsletter Deleted successfully');
    }

    public function sendNewsLetter(AdminNewsLetterFormRequest $request)
    {

        $newsletter = array(
            'subject' => $request->subject,
            'email' => $request->email,
            'category' => $request->category,
            'content' => $request->content
        );

        if ($request->input('action') == 'send_and_save') {
            Newsletter::create($newsletter);
            SendNewsletterEvent::dispatch($newsletter);
        } else {
            SendNewsletterEvent::dispatch($newsletter);
        }

        return redirect('dashboard/newsletter/view')->with('success', 'Newsletter sent successfully');
    }
}
