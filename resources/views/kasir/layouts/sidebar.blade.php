
  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
<center>
      {{-- <img src="{{url('assets/galeri/foto.jpg')}}" class="logo-icon" alt="logo icon"> --}}
      <h5 class="logo-text ">LAUNDRY</h5>
    </center>
    </div>
    <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="{{url('admin')}}" >
         <i class="icon-home"></i> <span>Dashboard</span>
       </a>

     </li>




      <li>
       <a href="javaScript:void();" class="waves-effect">
         <i class="icon-grid"></i> <span>Transaksi</span>
         <i class="fa fa-angle-left float-right"></i>
       </a>
       <ul class="sidebar-submenu">
         <li>
             <a href="{{url('kasir/transaksi')}}"><i class="fa fa-circle-o"></i> Transaksi</a></li>
             <li><a href="{{url('kasir/listtransaksi')}}"><i class="fa fa-circle-o"></i> List Transaksi</a></li>
             <li><a href="{{url('kasir/riwayattransaksi')}}"><i class="fa fa-circle-o"></i> Riwayat Transaksi</a></li>
      </ul>
      </li>


  </div>
  <!--End sidebar-wrapper-->
