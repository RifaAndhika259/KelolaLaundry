@extends('admin.layouts.master')
@section('content')

<div class="row mt-3">
    <div class="col-12 col-lg-6 col-xl-3">
      <div class="card bg-pattern-primary">
        <div class="card-body">
          <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">4500</h4>
            <span class="text-white">Total Orders</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-basket-loaded text-white"></i></div>
         </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-3">
      <div class="card bg-pattern-danger">
        <div class="card-body">
          <div class="media">
           <div class="media-body text-left">
            <h4 class="text-white">7850</h4>
            <span class="text-white">Total Expenses</span>
          </div>
           <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-wallet text-white"></i></div>
        </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-3">
      <div class="card bg-pattern-success">
        <div class="card-body">
          <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">87.5%</h4>
            <span class="text-white">Total Revenue</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-pie-chart text-white"></i></div>
        </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-3">
      <div class="card bg-pattern-warning">
        <div class="card-body">
          <div class="media">
          <div class="media-body text-left">
            <h4 class="text-white">8400</h4>
            <span class="text-white">New Users</span>
          </div>
          <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
            <i class="icon-user text-white"></i></div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection
