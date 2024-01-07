<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserinfoController extends Controller
{
    public function index()
    {
        $data = UserInfo::all();
        return view('welcome', compact('data'));
    }
}
