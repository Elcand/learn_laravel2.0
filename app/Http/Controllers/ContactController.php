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
        $request->validate([
            'name'      => 'required|max:20|min:2',
            'email'     => 'required|email',
            'subject'   => 'required',
            'message'   => 'required'
        ]);
    }
}
