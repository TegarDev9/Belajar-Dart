@extends('pengembalian.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman edit pengembalian</div>
  <div class="card-body">
      
      <form action="{{ url('pengembalian' .$pengembalian->id_pengembalian) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$pengembalian->id}}" id="id" />
        <label>id_pengembalian</label></br>
        <input type="number" name="id_pengembalian" id="id_pengembalian" value="{{$pengembalian->id_pengembalian}}" class="form-control"></br>
        <label>nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$pengembalian->nama}}" class="form-control"></br>
        <label>judul_buku</label></br>
        <input type="text" name="judul_buku" id="judul_buku" value="{{$pengembalian->judul_buku}}" class="form-control"></br>
        <label>tanggal_harus_kembali</label></br>
        <input type="text" name="tanggal_harus_kembali" id="tanggal_harus_kembali" value="{{$pengembalian->tanggal_harus_kembali}}" class="form-control"></br>
         <label>tanggal_kembali</label></br>
        <input type="date" name="tanggal_kembali" id="tanggal_kembali" value="{{$pengembalian->tanggal_kembali}}" class="form-control"></br>
        <label>denda</label></br>
        <input type="text" name="denda" id="denda" value="{{$pengembalian->denda}}" class="form-control"></br>

        
    
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop