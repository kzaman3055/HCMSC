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
                                        <li class="breadcrumb-item"><a href="{{URL::To('Academic/manage-fee-category')}}">Manage Fee Category</a></li>
                                        <li class="breadcrumb-item active">View</li>
                                    </ol>
                                </div>
                                
                                <h4 class="page-title">Manage Fee Category</h4>
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


    <h4 class="header-title">Add Fee Category</h4>

          <div class="tab-content">
              <div class="tab-pane show active" id="horizontal-form-preview">
                   
                    {!! Form::open(array('route' =>['manage-fee-category.store'],'method'=>'POST')) !!}
                  
                      <div class="row mb-3">
                          <label for="name" class="col-3 col-form-label">Fee Category</label>
                          <div class="col-9">
                              <input type="text" name="name" class="form-control" value="{{(!empty($editdata->name))?$editdata->name:''}}" placeholder="Fee Category Name">
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

              <h4 class="header-title">Fee Category Data</h4>
          

              <div class="tab-content">
                  <div class="tab-pane show active" id="striped-rows-preview">
                      <div class="table-responsive-sm">
                          <table class="table table-striped table-centered mb-0">
                              <thead>
                                  <tr>
                                    <th>SL#</th>
                                    <th>Fee Category Name</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($alldata as $key => $fee_categories)

                                  <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>{{ $fee_categories->name }}</td>
                                    <td class="table-action">


                                        <form action="{{ route('manage-fee-category.destroy',$fee_categories->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <a href="#editModal{{$fee_categories->id}}" data-bs-toggle="modal" class="btn btn-outline-info btn-rounded"> <i title="Edit" class="mdi mdi-pencil"></i></a>

                                            <!-- <a href="{{route('manage-shift.edit',$fee_categories->id)}}" class="btn btn-outline-info btn-rounded"> <i title="Edit" class="mdi mdi-pencil"></i></a> -->

                                            <button type="submit"  class="btn btn-outline-danger btn-rounded show-alert-delete-box " > <i title="Delete" class="mdi mdi-delete"></i></button>

                                      
                                        </form>


                                        <!-- Start Modal for edit Other Receive Sub Type -->
                      <div class="modal fade" id="editModal{{$fee_categories->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Fee Category</h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            {!! Form::open(array('route' =>['manage-fee-category.update', $fee_categories->id],'method'=>'PUT')) !!}
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                      <label for="name" class="col-3 col-form-label">Fee Category </label>
                                      <input class="form-control" type="text" name="name" value="{{$fee_categories->name}}" required="" autocomplete="off">
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
