@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-4">Tambah Buku</h3>
                <form action="{{ url('/storebuku') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Nama Buku</label>
                        <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Kategori Buku</label>
                        <input type="text" name="kategori_buku" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Jumlah Halaman</label>
                        <input type="text" name="jumlah_hal" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">No Rak</label>
                        <input type="text" name="no_rak" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Stok</label>
                        <input type="text" name="stok" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Pilih Status</option>
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Dikembalikan">Dikembalikan</option>
                        </select>
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