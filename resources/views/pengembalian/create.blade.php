@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-4">Tambah Pengembalian</h3>
                <form action="{{ url('/storepengembalian') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Nama Petugas</label>
                        <input type="text" name="id_petugas" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Nama anggota</label>
                        <input type="text" name="id_anggota" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Pengembalian</label>
                        <input type="date" name="tgl_kembali" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">denda</label>
                        <input type="text" name="denda" class="form-control" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection