@extends('superadmin.superadmin_master')
@section('superadmin')

<div class="container-fluid">
                       <!-- start page title -->
                       <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="">Academic</a></li>
                                        <li class="breadcrumb-item"><a href="{{URL::To('Academic/manage-class')}}">Manage Classes</a></li>
                                        <li class="breadcrumb-item active">View</li>
                                    </ol>
                                </div>
                                
                                <h4 class="page-title">Manage Classes</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 
                    <div class="row">



{{-- add class start --}}


<div class="col-xl-6">
  <div class="card">
      <div class="card-body">

        <?php 
          $btn = 'Add';
          
      ?>





    <h4 class="header-title">Add Class</h4>





          <div class="tab-content">
              <div class="tab-pane show active" id="horizontal-form-preview">
                    {!! Form::open(array('route' =>['manage-class.store'],'method'=>'POST')) !!}
                  
                  
                      <div class="row mb-3">
                          <label for="name" class="col-3 col-form-label">Class Name</label>
                          <div class="col-9">
                              <input type="text" name="name" class="form-control"  placeholder="Class Name">
                          </div>
                      </div>
                  
                  
                      <div class="justify-content-end row">
                          <div class="col-9">
                              <button type="submit" style="float: right" class="btn btn-info">{{$btn}}</button>

                          </div>
                      </div>

                  {!! Form::close() !!}



                </div> <!-- end preview-->
          
          
          </div> <!-- end tab-content-->
      </div>  <!-- end card-body -->
  </div>  <!-- end card -->
</div>  <!-- end col -->



  <div class="col-xl-6">
      <div class="card">
          <div class="card-body">

              <h4 class="header-title">Classes Data</h4>
          

              <div class="tab-content">
                  <div class="tab-pane show active" id="striped-rows-preview">
                      <div class="table-responsive-sm">
                          <table class="table table-striped table-centered mb-0">
                              <thead>
                                  <tr>
                                    <th>SL#</th>
                                    <th>Name</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($alldata as $key => $student_classes)

                                  <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>{{ $student_classes->name }}</td>
                                    <td class="table-action">
                                        
                                    <!-- <a href="#editModal{{$student_classes->id}}" data-bs-toggle="modal" style="padding: 1px 15px"><i class="icon-edit1 text-info"></i></a> -->
                                    

                                        <form action="{{ route('manage-class.destroy',$student_classes->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')


                                            <!-- <a href="{{route('manage-class.edit',$student_classes->id)}}" class="btn btn-outline-info btn-rounded"> <i title="Edit" class="mdi mdi-pencil"></i></a> -->
                                            <a href="#editModal{{$student_classes->id}}" data-bs-toggle="modal" class="btn btn-outline-info btn-rounded"> <i title="Edit" class="mdi mdi-pencil"></i></a>




                                            <button type="submit"  class="btn btn-outline-danger btn-rounded show-alert-delete-box " > <i title="Delete" class="mdi mdi-delete"></i></button>




                                          





                                      
                                        </form>

                                        <!-- Start Modal for edit Other Receive Sub Type -->
                      <div class="modal fade" id="editModal{{$student_classes->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Class</h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            {!! Form::open(array('route' =>['manage-class.update', $student_classes->id],'method'=>'PUT')) !!}
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                      <label for="name" class="col-3 col-form-label">Class Name </label>
                                      <input class="form-control" type="text" name="name" value="{{$student_classes->name}}" required="" autocomplete="off">
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                              {{Form::submit('Update',array('class'=>'btn btn-success btn-sm', 'style'=>'width:15%'))}}
                            </div>
                            {!! Form::close() !!}
                          </div>
                        </div>
                      </div>
                      <!-- End Modal for edit Other Receive Sub Type -->

                                      
                                        </td>
                                  </tr>












                                  

                                @endforeach


                              </tbody>
                          </table>
                      </div> <!-- end table-responsive-->                     
                  </div> <!-- end preview-->
              

              </div> <!-- end tab-content-->

          </div> <!-- end card body-->
      </div> <!-- end card -->


</div>


                    </div>











</div>














@endsection