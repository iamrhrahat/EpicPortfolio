<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $a_data = AboutModel::all();
        return view("welcome",compact("a_data"));
    }
}
