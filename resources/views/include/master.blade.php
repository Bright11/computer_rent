<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')"Computer ecommerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<link id="callCss" rel="stylesheet" href="{{asset('themes/bootshop/bootstrap.min.css')}}" media="screen"/>
<link href="{{asset('themes/css/base.css')}}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
<link href="{{ asset('themes/css/bootstrap-responsive.min.css')}}" rel="stylesheet"/>
<link href="{{ asset('themes/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->
<link href="{{asset('themes/js/google-code-prettify/prettify.css')}}" rel="stylesheet"/>

<link rel="stylesheet" href="{{ asset('mycss/frontendcss.css') }}">
</head>
<body>
    @include('include.navbar')
@yield('content')
@include('include.footer')
