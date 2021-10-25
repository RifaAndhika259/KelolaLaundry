<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
@include ('admin.layouts.head')

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include ('admin.layouts.sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include ('admin.layouts.topbar')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                        <h4 class="page-title">@yield ('title-page')</h4>

                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>
                <!-- End Breadcrumb-->
                <div class="row">
                    <div class="col-lg-12">
                        <div style="height:600px">
                            <!--Please remove the height before using this page-->
                            @yield ('content')
                        </div>
                    </div>
                </div>

            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">

                </div>
            </div>
        </footer>
        <!--End footer-->

    </div>
    <!--End wrapper-->

    @include('sweetalert::alert')

    <!-- Bootstrap core JavaScript-->
    @include ('admin.layouts.js')
    <!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->

</html>
