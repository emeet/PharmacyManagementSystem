@extends('layouts.admin')

@section('title')
    Admin | Manage
@endsection

@section('content')

@extends('layouts.admin')

@section('title')
    Admin | Dashboard
@endsection

@section('content')

<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
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
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
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
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
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
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
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

<!-- Manage Page content -->
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <legend style="font-size: 35px;">Manage Pharmacist</legend>
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <!-- <button type="button" class="btn btn-primary" href="{{ url('auth.pharmacistRegister')}}">Add New Pharmacist</button> -->
        <a href="{{ url('/enter')}}" class="btn btn-primary pull-center">Add New Pharmacist</a>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
@endsection
@endsection

@section('scripts')
@endsection