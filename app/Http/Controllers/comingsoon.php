<?php

namespace App\Http\Controllers;

use App\Models\WaitingList;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class comingsoon extends Controller
{
    public function home()
    {

        return view('welcome.home');
    }


    public function sendEmail(Request $request)
    {
        $formFields = $request->validate([
            "email" => ["required", Rule::unique('waitingListEmails', 'company')]
        ]);
        WaitingList::create($formFields);
        return redirect('/')->with('message', 'mail send successful');
    }
}
