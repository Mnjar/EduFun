<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('custom.bootstrap5')
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <style>
        div{
            border: 0px solid black
        }

        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .container-fluid {
            flex: 1;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>
<body>
    @include('layout.menu')
    <div class="container-fluid">

        @yield('konten')
        @yield('styles')
            <!-- Footer -->
    </div>
    <footer class="bg-dark text-white text-center py-1">
        <p>© EduFun 2024 | Web Programming | Muhamad Fajar Faturohman | 2602200161</p>
    </footer>

</body>
</html>
