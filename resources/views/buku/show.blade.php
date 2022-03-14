@extends('buku.layout')
@section('content')
 
 
<div class="card">
  <h1 style="text-align: center">Halaman buku</h1>
  <div class="card-body">
   
 
        <div class="card-body">
       
        <p class="card-text">judul_buku : {{ $buku->judul_buku }}</p>
        <p class="card-text">Kategori_buku : {{ $buku->Kategori_buku }}</p>
        <p class="card-text">penerbit : {{ $buku->penerbit }}</p>
         <p class="card-text">pengarang : {{ $buku->pengarang }}</p>
        <p class="card-text">jumlah_hal : {{ $buku->jumlah_hal }}</p>
         <p class="card-text">tahun : {{ $buku->tahun }}</p>
        <p class="card-text">stok : {{ $buku->stok }}</p>
        <p class="card-text">Status: {{ $buku->Status  }}</p>
         
       
  </div>
       
    </hr>
  
  </div>
</div>