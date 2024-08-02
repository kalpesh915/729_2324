<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sampleMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function sendEmail(){
        $receiverEmail = "demo@gmail.com";
        $subject = "Testing Email";
        $message = "This is Sample Email From Laravel Project for Testing Email Feature with Laravel and public email providers like Gmail";

        //Mail::to($receiverEmail)->send(new sampleMail($message, $subject));
        //Mail::to($receiverEmail)->cc("another@gmail.com")->send(new sampleMail($message, $subject));
        Mail::to($receiverEmail)->bcc("another@gmail.com")->send(new sampleMail($message, $subject));
    }
}
