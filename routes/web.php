<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('homepage');


Route::get('/contacts', function () {

    $user = [
        'firstName' => 'Jhonny',
        'lastName' => 'Denzel',
        'email' => 'jhonnydenzel@email.ba',
        'phone' => '+23 1123456785',
        'city' => 'Georgetown (GUY)',
        'address' => 'Princess St.',
    ];

    return view('contacts', [
        'user' => $user
    ]);
})->name('contacts');

Route::get('/socials', function () {

    $socials = [
        'twitter' => [
            'link' => 'https://twitter.com/',
            'icon' => 'fa-brands fa-twitter',
            'color' => 'info'
        ],
        'facebook' => [
            'link' => 'https://www.facebook.com/',
            'icon' => 'fa-brands fa-facebook',
            'color' => 'primary'
        ],
        'instagram' => [
            'link' => 'https://www.instagram.com/',
            'icon' => 'fa-brands fa-instagram',
            'color' => 'warning'
        ],
        'github' => [
            'link' => 'https://github.com/',
            'icon' => 'fa-brands fa-github',
            'color' => 'secondary'
        ],
        'laravel' => [
            'link' => 'https://laravel.com/',
            'icon' => 'fa-brands fa-laravel',
            'color' => 'danger'
        ],
    ];

    return view('socialLinks', [
        'socials' => $socials
    ]);
})->name('socials');
