<?php


namespace MAAK\ContactForm\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends BaseController
{
    public function index()
    {
        return view('contactForm::index');
    }

    public function send(Request $request)
    {
        $to_name = 'Admin';
        $to_email = config('contactForm.adminEmail');
        $sender_email = $request->email;
        $sender_message = $request->message;
        $sender_name = $request->name;
        $data = array('name'=> $request->name, 'body' => $request->message);
        Mail::send('contactForm::emails.mail', $data, function($message) use ($to_name, $to_email,$sender_email,$sender_message,$sender_name) {
            $message->to($to_email, $to_name)->subject('Contact Form');
            $message->from($sender_email, $sender_name);
        });

        return redirect()->back();
    }
}
