@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3>Data Anggota</h3>
                <a href="{{ url('/createAnggota') }}" class="btn btn-success">Tambah Anggota</a>
            </div>

            <div class="col-lg-12 mt-3">
                <table class="table" width="100%">
                    <tr align=" center">
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>No Hp</th>
                        <th>action</th>
                    </tr>
                    <?php $nomor = 1 ?>
                    @foreach ($data as $dataAnggota)
                    <tr align="center">
                        <td>{{ $nomor }}</td>
                        <td>{{ $dataAnggota->nama_anggota}}</td>
                        <td>{{ $dataAnggota->alamat}}</td>
                        <td>{{ $dataAnggota->jenis_kelamin}}</td>
                        <td>{{ $dataAnggota->no_hp}}</td>
                        <td>
                            <a href="{{url('/edit/'. $dataAnggota->id_anggota )}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('/delete/'.$dataAnggota->id_anggota)}}" class="btn btn-danger">Delete</a>
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