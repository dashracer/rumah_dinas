<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahController extends Controller
{
    public function index() {
        return view('rumah.index');
    }
}
