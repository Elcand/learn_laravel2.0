<?php

use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/about', function () {
        return 'About Page';
    })->name('about');

    Route::get('/user/{id}/{slug}', function ($id, $slug) {
        return 'ID User' . $id . '-' . $slug;
    })->name('user');

    /* Route::get('/user/{name}', function ($name) {
        return 'Halo' . $name; // 👌
    })->name('user');*/
});

Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/create', function () {
        return 'Create Blog Page';
    })->name('create');
    Route::get('/edit', function () {
        return 'Edit Blog Page';
    })->name('edit');
    Route::get('/show', function () {
        return 'Show Blog Page';
    })->name('show');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard Page';
    });
    Route::get('/settings', function () {
        return 'Admin Setting Page';
    });
});


/*Route::get('/contact', function () {
    return '
    <form action="/contact" method="POST">
        ' . csrf_field() . '
        <input type="text" name="name" placeholder="Masukkan nama">
        <button type="submit">Kirim</button>
    </form>';
});

Route::post('/contact', function () {
    $name = request('name');
    return "Halo, $name! Form berhasil dikirim!";;
}); 👌 */



Route::fallback(function () {
    return 'Not Found Page';
});
