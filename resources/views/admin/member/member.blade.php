@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table"></i>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    +
                </button> Tambah Member

            </div>

        </div>
    </div>
</div>

{{-- table --}}
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-head">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-datatable" class="table table-bordered">
                        <div class="card-header"><i class="fa fa-table"></i> Data Member Laundry</div>
                        <div class="card-body">
                        </div>
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama</th>
                                <th>alamat</th>
                                <th>jenis kelamin</th>
                                <th>telephone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($members as $member)

                            <tr>

                                <td>{{$i++}}</td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->address}}</td>
                                <td>{{$member->gender}}</td>
                                <td>{{$member->telephone}}</td>

                                <td>
                                    <a href="{{url('member',$member->id)}}/edit"
                                        class="btn btn-primary btn-sm waves-effect m-1"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('member',$member->id)}}/delete"
                                        class="btn btn-danger btn-sm waves-effect m-1"
                                        onclick="return confirm('Apakah anda yakin akan menghapus data?')"><i
                                            class="fa fa-trash"></i></a>
                                </td>

                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{url('member')}}/create" method="POST">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="name" required>
                    </div>

                    <div class="form-group">
                        <label for="address">alamat</label>
                        <input name="address" address="text" class="form-control" id="address"
                            aria-describedby="address" required>
                    </div>

                    <div class="form-group">

                        <select name="gender" class="form-select form-select-sm" aria-label=".form-select-sm example"
                            required>
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="male">Laki-Laki</option>
                            <option value="pemale">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <input name="telephone" type="number" class="form-control" id="telephone"
                            aria-describedby="telephone" required>
                    </div>


                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
<!-- End Row-->
@endsection
