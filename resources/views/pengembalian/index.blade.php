@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3>Data Pengembalian</h3>
                <a href="{{ url('/createpengembalian') }}" class="btn btn-success">Tambah Pengembalian</a>
            </div>

            <div class="col-lg-12 mt-3">
                <table class="table" width="100%">
                    <tr align=" center">
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Nama Anggota</th>
                        <th>Tanggal Kembali</th>
                        <th>denda</th>
                        <th>action</th>
                    </tr>
                    <?php $nomor = 1 ?>
                    @foreach ($data as $datapengembalian)
                    <tr align="center">
                        <td>{{ $nomor }}</td>
                        <td>{{ $datapengembalian->id_petugas}}</td>
                        <td>{{ $datapengembalian->id_anggota}}</td>
                        <td>{{ $datapengembalian->tgl_kembali}}</td>
                        <td>{{ $datapengembalian->denda}}</td>
                        <td>
                            <a href="{{url('/detailpengembalian/'. $datapengembalian->id_kembali)}}" class="btn btn-warning">Detail</a>
                            <a href="{{url('/editpengembalian/'. $datapengembalian->id_kembali)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('/deletepengembalian/'.$datapengembalian->id_kembali )}}" class="btn btn-danger">Delete</a>
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