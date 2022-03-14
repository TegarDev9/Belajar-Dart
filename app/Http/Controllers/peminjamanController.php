<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = peminjaman::all();
        return view ('peminjaman.index')->with('peminjaman', $peminjaman);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman.create');
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
        peminjaman::create($input);
        return redirect('peminjaman')->with('flash_message', 'peminjaman Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $peminjaman = peminjaman::find($id);
        return view('peminjaman.show')->with('peminjaman', $peminjaman);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $peminjaman = peminjaman::find($id);
        return view('peminjaman.edit')->with('peminjaman', $peminjaman);
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
          $peminjaman = peminjaman::find($id);
        $input = $request->all();
        $peminjaman->update($input);
        return redirect('peminjaman')->with('flash_message', 'peminjaman Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          peminjaman::destroy($id);
        return redirect('peminjaman')->with('flash_message', 'peminjaman deleted!');
    }
}
