<?php

namespace App\Http\Controllers;

use App\Models\WaitingList;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\waitingListConfirmation;

class comingsoon extends Controller
{
    public function home()
    {

        return view('welcome.home');
    }


    public function sendEmail(Request $request)
    {

        $formFields = $request->validate([
            "email" => ["required", "email", Rule::unique('Waiting_Lists', 'email')]
        ]);

        try {
            WaitingList::create($formFields);
            Mail::to($formFields['email'])->send(new waitingListConfirmation());
            Log::info('mail sending sucess:');
            return redirect('/')->with('message', 'Mail sent successfully!');
        } catch (\Exception $e) {
            Log::error('Mail Sending Error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Failed to send email. Please try again.');
        }
    }
}
