<?php

namespace Database\Seeders;

use App\Models\MyBlog;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyBlog::factory(10)->create();

        // User::create(
        //     [

        //         'name' => 'Lewandowski',
        //         'email' => 'lewan@gmail.com',
        //         'password' => bcrypt('password'),
        //     ]
        // );
    }
}
