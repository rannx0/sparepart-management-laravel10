<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <title>
        @yield('title', 'Dashboard')
    </title>

    @include('includes.head')
</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('includes.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('includes.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-2">

            @yield('content')

            @include('includes.footer')
        </div>
    </main>

    <!--   Core JS Files   -->
    @include('includes.scripts')
</body>

</html>
