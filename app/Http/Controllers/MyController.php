<?php

namespace App\Http\Controllers;

use App\OtherModel;
use App\User;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(User $user)
    {
        dd('user found');
    }
}
