<?php

namespace App\Http\Controllers;
use Alert;
use DB;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function FunctionName(Type $var = null)
    {
        $this->middleware('auth');
    }
    public function donatur($id,Request $request)
    {
        $request->validate([
            'email' => 'required|unique:donatur|max:255',
        ]);
       $donatur = DB::table('donatur')->insertGetId([
           'nama'=>$request->nama,
           'email'=>$request->email,
           'komentar'=>$request->komen,
           'jumlah_donasi'=>$request->jumlah_donasi,
           'buktitf'=>$request->bukti_tf,
           'id_buat_donasi' => $id
       ]);
       Alert::success('ANAK KONTOL', 'Judul Pesan');
           DB::table('list_donasi')->insert([
        'id_buat_donasi' => $id,
        'id_donatur' => $donatur,
        'donasi_terkumpul' => $request->jumlah_donasi
       ]);
       $user = DB::table('list_donasi')->where('id_buat_donasi',$id)->sum('donasi_terkumpul');
        DB::table('buat_donasi')->where('id',$id)->update([
            'jumlah_terkumpul' => $user
        ]);
     
        
       return redirect()->back();
    }

    public function getdonatur()
    {

        $donatur = DB::table('donatur')
        ->get();
        // dd($donatur);
   
       

        return view('donasi',compact('donatur'));
    }
    public function confimasi($id)
    {
     DB::table('donatur')->where('id',$id)->update([
            'konfirmasi' => true
       ]);
       $user = DB::table('donatur')->where('id',$id)->first();
       $buat_donasi = DB::table('donatur')->where('id_buat_donasi',$user->id_buat_donasi)->sum('jumlah_donasi');
       $users = DB::table('buat_donasi')->where('id',$user->id_buat_donasi)->update([
           'jumlah_terkumpul' => $buat_donasi
       ]);
       Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');
       return redirect()->back();
    }
}
