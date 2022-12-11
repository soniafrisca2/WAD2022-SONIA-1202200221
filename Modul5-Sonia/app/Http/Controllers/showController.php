<?php

namespace App\Http\Controllers;

use App\Models\user;

class showController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('users', compact('users'));
    }
}
