@extends('admin.layouts.master')

@section('content')
<div class="row">
<div class="col-lg-12">
<div class="card">

    <div class="card-body">
    <form id="basic-form" action="#">
        <div>
<h3>Outlet</h3>
<section>
    <div class="form-group">
        <label> name *</label>
        <input type="text" class="form-control" value="laundry">
    </div>
    <div class="form-group">
        <label> address *</label>
        <input type="text" class="form-control " value="Bojong tanjung bandung indonesia">
    </div>
    <div class="form-group">
        <label>telephon *</label>
        <input type="text" class="form-control" value="0821080101010101">
    </div>
</section>
<button type="submit" class="btn btn-primary">Submit</button>

</form>
    </div>
    </div>
</div>
</div>
@endsection
