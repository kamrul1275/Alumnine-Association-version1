@extends('layouts.master')



@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">All Post Here</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>No</th>
          <th>Titel</th>
          <th>Heading</th>
          <th>Description</th>
          <th>Image</th>
          <th>SuperAdmin id</th>
          <th>Action</th>

        </tr>
        </thead>
        <tbody>
 @foreach ($superadminPass as $key=>$iteam)
<tr>
    <td>{{ $key+1 }}</td>
  <td>{{ $iteam->titel  }}</td>
  <td>{{ $iteam->heading  }}</td>
  <td>{{ $iteam->description  }}</td>
  <td>


    <img src="{{ url('public/Image/'.$iteam->image) }}"
 style="height: 100px; width: 150px;">

    </td>


  <td>{{ $iteam->superadmin_id}}
</td>
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
