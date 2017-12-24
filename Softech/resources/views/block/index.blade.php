<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('page_movie/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page_movie/css/styles.css') }}" media="all" />


    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js')}}"></script>

    <!-- FlexSlider -->
    <script type="text/javascript" src="{{ asset('page_movie/js/jquery.flexslider-min.js') }}"></script>
</head>
@include('block.header')

@yield('content')

@include('block.footer')
