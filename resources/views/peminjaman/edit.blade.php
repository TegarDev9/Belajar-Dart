@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-4">Edit Peminjaman</h3>
                <form action="{{ url('/updatepeminjaman/' . $data->id_pinjam ) }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Nama Petugas</label>
                        <input type="text" name="id_petugas" class="form-control" placeholder="Masukkan Nama" value="{{$data->id_petugas}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Nama anggota</label>
                        <input type="text" name="id_anggota" class="form-control" placeholder="Masukkan Nama" value="{{$data->id_anggota}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Peminjaman</label>
                        <input type="date" name="tgl_pinjam" class="form-control" placeholder="Masukkan Nama" value="{{$data->tgl_pinjam}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Pengembalian</label>
                        <input type="date" name="tgl_kembali" class="form-control" placeholder="Masukkan Nama" value="{{$data->tgl_kembali}}">
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