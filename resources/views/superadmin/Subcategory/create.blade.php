@extends('layouts.master')




@section('content')


<div class="col-md-3"></div>

<div class="col-md-7">

 <!-- general form elements -->
 <div class="card card-info ml-4">
    <h3 class="card-title text-center bg-info py-2">Create Sub-Category</h3>
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
    <form role="form" action="{{ url('SuperAdmin/create/subcategory') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputname">Name
            </label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter titel">
          </div>

          <div class="form-group" >
            <select class="form-control" name="cat_id">
                <option value="">selected</option>
@foreach ( $categorypass as $category )

<option value="{{ $category->id }}">{{ $category->titel }}</option>

@endforeach


            </select>

          </div>


        <div class="form-group">
            <label for="exampleInputEmail">Address</label>
            <input type="text" class="form-control" name="address" id="exampleInputEmail" placeholder="Enter heading">
          </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit"  class="btn btn-primary">SubCategory</button>
      </div>
    </form>
  </div>


</div>

<div class="col-md-2"></div>




@endsection
