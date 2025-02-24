<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // // insert a new data
        // DB::table('users')->insert([
        //     [
        //         'name' => 'Moses',
        //         'email' => 'mosses@gmail.com',
        //         'password' => bcrypt('password'),
        //     ],
        //     [
        //         'name' => 'Lewandowski',
        //         'email' => 'lewaan@gmail.com',
        //         'password' => bcrypt('password'),
        //     ]
        // ]);

        // //get data from db
        // $users =  DB::table('users')->where('id', '>', 3)->get();
        // return $users;

        // //update data
        // DB::table('users')->where('id', 9)->update([
        //     'name' => 'Messsssssssuuuuuuiiiiiiiiii',
        //     'email' => 'suiiiiii@gmail.com.updated',
        //     'password' => bcrypt('password'),
        // ]);

        // //delete from db
        // DB::table('users')->where('id', '>', 8)->delete();

        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }
}
