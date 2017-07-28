<?php

namespace App\Http\Controllers;

use App\Mail\ContactEnquiry;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Contact Form handler
     * --------------------
     * Validates the submitted values from the contact form and emails them
     * if everything is OK.
     *
     * @param  Request $request Request object
     */
    public function contact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

		Mail::to('chris@touson.co.uk')
			->send(new ContactEnquiry($request));

        return redirect('thank-you');
    }
}
