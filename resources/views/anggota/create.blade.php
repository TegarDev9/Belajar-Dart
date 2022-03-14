@extends('anggota.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman Anggota</div>
  <div class="card-body">
      
      <form action="{{ url('anggota') }}" method="post">
        {!! csrf_field() !!}
        <label>id_anggota</label></br>
        <input type="text" name="id_anggota" id="id_anggota" class="form-control"></br>
        <label>nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
         <label>alamat</label></br>
        <input type="text" name="alamat" id="alamat" class="form-control"></br>
        <label>jenis kelamin</label></br>
        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"></br>
        <label>no hp</label></br>
        <input type="text" name="no_hp" id="no_hp" class="form-control"></br>
        <label>umur</label></br>
        <input type="text" name="umur" id="umur" class="form-control"></br> 
    
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop