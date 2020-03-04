@extends('layouts.pharmacist')
@section('title','Pharmacist | User_Information')
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

<div class="container">
    <div class="row">
        <legend style="font-size: 35px;">Supplier Information</legend>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
        <label for="supplier-id" class="col-form-label">SupplierID:</label>
        <input type="text" class="form-control" name="supplierid" value="{{ $supply->id }}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
        <label for="suppliername" class="col-form-label">SupplierName:</label>
        <input type="text" class="form-control" name="supplierename" value="{{ $supply->name }}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
        <label for="address" class="col-form-label">Address:</label>
        <input type="text" class="form-control" name="address" value="{{ $supply->address }}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
        <label for="email" class="col-form-label">Email:</label>
        <input type="email" class="form-control" name="email" value="{{ $supply->email }}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
        <label for="number" class="col-form-label">PhoneNumber:</label>
        <input type="text" class="form-control" name="number" value="{{ $supply->contact_number }}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
        <label for="country" class="col-form-label">Country:</label>
        <input type="text" class="form-control" name="country" value="{{ $supply->country }}">
        </div>
    </div>
    <div class="col-md-12">
    <a href="{{ route('supplier.index')}}" class="btn btn-info">Back</a>
    <!-- <button class="btn btn-success">Back</button> -->
</div>
</div>
@endsection