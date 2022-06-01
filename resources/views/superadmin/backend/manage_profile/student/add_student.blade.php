
@extends( Auth::user()->role === 'super_admin'  ?  'superadmin.superadmin_master' : 'admin.admin_master' )
@section( Auth::user()->role === 'super_admin'  ?  'superadmin' : 'admin' )


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
                                            <div class="row">
                                                <div class="col-lg-6">

                                                        <div class="mb-2">
                                                            <label for="example-fileinput" class="form-label">Image</label>
                                                            <input type="file" id="example-fileinput" class="form-control">
                                                        </div>


                                                        <div class="mb-2">
                                                            <label for="simpleinput" class="form-label">Name</label>
                                                            <input type="text" id="simpleinput" class="form-control">
                                                        </div>
    
                                                        <div class="mb-2">
                                                            <label for="simpleinput" class="form-label">Gerdian name</label>
                                                            <input type="text" id="simpleinput" class="form-control">
                                                        </div>

                                                        <div class="mb-2">
                                                            <label for="simpleinput" class="form-label">Gerdian NID Number</label>
                                                            <input type="text" id="simpleinput" class="form-control">
                                                        </div>

                                                        <div class="mb-2">
                                                            <label for="simpleinput" class="form-label">Mobile Number</label>
                                                            <input type="text" id="simpleinput" class="form-control">
                                                        </div>



                                                        <div class="mb-2">
                                                            <label for="example-date" class="form-label">Date of Birth</label>
                                                            <input class="form-control" id="example-date" type="date" name="date">
                                                        </div>


                                                        <div class="mb-2">
                                                            <label for="simpleinput" class="form-label">Birth Registration Number</label>
                                                            <input type="text" id="simpleinput" class="form-control">
                                                        </div>


                                                        <div class="mb-2">
                                                            <label for="example-select" class="form-label">Gender</label>
                                                            <select class="form-select" id="example-select">
                                                                <option>Select</option>

                                                                <option>Male</option>
                                                                <option>Female</option>
                                                                <option>Non Binary</option>
                                                              
                                                            </select>
                                                        </div>














                                                       

                                                      
                                                      
            
                                                       
    
                                                      
        
                                              
    
                                                     
            
                                                </div> <!-- end col -->
    
                                                <div class="col-lg-6">
            
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


                                                    <div class="mb-2">
                                                        <label for="example-select" class="form-label">Class</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Select</option>

                                                            <option>Class One</option>
                                                            <option>Class Two</option>
                                                          
                                                        </select>
                                                    </div>




                                                    <div class="mb-2">
                                                        <label for="example-select" class="form-label">Session</label>
                                                        <select class="form-select" id="example-select">
                                                            <option>Select</option>

                                                            <option>2020-2021</option>
                                                            <option>2021-2022</option>
                                                    
                                                        </select>
                                                    </div>





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
    
                                                        <div class="mb-2">
                                                            <label for="example-email" class="form-label">Email</label>
                                                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                        </div>
    

                                                        <div class="mb-2">
                                                            <label for="password" class="form-label">New Password</label>
                                                            <div class="input-group input-group-merge">
                                                                <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                                                <div class="input-group-text" data-password="false">
                                                                    <span class="password-eye"></span>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="mb-2">
                                                            <label for="password" class="form-label">Confirm Password</label>
                                                            <div class="input-group input-group-merge">
                                                                <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                                                <div class="input-group-text" data-password="false">
                                                                    <span class="password-eye"></span>
                                                                </div>
                                                            </div>
                                                        </div>




            
                                                </div> <!-- end col -->




                                            </div>
                                            <!-- end row-->                      
                                        </div> <!-- end preview-->
                                    
  
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->







</div>














@endsection
