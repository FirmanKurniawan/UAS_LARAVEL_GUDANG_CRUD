<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Gudang;

class BarangController extends Controller
{

   public function edit($id)
    {
        $barang = Barang::all()->where('id',$id);

        return view('barang.edit', compact('barang'));
    }

    public function update(Request $r)
    {
      $id = $r->id;
      $nama = $r->nama;
      $berat = $r->berat;
      $gudang_id = $r->gudang_id;

      $barang = Barang::find($id);
      $barang->nama = $nama;
      $barang->berat = $berat;
      $gudang_id = $gudang_id;
      $barang->save();

      return redirect()->back();
    }

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

   public function delete($id)
   {
      $barang = Barang::find($id);
      $barang->delete();

      return redirect()->back();
   }
}
