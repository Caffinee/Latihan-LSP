<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;

class IndexController extends Controller
{
    public function home(){
        return Inertia::render('Home');
    }
}
