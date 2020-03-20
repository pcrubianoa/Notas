<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Fonts -->


    <!-- Fab Icon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logos/fav_icon.png" />
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="assets/css/vander/bootstrap.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="assets/css/vander/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/vander/owl.carousel.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/vander/slick.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/css/vander/flaticon.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Banting University</title>
    <!--Codingeek -->
    <link rel="stylesheet" href="https://codingeek.net/codingeek-js/codingeek.css">
</head>

<body>

@include('partials.website.navbar')

@yield('content')

@include('partials.website.footer')


<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>

<!-- JQuery Link -->
<script src="assets/js/vander/jquery-3.4.1.min.js"></script>
<script src="assets/js/vander/jquery-migrate-1.4.1.min.js"></script>
<script src="assets/js/vander/popper.min.js"></script>
<script src="assets/js/vander/bootstrap.min.js"></script>
<script src="assets/js/vander/owl.carousel.min.js"></script>
<script src="assets/js/vander/slick.min.js"></script>
<script src="assets/js/vander/waypoints.min.js"></script>
<script src="assets/js/vander/jQuery.rcounter.js"></script>

<!-- Google maps geolocation -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&callback=initMap"
        async defer></script>
<!-- Custom Script -->
<script src="assets/js/map.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/slider.js"></script>
<script src="assets/js/toggler.js"></script>
<!-- codingeek -->
<script src="codingeek-link.js"></script>
<script src="https://codingeek.net/codingeek-js/codingeek.js"></script>
</body>

</html>
<!-- Localized -->
