@extends('admin\isi.Admin')
@section('title','Order Detail')
@section('dasbord')
<div class="container">
    {{-- {{ $user->nama }} --}}
    <div class="row">
        {{-- <div class="col-md-12 mt-4 mb-4">
            <a href="{{  url ('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div> --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5><strong>Kode Pesanan</strong><strong>{{ ($order->trx_id) }}</strong></h5>
                    @if($order->status == 0)
                    <h3>Belum dibayar</h3> 
                    @else
                    <h3>Sudah dibayar</h3>
                    @endif
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    @if(!empty($order))
                    <p align="right">Waktu Pemesanan : {{ $order->created_at->format('d/m/Y')}} Pukul: {{ $order->created_at->format('h:i')}} </p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                {{-- <th>Gambar</th> --}}
                                <th>Id Barang</th>
                                <th>Status</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($order_details as $order_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                {{-- <td>
                                    <img src="{{ url('uploads') }}/{{ $order_detail->product->gambar }}" width="100" alt="...">
                                </td> --}}
                                {{-- <td>{{ $order_detail->product->nama_produk }}</td> --}}
                                {{-- <td><img src="{{ $id_product->gambar }}" alt="" style="width: 100px; height: 100px;"></td>
                                <td>{{ $id_product->nama_produk }}</td> --}}
                                <td>{{ $order_detail->product_id }}</td>
                                <td>
                                    @if($order->status == 0)
                                    Belum dibayar
                                    @else
                                    Sudah dibayar 
                                    @endif
                                </td>
                                
                                <td>{{ $order_detail->quantity }} kain</td>
                                <td>Rp. {{ number_format($order_detail->price) }}</td>
                                <td><strong>Rp. {{ number_format($order->total) }}</strong></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif

                </div>
            </div>
        </div>
        {{-- <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    @if($order->status == 0)
                    <a href="" class="btn btn-warning" id="pay-button">Bayar Sekarang</a>

                    @endif
                </div>

            </div>
        </div> --}}
        
    </div>
</div>
@endsection