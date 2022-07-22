@extends('layouts.master')




@section('content')


<div class="col-md-3"></div>

<div class="col-md-7">

 <!-- general form elements -->
 <div class="card card-info ml-4">
    <div class="card-header text-center">
      <h3 class="card-title ">Create Admin Pannel</h3>
    </div>
@if(Session::has('Msg'))

<h3 class="text-success">{{ Session::get('Msg') }}</h3>

@endif


    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ url('SuperAdmin/create-admin') }}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputname">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
          </div>

        <div class="form-group">
          <label for="exampleInputEmail">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="number" class="form-control" name="phone" id="exampleInputphone" placeholder="Enter phone">
          </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>

        {{-- <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div> --}}


      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>


</div>

<div class="col-md-2"></div>




@endsection
