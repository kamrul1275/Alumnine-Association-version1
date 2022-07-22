@extends('layouts.master')



@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Image</th>
          <th>Action</th>

        </tr>
        </thead>
        <tbody>
@foreach ($createadminPass as $key=>$iteam)
<tr>
    <td>{{$key +1 }}</td>
  <td>{{ $iteam->name }}</td>
  <td>{{ $iteam->email }}</td>
  <td>{{ $iteam->phone }}</td>
  <td> {{ $iteam->image }}</td>
  <td>

    <a href="" class="btn btn-success"><i class="las la-edit"></i> Edit</a>
    <a href="" class="btn btn-danger"><i class="las la-trash"></i>  Delete</a>
  </td>
</tr>
@endforeach






        </tbody>
        <tfoot>

        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->





@endsection
