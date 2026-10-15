<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use Laravel\Mcp\Request;

Route::get('/', function () {
    return view('welcome');
});




// Route::get('create', function () {
//     $users = User::query()->get();
//     return view('users', compact('users'));
// })->name('users.create');



// Route::post('users', function (Request $request) {
//     User::query()->create([

//     'name'=>$request->name,
//     'email'=>$request->email,
//     'password'=>$request->password
//     ]);




// })->name('users.store');
