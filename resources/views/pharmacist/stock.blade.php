@extends('layouts.pharmacist')
@section('title','Pharmacist | Stock')
@section('content')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>

                <p>Users</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Medicine</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<!-- Heading for Stock Information -->
<div class="container">
    <div class="row">
        <legend style="font-size: 35px; text-align:center;">Stock Information</legend>
        <hr>
    </div>
</div>
<!-- end stock information -->

<!-- content of stock -->
<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="col-sm-10">
                    <h4>Table</h4>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#stockModal">
                    <span class="glyphicon glyphicon-plus-sign"></span>     ADD
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="stock" class="table table-bordered">
                        <thead>
                            <tr style="font-style:bold;">
                                <th>StockID</th>
                                <th>MedicineId</th>
                                <th>SupplierID</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="font-family:sans-serif; font-size:15px;">
                            <tr>
                                <td>hy</td>
                                <td>am</td>
                                <td>amit</td>
                                <td>rai</td>
                                <td>itahari</td>
                                <td>colz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@endsection