@extends('admin.layouts.master')
@section('content')
<div class="modal-body">

    <form action="{{url('admin/member', $member->id)}}/update" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Nama</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="name" required
                value="{{$member->name}}">
        </div>

        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input name="telephone" type="number" class="form-control" id="telephone" aria-describedby="telephone"
                required value="{{$member->telephone}}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="email"
                value="{{$member->email}}" required>
        </div>

        <div class="modal-footer">

            <button type="submit" class="btn btn-primary">UPDATE</button>
            <button type="submit" class="btn btn-danger" a href="{{url('/admin/member')}}">Batal</a></button>
        </div>
    </form>

</div>
@endsection
