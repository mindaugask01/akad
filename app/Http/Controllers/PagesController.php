<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.welcome');
    }

    public function register() {
        return view('pages.register');
    }
}
