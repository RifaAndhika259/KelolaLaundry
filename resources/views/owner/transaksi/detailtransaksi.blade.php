@extends('admin.layouts.master')
@section('content')
 <div class="card">
          <div class="card-body">
                  <!-- Content Header (Page header) -->
                  <section class="content-header">
                    <h3>
                      Invoice
                      <small>#007612</small>
                    </h3>
                  </section>

                  <!-- Main content -->
                  <section class="invoice">
                    <!-- title row -->
                    <div class="row mt-3">
                      <div class="col-lg-6">
                        <h4><i class="fa fa-globe"></i> bandung</h4>
                      </div>
					  <div class="col-lg-6">
					   <h5 class="float-sm-right">Date: 2/10/2014</h5>
					  </div>
                    </div>

                    <hr>
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                        From
                        <address>
                         <strong>Jasa laundry bojong</strong><br>
                         Bojong tanjung bandung indonesia <br>
                          Phone: 0821080101010101<br>
                        </address>
                      </div><!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        To
                        <address>
                          <strong>Sudoyo</strong><br>
                          cibaduyut <br>
                          andir, Blok E<br>
                          Phone: 08222021021012021<br>
                        </address>
                      </div><!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        <b>Invoice #007612</b><br>
                      </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                      <div class="col-12 table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Qty</th>
                              <th>Product</th>
                              <th>jenis</th>
                              <th>pajak</th>
                              <th>tanggal dibayar</th>
                              <th>dibayar</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Selimut</td>
                              <td>kiloan</td>
                              <td>10000</td>
                              <td>24-10-2021</td>
                              <td>sudah di bayar</td>
                              <td>selesai</td>
                            </tr>
                          </tbody>
                        </table>
                      </div><!-- /.col -->
                    </div><!-- /.row -->



                    <!-- this row will not appear when printing -->
                    <hr>
                    <div class="row no-print">
                      <div class="col-lg-3">
                        <a href="javascript:window.print();" target="_blank" class="btn btn-outline-secondary m-1"><i class="fa fa-print"></i> Print</a>
						</div>
						<div class="col-lg-9">
						<div class="float-sm-right">
                         <button class="btn btn-primary m-1"><i class="fa fa-download"></i> Generate PDF</button>
						</div>
                      </div>
                    </div>
                  </section><!-- /.content -->
          </div>
      </div>

    </div>
    <!-- End container-fluid-->
@endsection
