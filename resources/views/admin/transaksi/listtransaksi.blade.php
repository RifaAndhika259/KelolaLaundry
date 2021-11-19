@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><i class="fa fa-table"></i> Data Product</div>
        <div class="card-body">
          <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            <thead>
                <tr>
                    <th>kode invoice</th>
                    <th>nama pemilik</th>
                    <th>nama paket</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction as $data)
                <tr>
                    <td>{{ $data->code_transaction }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->object }}</td>
                    <td>{{ $data->amount }}</td>
                </tr>
                @endforeach
        </table>
        </div>
        </div>
      </div>
    </div>
  </div><!-- End Row-->
@endsection
