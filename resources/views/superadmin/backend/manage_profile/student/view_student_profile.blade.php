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
            <div class="col-xl-4 col-lg-5">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ !empty($showdata->image) ? url('upload/user_images/' . $showdata->image) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                            alt="profile-image">
       
                            <h4 class="mb-0 mt-2"> {{ $showdata->name }}</h4>
                            <a type="button" href="{{ route('studentpass.set', $showdata->student_id) }}" class="btn btn-success btn-sm mb-2 my-2">Assign Email & Password</a>

                                <div class="col">

                                    <div class="text-start mt-3">

                                        <p class="text-muted mb-2 font-13"><strong>Student ID :</strong> <span
                                                class="ms-2">{{ $showdata->student_id }}</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Class :</strong> <span
                                                class="ms-2">{{ $showdata->class }}</span></p>
                                    
                                        <p class="text-muted mb-2 font-13"><strong>Admission Year :</strong> <span
                                                class="ms-2">{{ $showdata->addmission_year }}</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Date pf Birth :</strong> <span
                                                class="ms-2">{{ $showdata->dob }}</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Gender :</strong> <span
                                                class="ms-2">{{ $showdata->gender }}</span></p>
                                    
                                        <p class="text-muted mb-2 font-13"><strong>Religion :</strong> <span
                                                class="ms-2">{{ $showdata->religion }}</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Birth Registration Number :</strong> <span
                                                class="ms-2">{{ $showdata->birth_reg_num }}</span></p>
                                        
                                    </div>
                                </div>
                   

                    </div> <!-- end card-body -->

                </div>

            </div> <!-- end card -->

            
            <div class="col">

                <div class='row'>


                        <div class="card text-center">


                            <div class="card-body">
                                
                                    <div class="col">

                                        <div class="text-start mt-3">

                                            <P style="color:black;font-size: 22px;font-style: bold;"> Gurdian Information</p>

                                            <p class="text-muted mb-2 font-13"><strong>Father's Name :</strong> <span
                                                    class="ms-2">{{ $showdata->f_name }}</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Father's Mobile :</strong> <span
                                                    class="ms-2">{{ $showdata->f_mobile_num }}</span></p>
                                                    

                                            <p class="text-muted mb-2 font-13"><strong>Father's Profession :</strong> <span
                                                    class="ms-2">{{ $showdata->f_profession }}</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Father's Income :</strong> <span
                                                    class="ms-2">{{ $showdata->f_income }}</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Father's / Mother's NID :</strong> <span
                                                    class="ms-2">{{ $showdata->g_nid }}</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Mothers's Name :</strong> <span
                                                    class="ms-2">{{ $showdata->m_name }}</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Mothers's Mobile :</strong> <span
                                                    class="ms-2">{{ $showdata->m_mobile_num }}</span></p>
                                                    

                                            <p class="text-muted mb-2 font-13"><strong>Mothers's Profession :</strong> <span
                                                    class="ms-2">{{ $showdata->m_profession }}</span></p>


                                            
                                        </div>

                                    </div>
                    

                            </div> <!-- end card-body -->
                        </div>

                </div>

                <div class='row'>

                    <div class='col'>

                         <div class="card text-center">


                            <div class="card-body">

                                    <div class="col">

                                        <div class="text-start mt-3">

                                            <P style="color:black;font-size: 22px;font-style: bold;"> Present Address</p>

                                            <p class="text-muted mb-2 font-13"><strong>House :</strong> <span
                                                    class="ms-2">{{ $showdata->present_address }}</span></p>


                                            <p class="text-muted mb-2 font-13"><strong> Distsrict :</strong> <span
                                                    class="ms-2">{{ $showdata->present_district }}</span></p>


                                            <p class="text-muted mb-2 font-13"><strong>Thana :</strong> <span
                                                    class="ms-2">{{ $showdata->present_thana }}</span></p>


                                            <p class="text-muted mb-2 font-13"><strong>Post Office :</strong> <span
                                                    class="ms-2">{{ $showdata->present_poffice }}</span></p>


                                            <p class="text-muted mb-2 font-13"><strong>Post Code :</strong> <span
                                                    class="ms-2">{{ $showdata->present_pcode }}</span></p>
                                        </div>

                                    </div>


                            </div> <!-- end card-body -->
                        </div>

                    </div>

            


                    <div class='col'>
                        
                         <div class="card text-center">


                            <div class="card-body">

                                    <div class="col">

                                        <div class="text-start mt-3">

                                            <P style="color:black;font-size: 22px;font-style: bold;"> Permanent Address</p>

                                            <p class="text-muted mb-2 font-13"><strong>House :</strong> <span
                                                    class="ms-2">{{ $showdata->permanent_address }}</span></p>


                                            <p class="text-muted mb-2 font-13"><strong> Distsrict :</strong> <span
                                                    class="ms-2">{{ $showdata->permanent_district }}</span></p>


                                            <p class="text-muted mb-2 font-13"><strong>Thana :</strong> <span
                                                    class="ms-2">{{ $showdata->permanent_thana }}</span></p>


                                            <p class="text-muted mb-2 font-13"><strong>Post Office :</strong> <span
                                                    class="ms-2">{{ $showdata->permanent_poffice }}</span></p>


                                            <p class="text-muted mb-2 font-13"><strong>Post Code :</strong> <span
                                                    class="ms-2">{{ $showdata->permanent_pcode }}</span></p>

                                        
                                        </div>

                                    </div>


                            </div> <!-- end card-body -->
                        </div>

                    </div>

            
            </div>

        </div>

    </div>

        <!-- end row-->

    
    <!-- container -->
@endsection
