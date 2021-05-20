<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
//use App\Http\Controllers\SendEmail;

class FormEmail extends Controller
{
    private $name;
    private $email;
    private $message;
    
    
    public function __construct(Request $request)
    {
        $this->name =$request->name;
        $this->email=$request->email;
        $this->message=$request->message;
    }


    public function sendEmail(){
        $data = array(
            'name'      => $this->name,
            'email'     => $this->email,
            'message'   => $this->message,
        );

    Mail::to(config('mail.from.address'))
            ->send(new SendEmail($data));
           
        

    }
}
