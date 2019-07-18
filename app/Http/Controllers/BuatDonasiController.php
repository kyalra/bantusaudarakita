<?php

namespace App\Http\Controllers;

use Auth;
use Alert;
use DB;
use Illuminate\Http\Request;

class BuatDonasiController extends Controller
{
    public function buat_donasi(Request $request)
    {
        $request->validate([
            'norek' => 'required|max:255',
            'jumlah'=>'required|max:255',
        ]);
        $auth = Auth::id();
        $gambar = $request->file('gambar')->getClientOriginalName();

        DB::table('buat_donasi')->insert([
           'judul' => $request->judul,
           'keterangan'=>$request->keterangan,
           'jumlah'=>$request->jumlah_donasi,
           'gambar'=>$gambar,
           'norek'=>$request->norek,
           'users_id' => $auth
        ]);
        Alert::success('ANAK KONTOL', 'Judul Pesan');
        $name = time() . $gambar;
        $request->gambar->move( public_path('img/donasi/'), $gambar);;
        return redirect()->back();
    }
    public function getdonasi()
    {
        $buat_donasi = DB::table('buat_donasi')->get();
        // dd($buat_donasi);

        return view('donasihomepage',compact('buat_donasi'));
    }

}
