@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3>Data Peminjaman</h3>
                <a href="{{ url('/createpeminjaman') }}" class="btn btn-success">Tambah Peminjaman</a>
            </div>

            <div class="col-lg-12 mt-3">
                <table class="table" width="100%">
                    <tr align=" center">
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Nama Anggota</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>action</th>
                    </tr>
                    <?php $nomor = 1 ?>
                    @foreach ($data as $datapeminjaman)
                    <tr align="center">
                        <td>{{ $nomor }}</td>
                        <td>{{ $datapeminjaman->id_petugas}}</td>
                        <td>{{ $datapeminjaman->id_anggota}}</td>
                        <td>{{ $datapeminjaman->tgl_pinjam}}</td>
                        <td>{{ $datapeminjaman->tgl_kembali}}</td>
                        <td>
                            <a href="{{url('/detailpeminjaman/'. $datapeminjaman->id_pinjam)}}" class="btn btn-warning">Detail</a>
                            <a href="{{url('/editpeminjaman/'. $datapeminjaman->id_pinjam)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('/deletepeminjaman/'.$datapeminjaman->id_pinjam )}}" class="btn btn-danger">Delete</a>
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