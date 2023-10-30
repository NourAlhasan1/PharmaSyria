<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Mail\Pharmacists_SyndicateMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SendGrid\Mail\Mail as SendGridMail;



class MailController extends Controller
{
    public function index(Request $request){


           $email=$request->input('email');
            Mail::to( $email)->send(new Pharmacists_SyndicateMail());



    }
}
