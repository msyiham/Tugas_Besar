@extends('admin\isi.Admin')
@section('title','Dashbord')
@section('dasbord')
<style>
    i{
        margin-right: 10px;
    }
    .d{
        margin-top: 50px;
    }
    .card-body-icon{
        position: absolute;
        z-index: 0;
        top: 7px;
        right: 4px;
        opacity: 0.4;
        font-size: 100px; 
    }
    .a{
        margin-left: 30px;
        margin-right: 20px;
    }
    .b{
        margin-right: 20px;
    }
    .table{
        margin-top: 50px;
        margin-left: 22px;
    }
</style>
<div class="col-md-10 p-5 pt-2 d">
    @include('sweetalert::alert')
    <h3><i class="fa-solid fa-gauge-high "></i> Dashboard </h3>
    <hr>
    <div class="row">

        <div class="card bg-success col-12 col-sm-4 col-lg-4 me-5 mb-3" style="width: 18rem; height:10rem;">
            <div class="card-body-icon">
                <i class="fas fa-shirt bg-success"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-white">Total Produk</h5>
              <div class="display-6 text-white">{{ $total_product }}</div>
              <br>
              <a href="/Produk"><p class="card-text text-white"> lihat detail <i class="fas fa-angle-double-right"></i> </p></a>
            </div>
          </div>
        <div class="card bg-danger col-12 col-sm-4 col-lg-4 me-5 mb-3" style="width: 18rem; height:10rem;">
            <div class="card-body-icon">
                <i class="fa-solid fa-user  "></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-white">Jumlah User</h5>
              <div class="display-6 text-white">{{ $total_user }}</div>
              <br>
              <a href="/Customer"><p class="card-text text-white"> lihat detail <i class="fas fa-angle-double-right"></i> </p></a>
            </div>
          </div>
        <div class="card bg-warning col-12 col-sm-4 col-lg-4 me-5 mb-3" style="width: 18rem; height:10rem;">
            <div class="card-body-icon">
                <i class="fa-solid fa-shopping-cart"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-white">Jumlah Pesanan</h5>
              <div class="display-6 text-white">{{ $total_pesanan }}</div>
              <br>
              {{-- <a href="#"><p class="card-text text-white"> lihat detail <i class="fas fa-angle-double-right"></i> </p></a> --}}
            </div>
          </div>
    </div>
    <div class="panel mt-4">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-sm-6 col-xs-12">
                 
                    <h4 class="">Data Pesanan</h4>
                 
                </div>
                {{-- <div class="col-sm-6 col-xs-12 text-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Completed</button>
                        <button type="button" class="btn btn-warning">Pending</button>
                        <button type="button" class="btn btn-primary">All</button>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="panel-body table-responsive ">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>Nama Pemesan</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($order as $item)
                            <tr>
                                <td><a href="{{ url('order-detail') }}/{{ $item->id }}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                                <td>{{ $item ->nama}}</td>
                                <td>{{ $item ->alamat}}</td>
                                <td>{{ $item ->telepon}}</td>
                                <td>{{ $item ->total}}</td>
                                {{-- <td>{{ $item ->status}}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
      
        </div>
        {{-- <div class="panel-footer">
            <div class="row">
                <div class="col col-sm-6 col-xs-6">Data Per Halaman : <b>{{ $order->perPage() }}</b> Dari : <b>{{ $order->total() }}</b> Data Product</div>
                <div class="col-sm-6 col-xs-6">
                    <ul class="pagination hidden-xs pull-right">
                        {{ $order->links() }}
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
</div>
{{-- <main>
  <div class="container-fluid px-4">
      <h1 class="mt-4">Dashboard</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <div class="row">
          <div class="col-xl-3 col-md-6">
              <div class="card bg-primary text-white mb-4">
                  <div class="card-body">Primary Card</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="#">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6">
              <div class="card bg-warning text-white mb-4">
                  <div class="card-body">Warning Card</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="#">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6">
              <div class="card bg-success text-white mb-4">
                  <div class="card-body">Success Card</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="#">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6">
              <div class="card bg-danger text-white mb-4">
                  <div class="card-body">Danger Card</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="#">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xl-6">
              <div class="card mb-4">
                  <div class="card-header">
                      <i class="fas fa-chart-area me-1"></i>
                      Area Chart Example
                  </div>
                  <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
              </div>
          </div>
          <div class="col-xl-6">
              <div class="card mb-4">
                  <div class="card-header">
                      <i class="fas fa-chart-bar me-1"></i>
                      Bar Chart Example
                  </div>
                  <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
              </div>
          </div>
      </div>
      <div class="card mb-4">
          <div class="card-header">
              <i class="fas fa-table me-1"></i>
              DataTable Example
          </div>
          <div class="card-body">
              <table id="datatablesSimple">
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</main> --}}
@endsection