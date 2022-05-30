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
                                        <li class="breadcrumb-item"><a href="{{URL::To('class/manage-class')}}">Manage Classes</a></li>
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
        if(!empty($editdata)){
          $btn = 'Update';
        }else{
          $btn = 'Add';
          
        }
      ?>



@if(!empty($editdata))

    <h4 class="header-title">Edit Class</h4>



@else

    <h4 class="header-title">Add Class</h4>


@endif



          <div class="tab-content">
              <div class="tab-pane show active" id="horizontal-form-preview">
                    @if(empty($editdata))
                    {!! Form::open(array('route' =>['manage-class.store'],'method'=>'POST')) !!}
                  @else
                    {{  Form::open(array('route' => ['manage-class.update',$editdata->id], 'method' => 'PUT', 'files' => true))  }}
                  @endif
                      <div class="row mb-3">
                          <label for="name" class="col-3 col-form-label">Class Name</label>
                          <div class="col-9">
                              <input type="text" name="name" class="form-control" value="{{(!empty($editdata->name))?$editdata->name:''}}" placeholder="Class Name">
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


                                        <form action="{{ route('manage-class.destroy',$student_classes->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')


                                            <a href="{{route('manage-class.edit',$student_classes->id)}}" class="btn btn-outline-info btn-rounded"> <i title="Edit" class="mdi mdi-pencil"></i></a>





                                            <button type="submit"  class="btn btn-outline-danger btn-rounded show-alert-delete-box " > <i title="Delete" class="mdi mdi-delete"></i></button>




                                          





                                      
                                        </form>

                                      
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
