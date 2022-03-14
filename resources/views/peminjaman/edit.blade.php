@extends('peminjaman.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman edit Peminjaman</div>
  <div class="card-body">
      
      <form action="{{ url('peminjaman' .$peminjaman->id_peminjaman) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$peminjaman->id}}" id="id" />
        <label>id_peminjaman</label></br>
        <input type="number" name="id_peminjaman" id="id_peminjaman" value="{{$peminjaman->id_peminjaman}}" class="form-control"></br>
        <label>nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$peminjaman->nama}}" class="form-control"></br>
        <label>judul_buku</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$peminjaman->judul_buku}}" class="form-control"></br>
        <label>kategori_buku</label></br>
        <input type="text" name="kategori_buku" id="kategori_buku" value="{{$peminjaman->kategori_buku}}" class="form-control"></br>
         <label>tanggal_pinjam</label></br>
        <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" value="{{$peminjaman->tanggal_pinjam}}" class="form-control"></br>
        <label>tanggal_pinjam</label></br>
        <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" value="{{$peminjaman->tanggal_harus_kembali}}" class="form-control"></br>

        
    
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop