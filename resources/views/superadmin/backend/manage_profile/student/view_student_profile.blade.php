@extends(Auth::user()->role === 'super_admin' ? 'superadmin.superadmin_master' : 'admin.admin_master')
@section(Auth::user()->role === 'super_admin' ? 'superadmin' : 'admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Manage Profiles</a></li>
                            <li class="breadcrumb-item"><a href="#">Students</a></li>

                            <li class="breadcrumb-item active">View</li>
                        </ol>
                    </div>

                    <h4 class="page-title"> {{ $showdata->name }}'s
                        Data</h4>
                </div>
            </div>
        </div>






        <div class="row">
            <div class="col-xl-4 col-lg-5" style="margin: 0 auto; float: none margin-bottom: 10px;">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ !empty($showdata->image) ? url('upload/user_images/' . $showdata->image) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                            alt="profile-image">
       
                        <h4 class="mb-0 mt-2"> {{ $showdata->name }}</h4>
                        <p class="text-muted font-14"><strong>Roll No: </strong>{{ $showdata->student_id }}</p>
                        <a type="button" href="{{ route('studentpass.set', $showdata->student_id) }}" class="btn btn-success btn-sm mb-2">Assign Email & Password</a>

                            <div class="col">

                                <div class="text-start mt-3">

                                    <p class="text-muted mb-2 font-13"><strong>Father's Name :</strong> <span
                                            class="ms-2">{{ $showdata->f_name }}</span></p>

                                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">(123)
                                            123 1234</span></p>

                                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                            class="ms-2 ">user@email.domain</span></p>

                                    <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span
                                            class="ms-2">USA</span></p>
                                </div>
                            </div>
                   

                    </div> <!-- end card-body -->
                </div> <!-- end card -->





        </div>
        <!-- end row-->

    </div>
    <!-- container -->
@endsection
