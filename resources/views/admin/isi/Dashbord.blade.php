@extends('Master.template')
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
    <h3><i class="fa-solid fa-gauge-high "></i> Dashboard </h3>
    <hr>
    <div class="row">
        <div class="card bg-success col-md-4 a" style="width: 18rem; height:10rem;">
            <div class="card-body-icon">
                <i class="fa-regular fa-credit-card bg-success"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-white">Total Pemasukan</h5>
              <div class="display-6 text-white">Rp.1000.000</div>
              <br>
              <a href="#"><p class="card-text text-white"> lihat detail <i class="fas fa-angle-double-right"></i> </p></a>
            </div>
          </div>
        <div class="card bg-danger col-md-4 b" style="width: 18rem; height:10rem;">
            <div class="card-body-icon">
                <i class="fa-solid fa-user  "></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-white">Jumlah Pembeli</h5>
              <div class="display-6 text-white">50</div>
              <br>
              <a href="#"><p class="card-text text-white"> lihat detail <i class="fas fa-angle-double-right"></i> </p></a>
            </div>
          </div>
        <div class="card bg-warning col-md-4" style="width: 18rem; height:10rem;">
            <div class="card-body-icon">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-white">Total Produk Terjual</h5>
              <div class="display-6 text-white">100</div>
              <br>
              <a href="#"><p class="card-text text-white"> lihat detail <i class="fas fa-angle-double-right"></i> </p></a>
            </div>
          </div>
    </div>
    <table class="table table-bordered " style="width:92%;" >
        <thead>
          <tr style="background-color:rgba(225, 240, 23, 0.811) ">
            <th scope="col">Produk</th>
            <th scope="col">Jumlah Produk</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Batik gajah mada</th>
            <td>1</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">Batik mojopahit</th>
            <td>50</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">Batik kediri</th>
            <td colspan="">40</td>
            <td>asdassadasd</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
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