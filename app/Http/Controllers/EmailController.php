<?php
use Illuminate\Support\Facades\Mail;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $to = 'recipient@example.com';
        $subject = 'Test Email';
        $data = ['message' => 'This is a test email.'];

        Mail::to($to)->send(new \App\Mail\TestEmail($data, $subject));

        return 'Email sent successfully!';
    }
}