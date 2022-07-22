@extends('layouts.master')




@section('content')


<div class="col-md-3"></div>

<div class="col-md-7">

 <!-- general form elements -->
 <div class="card card-info ml-4">
    <h3 class="card-title text-center bg-info py-2">Create Category</h3>
    {{-- <div class="card-header text-center">
      <h3 class="card-title ">Create Post</h3>
    </div> --}}
@if(Session::has('Msg'))

<h3 class="text-success">{{ Session::get('Msg') }}</h3>

@endif



{{-- validation   --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{url('SuperAdmin/create/category') }}" method="POST" >
        @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputname">Titel</label>
            <input type="text" class="form-control" name="titel" id="name" placeholder="Enter titel">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail">Position</label>
          <input type="text" class="form-control" name="position" id="exampleInputEmail" placeholder="Enter heading">
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit"  class="btn btn-primary">Category</button>
      </div>
    </form>
  </div>


</div>

<div class="col-md-2"></div>




@endsection
