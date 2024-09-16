

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


        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Dashboard</h2>
                </div>
            </div>

            <section class="no-padding-top">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Basic Form-->
                        @include('admin.profile.partials.update-profile-information-form')
                         <!-- Basic Form-->

                        <!-- Horizontal Form-->
                        @include('admin.profile.partials.update-password-form')
                        <!-- Horizontal Form-->

                         <!-- Horizontal Form-->
                         @include('admin.profile.partials.delete-user-form')
                        <!-- Horizontal Form-->


                    </div>
                </div>
            </section>

            <!-- Footer -->
            @include('admin.footer')