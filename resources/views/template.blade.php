<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('/admin/css/vertical-layout-light/style.css') }}">

  <link rel="stylesheet" href="{{ asset('/admin/vendors/mdi/css/materialdesignicons.min.css') }}" />
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('/admin/images/favicon.png')}}" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">



  <!-- base:js -->
  <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('/admin/vendors/chart.js/Chart.min.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('/admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('/admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('/admin/js/template.js') }}"></script>
  <script src="{{ asset('/admin/js/settings.js') }}"></script>
  <script src="{{ asset('/admin/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('/admin/js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    flatpickr("input[type=date]");
  </script>

  <script src="{{ asset('/admin/js/chart.js') }}"></script>

  <!-- datatable -->

  <!-- CSS DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

  <!-- JS DataTables with Buttons and PDFMake -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
</head>

<style>
  table.dataTable thead th,
  table.dataTable thead td {
    border-bottom: unset !important;
  }
</style>

<body>
  <div class="row" id="proBanner"></div>

  @include("header")
  <!-- partial -->
  <!-- partial:partials/_sidebar.html -->
  @include("side")
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      @yield("content")
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include("footer")
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
</body>

</html>