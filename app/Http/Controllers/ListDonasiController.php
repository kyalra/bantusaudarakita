<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ListDonasiController extends Controller
{
    public function getdaftardonasi()
    {
        $buat_donasi = DB::table('buat_donasi')->get();
        // dd($buat_donasi);
        return view('list_donasi',compact('buat_donasi'));
    }

    public function destroy($id)
    {
        $List_donasi = list_donasi::find($id);
        $List_donasi->delete();

        return redirect('/list_donasi')->with('success', 'Galangan dana deleted!');
    }
}
