<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eos Project User Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('userthemes/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="http://bernii.github.io/gauge.js/dist/gauge.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>


  <!-- Custom styles for this template-->
  <link href="{{ asset('userthemes/css/sb-admin-2.min.css') }}" rel="stylesheet">


</head>

<body id="page-top">

  @yield('content')
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('userthemes/vendor/jquery/jquery.min.js') }}"></script>
 

  <script src="{{asset('userthemes/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('userthemes/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('userthemes/js/sb-admin-2.min.js') }}"></script>


  @include('sweetalert::alert') 



  


</body>

</html>
