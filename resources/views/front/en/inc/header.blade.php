<!doctype html>
<html lang="en">

<head>
    <!----Title of the website-->
    <title>@yield('title')</title>

    <meta name="description" content='soft legend for web solutions'>
    <meta name='tagename' content='programming,design,web design,android,web development,soft legend'>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!----Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('front')}}/en/css/animate.css">
    <link rel="stylesheet" href="{{asset('front')}}/en/css/hover-min.css">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">


    <!------External libraries-->

    <!--------CSS Files------------->
    <link rel="stylesheet" href="{{asset('front')}}/en/css/style.css">
     @yield('styles')
    <link rel="stylesheet" href="{{asset('front')}}/en/css/mobile.css">

</head>
    <body>
        <!----------------------Start Up Botton------------->
        <div class="up">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </div>

        <!----------------------End Up Botton---------------->