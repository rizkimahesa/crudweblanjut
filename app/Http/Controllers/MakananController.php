<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    function tampil() {
        $makanan = Makanan::get();
        return view('makanan.tampil', compact('makanan'));
    }

    function tambah(){
        return view('makanan.tambah');
    }

    function kirim(Request $request){
        $makanan = new Makanan();
        $makanan->nama = $request->nama;
        $makanan->jenis = $request->jenis;
        $makanan->save();

        return redirect()->route('makanan.tampil');
    }

    function edit($id){
        $makanan = Makanan::find($id);
        return view('makanan.edit', compact('makanan'));
    }

    function update(Request $request, $id){
        $makanan = Makanan::find($id);
        $makanan->nama = $request->nama;
        $makanan->jenis = $request->jenis;
        $makanan->update();

        return redirect()->route('makanan.tampil');
    }

    function delete($id){
        $makanan = Makanan::find($id);
        $makanan-> delete();
        return redirect()->route('makanan.tampil');
    }
}
