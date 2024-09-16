<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <!-- Favicons -->
    <link href="{{asset('admin/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('admin-template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin-template/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-template/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('admin-template/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('admin-template/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('admin-template/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('admin-template/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    @include('layouts.partials.navbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.partials.sidebar')

