<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaksiController extends Controller
{
    public function saksi(){
        return view('saksi.table');
    }
}
