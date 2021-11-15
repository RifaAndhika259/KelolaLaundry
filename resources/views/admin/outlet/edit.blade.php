@extends('admin.layouts.master')
@section('content')
{{-- <div class="modal-body">

    <form action="{{url('outlet', $outlet->id)}}/update" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Nama</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="name" required
                value="{{$outlet->name}}">
        </div>

        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input name="Alamat" type="Alamat" class="form-control" id="Alamat" aria-describedby="Alamat"
                value="{{$outlet->Alamat}}" required>
        </div>

        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input name="telephone" type="number" class="form-control" id="telephone" aria-describedby="telephone"
                required value="{{$outlet->telephone}}">
        </div>

        <div class="modal-footer">

            <button type="submit" class="btn btn-primary">UPDATE</button>
            <button type="submit" class="btn btn-danger" a href="{{url('/admin/outlet')}}">Batal</a></button>
        </div>
    </form>

</div> --}}
@endsection
