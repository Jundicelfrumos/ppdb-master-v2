<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/asdf/css/styleswipe.css" rel="stylesheet" type="text/css">
    <link href="/asdf/css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="/asdf/css/components.css" rel="stylesheet" type="text/css">
    <link href="/asdf/css/style.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="/asdf/css/lightslider.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/81db6b68ef.js" crossorigin="anonymous"></script>
    <!--Jquery-------------------->
    <script type="text/javascript" src="asdf/js/Jquery.js"></script>
    <!--lightslider.js--------------->
    <script type="text/javascript" src="asdf/js/lightslider.js"></script>
    <title>Home</title>
</head>
<body>
    @yield('container')

    @include('sweetalert::alert')

    <!-- Swiper JS -->
    <script src="/asdf/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="/asdf/js/slider.js" type="text/javascript"></script>
    <script src="/asdf/js/script.js"></script>
    <script src="/asdf/js/stisla.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>