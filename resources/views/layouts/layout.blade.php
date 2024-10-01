<!DOCTYPE html>
<html lang="nl">


<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Ontdek de charme van het Italiaanse plattelandsleven bij Il Bandito Arancione, een prachtig appartement in een 150 jaar oude villa in Umbrië.
        Beleef de authentieke Italiaanse cultuur, geniet van onze cateringdiensten, en verken de prachtige omgeving van Monte Castello di Vibio.
        Perfect voor een vredige en pittoreske vakantie">
    <meta name="keywords"
        content="Il Bandito Arancione,
    Vakantieverhuur Umbrië,
    Appartement Italiaanse platteland,
    Historische villa Italië,
    Accommodatie Monte Castello di Vibio,
    Authentiek Italiaans verblijf,
    Vredige vakantie Italië,
    Culturele Italiaanse vakantie,
    Villa verhuur Umbrië,
    Cateringservices Umbrië">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Il Bandito Arancione </title>

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}?v=1" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}?v=1" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}?v=1" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}?v=1" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}?v=1" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}?v=1" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}?v=1" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}?v=1" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}?v=1" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=1" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <!-- ... (dezelfde offcanvas-menu zoals in je oorspronkelijke code) ... -->
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    @include('layouts.navigation')
    <!-- Header End -->

    <!-- Content Section Begin -->
    @yield('content')
    <!-- Content Section End -->

    <!-- Footer Section Begin -->
    @include('layouts.footer')
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Zoek hier...">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
