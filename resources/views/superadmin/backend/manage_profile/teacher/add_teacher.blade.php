@extends(Auth::user()->role === 'super_admin' ? 'superadmin.superadmin_master' : 'admin.admin_master')
@section(Auth::user()->role === 'super_admin' ? 'superadmin' : 'admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Manage Profiles</a></li>
                            <li class="breadcrumb-item"><a href="#">Teachers</a></li>
                            <li class="breadcrumb-item"><a href="#">New Teacher</a></li>

                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>

                    <h4 class="page-title">New Teacher Data</h4>
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
                               <form method="post" action="{{route('manage-teacher.store')}}" enctype="multipart/form-data"> 
                                    @csrf


                                {{-- 1st row --}}

                                <div class="row">
                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Name <span
                                                    class="text-danger">*</span> </label>
                                            <input type="text" name="name" required="true" class="form-control">
                                            <input type="hidden" name="role" value='student' class="form-control">

                                        </div>
                                    </div>

                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                    
                                            <label for="simpleinput" class="form-label">NID Number/ Birth Reg No.<span
                                                class="text-danger">*</span></label>
                                            <input type="text" name="nid" required="true" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="example-date" class="form-label">Date of Birth <span
                                                    class="text-danger">*</span> </label>
                                            <input class="form-control" required="true" name="dob" type="date">
                                        </div>
                                    </div>




                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="example-date" class="form-label">Joining Date <span
                                                    class="text-danger">*</span> </label>
                                            <input class="form-control" required="true" name="join_date" type="date">
                                        </div>


                                    </div>


                                </div>




                                {{-- 2nd row --}}

                                <div class="row my-2">
                                    <div class="col-lg-4">

                                        <label>Gender <span class="text-danger">*</span> </label>


                                        <div class="mt-2">


                                            <div class="form-check form-check-inline">

                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" value="Male" name="gender" required="true" class="form-check-input">
                                                <label class="form-check-label">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" value="Female" name="gender" required="true" class="form-check-input">
                                                <label class="form-check-label">Female</label>
                                            </div>


                                            <div class="form-check form-check-inline">
                                                <input type="radio" value="Other" name="gender" required="true" class="form-check-input">
                                                <label class="form-check-label">Other</label>
                                            </div>


                                        </div>


                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="example-select" class="form-label">Religion <span
                                                    class="text-danger">*</span> </label>
                                            <select class="form-select" name="religion">
                                                <option value="" selected="" disabled="">Select Religion</option>

                                                <option value="Islam">Islam</option>
                                                <option value="Hinduism">Hinduism</option>
                                                <option value="Buddhism">Buddhism</option>
                                                <option value="Christianity">Christianity</option>
                                                <option value="Other">Other</option>


                                            </select>
                                        </div>
                                    </div>




                                    <div class="col-lg-3">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Mobile Number <span
                                                    class="text-danger">*</span> </label>
                                            <input type="text" name="mobile" class="form-control">
                                        </div>


                                    </div>

                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="example-select" class="form-label">Blood Group</label>
                                            <select class="form-select" name="blood_group">
                                                <option value="" selected="" disabled="">Select Blood Group</option>

                                                <option value="A positive">A positive (A+)</option>
                                                <option value="A negative">A negative (A-)</option>
                                                <option value="B positive">B positive (B+)</option>
                                                <option value="B negative">B negative (B-)</option>
                                                <option value="O positive">O positive (O+)</option>
                                                <option value="O negative">O negative (O-)</option>
                                                <option value="AB positive">AB positive (AB+)</option>
                                                <option value="AB negative">AB negative (AB-)</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>

                                
                                {{-- 3rd row --}}



                                <div class="row">
                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Father's Name <span
                                                class="text-danger">*</span></label>
                                            <input type="text" name="f_name" required="true"  class="form-control">
                                        </div>
                                    </div>

                                

                                    <div class="col-lg-3">



                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Father's Profession</label>
                                            <input type="text" name="f_profession" class="form-control">
                                        </div>


                                    </div>

                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Mother's Name</label>
                                            <input type="text" name="m_name" required="true" class="form-control">
                                        </div>
                                    </div>





                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Mother's Profession</label>
                                            <input type="text" name="m_profession" class="form-control">
                                        </div>



                                    </div>


                                </div>



                                {{-- 4th row --}}


                                <label>Present Address <span class="text-danger">*</span> </label>

                                <div class="row my-2">

                                    <div class="col-lg-4">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">House</label>
                                            <input type="text" name="present_address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">District <span
                                                    class="text-danger">*</span> </label>
                                            <input type="text" name="present_district" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Thana <span
                                                    class="text-danger">*</span> </label>
                                            <input type="text" name="present_thana" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Post office <span
                                                    class="text-danger">*</span> </label>
                                            <input type="text" name="present_poffice" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Post Code <span
                                                    class="text-danger">*</span> </label>
                                            <input type="text" name="present_pcode" class="form-control">
                                        </div>

                                    </div>

                                </div>

                                <label>Permanent Address <span class="text-danger">*</span> </label>

                                {{-- 5th row --}}


                                <div class="row my-2">

                                    <div class="col-lg-4">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">House </label>
                                            <input type="text" name="permanent_address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">District <span
                                                    class="text-danger">*</span>  </label>
                                            <input type="text" name="permanent_district" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Thana <span
                                                    class="text-danger">*</span>  </label>
                                            <input type="text" name="permanent_thana" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Post office  <span
                                                    class="text-danger">*</span> </label>
                                            <input type="text" name="permanent_poffice" class="form-control">
                                        </div>


                                    </div>


                                    <div class="col-lg-2">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Post Code <span
                                                    class="text-danger">*</span> </label>
                                            <input type="text" name="permanent_pcode" class="form-control">
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
                                            <input type="file" name="image" id="image"  class="form-control">
                                        </div>



                                        <div class="mb-3">
                                 
                                            <img id="showimage" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/no_image.jpg') }}"
                                            style ="width: 100px; width: 100px; border: 1px solid #000000;">
                                        </div>


                                    </div>







                                </div>














                                <div class="justify-content-end row">
                                    <div class="col-9">
                                        <button type="submit" style="float: right" class="btn btn-info">Add</button>

                                    </div>
                                </div>



                                </form>




                                {{-- {!! Form::close() !!} --}}


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
        $(document).ready (function(){ 
            $('#image').change (function(e){
            var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showimage').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(e.target.files['0']);
    
    });
    
    });
    
    
    </script>

@endsection
