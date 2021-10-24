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
        <label> address *</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">jenis kelamin *</label>
    <select class="form-control fa fa-angle-left float-right" id="exampleFormControlSelect1">
      <option>laki-laki</option>
      <option>perempuan</option>
    </select>
  </div>
    <div class="form-group">
        <label>telephon *</label>
        <input type="text" class="form-control">
    </div>
</section>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</div>
</div>
@endsection
