@extends('admin\isi.Admin')
@section('title','Customer')
@section('customer')
<style>
    .demo{ font-family: 'Noto Sans', sans-serif; }
.w-12{ width: 125px; }
.w-4{ width: 40px; }
.panel{
    border-radius: 0;
    border: none;
    box-shadow: 0 0 15px rgba(0,0,0,0.05);
}
.panel .panel-heading{
    background: linear-gradient(#f5f5f5, #d9d9d9);
    padding: 15px;
    border-radius: 0;
    border: none;
}
.panel .panel-heading .title{
    color: #555;
    font-size: 22px;
    font-weight: 700;
    text-transform: capitalize;
    line-height: 35px;
    margin: 0;
}
.panel .panel-heading .btn{ border-radius: 0; }
.panel .panel-body{ padding: 0; }
.panel .panel-body .table{
    background: linear-gradient(transparent, rgba(255, 255, 255, 0.2), transparent);
    border: 1px solid #dedede;
}
.panel .panel-body .table thead tr th{
    color: #555;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    text-align: center;
    padding: 15px;
    border: none;
    border: 1px solid #dedede;
}
.panel .panel-body .table tbody tr td{
    color: #777;
    font-size: 15px;
    padding: 15px;
    vertical-align: middle;
    border: 1px solid #dedede;
}
.panel .panel-body .table tbody .action-list{
    padding: 0;
    margin: 0;
    list-style: none;
}
.panel .panel-body .table tbody .action-list li{
    margin: 0 5px;
    display: inline-block;
}
.panel .panel-body .table tbody .action-list li a{
    font-size: 15px;
    line-height: 33px;
    height: 35px;
    width: 35px;
    padding: 0;
    transition: all 0.3s ease 0s;
}
.panel .panel-footer{
    color: #555;
    background: linear-gradient(#d9d9d9,#f5f5f5);
    padding: 15px;
    border: none;
    border-radius: 0;
}
.panel .panel-footer .col{ line-height: 30px; }
.pagination{ margin: 0; }
.pagination li a{
    color: #555;
    background-color: transparent;
    border: 2px solid#555;
    font-size: 16px;
    font-weight: 500;
    text-align: center;
    line-height: 27px;
    width: 31px;
    height: 31px;
    padding: 0;
    margin: 0 3px;
    border-radius: 0;
    transition: all 0.3s ease 0s;
}
.pagination li a:hover,
.pagination li a:focus,
.pagination li.active a,
.pagination li.active a:hover{
    color: #fff;
    background-color: #555;
    border-color: #555;
}
.pagination li:first-child a,
.pagination li:last-child a{
    border-radius: 0;
    width: auto;
    padding: 0 10px;
}
@media only screen and (max-width:767px){
    .panel .panel-heading .title{
        text-align: center;
        margin: 0 0 10px;
    }
    .panel .panel-heading .btn-group{
        font-size: 0;
        text-align: center;
        margin: 0 auto;
        display: block;
    }
    .panel .panel-heading .btn-group .btn{ float: none; }
}
</style>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-6 col-xs-12">
                            <h4 class="title">Data List</h4>
                        </div>
                        <div class="col-sm-6 col-xs-12 text-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Completed</button>
                                <button type="button" class="btn btn-warning">Pending</button>
                                <button type="button" class="btn btn-primary">All</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="w-4"><input type="checkbox"></th>
                                <th class="w-12"><i class="fa fa-wrench"></i></th>
                                <th class="w-4 hidden-xs">#</th>
                                <th>Full Name</th>
                                <th>Age</th>
                                <th>Job Title</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="#" class="btn btn-default"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </td>
                                <td class="hidden-xs">1</td>
                                <td>Vincent Williamson</td>
                                <td>31</td>
                                <td>iOS Developer</td>
                                <td>Sinaai-Waas</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="#" class="btn btn-default"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </td>
                                <td class="hidden-xs">2</td>
                                <td>Taylor Reyes</td>
                                <td>22</td>
                                <td>UI/UX Developer</td>
                                <td>Baileux</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="#" class="btn btn-default"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </td>
                                <td class="hidden-xs">3</td>
                                <td>Justin Block</td>
                                <td>26</td>
                                <td>Frontend Developer</td>
                                <td>Overland Park</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="#" class="btn btn-default"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </td>
                                <td class="hidden-xs">4</td>
                                <td>Sean Guzman</td>
                                <td>26</td>
                                <td>Web Designer</td>
                                <td>Gloucester</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="#" class="btn btn-default"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </td>
                                <td class="hidden-xs">5</td>
                                <td>Keith Carter</td>
                                <td>20</td>
                                <td>Graphic Designer</td>
                                <td>Oud-Turnhout</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-sm-6 col-xs-6">showing <b>5</b> out of <b>25</b> entries</div>
                        <div class="col-sm-6 col-xs-6">
                            <ul class="pagination hidden-xs pull-right">
                                <li><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection