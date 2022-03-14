@extends('pengembalian.layout')
@section('content')
 
 
<div class="card">
  <h1 style="text-align: center">Halaman pengembalian</h1>
  <div class="card-body">
   
 
        <div class="card-body">
       
        <p class="card-text">id_pengembalian : {{ $pengembalian->id_pengembalian }}</p>
        <p class="card-text">nama : {{ $pengembalian->nama }}</p>
        <p class="card-text">judul_buku : {{ $pengembalian->judul_buku }}</p>
         <p class="card-text">tanggal_harus_kembali : {{ $pengembalian->tanggal_harus_kembali }}</p>
        <p class="card-text">tanggal_kembali : {{ $pengembalian->tanggal_kembali }}</p>
         <p class="card-text">denda : {{ $pengembalian->denda }}</p>
     
         
       
  </div>
       
    </hr>
  
  </div>
</div>