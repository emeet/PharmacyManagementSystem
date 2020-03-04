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
    <legend style="font-size: 35px;">Pharmacist Information</legend>
    <hr>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            <label for="pharmacist-id" class="col-form-label">PharmacistID:</label>
            <input type="text" class="form-control" name="pharmacistid" value="{{ $person->id }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="pharmacist-id" class="col-form-label">PharmacistName:</label>
            <input type="text" class="form-control" name="pharmacistname" value="{{ $person->users->name }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="pharmacist-id" class="col-form-label">Address:</label>
            <input type="text" class="form-control" name="pharmacistid" value="{{ $person->address }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="pharmacist-id" class="col-form-label">PhoneNumber:</label>
            <input type="text" class="form-control" name="pharmacistid" value="{{ $person->phone_number }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="pharmacist-id" class="col-form-label">Gender:</label>
            <input type="text" class="form-control" name="pharmacistid" value="{{ $person->gender }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="pharmacist-id" class="col-form-label">Position:</label>
            <input type="text" class="form-control" name="pharmacistid" value="{{ $person->position }}">
            </div>
        </div>
        </div>
        <div class="col-md-12">
        <a href="{{ route('personal.index')}}" class="btn btn-info">Back</a>
    </div>
</div>
@endsection