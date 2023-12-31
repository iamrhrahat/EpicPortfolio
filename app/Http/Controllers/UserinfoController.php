<?php

namespace App\Http\Controllers;

use App\Models\Userinfo;
use Illuminate\Http\Request;

class UserinfoController extends Controller
{
    public function index()
    {
        $data = Userinfo::all();
        return view('welcome', compact('data'));
    }
}
