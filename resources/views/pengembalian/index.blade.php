@extends('pengembalian.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-25">
                <div class="card">
                    <div style="color: black" class="card-header">
                        <h2 style="text-align: center">  Data Pengembalian Perustakaan </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/pengembalian/create') }}" class="btn btn-success btn-sm" title="Tambah pengembalian">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah peninjaman</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>id_pengembalian</th>
                                        <th>nama</th>
                                        <th>judul_buku</th>
                                        <th>tanggal_harus_kembali</th>
                                        <th>tanggal_kembali</th>
                                        <th>denda</th>
                                       <th>Aksi</th>

                                    
      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pengembalian as $item)
                                    <tr>
                                        
                                        <td>{{ $item->id_pengembalian }}</td>
                                        <td>{{ $item->nama }}</td>
                                         <td>{{ $item->judul_buku }}</td>
                                        <td>{{ $item->tanggal_harus_kembali }}</td>
                                        <td>{{ $item->tanggal_kembali  }}</td>
                                        <td>{{ $item->denda}}</td>
                                        
                                       
 
                                        <td >
                                            <a href="{{ url('/pengembalian/' . $item->id_pengembalian) }}" title="View pengembalian"><button class="btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                                            <a href="{{ url('/pengembalian/' . $item->id_pengembalian . '/edit') }}" title="Edit pengembalian"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/pengembalian' . '/' . $item->id_pengembalian) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete pengembalian" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
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