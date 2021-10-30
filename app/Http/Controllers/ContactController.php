<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use App\Mail\thankyou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $myEmail = 'info@robert-herring.com';

//        die($request->name);

        request()->validate([
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191'],
            'url' => ['string', 'max:191', 'nullable'],
            'subject' => ['string', 'max:191', 'nullable'],
            'message' => ['required', 'string']
        ]);

//        die('working');

        $details = [
            'subject' => 'New message from Robert-Herring.com.',
            'submittedSubject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'url' => $request->url,
            'message' => $request->message
        ];

//        die('everything is working ' . $details['name']);

        Mail::to($myEmail)->send(new contact($details));
        Mail::to($request->email)->send(new thankyou($details));

        return Redirect::back()->with('success', 'Your message has been delivered. I will be in touch with you shortly.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
