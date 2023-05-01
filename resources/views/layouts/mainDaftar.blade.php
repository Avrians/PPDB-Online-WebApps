<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK Nusa Bangsa | Daftar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('layouts.style')

</head>

<body>

  <!-- ======= Header - Navbar ======= -->
  @include('layouts.navbarDaftar')
  <!-- End Navbar -->

    <!-- ======= content ======= -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>@yield('title')</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>@yield('title')</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    @yield('content')

    <!-- End Footer -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.scripts')

</body>

</html>