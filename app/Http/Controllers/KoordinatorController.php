<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoordinatorController extends Controller
{
    public function koor(){
        return view('koordinator.table');
    }
}
