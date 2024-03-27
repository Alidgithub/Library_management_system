<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>{{ $title }}</title>
  <!--favicon-->
  <link rel="icon" href={{asset("assets/images/favicon.ico")}} type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet"/>
  <!-- animate CSS-->
  <link href={{asset("assets/css/animate.css")}} rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href={{ asset("assets/css/icons.css") }} rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href={{ asset('assets/css/sidebar-menu.css') }} rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  <link href={{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }} rel="stylesheet" type="text/css">
  <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
    @include('include.sidebar')
    @include('include.topbar')
<div class="clearfix"></div>
	
  <div class="content-wrapper">

    <!-- End container-fluid-->
    {{ $content }}
    <!--End content-wrapper-->
  </div>
    @include('include.footer')
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src={{ asset('assets/js/jquery.min.js') }}></script>
  <script src={{ asset('assets/js/popper.min.js') }}></script>
  <script src={{ asset("assets/js/bootstrap.min.js") }}></script>
	
  <!-- simplebar js -->
  <script src={{ asset("assets/plugins/simplebar/js/simplebar.js") }}></script>
  <!-- waves effect js -->
  <script src={{ asset("assets/js/waves.js") }}></script>
  <!-- sidebar-menu js -->
  <script src={{ asset("assets/js/sidebar-menu.js") }}></script>
  <!-- Custom scripts -->
  <script src={{ asset("assets/js/app-script.js") }}></script>
  <!-- Chart js -->
  <script src={{ asset("assets/plugins/Chart.js/Chart.min.js") }}></script>
  <!--Peity Chart -->
  <script src={{ asset("assets/plugins/peity/jquery.peity.min.js") }}></script>
  <!-- Index js -->
  {{-- <script src="assets/js/index.js"></script> --}}
  <script src={{ asset("assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js") }}></script>

  <!--Sweet Alerts -->
  <script src={{ asset("assets/plugins/alerts-boxes/js/sweetalert.min.js") }}></script>
  <script src={{ asset("assets/plugins/alerts-boxes/js/sweet-alert-script.js") }}></script>

  <script>
    $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
      })
</script>

{{ isset($javascript) ? $javascript : '' }}

  
</body>

<!-- Mirrored from codervent.com/rukada/color-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:04:09 GMT -->
</html>
