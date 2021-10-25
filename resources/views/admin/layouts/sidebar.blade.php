
  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
<center>
      {{-- <img src="{{url('assets/galeri/foto.jpg')}}" class="logo-icon" alt="logo icon"> --}}
      <h5 class="logo-text ">LAUNDRY</h5>
    </center>
    </div>
    <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MENU UTAMA</li>
     <li>
       <a href="{{url('admin')}}" >
         <i class="icon-home"></i> <span>Dashboard</span>
       </a>

     </li>

<hr>


     <li>
       <a href="{{url('admin/Admin-product/product')}}" >
         <i class="icon-layers"></i>
         <span>Product</span>

       </a>

     </li>


     <li>
        <a href="{{url('admin/Admin-member/member')}}" >
          <i class="icon-user"></i>
          <span>Member</span>

        </a>

      </li>




      <li>
       <a href="javaScript:void();" class="waves-effect">
         <i class="icon-grid"></i> <span>Transaksi</span>
         <i class="fa fa-angle-left float-right"></i>
       </a>
       <ul class="sidebar-submenu">
         <li>
             <a href="{{url('admin/Admin-transaksi/transaksi')}}"><i class="fa fa-circle-o"></i> Transaksi</a></li>
             <li><a href="{{url('admin/Admin-transaksi/listtransaksi')}}"><i class="fa fa-circle-o"></i> List Transaksi</a></li>
             <li><a href="{{url('admin/Admin-transaksi/riwayattransaksi')}}"><i class="fa fa-circle-o"></i> Riwayat Transaksi</a></li>
      </ul>
      </li>




      <li>
        <a href="{{url('admin/Admin-outlet/outlet')}}" >
          <i class="icon-note"></i>
          <span>Outlet</span>

        </a>

      </li>


      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-user"></i> <span>Manajement User</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li>
              <a href="{{url('admin/Admin-manajement/pengguna')}}"><i class="fa fa-circle-o"></i> Pengguna</a></li>
              <li><a href="{{url('admin/Admin-manajement/hakakses')}}"><i class="fa fa-circle-o"></i> Hak Akses</a></li>

       </ul>
       </li>
  </div>
  <!--End sidebar-wrapper-->
