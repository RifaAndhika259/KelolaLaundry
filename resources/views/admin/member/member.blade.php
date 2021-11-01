@extends('admin.layouts.master')
@section('content')

{{-- table --}}
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-head">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-datatable" class="table table-bordered">
                        <div class="card-header">Member
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah Member
                            </button>
                        </div>
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama</th>
                                <th>telephone</th>
                                <th>email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($members as $member)

                            <tr>

                                <td>{{$i++}}</td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->telephone}}</td>
                                <td>{{$member->email}}</td>

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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Member</h5>
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
                        <label for="telephone">Telephone</label>
                        <input name="telephone" type="number" class="form-control" id="telephone"
                            aria-describedby="telephone" required>
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email"
                            required>
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
