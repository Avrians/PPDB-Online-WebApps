<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK Nusa Bangsa | Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('layouts.style')

</head>

<body>

  <!-- ======= Header - Navbar ======= -->
  @include('layouts.navbar')
  <!-- End Navbar -->

  <!-- ======= Content ======= -->
  @yield('content')
  <!-- End Content -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.scripts')

</body>

</html>