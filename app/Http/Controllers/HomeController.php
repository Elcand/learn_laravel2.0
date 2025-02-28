<?php

namespace App\Http\Controllers;

use App\Models\MyBlog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Product::find(1)->delete();
        // $products = Product::withTrashed()->find(1); // jika ini mencari data yg udah dihapus
        // $products = Product::onlyTrashed()->get();
        
        $products = Product::withTrashed()->find(1)->restore();

        dd($products);

        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }
}
