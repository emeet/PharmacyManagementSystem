@extends('layouts.pharmacist') @section('title','Pharmacist | User_Information') @section('content')
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
    <!-- Heading for pharmacist information -->
    <div class="container">
        <div class="row">
            <legend style="font-size: 35px;">Pharmacist Information</legend>
            <hr>
        </div>
    </div>

<!-- Pharmacist content or table -->
<section class="content">
    <!-- Box-Heading -->
    <div class="box">
        <div class="box-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="box-title">List of Information</h3>
                </div>
            </div>
        </div>
        @if(count($errors->all()))
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <strong>Oops!</strong> {{$error}}
                </div>
            @endforeach
        @endif

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
        <!-- Box Body -->
        <div class="container">
            <div class="box-body">
                <div class="row">
                    <!-- <div class="col-sm-9">
                        <form class="navbar-form">
                            <div class="form-group">
                                Search:
                                <input type="text" class="form-control" placeholder="search">
                            </div>
                            <button type="submit" class="btn btn-danger">Search</button>
                        </form>
                    </div> -->
                    <div class="col-sm-9">
                        <h4>Table</h4>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModal">
                        <span class="glyphicon glyphicon-plus-sign"></span>     ADD
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered">
                        <thead>
                            <tr style="font-style:bold;">
                                <!-- <th width="1%" class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria_label="id: activate to sort column descending" aria-sort="ascending">PharmacistID</th>
            <th width="1%" class="sorting" tabindex="0" rowspan="1" colspan="1" aria_label="UserID: activate to sort column descending" aria-sort="ascending">UserID</th>
            <th width="1%" class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria_label="address: activate to sort column descending" aria-sort="ascending">Address</th>
            <th width="1%" class="sorting" tabindex="0" rowspan="1" colspan="1" aria_label="number: activate to sort column descending" aria-sort="ascending">PhoneNumber</th>
            <th width="1%" class="sorting" tabindex="0" rowspan="1" colspan="1" aria_label="gender: activate to sort column descending" aria-sort="ascending">Gender</th>
            <th width="1%" class="sorting" tabindex="0" rowspan="1" colspan="1" aria_label="position: activate to sort column descending" aria-sort="ascending">Position</th>
            <th width="1%" class="sorting" tabindex="0" rowspan="1" colspan="1" aria_label="action: activate to sort column descending" aria-sort="ascending">Action</th> -->
                                <th>PharmacistID</th>
                                <th>UserName</th>
                                <th>Address</th>
                                <th>PhoneNumber</th>
                                <th>Gender</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="font-family:sans-serif; font-size:15px;">
                        @foreach($employee as $person)
                        <!-- if ($user->id == Auth::user()->id){ -->
                        <!-- } -->
                            <tr>
                                <td>{{ $person->id }}</td>
                                <td>{{ $person->users->name }}</td>
                                <td>{{ $person->address }}</td>
                                <td>{{ $person->phone_number }}</td>
                                <td>{{ $person->gender }}</td>
                                <td>{{ $person->position }}</td>
                                <td>
                                <a href="{{ route('personal.show', $person->id)}}" class="btn btn-success btn-sm">
                                <span class="glyphicon glyphicon-eye-open"></span>      Show
                                </a>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1{{ $person->id }}">
                                <span class="glyphicon glyphicon-edit"></span>  Edit
                                </button>
                                <form action="{{ route('personal.destroy', $person->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm" style="margin-top:-54px; margin-left:133px;">
                                    <span class="glyphicon glyphicon-trash"></span>      Delete
                                    </button>
                                </form>
                                    <!-- <a href="{{ route('personal.edit', $person->id)}}" class="btn btn-warning">Edit</a> -->
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <form action="{{ action('PersonalController@store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="pharmacist-id" class="col-form-label">PharmacistID:</label>
                                <input type="text" class="form-control" name="pharmacistid" placeholder="pharmacist id">
                            </div>
                            <div class="form-group">
                                <label for="user-id" class="col-form-label">UserID:</label>
                                <input type="text" class="form-control" name="userid" placeholder="User ID" list="browsers">
                                    <datalist id="browsers">
                                    </datalist>
                                </div>
                            <div class="form-group">
                                <label for="address" class="col-form-label">Address:</label>
                                <input type="text" class="form-control" name="address" placeholder="address" >
                            </div>
                            <div class="form-group">
                                <label for="number" class="col-form-label">PhoneNumber:</label>
                                <input type="text" class="form-control" name="number" placeholder="phone number" >
                            </div>
                            <div class="form-group">
                                <label for="gender" class="col-form-label">Gender:</label>
                                <input type="text" class="form-control" name="gender" placeholder="gender" >
                            </div>
                            <div class="form-group">
                                <label for="position" class="col-form-label">Position:</label>
                                <input type="text" class="form-control" name="position" placeholder="position" >
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

        <!-- Modal for editing Button -->
        @foreach($employee as $person)
        <div class="modal fade" id="exampleModal1{{ $person->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <form action="{{ action('PersonalController@update', $person->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="pharmacist-id" class="col-form-label">PharmacistID:</label>
                                <input type="text" class="form-control" name="pharmacistid" value="{{ $person->id }}">
                            </div>
                            <div class="form-group">
                                <label for="user-id" class="col-form-label">UserID:</label>
                                <input type="text" class="form-control" name="userid" placeholder="user id" value="{{ $person->user_id }}">
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-form-label">Address:</label>
                                <input type="text" class="form-control" name="address" placeholder="address" value="{{ $person->address }}">
                            </div>
                            <div class="form-group">
                                <label for="number" class="col-form-label">PhoneNumber:</label>
                                <input type="text" class="form-control" name="number" placeholder="phone number" value="{{ $person->phone_number}}">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="col-form-label">Gender:</label>
                                <input type="text" class="form-control" name="gender" placeholder="gender" value="{{ $person->gender }}">
                            </div>
                            <div class="form-group">
                                <label for="position" class="col-form-label">Position:</label>
                                <input type="text" class="form-control" name="position" placeholder="position" value="{{ $person->position }}">
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
        <!-- End Add Modal -->
@endsection
