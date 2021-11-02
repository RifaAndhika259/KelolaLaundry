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
                        <div class="card-header">Outlet</div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Tambah Product
                            </button>
                        </div>
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama </th>
                                <th>alamat</th>
                                <th>telephon</th>
                                <th> action </th>
                            </tr>
                        </thead>
                        <?php $i=1; ?>
                        @foreach ($Outlets as $outlet)


                        <tbody>
                            <td>{{$i++}}</td>
                            <td> {{$outlet->name}}</td>
                            <td> {{$outlet->addres}} </td>
                            <td> {{$outlet->telephone}}</td>

                            <td>
                                <a href="" class="btn btn-primary btn-sm waves-effect m-1"><i
                                        class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm waves-effect m-1"
                                    onclick="return confirm('Apakah anda yakin akan menghapus data?')"><i
                                        class="fa fa-trash"></i></a>
                            </td>

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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Outlet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{url('outlet')}}/create" method="POST">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="object">Nama</label>
                        <input name="name" type="text" class="form-control" id="object" aria-describedby="object"
                            required>
                    </div>


                    <div class="form-group">
                        <label for="price">alamat</label>
                        <input name="address" type="text" class="form-control" id="price" aria-describedby="price"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="price">telephon</label>
                        <input name="telephone" type="number" class="form-control" id="price" aria-describedby="price"
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
{{-- <div class="row">
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
</div> --}}
@endsection
