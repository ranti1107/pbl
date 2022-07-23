<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>P4MP</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{url('public')}}/admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{url('public')}}/admin/vendors/css/vendor.bundle.base.css">

  <link href="{{url('public')}}/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/build/css/custom.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('public')}}/admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('public')}}/admin/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.template.navbar')

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.template.sidebar')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          @yield('content')

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.template.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{url('public')}}/admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{url('public')}}/admin/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{url('public')}}/admin/js/off-canvas.js"></script>
  <script src="{{url('public')}}/admin/js/hoverable-collapse.js"></script>
  <script src="{{url('public')}}/admin/js/template.js"></script>
  <script src="{{url('public')}}/admin/js/settings.js"></script>
  <script src="{{url('public')}}/admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('public')}}/admin/js/dashboard.js"></script>

  <script src="{{url('public')}}/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="{{url('public')}}/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <script src="{{url('public')}}/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    <script src="{{url('public')}}/assets/build/js/custom.min.js"></script>

  <script>
   $(".table-datatable").DataTable();
  </script>
  @stack('script')
  <!-- End custom js for this page-->
</body>

</html>

