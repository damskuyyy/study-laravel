<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kuliah;

class KuliahController extends Controller
{
    //
    public function KuliahView()
    {
        // $allDataBarang=Barang::all();
        $data['allDataKuliah'] = Kuliah::all();
        return view('backend.user.kuliah.view_kuliah', $data);
    }
      public function KuliahAdd()
    {
        // $allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backend.user.kuliah.add_kuliah');
    }
    public function KuliahRequest(Request $request){
        $data = new Kuliah();
        $data->namaKuliah = $request->namaKuliah;
        $data->pengajar = $request->pengajar;
        $data->save();

        return redirect()->route('kuliah.view')->with('info', 'Tambah Kuliah Berhasil');
    }
}