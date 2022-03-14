@extends('buku.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-25">
                <div class="card">
                    <div style="color: black" class="card-header">
                        <h2 style="text-align: center">  Data Buku Perustakaan </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/buku/create') }}" class="btn btn-success btn-sm" title="Tambah buku">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah buku</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>id_buku</th>
                                        <th>judul_buku</th>
                                        <th>Kategori_buku</th>
                                        <th>penerbit</th>
                                        <th>pengarang</th>
                                        <th>jumlah_hal</th>
                                        <th>tahun</th>
                                        <th>stok</th>
                                       <th>Status</th>
                                       <th>Aksi</th>

                                    
      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($buku as $item)
                                    <tr>
                                        
                                        <td>{{ $item->id_buku }}</td>
                                        <td>{{ $item->judul_buku }}</td>
                                         <td>{{ $item->Kategori_buku }}</td>
                                        <td>{{ $item->penerbit }}</td>
                                        <td>{{ $item->pengarang  }}</td>
                                        <td>{{ $item->jumlah_hal}}</td>
                                        <td>{{ $item->tahun  }}</td>
                                        <td>{{ $item->stok  }}</td>
                                        <td>{{ $item->Status  }}</td>
                                       
 
                                        <td >
                                            <a href="{{ url('/buku/' . $item->id_buku) }}" title="View buku"><button class="btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                                            <a href="{{ url('/buku/' . $item->id_buku . '/edit') }}" title="Edit buku"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/buku' . '/' . $item->id_buku) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete buku" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
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