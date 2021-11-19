@extends('admin.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-15">
        <div class="card">
            <div class="card-header text-uppercase">Transaksi</div>
            <div class="card-body">

                <form action="{{ url('admin/transaksi/post') }}" method="POST">
                    @csrf

                    <div class="form-group row">
                        <select class="js-example-basic-single" name="member_id">
                            @foreach ($member as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                          </select>
                    </div>


                    <div class="form-group row">
                        <label for="basic-select" class="col-sm-3 col-form-label">Product</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="basic-select" name="product_id">
                                @foreach ($product as $data)
                                <option value="{{ $data->id }}">{{ $data->object }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="placeholder-input" class="col-sm-3 col-form-label">Jumlah</label>


                        <div class="col">
                            <input type="number" class="form-control" name="amount" placeholder="masukan jumlah">
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="basic-input" class="col-sm-3 col-form-label"></label>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <button class="btn btn-block btn-primary" id="add_product"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!--End Row-->

@endsection
