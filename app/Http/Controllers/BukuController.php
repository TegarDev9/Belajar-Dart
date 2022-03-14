<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::all();
        return view('buku.index')->with('buku',$buku);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('buku.index');
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
        $input = $request->all();
        buku::create($input);
        return redirect('buku')->with('flash_message','Buku Update!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = buku::find($id);
        return view('buku.show')->with('buku',$buku);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id_buku)
    {
        $buku = buku::find($id_buku);
        return view('buku.edit')->with('buku',$buku);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_buku)
    {
        $buku = buku::find($id_buku);
        $input = $request->all();
        $buku->update($input);
        return redirect('buku')->with('flash_message','buku update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idb_uku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_buku)
    {
        buku::destroy($id_buku);
        return redirect('buku')->with('flash_message','buku berhasil di hapus');
    }
}
