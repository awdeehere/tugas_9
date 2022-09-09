<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientController extends Controller
{
    function filter()
    {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        return view('landing.collect', $data);
    }

    function showHome()
    {
        $data['list_produk'] = Produk::all();
        return view('landing.home', $data);
    }

    function showCollection()
    {  
        $data['list_produk'] = Produk::all();
        return view('landing.collect', $data);
    }

}
