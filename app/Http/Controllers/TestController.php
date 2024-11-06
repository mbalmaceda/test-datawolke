<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TestController extends Controller
{
    public function show(): View
    {
        return view('welcome');
    }
}
