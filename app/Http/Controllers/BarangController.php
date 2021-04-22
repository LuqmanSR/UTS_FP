<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function list()
    {
        $hasil = Barang::all();
        return view('list-barang', ['data' => $hasil]);
    }
    public function simpan(Request $req)
    {
        $data = new Barang;
        $data->kategori = $req->kategori;
        $data->nama = $req->nama;
        $data->stok = $req->stok;
        $data->save();

        return $this->list();
    }

    public function hapus($req)
    {
        $data = Barang::find($req);
        $data->delete();

        return $this->list();
    }

    public function rubah($req)
    {
        $hasil = Barang::find($req);
        return view('form-ubah', ['data' => $hasil]);
    }
    public function ubah(Request $req)
    {
        $data =  Barang::find($req->id);
        $data->kategori = $req->kategori;
        $data->nama = $req->nama;
        $data->stok = $req->stok;
        $data->save();
        return $this->list();
    }
}
