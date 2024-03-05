<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class TesttubeController extends Controller
{
    public function index(Color $color)
    {
        return view('colors.index')->with(['colors' => $color->get()]);
    }
}
