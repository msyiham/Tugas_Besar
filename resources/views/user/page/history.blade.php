@extends('user.page.induk')
@section('title', 'History Order')
@section('content')
<div class="container">
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
=======
    <div class="row mt-4 mb-4">
        <div class="col-md-12">
            <a href="{{  url ('shop') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-3">
>>>>>>> 05f9d31dfa95f27b5afd6b61d7c72208c5da4a13
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>TRX ID</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($orders as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->id}}</td>
                                <td>{{ $pesanan->created_at->format('d-m-Y')}}</td>
                                <td>
                                    @if($pesanan->status == 0)
                                    Belum dibayar
                                    @else
                                    Sudah dibayar 
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->total) }}</td>
<<<<<<< HEAD
=======
                                <td>
                                    <a href="{{ url('history-detail') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    @if($pesanan->status != 0)
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    @endif
                                </td>
>>>>>>> 05f9d31dfa95f27b5afd6b61d7c72208c5da4a13
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection