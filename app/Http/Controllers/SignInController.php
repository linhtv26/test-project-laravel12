<?php

namespace App\Http\Controllers;
use Redis;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function index() {
        return view('welcome');
    }
}
