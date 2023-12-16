<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/stylesWelcome.css">
    <link rel="stylesheet" href="/css/stylesNavbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/8d7ba59e72.js" crossorigin="anonymous"></script>
</head>

<body>

    @include('layouts.nav')
    {{-- page content --}}
    @yield('content')

    <footer>
        <div class="left-info">
            <div>
                <div class="a">
                    <img src="../images/logo.png" class="img-fluid">
                </div>

                <div class="a">
                    <h6>Deskit has been developed from the ground up to be both easy to use as incredibly feature rich.
                    </h6>
                </div>

                <div class="a">
                    <a class="navbar-brand book" href="#">Book a demo</a>
                </div>



            </div>
        </div>
        <div class="right-info">
            <div class="a">
                <a class="navbar-brand aa" href="#">FAQs</a>
                <a class="navbar-brand aa" href="#">Privacy Policy</a>
                <a class="navbar-brand aa" href="#">Guides</a>
            </div>

            <div class="b">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>

        </div>
    </footer>
    <section class="copyright">
        <h6>2023 Deskit limited. All rights reserved.</h6>
    </section>
</body>

</html>