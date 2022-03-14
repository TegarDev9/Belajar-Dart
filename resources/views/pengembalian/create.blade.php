@extends('peminjaman.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman Pengembalian</div>
  <div class="card-body">
      
      <form action="{{ url('pengembalian') }}" method="post">
        {!! csrf_field() !!}
        <label>id_pengembalian</label></br>
        <input type="text" name="id_pengembalian" id="id_pengembalian" class="form-control"></br>
        <label>nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
         <label>judul_buku</label></br>
        <input type="text" name="judul_buku" id="judul_buku" class="form-control"></br>
        <label>tanggal_harus_kembali</label></br>
        <input type="text" name="tanggal_harus_kembali" id="tanggal_harus_kembali" class="form-control"></br>
        <label>tanggal_pinjam</label></br>
        <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control"></br>
        <label>tanggal_kembali</label></br>
        <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control"></br> 
    
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop