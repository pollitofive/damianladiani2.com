<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BreezyCV - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ url('css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/bootstrap-grid.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/perfect-scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/main.css') }}" type="text/css">
</head>

<body>
<!-- Animated Background -->
<div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
<!-- /Animated Background -->

<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
    </div>
</div>
<!-- /Loading animation -->

<div class="page">
    <div class="page-content">

        @include('header.header')


        @include('content\content')
    </div>
</div>

<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/modernizr.custom.js') }}"></script>
<script src="{{ url('js/animating.js') }}"></script>

<script src="{{ url('js/imagesloaded.pkgd.min.js') }}"></script>

<script src='{{ url('js/perfect-scrollbar.min.js') }}'></script>
<script src='{{ url('js/jquery.shuffle.min.js') }}'></script>
<script src='{{ url('js/masonry.pkgd.min.js') }}'></script>
<script src='{{ url('js/owl.carousel.min.js') }}'></script>
<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ url('js/jquery.googlemap.js') }}"></script>
<script src="{{ url('js/validator.js') }}"></script>
<script src="{{ url('js/main.js') }}"></script>
</body>
</html>
