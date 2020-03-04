@extends('layouts.pharmacist')
@section('title','Pharmacist | Supplier')
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
 <!-- Heading for Supplier Information -->
<div class="container">
    <div class="row">
        <legend style="font-size: 35px; text-align:center;">Supplier Information</legend>
        <hr>
    </div>
</div>

<!-- content of Supplier -->
<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="col-sm-10">
                    <h4>Table</h4>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#supplierModal">
                    <span class="glyphicon glyphicon-plus-sign"></span>     ADD
                    </button>
                </div>
            </div>
            <br>
            <!-- This error message is for validating in the adding medicine details FORM. When the user add medicine without
            information, then the error will display. -->
            @if(count($errors->all()))
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> {{$error}}
                    </div>
                @endforeach
            @endif

            <!-- end code for the error message -->

            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message}}</p>
                </div>
            @endif

            @if($message = Session::get('notice'))
                <div class="alert alert-warning">
                    <p>{{ $message}}</p>
                </div>
            @endif

            @if($message = Session::get('flash_message'))
                <div class="alert alert-danger">
                    <p>{{ $message}}</p>
                </div>
            @endif

            <div class="row">
                <div class="col-sm-12">
                    <table id="supplier" class="table table-bordered">
                        <thead>
                            <tr style="font-style:bold;">
                                <th>SupplierID</th>
                                <th>SupplierName</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>ContactNumber</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="font-family:sans-serif; font-size:15px;">
                        @foreach($supplier as $supply)
                            <tr>
                                <td>{{ $supply->id }}</td>
                                <td>{{ $supply->name }}</td>
                                <td>{{ $supply->address }}</td>
                                <td>{{ $supply->email}} </td>
                                <td>{{ $supply->contact_number }}</td>
                                <td>{{ $supply->country}}</td>
                                <td>
                                <a href="{{ route('supplier.show', $supply->id)}}" class="btn btn-success btn-sm">
                                <span class="glyphicon glyphicon-eye-open"></span>      Show
                                </a>
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $supply->id }}">
                                <span class="glyphicon glyphicon-edit"></span>  Edit
                                </button>
                                <form action="{{ route('supplier.show', $supply->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" style="margin-top:-54px; margin-left:133px;">
                                <span class="glyphicon glyphicon-trash"></span>      Delete
                                </button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal for Adding Button -->
<div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="supplierModal">Add information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <form action="{{ action('SupplierController@store')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="supplier-id" class="col-form-label">SupplierID:</label>
                        <input type="text" class="form-control" name="supplierid" placeholder="Supplier id">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">SupplierName:</label>
                        <input type="text" class="form-control" name="name" placeholder="Supplier name" list="browsers">
                            <datalist id="browsers">
                            </datalist>
                        </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" >
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" >
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-form-label">PhoneNumber:</label>
                        <input type="text" class="form-control" name="number" placeholder="Number" >
                    </div>
                    <div class="form-group">
                        <label for="country" class="col-form-label">Country:</label>
                        <input type="text" class="form-control" name="country" placeholder="Country" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Adding Modal -->

<!-- Modal for editing Form -->
@foreach($supplier as $supply)
<div class="modal fade" id="edit{{ $supply->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ action('SupplierController@update', $supply->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="supplier-id" class="col-form-label">SupplierID:</label>
                        <input type="text" class="form-control" name="supplierid" placeholder="Supplier id" value="{{ $supply->id }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">SupplierName:</label>
                        <input type="text" class="form-control" name="name" placeholder="Supplier name" value="{{ $supply->name }}">
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $supply->address }}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $supply->email }}">
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-form-label">PhoneNumber:</label>
                        <input type="text" class="form-control" name="number" placeholder="PhoneNumber" value="{{ $supply->contact_number }}">
                    </div>
                    <div class="form-group">
                        <label for="country" class="col-form-label">Country:</label>
                        <input type="text" class="form-control" name="country" placeholder="Country" value="{{ $supply->country}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('scripts')
@endsection