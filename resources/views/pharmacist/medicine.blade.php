@extends('layouts.pharmacist')
@section('title','Pharmacist | Medicine')
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

<!-- date and time -->
<div classs="container">
    <div class="row">
        <div class="col-sm-12">
            <script>
                var date = new Date();
                document.write(date);
            </script>
        </div>
    </div>
</div>
<!-- end of date and time -->

 <!-- Heading for pharmacist information -->
<div class="container">
    <div class="row">
        <legend style="font-size: 35px; text-align: center;">Medicine Information</legend>
        <hr>
    </div>
</div>

<!-- Medicine page content  -->
<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="row">
                <!-- <div class="col-sm-12">
                    <form class="navbar-form"> -->
                    <!-- <form action="/search" method="get">
                    {{ csrf_field() }}
                        <div class="form-group">
                            Search:
                            <input type="search" name="name" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-danger">
                            <span class="glyphicon glyphicon-search"> -->
                                <!-- <button type="submit" class="btn btn-danger">Search</button> -->
                            <!-- </span>
                            </button>
                        </div>
                    </form> -->
                    <!-- </form>
                </div> -->

                <div class="col-sm-3">
                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModal" style="margin-top:7px;">
                    <span class="glyphicon glyphicon-plus-sign"></span> Add Medicine
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


        <!-- starting Medicine table -->
            <div class="row">
                <div class="col-sm-12">
                    <table id="dataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>EmpID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>ManufactureDate</th>
                                <th>ExpireDate</th>
                                <th>Photo</th>
                                <th style="text-align:center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($medicine as $capsule)
                        <tr>
                            <td>{{ $capsule->id }}</td>
                            <td>{{ $capsule->employee->id }}</td>
                            <td>{{ $capsule->name }}</td>
                            <td>{{ $capsule->description }}</td>
                            <td>{{ $capsule->type }}</td>
                            <td>{{ $capsule->price }}</td>
                            <td>{{ $capsule->manufacture_date }}</td>
                            <td>{{ $capsule->expire_date }}</td>
                            <!-- <td>{{ $capsule->photo }}</td> -->
                            <td> <img src="{{ asset('images/medicine/' . $capsule->photo) }}" width="100px;" height="100px;" alt="Image"> </td>
                            <td>
                                <a href="{{ route('medicine.show', $capsule->id)}}" class="btn btn-success btn-sm">
                                <span class="glyphicon glyphicon-eye-open"></span>      Show
                                </a>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $capsule->id }}">
                                <span class="glyphicon glyphicon-edit"></span>  Edit
                                </button>
                                <form action="{{ route('medicine.destroy', $capsule->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" style="margin-top:-54px; margin-left:126px;">
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
<!-- end of Medicine page content -->

<!-- Modal for Adding Button -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ action('MedicineController@store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pharmacist-id" class="col-form-label">MedicineID:</label>
                        <input type="text" class="form-control" name="medicineid" placeholder="medicine id">
                    </div>
                    <div class="form-group">
                        <label for="user-id" class="col-form-label">EmployeeID:</label>
                        <input type="text" class="form-control" name="employeeid" placeholder="enployee id">
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" name="medicinename" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-form-label">Description:</label>
                        <input type="text" class="form-control" name="description" placeholder="description">
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-form-label">Type:</label>
                        <input type="text" class="form-control" name="type" placeholder="type">
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-form-label">Price:</label>
                        <input type="text" class="form-control" name="price" placeholder="price">
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-form-label">ManufactureDate:</label>
                        <input type="text" class="form-control" name="manufacturedate" placeholder="manufacture date">
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-form-label">ExpireDate:</label>
                        <input type="text" class="form-control" name="expiredate" placeholder="expire date">
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="position" class="col-form-label">Choose Photo:</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Medicine</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Adding Modal -->

<!-- Modal for editing Form -->
@foreach($medicine as $capsule)
<div class="modal fade" id="edit{{ $capsule->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ action('MedicineController@update', $capsule->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pharmacist-id" class="col-form-label">MedicineID:</label>
                        <input type="text" class="form-control" name="medicineid" placeholder="medicine id" value="{{ $capsule->id }}">
                    </div>
                    <div class="form-group">
                        <label for="user-id" class="col-form-label">EmployeeID:</label>
                        <input type="text" class="form-control" name="employeeid" placeholder="enployee id" value="{{ $capsule->employee_id}}">
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" name="medicinename" placeholder="name" value="{{ $capsule->name }}">
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-form-label">Description:</label>
                        <input type="text" class="form-control" name="description" placeholder="description" value="{{ $capsule->description }}">
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-form-label">Type:</label>
                        <input type="text" class="form-control" name="type" placeholder="type" value="{{ $capsule->type }}">
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-form-label">Price:</label>
                        <input type="text" class="form-control" name="price" placeholder="price" value="{{ $capsule->price }}">
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-form-label">ManufactureDate:</label>
                        <input type="text" class="form-control" name="manufacturedate" placeholder="manufacture date" value="{{ $capsule->manufacture_date}}">
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-form-label">ExpireDate:</label>
                        <input type="text" class="form-control" name="expiredate" placeholder="expire date" value="{{ $capsule->expire_date}}">
                    </div>
                    <div class="input-group">
                        <div class="form-group">
                            <label for="position" class="col-form-label">Choose Photo:</label>
                            <input type="file" class="form-control" name="photo" value="{{ $capsule->photo}}">
                        </div>
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
<!-- End Editing Modal -->
<script type="text/javascript">
$(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>
@endsection


