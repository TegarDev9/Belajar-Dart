@extends('anggota.layout')
@section('content')
 
 
<div class="card">
  <h1 style="text-align: center">Halaman Anggota</h1>
  <div class="card-body">
   
 
        <div class="card-body">
       
        <p class="card-text">id_anggota : {{ $anggota->id_anggota }}</p>
        <p class="card-text">nama : {{ $anggota->nama }}</p>
        <p class="card-text">alamat : {{ $anggota->alamat }}</p>
         <p class="card-text">jenis_kelamin : {{ $anggota->jenis_kelamin }}</p>
        <p class="card-text">no_hp : {{ $anggota->no_hp }}</p>
         <p class="card-text">umur : {{ $anggota->umur }}</p>
     
         
       
  </div>
       
    </hr>
  
  </div>
</div>