<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class EmailController extends Controller
{
    public function send(Request $request){
        if($request->name)
        {
            $data=[
                'form_email'=>$request->email,
                'form_name'=>$request->name, 
                'form_phone' => $request->phone,
                'form_message'=>$request->message
            ];

            Mail::send('emails.appointment', $data, function($message) use ($data){
                $message->from($data['form_email'],$data['form_name']);
                $message->to('noreply@arogincarehome.com');
                $message->subject('Message From Appointment Booking Form');
            });  
        }
        else{
            $data=[
                'form_email'=>$request->email,
                'form_first_name'=>$request->first_name, 
                'form_last_name'=>$request->last_name, 
                'form_phone' => $request->phone,
                'form_message'=>$request->message
            ];

            Mail::send('emails.contact', $data, function($message) use ($data){
                $message->from($data['form_email'],$data['form_first_name']);
                $message->to('noreply@arogincarehome.com');
                $message->subject('Message From Contact Form');
            });    
        }
          
        return redirect()->back()->with('success','Message Sent Successfully');
    }
}
