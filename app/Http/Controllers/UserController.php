<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }

    public function goto(){
        return View('Users');

    }
}
