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
    
    public function create_Caleg()
    {
        $partai = Partai::all();
        return view('caleg.form', compact('partai'));
    }

    public function store_Caleg(Request $request)
    {
        Caleg::create($request->all());
        return redirect()->route('caleg')->with('success', ' Data Berhasil Di Tambah ');
    }

    public function edit_Caleg($id)   
    {
        $data = Caleg::findOrFail($id);
        $partai = Partai::all();
        
        return view('caleg.edit', compact('data', 'partai'));
    }

    public function update_Caleg(Request $request, $id)
    {
        $data = Caleg::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('caleg')->with('success', 'Anda Berhasil Mengubah Pada Data  ' . $data->nama_caleg );
    }

    public function hapus_Caleg($id)
    {
        $data = Caleg::find($id);
        
        if ($data) {
            $namaCaleg = $data->nama_caleg;
            $data->delete();
            return redirect()->route('caleg')->with('success', 'Data ' . $namaCaleg . ' Berhasil dihapus');
        } else {
            return redirect()->route('caleg')->with('error', 'Data Caleg tidak ditemukan.');
        }  
    }
}
