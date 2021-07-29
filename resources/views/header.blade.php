<!DOCTYPE html>
<html lang="en">
<head>
    <title>Life Development Centre (LDC)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
    <link rel="icon" href="/images/logo.jpg">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    <style>
        p{
            text-align: justify;
            color: black;
            text-justify: inter-word;
        }
    </style>

    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
{{--yesle bigari racha button le ni--}}
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Life Development Centre</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @if(\Illuminate\Support\Facades\Request::path()=='/')
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                @else
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Request::path()=='about')
                        <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
                @else
                        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                @endif
                    @if(\Illuminate\Support\Facades\Request::path()=='objective')
                        <li class="nav-item active"><a href="/objective" class="nav-link">Objectives</a></li>
                    @else
                        <li class="nav-item"><a href="/objective" class="nav-link">Objectives</a></li>
                    @endif
                    @if(\Illuminate\Support\Facades\Request::path()=='programmes')
                        <li class="nav-item active"><a href="/programmes" class="nav-link">Programmes</a></li>
                    @else
                        <li class="nav-item"><a href="/programmes" class="nav-link">Programmes</a></li>
                    @endif
                    @if(\Illuminate\Support\Facades\Request::path()=='help')
                        <li class="nav-item active"><a href="/help" class="nav-link">Help</a></li>
                    @else
                        <li class="nav-item"><a href="/help" class="nav-link">Help</a></li>
                    @endif
                    @if(\Illuminate\Support\Facades\Request::path()=='need')
                        <li class="nav-item active"><a href="/need" class="nav-link">Needs</a></li>
                    @else
                        <li class="nav-item"><a href="/need" class="nav-link">Needs</a></li>
                    @endif
                    @if(\Illuminate\Support\Facades\Request::path()=='testimonial')
                        <li class="nav-item active"><a href="/testimonial" class="nav-link">Testimonials</a></li>
                    @else
                        <li class="nav-item"><a href="/testimonial" class="nav-link">Testimonials</a></li>
                    @endif
                    @if(\Illuminate\Support\Facades\Request::path()=='gallery')
                        <li class="nav-item active"><a href="/gallery" class="nav-link">Gallery</a></li>
                    @else
                        <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>
                    @endif
                    @if(\Illuminate\Support\Facades\Request::path()=='contact')
                        <li class="nav-item active"><a href="/contact" class="nav-link">Contact</a></li>
                    @else
                        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    @endif
            </ul>
        </div>
    </div>
</nav>

<!-- END nav -->

