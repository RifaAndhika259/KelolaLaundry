@extends('kasir.layouts.master')
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
                    <th>nama pemilik</th>
                    <th>Jenis kelamin</th>
                     <th>nama barang</th>
                    <th>Harga</th>
                    <th>tanggal</th>
                    <th>pajak</th>
                    <th>dibayar</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <tr>
            <td>budi</td>
            <td>laki-laki</td>
            <td>kasur</td>
            <td>25000</td>
            <td>24-10-2021</td>
            <td>10000</td>
            <td>lunas</td>
            <td>selesai</td>
            <td>
            <button type="button" class="btn btn-primary waves-effect waves-light m-1"> <i class="fa fa-download"></i> </button>

        </tr>
        </table>
        </div>
        </div>
      </div>
    </div>
  </div><!-- End Row-->
@endsection
