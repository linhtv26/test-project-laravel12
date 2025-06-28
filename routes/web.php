<?php

use App\Events\UserRegistered;
use App\Http\Controllers\SignInController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

Route::get('/', [SignInController::class, 'index']);

Route::get('/listen-sign-in', function () {


    return view('listen-sign-in');
});

Route::post('/register', function (Illuminate\Http\Request $request) {
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    UserRegistered::dispatch($user); // Broadcast nếu có

    return response()->json(['message' => 'User registered']);
});
