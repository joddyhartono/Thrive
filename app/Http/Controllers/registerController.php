<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function showRegisterPage()
    {
        return view('registerPage');
    }
}
