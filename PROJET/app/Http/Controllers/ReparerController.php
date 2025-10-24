<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ReparerController extends Controller
{
    //
    public function reparer () {
        return view("reparer");
    }
}
