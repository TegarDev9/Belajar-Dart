@extends('anggota.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman edit anggota</div>
  <div class="card-body">
      
      <form action="{{ url('anggota' .$anggota->id_anggota) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$anggota->id}}" id="id" />
        <label>id_anggota</label></br>
        <input type="number" name="id_anggota" id="id_anggota" value="{{$anggota->id_anggota}}" class="form-control"></br>
        <label>nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$anggota->nama}}" class="form-control"></br>
        <label>alamat</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$anggota->alamat}}" class="form-control"></br>
        <label>jenis_kelamin</label></br>
        <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{$anggota->jenis_kelamin}}" class="form-control"></br>
         <label>no_hp</label></br>
        <input type="text" name="no_hp" id="no_hp" value="{{$anggota->no_hp}}" class="form-control"></br>
        <label>umur</label></br>
        <input type="text" name="umur" id="umur" value="{{$anggota->umur}}" class="form-control"></br>

        
    
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop