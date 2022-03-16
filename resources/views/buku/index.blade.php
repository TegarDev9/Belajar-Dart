@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3>Data Buku</h3>
                <a href="{{ url('/createbuku') }}" class="btn btn-success">Tambah Buku</a>
            </div>

            <div class="col-lg-12 mt-3">
                <table class="table" width="100%">
                    <tr align=" center">
                        <th>No</th>
                        <th>Nama Buku</th>
                        <th>Kategori Buku</th>
                        <th>Penerbit</th>
                        <th>Pengarang</th>
                        <th>Jumlah Halaman</th>
                        <th>Tahun Terbit</th>
                        <th>No Rak</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>action</th>
                    </tr>
                    <?php $nomor = 1 ?>
                    @foreach ($data as $databuku)
                    <tr align="center">
                        <td>{{ $nomor }}</td>
                        <td>{{ $databuku->nama_buku}}</td>
                        <td>{{ $databuku->kategori_buku}}</td>
                        <td>{{ $databuku->penerbit}}</td>
                        <td>{{ $databuku->pengarang}}</td>
                        <td>{{ $databuku->jumlah_hal}}</td>
                        <td>{{ $databuku->tahun_terbit}}</td>
                        <td>{{ $databuku->no_rak}}</td>
                        <td>{{ $databuku->stok}}</td>
                        <td>{{ $databuku->status}}</td>
                        <td>
                            <a href="{{url('/editbuku/'. $databuku->id_buku )}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('/deletebuku/'.$databuku->id_buku)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $nomor += 1 ?>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>

@endsection