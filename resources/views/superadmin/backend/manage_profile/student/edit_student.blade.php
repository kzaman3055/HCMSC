@extends(Auth::user()->role === 'super_admin' ? 'superadmin.superadmin_master' : 'admin.admin_master')
@section(Auth::user()->role === 'super_admin' ? 'superadmin' : 'admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Manage Profiles</a></li>
                            <li class="breadcrumb-item"><a href="#">Students</a></li>
                            <li class="breadcrumb-item"><a href="#">Edit Data</a></li>

                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>

                    <h4 class="page-title">Edit data</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->




        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">



                        <?php
                        $btn = 'Add';
                        
                        ?>




                        <div class="tab-content">
                            <div class="tab-pane show active" id="input-types-preview">
                                {{-- <form method="post" action="{{ route('manage-student.update',$editdata->id) }}" --}}
                                    {{-- enctype="multipart/form-data"> --}}
                                    {{-- @csrf --}}
                                  {!! Form::open(['route' => ['manage-student.update',$editdata->id], 'method' => 'PUT', 'enctype'=>'multipart/form-data']) !!} 



                                    {{-- 1st row --}}

                                    <div class="row">
                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Name <span
                                                        class="text-danger">*</span> </label>
                                                <input type="text" name="name" required="true" value="{{ $editdata->name }}"
                                                    class="form-control">

                                            </div>
                                        </div>

                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="example-date" class="form-label">Date of Birth <span
                                                        class="text-danger">*</span> </label>
                                                <input class="form-control" required="true" value="{{ $editdata->dob }}"
                                                    name="dob" type="date">
                                            </div>
                                        </div>




                                        <div class="col-lg-2">


                                            <div class="mb-2">
                                                <label for="example-select" class="form-label">Class <span
                                                        class="text-danger">*</span> </label>
                                                <select name="class" class="form-select" required="true">
                                                    <option value="" selected="" disabled="">Select Class</option>
                                                    @foreach ($classData as $key => $student_classes)
                                                    <option value= "{{ $student_classes->name }}"{{($editdata->class== "$student_classes->name" ?"selected":"")}}>{{ $student_classes->name }}</option>
                                                    @endforeach


                                                </select>
                                            </div>


                                        </div>







                                        <div class="col-lg-2">


                                            <div class="mb-2">
                                                <label for="example-select" class="form-label">Group <span
                                                        class="text-danger">*</span> </label>
                                                <select name="group" class="form-select" required="true">
                                                    <option value="" selected="" disabled="">Select Group</option>

                                                    @foreach ($groupData as $key => $group)
                                                    <option value= "{{ $group->name }}"{{($editdata->group== "$group->name" ?"selected":"")}}>{{ $group->name }}</option>
                                                    @endforeach


                                                </select>
                                            </div>


                                        </div>












                                        <div class="col-lg-2">

                                            <div class="mb-2">
                                                <label for="example-select" class="form-label">Session <span
                                                        class="text-danger">*</span> </label>
                                                <select name="session" class="form-select" required="true">
                                                    <option value="" selected="" disabled="">Select Session</option>

                                                    @foreach ($sessionData as $key => $session)
                                                    <option value= "{{ $session->year }}"{{($editdata->session== "$session->year" ?"selected":"")}}>{{ $session->year }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>




                                    </div>




                                    {{-- 2nd row --}}



                                    <div class="row">
                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Father's Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="f_name" required="true"
                                                    value="{{ $editdata->f_name }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Father's Mobile Number<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="f_mobile_num" required="true"
                                                    value="{{ $editdata->f_mobile_num }}" class="form-control">
                                            </div>
                                        </div>




                                        <div class="col-lg-3">



                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Father's Profession</label>
                                                <input type="text" name="f_profession" value="{{ $editdata->f_profession }}"
                                                    class="form-control">
                                            </div>


                                        </div>





                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Father's Income</label>
                                                <input type="text" name="f_income" value="{{ $editdata->f_income }}"
                                                    class="form-control">
                                            </div>
                                        </div>




                                    </div>






                                    {{-- 3rd row --}}



                                    <div class="row ">
                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Mother's Name</label>
                                                <input type="text" name="m_name" value="{{ $editdata->m_name }}"
                                                    required="true" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Mother's Mobile
                                                    Number</label>
                                                <input type="text" name="m_mobile_num" value="{{ $editdata->m_mobile_num }}"
                                                    required="true" class="form-control">
                                            </div>
                                        </div>




                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Mother's Profession</label>
                                                <input type="text" name="m_profession" value="{{ $editdata->m_profession }}"
                                                    class="form-control">
                                            </div>



                                        </div>





                                        <div class="col-lg-3">


                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Gurdian NID Number <span
                                                        class="text-danger">*</span> </label>
                                                <input type="text" name="g_nid" required="true"
                                                    value="{{ $editdata->g_nid }}" class="form-control">
                                            </div>


                                        </div>




                                    </div>



                                    {{-- 4th row --}}



                                    <div class="row my-2">
                                        <div class="col-lg-3">

                                            <label>Gender <span class="text-danger">*</span> </label>









                                            <div class="mt-2">


                                                <div class="form-check form-check-inline">

                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" value="Male"
                                                        {{ $editdata->gender == 'Male' ? 'checked' : '' }} name="gender"
                                                        required="true" class="form-check-input">
                                                    <label class="form-check-label">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" value="Female" {{ $editdata->gender == 'Female' ? 'checked' : '' }} name="gender" required="true"
                                                        class="form-check-input">
                                                    <label class="form-check-label">Female</label>
                                                </div>


                                                <div class="form-check form-check-inline">
                                                    <input type="radio" value="Other" {{ $editdata->gender == 'Other' ? 'checked' : '' }} name="gender" required="true"
                                                        class="form-check-input">
                                                    <label class="form-check-label">Other</label>
                                                </div>


                                            </div>











                                        </div>

                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="example-select" class="form-label">Religion <span
                                                        class="text-danger">*</span> </label>
                                                <select class="form-select" name="religion">
                                                    <option value="" selected="" disabled="">Select Religion</option>

                                                    <option value="Islam"  {{($editdata->religion== "Islam" ?"selected":"")}}>Islam</option>
                                                    <option value="Hinduism" {{($editdata->religion== "Hinduism" ?"selected":"")}}>Hinduism</option>
                                                    <option value="Buddhism" {{($editdata->religion== "Buddhism" ?"selected":"")}}>Buddhism</option>
                                                    <option value="Christianity" {{($editdata->religion== "Christianity" ?"selected":"")}}>Christianity</option>
                                                    <option value="Other" {{($editdata->religion== "Other" ?"selected":"")}}>Other</option>


                                                </select>
                                            </div>
                                        </div>




                                        <div class="col-lg-3">


                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Birth Registration Number
                                                    <span class="text-danger">*</span> </label>
                                                <input type="text" name="birth_reg_num" value="{{ $editdata->birth_reg_num }}" class="form-control">
                                            </div>


                                        </div>





                                        <div class="col-lg-3">

                                            <div class="mb-2">
                                                <label for="example-select" class="form-label">Blood Group</label>
                                                <select class="form-select" name="blood_group">
                                                    <option value="" selected="" disabled="">Select Blood Group</option>

                                                    <option value="A positive" {{($editdata->blood_group== "A positive" ?"selected":"")}}>A positive (A+)</option>
                                                    <option value="A negative" {{($editdata->blood_group== "A negative" ?"selected":"")}}>A negative (A-)</option>
                                                    <option value="B positive" {{($editdata->blood_group== "B positive" ?"selected":"")}}>B positive (B+)</option>
                                                    <option value="B negative" {{($editdata->blood_group== "B negative" ?"selected":"")}}>B negative (B-)</option>
                                                    <option value="O positive" {{($editdata->blood_group== "O positive" ?"selected":"")}}>O positive (O+)</option>
                                                    <option value="O negative" {{($editdata->blood_group== "O negative" ?"selected":"")}}>O negative (O-)</option>
                                                    <option value="AB positive" {{($editdata->blood_group== "AB positive" ?"selected":"")}}>AB positive (AB+)</option>
                                                    <option value="AB negative" {{($editdata->blood_group== "AB negative" ?"selected":"")}}>AB negative (AB-)</option>

                                                </select>
                                            </div>
                                        </div>




                                    </div>




                                    {{-- 5th row --}}


                                    <label>Present Address <span class="text-danger">*</span> </label>


                                    <div class="row my-2">



                                        <div class="col-lg-4">


                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Address <span
                                                        class="text-danger">*</span> </label>
                                                <input type="text" name="present_address" value="{{ $editdata->present_address }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-2">

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">District <span
                                                        class="text-danger">*</span> </label>
                                                <input type="text" name="present_district"  value="{{ $editdata->present_district }}" class="form-control">
                                            </div>
                                        </div>




                                        <div class="col-lg-2">


                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Thana <span
                                                        class="text-danger">*</span> </label>
                                                <input type="text" name="present_thana" value="{{ $editdata->present_thana }}" class="form-control">
                                            </div>




                                        </div>




                                        <div class="col-lg-2">




                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Post office <span
                                                        class="text-danger">*</span> </label>
                                                <input type="text" name="present_poffice" value="{{ $editdata->present_poffice }}"  class="form-control">
                                            </div>


                                        </div>





                                        <div class="col-lg-2">


                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Post Code <span
                                                        class="text-danger">*</span> </label>
                                                <input type="text" name="present_pcode" value="{{ $editdata->present_pcode }}" class="form-control">
                                            </div>

                                        </div>



                                    </div>






                                    <label>Permanent Address <span class="text-danger">*</span> </label>



                                    {{-- 6th row --}}


                                    <div class="row my-2">




                                        <div class="col-lg-4">


                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Address <span
                                                        class="text-danger">*</span> </label>
                                                <input type="text" name="permanent_address" value="{{ $editdata->permanent_address }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-2">

                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">District</label>
                                                <input type="text" name="permanent_district" value="{{ $editdata->permanent_district }}"  class="form-control">
                                            </div>
                                        </div>




                                        <div class="col-lg-2">


                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Thana</label>
                                                <input type="text" name="permanent_thana" value="{{ $editdata->permanent_thana }}" class="form-control">
                                            </div>




                                        </div>




                                        <div class="col-lg-2">




                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Post office</label>
                                                <input type="text" name="permanent_poffice" value="{{ $editdata->permanent_poffice }}" class="form-control">
                                            </div>


                                        </div>





                                        <div class="col-lg-2">


                                            <div class="mb-2">
                                                <label for="simpleinput" class="form-label">Post Code</label>
                                                <input type="text" name="permanent_pcode" value="{{ $editdata->permanent_pcode }}" class="form-control">
                                            </div>

                                        </div>







                                    </div>






                                    <div class="row">






                                        <div class="col-lg-3">






                                        </div>




                                        <div class="col-lg-3">







                                        </div>



                                        <div class="col-lg-3">







                                        </div>


                                        <div class="col-lg-3">


                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label">
                                                    Photo</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>



                                            <div class="mb-3">

                                                <img id="showimage"
                                                    src="{{ !empty($editdata->image) ? url('upload/user_images/' . $editdata->image) : url('upload/no_image.jpg') }}"
                                                    style="width: 100px; width: 100px; border: 1px solid #000000;">
                                            </div>


                                        </div>







                                    </div>














                                    <div class="justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" style="float: right" class="btn btn-info">Update</button>

                                        </div>
                                    </div>



                                {{-- </form> --}}




                                {!! Form::close() !!} 


                                <!-- end row-->
                            </div> <!-- end preview-->


                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->







    </div>

    {{-- show selected image --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showimage').attr('src', e.target.result);
                }

                reader.readAsDataURL(e.target.files['0']);

            });

        });
    </script>
@endsection
