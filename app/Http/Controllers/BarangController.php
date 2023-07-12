<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = \App\Models\Barang::get();
        return view('barang.index', ['barang' => $barang]);
    }
}
