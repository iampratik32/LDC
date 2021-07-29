<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact',[
            'msg'=>false,
        ]);
    }

    public function cIndex(){
        return view('contact',[
            'msg'=>true,
        ]);
    }

    public function store(){
        $data = request()->validate([
            'Name'=>'required',
            'Email'=>'required',
            'Subject'=>'required',
            'Message'=>'required',
        ]);

        $details = [
            'title'=>$data['Subject'],
            'body'=>$data['Message'],
            'name'=>$data['Name'],
            'email'=>$data['Email'],
        ];

        Mail::to('iampratik32@gmail.com')->send(new TestMail($details));

        return redirect('/contact/sent');
    }
}
