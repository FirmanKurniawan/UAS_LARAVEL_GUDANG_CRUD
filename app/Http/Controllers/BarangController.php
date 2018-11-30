<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
   public function save(Request $r)
   {

   		$nama = $r->nama;
   		$berat = $r->berat;
   		$gudang_id = $r->gudang_id;

   		$barang = new Barang;
   		$barang->nama = $nama;
   		$barang->berat = $berat;
   		$barang->gudang_id = $gudang_id;
   		$barang->save();

   		return redirect()->back();
   }

   public function index()
   {
    return view('all');
   }
}
