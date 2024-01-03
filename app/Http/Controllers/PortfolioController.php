<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $image = Portfolio::all();
        return view("welcome",compact("image"));
    }
}
