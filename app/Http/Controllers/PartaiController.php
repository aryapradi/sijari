<?php

namespace App\Http\Controllers;

use App\Models\Partai;
use Illuminate\Http\Request;

class PartaiController extends Controller
{
    public function partai()
    {
        $data = Partai::all();
        return view('partai.table', compact('data'));
    }
    
    public function create_partai()
    {
        return view('partai.form');
    }
    
    public function store_partai(Request $request)
    {
        Partai::create($request->all());
        return redirect()->route('partai')->with('success','Data Berhasil Di Tambah');;
    }
    
    public function edit_partai($id)
    {
        $data = Partai::find($id);
        // dd($data->id);
        return view('partai.edit', compact('data'));
    }
    
    public function update_partai(Request $request, $id)
    {
        $data = Partai::find($id);
        $data->update($request->all());
        return redirect()->route('partai')->with('success','Data Berhasil Di Ubah');
    }
    
    public function hapus_partai($id)
    {
        $data = Partai::find($id);
        $data->delete();
        return redirect()->route('partai')->with('success','data Berhasil Di hapus');
    }
    
}
