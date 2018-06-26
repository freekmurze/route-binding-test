<?php

namespace App\Http\Controllers;

use App\User;

class MyController extends Controller
{
    public function index(User $user)
    {
        dd('user found');
    }
}
