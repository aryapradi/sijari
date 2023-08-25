<?php

namespace App\Http\Controllers;

use App\Models\Caleg;
use App\Models\Partai;
use Illuminate\Http\Request;

class CalegControllers extends Controller
{
    public function caleg()
    {
        $data = Caleg::all();
        return view('caleg.table', compact('data'));
    }
    
    public function create_caleg()
    {
        $partai = Partai::all();
        return view('caleg.form', compact(['partai']));
    }

    public function store_caleg(Request $request)
    {
        Caleg::create($request->all());
        return redirect()->route('caleg');
    }

    public function edit_caleg($id)   
    {
        $data = Caleg::find($id);
        $partai = Partai::all();
        
        return view('caleg.edit', compact('data','partai'));
    }

    public function update_caleg(Request $request, $id)
    {
        $data = Caleg::find($id);
        $data->update($request->all());
        return redirect()->route('caleg');
    }

    public function hapus_caleg($id)
    {
        $data = caleg::find($id);
        $data->delete();
        return redirect()->route('caleg');
    }
}
