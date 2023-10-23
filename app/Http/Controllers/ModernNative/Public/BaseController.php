<?php

namespace App\Http\Controllers\ModernNative\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BaseController extends Controller
{
    public function index()
    {
        return Inertia::render('Public/Base/Home/Index');
    }
}
