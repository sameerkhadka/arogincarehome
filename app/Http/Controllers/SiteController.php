<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use App\Homepage;

class SiteController extends Controller
{
    public function index()
    {
        $items = Slider::all();
        $homepage = Homepage::where('id','1')->first();
        return view('index', compact('items','homepage'));
    }
}
