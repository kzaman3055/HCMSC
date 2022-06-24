@extends(Auth::user()->role === 'super_admin' ? 'superadmin.superadmin_master' : 'admin.admin_master')
@section(Auth::user()->role === 'super_admin' ? 'superadmin' : 'admin')
    <div class="container-fluid">





        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Manage Profiles</a></li>
                            <li class="breadcrumb-item"><a href="#">Students</a></li>

                            <li class="breadcrumb-item active">Email & Password</li>
                        </ol>
                    </div>

                    <h4 class="page-title"> Assign Email & Password </h4>
                </div>
            </div>
        </div>



        @foreach ($showdata as $key => $students)


        <div class="row">
            <div class="col-xl-4 col-lg-5" style="margin: 0 auto; float: none margin-bottom: 10px;">
                <div class="card text-center">
                    <div class="card-body">



                        <div class="tab-content">
                            <div class="tab-pane show active" id="input-types-preview">
                                <div class="row">
                                    <form method='post' action="{{route('studentpass.update',$students->id )}}">
                                        @csrf


                                        <div class="mb-2">
                                            <label for="example-email" class="form-label">Email</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Email">

                                        </div>

                                        <div class="mb-2">
                                            <label for="example-password" class="form-label">Password</label>
                                            <div class="input-group input-group-merge">

                                            <input type="password" name="password" required autocomplete="new_password"
                                                class="form-control"                                                     placeholder="Enter your password">
                                                
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <label for="password" class="form-label">Show/Hide Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password"name="password_confirmation" required autocomplete="new_password"  class="form-control"
                                                    placeholder="Confirm password">
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>





                                        <div class="justify-content-end row">
                                            <div class="col-9">
                                                <input type="submit" value="Update" style="float: right" class="btn btn-success">
    
                                            </div>
                                        </div>
    







                                    </form>


                                </div>
                                <!-- end row-->
                            </div> <!-- end preview-->


                        </div> <!-- end tab-content-->



                    </div> <!-- end card-body -->
                </div> <!-- end card -->





            </div>





                
            @endforeach






        </div>
    @endsection
