@extends('anggota.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-25">
                <div class="card">
                    <div style="color: black" class="card-header">
                        <h2 style="text-align: center">  Data Anggota Perustakaan </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/anggota/create') }}" class="btn btn-success btn-sm" title="Tambah Anggota">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Anggota</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>id_anggota</th>
                                        <th>nama</th>
                                        <th>alamat</th>
                                        <th>jenis_kelamin</th>
                                        <th>no_hp</th>
                                        <th>umur</th>
                                       <th>Aksi</th>

                                    
      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($anggota as $item)
                                    <tr>
                                        
                                        <td>{{ $item->id_anggota }}</td>
                                        <td>{{ $item->nama }}</td>
                                         <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->no_hp  }}</td>
                                        <td>{{ $item->umur}}</td>
                                        
                                       
 
                                        <td >
                                            <a href="{{ url('/anggota/' . $item->id_anggota) }}" title="View anggota"><button class="btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                                            <a href="{{ url('/anggota/' . $item->id_anggota . '/edit') }}" title="Edit buku"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/anggota' . '/' . $item->id_anggota) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete anggota" onclick="return confirm(&quot;Confirm hapus data anggota?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection