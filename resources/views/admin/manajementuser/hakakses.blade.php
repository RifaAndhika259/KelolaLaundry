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
                    <td>{{ $User->getRoleNames()->implode('')}}</td>
                    <td>
                    <button type="button" class="btn btn-primary waves-effect waves-light m-1" data-toggle="modal" data-target="#modal"> <i class="icon-note"></i> </button>
                    <a href="{{url('admin/hakakses', $User->id)}}/delete"
                        class="btn btn-danger btn-sm waves-effect m-1"
                         onclick="return confirm('Apakah anda yakin akan menghapus akses ini?')"><i
                            class="fa fa-trash"></i></a>
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
<div class="modal fade" id="modal" tabIndex="-1">
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
            <form action="{{url('admin/hakakses', $User->id)}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama*</label>
                  <input name="name" type="name" class="form-control" id="exampleFormControlInput1" value="{{$User->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Role*</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="role">
                      @foreach ($role as $data)
                      <option value="{{ $data->id}}">{{$data->name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">batal</button>
                    <button type="submit" class="btn btn-primary">simpan</button>
                  </div>
              </form>
        </div>

      </div>
    </div>
  </div>
@endsection
