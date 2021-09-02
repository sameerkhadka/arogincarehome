<?php

namespace App\Http\Controllers;

use App\CareService;

use Illuminate\Http\Request;

class CareServiceController extends Controller
{
    public function update(Request $request)
    {
        return $request->file("banner_image")->getClientOriginalName();
    }
}
