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
            <div class="container-fluid">
                <div class="block">
                    <div class="title"><strong>Table Registered Users</strong></div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date/Time Verified</th>
                                    <th scope="col">Usertype</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $user as $users)
                                <tr>

                                    <td >{{ $users->id }}</td>
                                    <td >{{ $users->name }}</td>
                                    <td >{{ $users->email }}</td>
                                    <td >{{ $users->email_verified_at }}</td>
                                    <td >{{ $users->usertype }}</td>

                                    <td>
                                        <form action="{{ url('user/'.$users->id) }}" method="POST">

                                            <!-- <a href="{{ url('edit-userdata/'.$users->id) }}" class="text-blue-600 border-solid border-2 border-sky-500 rounded py-2 px-4 text-sm text-right">Edit</a> -->

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you sure?')"> Delete </button>
                                            <a href="{{ url('view-user/'.$users->id) }}"  class="btn btn-outline-primary">View</a>
                                        </form>
                                    </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">
                                        <h5 class="text-center">There are no data.</h5>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


            <!-- Footer -->
            @include('admin.footer')