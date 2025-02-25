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

        // //read data from db
        // // $users = User::where('id', '3',)->first(); / opsi 1
        // $users = User::find(3); // opsi 2
        // dd($users);

        // // update data in db
        // $user = User::where('id', 1)->first();
        // $user->name = 'Joni :)';
        // $user->email = 'jonijoni@gmail.com';
        // $user->save();
        // // dd($user);

        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }
}
