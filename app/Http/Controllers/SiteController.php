<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

class SiteController extends Controller
{
    public function index()
    {
        $items = Slider::all();
        return view('index', compact('items'));
    }
}
