<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        $products = DB::table('products')->avg('price');
        dd($products);
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }
}
