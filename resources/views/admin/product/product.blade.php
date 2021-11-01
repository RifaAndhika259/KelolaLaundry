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
                        <div class="card-header">Product

                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah Product
                            </button>
                        </div>
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$product->object}}</td>
                                <td>{{$product->price}}</td>

                                <td>
                                    <a href="{{url('admin',$product->id)}}/edit"
                                        class="btn btn-primary btn-sm waves-effect m-1"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('admin',$product->id)}}/delete"
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{url('product')}}/create" method="POST">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="object">Nama</label>
                        <input name="object" type="text" class="form-control" id="object" aria-describedby="object"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input name="price" type="number" class="form-control" id="price" aria-describedby="price"
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
