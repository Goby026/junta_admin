<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>
    <body class="g-sidenav-show  bg-gray-100">
        @include('layouts.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            @include('layouts.navbar')
            <!-- End Navbar -->

            <!-- Contenido principal -->
            @yield('contenido')
            <!-- Fin Contenido principal -->

        </main>
        @include('layouts.config')
        @include('layouts.scripts')
      </body>
</html>
