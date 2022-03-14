@extends('peminjaman.layout')
@section('content')
 
 
<div class="card">
  <h1 style="text-align: center">Halaman peminjaman</h1>
  <div class="card-body">
   
 
        <div class="card-body">
       
        <p class="card-text">id_peminjaman : {{ $peminjaman->id_peminjaman }}</p>
        <p class="card-text">nama : {{ $peminjaman->nama }}</p>
        <p class="card-text">judul_buku : {{ $peminjaman->judul_buku }}</p>
         <p class="card-text">kategori_buku : {{ $peminjaman->kategori_buku }}</p>
        <p class="card-text">tanggal_pinjam : {{ $peminjaman->tanggal_pinjam }}</p>
         <p class="card-text">tanggal_harus_kembali : {{ $peminjaman->tanggal_harus_kembali }}</p>
     
         
       
  </div>
       
    </hr>
  
  </div>
</div>