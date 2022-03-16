@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3>Data Petugas</h3>
                <a href="{{ url('/createpetugas') }}" class="btn btn-success">Tambah Petugas</a>
            </div>

            <div class="col-lg-12 mt-3">
                <table class="table" width="100%">
                    <tr align=" center">
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>action</th>
                    </tr>
                    <?php $nomor = 1 ?>
                    @foreach ($data as $datapetugas)
                    <tr align="center">
                        <td>{{ $nomor }}</td>
                        <td>{{ $datapetugas->nama_petugas}}</td>
                        <td>{{ $datapetugas->jenis_kelamin}}</td>
                        <td>{{ $datapetugas->alamat}}</td>
                        <td>{{ $datapetugas->no_hp}}</td>
                        <td>
                            <a href="{{url('/editpetugas/'. $datapetugas->id_petugas )}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('/deletepetugas/'.$datapetugas->id_petugas )}}" class="btn btn-danger">Delete</a>
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