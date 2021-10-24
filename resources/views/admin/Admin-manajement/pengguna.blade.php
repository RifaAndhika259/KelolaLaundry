@extends('admin.layouts.master')

@section('content')
<div class="row">
<div class="col-lg-12">
<div class="card">
    <div class="card-header text-uppercase">
    Member
    </div>
    <div class="card-body">
    <form id="basic-form" action="#">
        <div>
<h3>Registrasi</h3>
<section>
    <div class="form-group">
        <label> name *</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label> username *</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>password*</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Role *</label>
    <select class="form-control fa fa-angle-left float-right" id="exampleFormControlSelect1">
      <option>Admin</option>
      <option>Kasir</option>
      <option>Owner</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary ">Submit</button>
</section>
</form>

    </div>
    </div>
</div>
</div>
@endsection
