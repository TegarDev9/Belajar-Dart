@extends('buku.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman Buku</div>
  <div class="card-body">
      
      <form action="{{ url('buku') }}" method="post">
        {!! csrf_field() !!}
        <label>id_buku</label></br>
        <input type="text" name="id_buku" id="id_buku" class="form-control"></br>
        <label>judul buku</label></br>
        <input type="text" name="judul_buku" id="judul_buku" class="form-control"></br>
         <label>Kategori buku</label></br>
        <input type="text" name="Kategori_buku" id="Kategori_buku" class="form-control"></br>
        <label>penerbit</label></br>
        <input type="text" name="penerbit" id="penerbit" class="form-control"></br>
        <label>pengarang</label></br>
        <input type="text" name="pengarang" id="pengarang" class="form-control"></br>
        <label>jumlah_hal</label></br>
        <input type="text" name="jumlah_hal" id="jumlah_hal" class="form-control"></br>
        <label>tahun</label></br>
        <input type="year" name="tahun" id="tahun" class="form-control"></br>
        <label>stok</label></br>
        <input type="text" name="stok" id="stok" class="form-control"></br>
        <lable>Status</lable>
        <input type="text" name="Status" id="Status" class="form-control"></br>
        
       
    
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop