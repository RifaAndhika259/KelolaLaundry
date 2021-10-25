@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table"></i>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    +
                </button> Tambah Product

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
                        <div class="card-header"><i class="fa fa-table"></i> Data Product</div>
                        <div class="card-body">
                        </div>
                        <thead>
                            <tr>
                                <th>nama barang</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($products as $product)


                                <td>{{$product->object}}</td>
                                <td>{{$product->type}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary waves-effect waves-light m-1"> <i
                                            class="icon-note"></i> </button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light m-1"> <i
                                            class="fa fa-trash-o"></i> </button>
                                </td>
                                @endforeach
                            </tr>
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

                <form action="{{url('product')}}/create" method="POST">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input required name="tanggal" type="date" class="form-control" id="tanggal"
                            aria-describedby="tanggal">
                    </div>




                    <div class="form-group">
                        <label for="pelatih">Pelatih</label>
                        <input name="pelatih" type="text" class="form-control" id="pelatih" aria-describedby="pelatih"
                            required>
                    </div>


                    <div class="form-floating">
                        <label>Info</label>
                        <textarea name="info" class="form-control" id="floatingTextarea2" style="height: 100px"
                            required></textarea>
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
