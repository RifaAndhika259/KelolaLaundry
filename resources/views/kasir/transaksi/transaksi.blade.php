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
                    <th>nama_barang</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>tanggal </th>
                    <th>pajak</th>
                    <th>dibayar</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <tr>
            <td>selimut</td>
            <td>Kiloan</td>
            <td>25000</td>
            <td>24-10-2021</td>
            <td>10000</td>
            <td>lunas</td>
            <td>proses</td>
            <td>
            <button type="button" class="btn btn-primary waves-effect waves-light m-1"> <i class="fa fa-check"></i> </button>
           <a href="{{url('admin/Admin-transaksi/detailtransaksi')}}"><button type="button" class="btn btn-success waves-effect waves-light m-1"> <i class="fa fa-info"></i>
        </td>
        </tr>
        </table>
        </div>
        </div>
      </div>
    </div>
  </div><!-- End Row-->
@endsection
