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

        // $product = Product::where(['id' => 3, 'price' => 261])->get();
        // $product = Product::where('name', 'LIKE', '%Make%')->orWhere('description', 'LIKE', '%Blanditiis%')->get();
        // $product = Product::whereIn('id', [1, 2,])->get();
        $product = Product::whereBetween('price', [100, 300])->get();
        dd($product);
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }
}
