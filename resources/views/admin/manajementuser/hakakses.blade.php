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
                    <button type="button" class="btn btn-primary waves-effect waves-light m-1" data-toggle="modal" data-target="#modal{{ $User->id }}"> <i class="icon-note"></i> </button>
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

  <!-- Modal -->
<div class="modal fade" id="modal{{ $User->id }}" tabIndex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <i class="fa fa-edit"></i>
            Edit hak akses</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama</label>
                  <input type="nama" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Example select</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="role">
                      @foreach ($role as $data)
                      <option value="{{ $data->id}}">{{$data->name}}</option>
                      @endforeach
                  </select>
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
