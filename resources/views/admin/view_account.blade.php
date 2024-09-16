
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

            <x-messages />

            <div class="col-lg-12">
                <div class="block">
                    <div class="title"><strong>Account Datails</strong></div>
                    <div class="block-body">

                        <form class="form-horizontal" action="{{ url('view-user/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">FullName</label>
                                <div class="col-sm-9">
                                    <p class="form-control">{{ $user->name }}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Email</label>
                                <div class="col-sm-9">
                                    <p class="form-control">{{ $user->email }}</p>
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Date Verified</label>
                                <div class="col-sm-9">
                                    <p style="color: white;">{{ $user->email_verified_at }}</p>
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">User Role</label>
                                <div class="col-sm-9">
                                    <p class="form-control">{{ $user->usertype }}</p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


            

            <!-- Footer -->
            @include('admin.footer')