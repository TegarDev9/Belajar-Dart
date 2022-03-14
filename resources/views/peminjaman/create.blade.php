@extends('peminjaman.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman Peminjaman</div>
  <div class="card-body">
      
      <form action="{{ url('peminjaman') }}" method="post">
        {!! csrf_field() !!}
        <label>id_peminjaman</label></br>
        <input type="text" name="id_peminjaman" id="id_peminjaman" class="form-control"></br>
        <label>nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
         <label>kjudul_buku</label></br>
        <input type="text" name="judul_buku" id="judul_buku" class="form-control"></br>
        <label>kategori_buku</label></br>
        <input type="text" name="kategori_buku" id="kategori_buku" class="form-control"></br>
        <label>tanggal_pinjam</label></br>
        <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control"></br>
        <label>tanggal_harus_kembali</label></br>
        <input type="date" name="tanggal_harus_kembali" id="tanggal_harus_kembali" class="form-control"></br> 
    
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop