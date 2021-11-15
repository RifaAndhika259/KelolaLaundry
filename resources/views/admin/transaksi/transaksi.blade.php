@extends('admin.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-15">
        <div class="card">
            <div class="card-header text-uppercase">Transaksi</div>
            <div class="card-body">

                <form>

                    <div class="form-group row">
                        <label for="placeholder-input" class="col-sm-3 col-form-label">Member</label>
                        <div class="col-9">
                            <input type="text" class="form-control" placeholder="masukan nama member">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="basic-select" class="col-sm-3 col-form-label">Product</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="basic-select">
                                <option>Kiloan </option>
                                <option>Satuan </option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="placeholder-input" class="col-sm-3 col-form-label">Jumlah</label>


                        <div class="col">
                            <input type="number" class="form-control" placeholder="masukan jumlah">
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
