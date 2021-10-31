@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
         <div class="card-header text-uppercase">Tambah Data Transaksi</div>
         <div class="card-body">

         <form>


            <div class="form-group row">
                <label for="basic-input" class="col-sm-3 col-form-label">Kode invoice</label>
                <div class="col-sm-9">
                  <input type="text" id="Id_invoice" class="form-control" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label for="placeholder-input" class="col-sm-3 col-form-label">Member</label>
                <div class="col-7">
                    <input type="text" class="form-control" placeholder="masukan nama member" >
                  </div>

                  <div class="col">
                    <select class="form-control" id="basic-select">
                        <option>Lama </option>
                        <option>baru </option>
                  </select>
                  </div>
              </div>
              <div class="form-group row">
                <label for="basic-input" class="col-sm-3 col-form-label">tanggal</label>
                <div class="col-sm-9">
                  <input type="date" id="tanggal" class="form-control" >
                </div>
              </div>

              <div class="form-group row">
                <label for="basic-input" class="col-sm-3 col-form-label">pajak</label>
                <div class="col-sm-9">
                  <input type="number" id="pajak" class="form-control" >
                </div>
              </div>

              <div class="form-group row">
                <label for="basic-select" class="col-sm-3 col-form-label">status</label>
                <div class="col-sm-9">
                  <select class="form-control" id="basic-select">
                        <option>proses </option>
                        <option>selesai </option>
                        <option>diambil</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="basic-select" class="col-sm-3 col-form-label">dibayar</label>
                <div class="col-sm-9">
                  <select class="form-control" id="basic-select">
                        <option>dibayar  </option>
                        <option>belum dibayar </option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="basic-select" class="col-sm-3 col-form-label">jenis</label>
                <div class="col-sm-9">
                  <select class="form-control" id="basic-select">
                        <option>Kiloan </option>
                        <option>Satuan </option>
                        <option>Lainnya</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="placeholder-input" class="col-sm-3 col-form-label">Nama Paket</label>
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="masukan nama paket" >
                  </div>

                  <div class="col">
                    <input type="number" class="form-control" placeholder="masukan jumlah" >
                  </div>

              </div>

              <div class="form-group row">
                <label for="basic-input" class="col-sm-3 col-form-label"></label>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <button class="btn btn-block btn-primary" id="add_product"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
              </div>
         </form>

         </div>
      </div>
    </div>
  </div><!--End Row-->

@endsection
