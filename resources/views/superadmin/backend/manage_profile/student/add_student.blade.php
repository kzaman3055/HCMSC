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
                            <li class="breadcrumb-item"><a href="#">New Registration</a></li>

                            <li class="breadcrumb-item active">View</li>
                        </ol>
                    </div>

                    <h4 class="page-title">New Student Registration</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->




        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Input Types</h4>




                        <div class="tab-content">
                            <div class="tab-pane show active" id="input-types-preview">

                                {!! Form::open(array('route' =>['manage-class.store'],'method'=>'POST')) !!}



                                {{-- 1st row --}}

                                <div class="row">
                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Name</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="example-date" class="form-label">Date of Birth</label>
                                            <input class="form-control" id="example-date" type="date" name="date">
                                        </div>
                                    </div>




                                    <div class="col-lg-3">


                                        <div class="mb-2">
                                            <label for="example-select" class="form-label">Class</label>
                                            <select class="form-select" id="example-select">
                                                <option>Select</option>

                                                <option>Class One</option>
                                                <option>Class Two</option>

                                            </select>
                                        </div>


                                    </div>





                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="example-select" class="form-label">Session</label>
                                            <select class="form-select" id="example-select">
                                                <option>Select</option>

                                                <option>2020-2021</option>
                                                <option>2021-2022</option>

                                            </select>
                                        </div>
                                    </div>




                                </div>




                                {{-- 2nd row --}}



                                <div class="row">
                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Father's Name</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Father's Mobile Number</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>




                                    <div class="col-lg-3">



                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Father's Profession</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>


                                    </div>





                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Father's Income</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>




                                </div>






                                {{-- 3rd row --}}



                                <div class="row ">
                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Mother's Name</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Mother's Mobile Number</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>




                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Mother's Profession</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>



                                    </div>





                                    <div class="col-lg-3">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Gurdian NID Number</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>


                                    </div>




                                </div>



                                {{-- 4th row --}}



                                <div class="row my-2">
                                    <div class="col-lg-3">

                                        <label>Gender</label>









                                        <div class="mt-2">


                                            <div class="form-check form-check-inline">
                                               
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio3" name="customRadio1"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="customRadio3">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio4" name="customRadio1"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="customRadio4">Female</label>
                                            </div>


                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio4" name="customRadio1"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="customRadio4">Other</label>
                                            </div>


                                        </div>











                                    </div>

                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="example-select" class="form-label">Religion</label>
                                            <select class="form-select" id="example-select">
                                                <option>Select</option>

                                                <option>Islam</option>
                                                <option>Hinduism</option>
                                                <option>Buddhism</option>
                                                <option>Christianity</option>
                                                <option>Atheism</option>
                                                <option>Other</option>


                                            </select>
                                        </div>
                                    </div>




                                    <div class="col-lg-3">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Birth Registration
                                                Number</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>


                                    </div>





                                    <div class="col-lg-3">

                                        <div class="mb-2">
                                            <label for="example-select" class="form-label">Blood Group</label>
                                            <select class="form-select" id="example-select">
                                                <option>Select Blood Group</option>

                                                <option>A positive (A+)</option>
                                                <option>A negative (A-)</option>
                                                <option>B positive (B+)</option>
                                                <option>B negative (B-)</option>
                                                <option>O positive (O+)</option>
                                                <option>O negative (O-)</option>
                                                <option>AB positive (AB+)</option>
                                                <option>AB negative (AB-)</option>

                                            </select>
                                        </div>
                                    </div>




                                </div>




                                {{-- 5th row --}}


                                <label>Present Address</label>


                                <div class="row my-2">



                                    <div class="col-lg-4">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Address</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">District</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>




                                    <div class="col-lg-2">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Thana</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>




                                    </div>




                                    <div class="col-lg-2">




                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Post office</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>


                                    </div>





                                    <div class="col-lg-2">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Post Code</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>

                                    </div>



                                </div>






                                <label>Permanent Address</label>



                                {{-- 6th row --}}


                                <div class="row my-2">




                                    <div class="col-lg-4">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Address</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">

                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">District</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div>




                                    <div class="col-lg-2">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Thana</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>




                                    </div>




                                    <div class="col-lg-2">




                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Post office</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>


                                    </div>





                                    <div class="col-lg-2">


                                        <div class="mb-2">
                                            <label for="simpleinput" class="form-label">Post Code</label>
                                            <input type="text" id="simpleinput" class="form-control">
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
                                            <label for="example-fileinput" class="form-label">Default file
                                                input</label>
                                            <input type="file" id="image" class="form-control">
                                        </div>



                                        <div class="mb-3">
                                            <img id="showimage"
                                                src="{{ !empty($package->image) ? url('upload/package_images/' . $package->image) : url('upload/no_image.jpg') }}"
                                                style="width: 100px; width: 100px; border: 1px solid #000000;">
                                        </div>







                                    </div>







                                </div>














                                <div class="justify-content-end row">
                                    <div class="col-9">
                                        <button type="submit" style="float: right" class="btn btn-info">Add</button>

                                    </div>
                                </div>










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


{{-- <div class="form-group">
    <h5>Picture <span class="text-danger">*</span></h5>
    <div class="controls">
        <input type="file" name="image" class="form-control" id="image">
    </div>
</div>

<div class="form-group">
    <div class="controls">

    <img id="showimage" src="{{(!empty($package->image))? url('upload/package_images/'.$package->image): url('upload/no_image.jpg') }}"
    style ="width: 100px; width: 100px; border: 1px solid #000000;">

</div>
</div> --}}
