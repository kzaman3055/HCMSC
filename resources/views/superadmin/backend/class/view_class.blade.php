@extends('superadmin.superadmin_master')
@section('superadmin')






  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Bootstrap Tables</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">

        <div class="row">

        



            <div class="col-12 col-lg-4">
                <div class="box">
                    <div class="box-header with-border">
                      <h4 class="box-title">Add Class</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col">
                            <form method='POST' action="{{route('class.store')}}" >
                                @csrf


                              <div class="row">
                                <div class="col-12">						
                                    <div class="form-group">
                                        <h5>Class Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                        

                                </div>
                       
                              </div>

                                <div class="text-xs-right">
                                    <input type="submit" value="Submit" style="float: right" class="btn btn-rounded btn-info">
                                </div>
                            </form>
        
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                <!-- /.box -->
              </div> 




          <div class="col-12 col-lg-4">
            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">All Classes</h4>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>

                      
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($alldata as $key => $student_classes)

                          <tr id="tr_id">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $student_classes->name }}</td>
                            <td>
                                {{-- <a href="{{route('class.edit',$student_classes->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>
                                <a href="{{route('class.delete',$student_classes->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Delete</a> --}}







                                <a href="#editClassModal" class="edit edit_class" vid='{{$student_classes->id}}' data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>


                          


                            </td>



<td>



{{-- modal start --}}



  <div id="editClassModal" vid="{{$student_classes->id}}" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{route('class_update')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-header">						
            <h4 class="modal-title">Edit Class</h4>
          </div>
          <div class="modal-body">	
            <input type="text" hidden name="class_id" id="class_id" class="form-control" required>

            <div class="form-group">
              <label>Name</label>
              <input type="text" name='name' id='name' value="{{$student_classes->id}}" class="form-control" required>
            </div>
                  
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit"  class="btn btn-info" value="Save">
          </div>
        </form>
      </div>
    </div>
  </div>

</td>


</tr>


{{-- modal end --}}

                          @endforeach

                 
                        </tbody>
                      </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div> 
          
          





        




    

        </div>
        <!-- /.row -->

      </section>
      <!-- /.content -->
    </div>




















</div>
<!-- /.content-wrapper -->




















@endsection
