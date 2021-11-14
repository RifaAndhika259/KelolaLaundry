@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header text-uppercase">
        Member
        </div>
        <div class="card-body">
    <form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">nama</label>
        <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="masukan nama" required
            value="">
    </div>

    <div class="form-group">
        <label for="address">Email</label>
        <input name="address" type="text" class="form-control" id="address" aria-describedby="address" placeholder="masukan alamat email" required
            value="">
    </div>

    <div class="form-group">
        <label for="telephone">Password</label>
        <input name="telephone" type="text" class="form-control" id="telephone" placeholder="masukan password" aria-describedby="telephone"
            required value="">
    </div>
    <label for="exampleFormControlSelect1">Role *</label>
            <select class="form-control fa fa-angle-left float-right" id="exampleFormControlSelect1">
            <option>Admin</option>
            <option>Kasir</option>
            <option>Owner</option>
        </select>
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
   </div>
 </div>
</div>
 </div>



@endsection
