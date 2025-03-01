<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request)
    {
        $request->validate(
            [
                'name'      => 'required|max:20|min:2',
                'email'     => 'required|email',
                'subject'   => 'required',
                'message'   => 'required'
            ],
            [
                'name.required' => 'Hey please input your name',
                'name.max'    => 'the max length of name have to be 20',
                'name.min'    => 'the min length of name have to be 2',
                'email.required' => 'Hey please input your email, because required',
                //'email.email'   => 'Please enter a valid email address',
                //'subject.required' => 'Hey please input a subject',
            ]
        );
    }
}
