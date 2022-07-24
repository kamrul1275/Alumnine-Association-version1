@extends('layouts.master')




@section('content')


<div class="col-md-3"></div>

<div class="col-md-7">

 <!-- general form elements -->
 <div class="card card-info ml-4">
    <h3 class="card-title text-center bg-info py-2">Admin Create Post</h3>
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
    <form role="form" action="{{ url('/admin-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputname">Titel test</label>
            <input type="text" class="form-control" name="titel" id="name" placeholder="Enter titel">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail">Heading</label>
          <input type="text" class="form-control" name="heading" id="exampleInputEmail" placeholder="Enter heading">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label> <br>
           <textarea rows="5" cols="25" name="description" placeholder="write something....."></textarea>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Image</label>
          <input type="file" class="form-control" name="image" id="exampleInputPassword1">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit"  class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>


</div>

<div class="col-md-2"></div>




@endsection
