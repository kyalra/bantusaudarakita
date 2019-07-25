<?php

namespace App\Http\Controllers;
use App\Donatur;
use Illuminate\Http\Request;
use DB;

class DonasiApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasi = DB::table('buat_donasi')->get();
        return $donasi;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $donasi=new Donatur();
        $donasi->id_buat_donasi = $request->id_buat_donasi;
        $donasi->nama = $request->nama;
        $donasi->email = $request->email;
        $donasi->komentar = $request->komen;
        $donasi->jumlah_donasi = $request->jumlah_donasi;
        $donasi->buktitf = $request->buktitf;
        $donasi->konfirmasi = 0;
        

        $donasi->save();
    }
    public function upload(Request $request){
        $gambar = $request->file('gambar')->getClientOriginalName();
        $request->gambar->move( public_path('/img/donasi/'), $gambar);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
