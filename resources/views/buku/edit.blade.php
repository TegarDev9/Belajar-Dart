@extends('buku.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman edit buku</div>
  <div class="card-body">
      
      <form action="{{ url('buku' .$buku->id_buku) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$buku->id}}" id="id" />
        <label>id_buku</label></br>
        <input type="number" name="id" id="id" value="{{$buku->id_buku}}" class="form-control"></br>
        <label>judul_buku</label></br>
        <input type="text" name="judul" id="judul" value="{{$buku->judul_buku}}" class="form-control"></br>
        <label>Kategori buku</label></br>
        <input type="text" name="Kategori_buku" id="Kategori_buku" value="{{$buku->Kategori_buku}}" class="form-control"></br>
        <label>penerbit</label></br>
        <input type="text" name="penerbit" id="penerbit" value="{{$buku->penerbit}}" class="form-control"></br>
         <label>pengarang</label></br>
        <input type="text" name="pengarang" id="pengarang" value="{{$buku->pengarang}}" class="form-control"></br>
        <label>jumlah_hal</label></br>
        <input type="text" name="jumlah_hal" id="jumlah_hal" value="{{$buku->jumlah_hal}}" class="form-control"></br>
         <label>tahun</label></br>
        <input type="year" name="tahun" id="tahun" value="{{$buku->tahun}}" class="form-control"></br>
        <label>stock</label></br>
        <input type="text" name="stok" id="stok" value="{{$buku->stok}}" class="form-control"></br>
        <label>Status</label>
        <input type="text" name="Status" id="Status" value="{{$buku->Status}}" class="form-control"></br>   
        
    
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop