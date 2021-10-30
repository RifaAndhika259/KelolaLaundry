@extends('admin.layouts.master')
@section('content')
<div class="modal-body">

    <form action="{{url('member', $member->id)}}/update" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Nama</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="name" required
                value="{{$member->name}}">
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <input name="address" address="text" class="form-control" id="address" aria-describedby="address" required
                value="{{$member->address}}">
        </div>

        <div class="form-group">
            <label for="address">Jenis Kelamin</label>
            <select name="gender" class="form-select form-select-sm" aria-label=".form-select-sm example" required
                value="{{$member->gender}}">
                <option required selected>Pilih Jenis Kelamin</option>
                <option required value="male">Laki-Laki</option>
                <option required value="pemale">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input name="telephone" type="number" class="form-control" id="telephone" aria-describedby="telephone"
                required value="{{$member->telephone}}">
        </div>


        <div class="modal-footer">

            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>

</div>
@endsection
