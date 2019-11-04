<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Auth\Report;
use Illuminate\Support\Facades\Mail;
use App\Mail\Frontend\Contact\SendContact;
use App\Http\Requests\Frontend\Contact\SendContactRequest;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(SendContactRequest $request)
    {

        $report = new Report();
        $report->email = $request->email;
        $report->phone = $request->phone;
        $report->subject = $request->subject;
        $report->message = $request->message;
        $report->status = 1;

        if($report->save()){
//            Mail::send(new SendContact($request));
            return redirect()->back()->withFlashSuccess(__('alerts.frontend.contact.sent'));
        }

        return redirect()->back()->withFlashDanger(__('alerts.frontend.contact.sent'));




    }
}
