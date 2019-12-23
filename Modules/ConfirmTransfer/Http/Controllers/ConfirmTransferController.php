<?php

namespace Modules\ConfirmTransfer\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
use Alert;

class ConfirmTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
            $donatur = DB::table('donatur')->get();
            // ->join('buat_donasi','donatur.id_buat_donasi','=','donatur.id')
            // dd($donatur);
       
           

        return view('confirmtransfer::index',compact('donatur'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('confirmtransfer::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('confirmtransfer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('confirmtransfer::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    public function FunctionName(Type $var = null)
    {
        $this->middleware('auth');
    }
    public function donatur($id,Request $request)
    {
        // $request->validate([
        //     'email' => 'required|unique:donatur|max:255',
        // ]);
       $donatur = DB::table('donatur')->insertGetId([
          
           'nama'=>$request->nama,
           'email'=>$request->email,
           'komentar'=>$request->komen,
           'buktitf'=>$request->bukti_tf,
           'id_buat_donasi' => $id,
           'jumlah_donasi' => $request->jumlah_donasi,
       ]);
       
       Alert::success('Semoga Donasi mu Bermanfaat pada Orang Banyak', 'Terima Kasih');
           DB::table('list_donasi')->insert([
        'id_buat_donasi' => $id,
        'id_donatur' => $donatur,
        // 'donasi_terkumpul' => $request->jumlah_donasi
       ]);
       $user = DB::table('list_donasi')->where('id_buat_donasi',$id)->sum('donasi_terkumpul');
        DB::table('buat_donasi')->where('id',$id)->update([
            'jumlah_terkumpul' => $user
        ]);
     
        
       return redirect()->back();
    }

    public function getdonatur()
    {

        $donatur = DB::table('donatur')->get();
        // ->join('buat_donasi','donatur.id_buat_donasi','=','donatur.id')
        // dd($donatur);
   
       

        return view('donasi',compact('donatur'));
    }
    public function confimasi($id)
    {
     DB::table('donatur')->where('id',$id)->update([
            'konfirmasi' => true,
            
       ]);
       $user = DB::table('donatur')->where('id',$id)->first();
       $buat_donasi = DB::table('donatur')->where('id_buat_donasi',$user->id_buat_donasi)->sum('jumlah_donasi');
       $users = DB::table('buat_donasi')->where('id',$user->id_buat_donasi)->update([
           'jumlah_terkumpul' => $buat_donasi
       ]);
       Alert::success('Bukti Tranfer telah dikonfirmasi', 'BERHASIL KONFIRMASI');
       return redirect()->back();
    }
}
