@extends('admin.admin_master')
@section('admin')
    @php
    $totaladmin = DB::table('users')
        ->where('role', 'admin')
        ->count();

    $totalstudent = DB::table('users')
        ->where('role', 'student')
        ->count();
    $totalteacher = DB::table('users')
        ->where('role', 'teacher')
        ->count();

    @endphp
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex">


                        </form>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-2 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-account-multiple widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Admin"> Total Admin</h5>
                        <h3 class="mt-3 mb-3">{{ $totaladmin }}</h3>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
            <div class="col-xl-2 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-account-multiple widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Student"> Total Student</h5>
                        <h3 class="mt-3 mb-3">{{ $totalstudent }}</h3>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-2 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-account-multiple widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Teacher"> Total Teacher</h5>
                        <h3 class="mt-3 mb-3">{{ $totalteacher }}</h3>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->


            <div class="col-xl-2 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-cart-plus widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Orders</h5>
                        <h3 class="mt-3 mb-3">5,543</h3>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-2 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-cart-plus widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Orders</h5>
                        <h3 class="mt-3 mb-3">5,543</h3>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->


            <div class="col-xl-2 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-cart-plus widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Orders</h5>
                        <h3 class="mt-3 mb-3">5,543</h3>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->





        </div>
        <!-- end row -->





    </div>
    <!-- container -->
@endsection
