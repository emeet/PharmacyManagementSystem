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
<!-- starting of content -->
<div class="container">
<div class="row">
    <legend style="font-size: 35px;">Medicine Information</legend>
    <hr>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            <label for="medicine-id" class="col-form-label">MedicineID:</label>
            <input type="text" class="form-control" name="medicineid" value="{{ $capsule->id }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="employee-id" class="col-form-label">EmployeeName:</label>
            <input type="text" class="form-control" name="employeename" value="{{ $capsule->employee_id }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $capsule->name }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="description" class="col-form-label">Description:</label>
            <input type="text" class="form-control" name="description" value="{{ $capsule->description }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="type" class="col-form-label">Type:</label>
            <input type="text" class="form-control" name="type" value="{{ $capsule->type }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="price" class="col-form-label">Price:</label>
            <input type="text" class="form-control" name="price" value="{{ $capsule->price }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="manufacture-date" class="col-form-label">ManufactureDate:</label>
            <input type="text" class="form-control" name="manufacturedate" value="{{ $capsule->manufacture_date }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="expire-date" class="col-form-label">ExpireDate:</label>
            <input type="text" class="form-control" name="expiredate" value="{{ $capsule->expire_date }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="photo" class="col-form-label">Photo:</label><br>
            @if ($capsule->photo)
            <img src="{{ asset('images/medicine/' . $capsule->photo)}}" width="120px;" height="100px;">
            @else
                <p>No Image Found</p>
            @endif
            <!-- <input type="file" class="form-control" name="photo" > -->
            </div>
        </div>
        </div>
        <div class="col-md-12">
        <a href="{{ route('medicine.index')}}" class="btn btn-info">Back</a>
        <!-- <button class="btn btn-success">Back</button> -->
    </div>
</div>
@endsection