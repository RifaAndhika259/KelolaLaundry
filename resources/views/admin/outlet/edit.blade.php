@extends('admin.layouts.master')
@section('content')
<<<<<<< HEAD
{{-- <div class="modal-body">

    <form action="{{url('outlet', $outlet->id)}}/update" method="POST">
=======
<div class="modal-body">
    <h1>Edit Outlet</h1>
    <form action="{{url('admin/outlet', $Outlets->id)}}/update" method="POST">
>>>>>>> a709e90924165d9ec1598b7e1f73813e1f05975c
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Nama</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="name" required
                value="{{$Outlets->name}}">
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <input name="address" type="text" class="form-control" id="address" aria-describedby="address" required
                value="{{$Outlets->address}}">
        </div>

        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input name="telephone" type="number" class="form-control" id="telephone" aria-describedby="telephone"
                required value="{{$Outlets->telephone}}">
        </div>

        <div class="modal-footer">

            <button type="submit" class="btn btn-primary">UPDATE</button>
            <button type="submit" class="btn btn-danger" a href="{{url('/admin/outlet')}}">Batal</a></button>
        </div>
    </form>

</div> --}}
@endsection
