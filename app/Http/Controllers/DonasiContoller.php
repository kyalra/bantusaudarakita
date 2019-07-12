<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DonasiContoller extends Controller
{
    public function buat_donasi(Request $request)
    {
        $auth = Auth::id();
        DB::table('buat_donasi')->insert([
           'judul' => $request->judul,
           'keterangan'=>$request->keterangan,
           'jumlah_donasi'=>$request->jumlah,
           'gambar'=>$request->gambar
        ]);
    }

    public function donatur()
    {
       DB::table('donatur')->insert([
           'nama'=>$request->nama,
           'email'=>$request->email,
           'komen'=>$request->komentar,
           'jumlah_donasi'=>$request->jumlah_donasi,
           'bukti_tf'=>$request->buktitf
       ]);
    }
}
