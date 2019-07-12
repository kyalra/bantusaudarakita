<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function donatur(Request $request)
    {
       DB::table('donatur')->insert([
           'nama'=>$request->nama,
           'email'=>$request->email,
           'komentar'=>$request->komen,
           'jumlah_donasi'=>$request->jumlah_donasi,
           'buktitf'=>$request->bukti_tf
       ]);
       return redirect()->back();
    }

    public function getdonatur()
    {
        $donatur = DB::table('donatur')
        ->join('buat_donasi','donatur.id','=','buat_donasi.id')
        ->get();
        // dd($donatur);
        return view('donasi',compact('donatur'));
    }
    public function confimasi($id)
    {
       DB::table('donatur')->where('id',$id)->update([
            'konfirmasi' => true
       ]);
       return redirect()->back();
    }
}
