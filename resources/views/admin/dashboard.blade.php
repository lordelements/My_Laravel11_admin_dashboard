

<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
<!-- Header -->
    @include('admin.header')

    <div class="d-flex align-items-stretch">

        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->


        <!-- Main Body -->
        @include('admin.body')
        <!-- Main  Body end-->

        <!-- Footer -->
        @include('admin.footer')