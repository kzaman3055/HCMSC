@extends('superadmin.superadmin_master')
@section('superadmin')


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

                    <h4 class="page-title">All Student Data</h4>
                </div>
            </div>
        </div>








        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Basic Data Table</h4>
                        

                       
                        <div class="tab-content">
                            <div class="tab-pane show active" id="basic-datatable-preview">
                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date of Birth</th>
                                            <th>Class</th>
                                            <th>Group</th>
                                            <th>Session</th>
                                            <th>Gender</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach ($alldata as $key => $student_classes)


                                        <tr>
                                            <td>{{$student_classes->name}}</td>
                                            <td>{{ Carbon\Carbon::parse($student_classes->dob)->format(' d-M-Y') }} </td>    
                                            <td>{{$student_classes->class}}</td>
                                            <td>{{$student_classes->group}}</td>
                                            <td>{{$student_classes->session}}</td>
                                            <td>{{$student_classes->gender}}</td>
                                            <td>btn</td>

                                        </tr>
                        @endforeach
                                    </tbody>
                                </table>                                           
                            </div> <!-- end preview-->
                        
    
                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->























    </div>
    @endsection





