@extends('Master.Admin')
@section('title','Product')
@section('produk')
<div class="col-md-10 p-5 pt-2 d" style="margin-top: 100px">
    <table class="table table-bordered " style="width:92%;" >
        <thead>
          <tr style="background-color:rgba(225, 240, 23, 0.811) ">
            <th scope="col">Id</th>
            <th scope="col">NamaProduct</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="">Larry the Bird</td>
            <td>asdassadasd</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td colspan="">Larry the Bird</td>
            <td>asdassadasd</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td colspan="">Larry the Bird</td>
            <td>asdassadasd</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td colspan="">Larry the Bird</td>
            <td>asdassadasd</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td colspan="">Larry the Bird</td>
            <td>asdassadasd</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
</div>

@endsection