<?php

namespace App\Http\Controllers\ModernNative\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Public.Index');
    }
}
