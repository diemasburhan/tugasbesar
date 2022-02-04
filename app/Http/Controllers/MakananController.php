<?php

namespace App\Http\Controllers;

use App\Helper\helper;
use App\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanans = Makanan::all();
        return view('makanan.index',compact('makanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kode_otomatis'] = helper::kode_otomatis('M','menu','kode_menu',4);
        return view('makanan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $makanan = new Makanan();
       $makanan->kode_menu = $request->kode_menu;
       $makanan->nama_menu = $request->nama_menu;
       $makanan->harga = $request->harga_menu;

        if($request->hasFile('gambar')){
            $file_gambar = $request->file('gambar');
            $folder_tujuan = 'gambar_menu/';
            $file_name = str_slug($request->nama_menu) . '.' . $file_gambar->getClientOriginalExtension();
            $file_gambar->move($folder_tujuan,$file_name);

            $makanan->gambar = $file_name;
        }

        $makanan->save();


        // Makanan::create($request->all());
        return redirect('makanan')->with('success','Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(Makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Makanan $makanan)
    {
        return view('makanan.edit',compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Makanan $makanan)
    {
        $makanan->update($request->all());
        return redirect('makanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makanan $makanan)
    {
        $makanan->delete();
        return redirect('makanan');
    }
}
