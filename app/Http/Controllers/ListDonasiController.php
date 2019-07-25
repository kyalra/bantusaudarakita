<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Alert;
class ListDonasiController extends Controller
{
    public function getdaftardonasi()
    {
        $buat_donasi = DB::table('buat_donasi')->get();
       

        return view('list_donasi',compact('buat_donasi'));
    }

    public function delete($id)
    {
        $del=DB::table('buat_donasi')->where('id',$id);
        $del->delete();
        Alert::success('Donasi Sudah dihapus', 'BERHASIL');
        return redirect()->back();
    }
    
}
