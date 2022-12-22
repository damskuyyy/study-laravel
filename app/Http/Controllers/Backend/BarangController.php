<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    //
     public function BarangView()
    {
        // $allDataBarang=Barang::all();
        $data['allDataBarang'] = Barang::all();
        return view('backends.barang.view_barang', $data);
    }
      public function BarangAdd()
    {
        // $allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backends.barang.add_barang');
    }
    public function BarangRequest(Request $request){
        $data = new Barang();
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->save();

        return redirect()->route('barang.view')->with('info', 'Tambah Barang Berhasil');
    }
     public function BarangEdit($id)
    {
        $editData = Barang::find($id);
        return view('backends.barang.edit_barang', compact('editData'));
    }

     public function BarangUpdate(Request $request, $id){
        $data = Barang::find($id);
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah; 
        $data->save();

        return redirect()->route('barang.view')->with('info', 'Update Barang Berhasil');
     }
     public function BarangDelete($id)
    {
        $deleteData = Barang::find($id);
        $deleteData->delete();


        return redirect()->route('barang.view')->with('info', 'Delete Barang Berhasil');
    }
}
