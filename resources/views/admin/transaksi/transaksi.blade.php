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

                    <table class="table table-bordered" id="dynamicAddRemove">
                    <div class="form-group row" class="table table-bordered">
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
                                    <button class="btn btn-block btn-primary" type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject<i class="fa fa-plus"></i></button>
                                    <button type="submit" class="btn btn-outline-success btn-block" id="add_product">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </table>
                </form>


                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
                <script type="text/javascript">
                    var i = 0;
                    $("#dynamic-ar").click(function () {
                        ++i;
                        $("#dynamicAddRemove").append('<tr><td><label for="basic-select" class="col-sm-3 col-form-label">Product</label><select class="form-control" id="basic-select" name="product_id">@foreach ($product as $data)<option value="{{ $data->id }}">{{ $data->object }}</option>@endforeach</select></td><td><label for="placeholder-input" class="col-sm-3 col-form-label">Jumlah</label><input type="number" class="form-control" name="amount" placeholder="masukan jumlah"></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                            );
                    });
                    $(document).on('click', '.remove-input-field', function () {
                        $(this).parents('tr').remove();
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<!--End Row-->

@endsection
