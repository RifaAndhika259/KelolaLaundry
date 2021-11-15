@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><i class="fa fa-table"></i> Data Product</div>
        <div class="card-body">
          <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            <thead>
                <tr>
                    <th>nama</th>
                    <th>Email</th>
                    <th>role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $User )
                <tr>
                    <td>{{$User->name}}</td>
                    <td>{{$User->email}}</td>
                    <td>{{$User->role}}</td>
                    <td>
                    <button type="button" class="btn btn-primary waves-effect waves-light m-1"> <i class="icon-note"></i> </button>
                    <button type="button" class="btn btn-danger waves-effect waves-light m-1"> <i class="fa fa-trash-o"></i> </button>
                </td>
                </tr>

                @endforeach
        </table>
        </div>
        </div>
      </div>
    </div>
  </div><!-- End Row-->
@endsection
