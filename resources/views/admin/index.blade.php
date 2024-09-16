
@include('layouts.partials.header')

@include('layouts.partials.navbar')

<!-- ======= Sidebar ======= -->
@include('layouts.partials.sidebar')


<main id="main" class="main">

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a  href="{{ url('/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

@yield('content')

</main><!-- End #main -->


@yield('content')

@include('layouts.partials.footer')