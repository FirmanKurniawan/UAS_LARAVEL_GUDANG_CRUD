<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;

class GudangController extends Controller
{
    public function save(Request $r)
    {
    	$alamat = $r->alamat;
    	$kapasitas = $r->kapasitas;
    	$gambar = $r->pict;

    	$gudang = new Gudang;
    	$gudang->alamat = $alamat;
    	$gudang->kapasitas = $kapasitas;

    	$file = $r->file('gambar');
    	$filename = $file->getClientOriginalName();
    	$r->file('gambar')->move("picture/", $filename);
    	$gudang->pict = $filename; 
    	$gudang->save();

    	return redirect()->back();
    }

    public function delete($id)
    {
    	$gudang = Gudang::find($id);
    	$gudang->delete();

    	return redirect()->back();
    }
}
