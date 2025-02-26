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
        // create a new user
        // User::create([ //opsi 1
        //     'name' => 'Harry Maguire',
        //     'email' => 'harry@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        User::insert([ //opsi 2
            [
                'name' => 'Horry',
                'email' => 'horry@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Herra',
                'email' => 'herra@gmail.com',
                'password' => bcrypt('password'),
            ]
        ]);
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }
}
