<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', function (Request $request) {
    $credentials = $request->only('name', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('employees.index');
    }

    return redirect()->route('login')->with('error', 'Nama atau password salah');
});

Route::post('logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::middleware(['auth'])->resource('employees', EmployeeController::class);
