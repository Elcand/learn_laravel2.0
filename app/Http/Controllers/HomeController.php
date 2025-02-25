<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // //create data
        // $user = new User(); // contoh 1
        // $user->name = 'Coki pardede';
        // $user->email = 'coki.pardede@gmail.com';
        // $user->password = 'password';
        // $user->save();

        // $products = new Product(); // contoh 2
        // $products->name = 'Make Time';
        // $products->description = 'Buku';
        // $products->price = '75000';
        // $products->save();
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }
}
