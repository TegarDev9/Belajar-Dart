@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-4">Edit Petugas</h3>
                <form action="{{ url('/updatepetugas/' . $data->id_petugas ) }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class=" form-control" placeholder="Masukkan Nama" value="{{$data->nama_petugas}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                            @if ($data->jenis_kelamin = 'laki-laki')
                            <option>Jenis Kelamin</option>
                            <option value="Laki-Laki" selected>Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            @elseif ($data->jenis_kelamin = 'perempuan' )
                            <option>Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan" selected>Perempuan</option>
                            @endif>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Nama" value="{{$data->alamat}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">No HP</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp" value="{{$data->no_hp}}">
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection