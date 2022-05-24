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

                          <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $student_classes->name }}</td>
                            <td>
                                <a href="{{route('class.edit',$student_classes->id)}}" class="btn btn-info btn-flat mb-5">Edit</a>
                                <a href="{{route('class.delete',$student_classes->id)}}" class="btn btn-danger btn-flat mb-5" id="delete">Delete</a>
                            </td>
                          </tr>
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

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$('body').on('click', '#submit', function (event) {
    event.preventDefault()
    var id = $("#color_id").val();
    var name = $("#name").val();
   
    $.ajax({
      url: 'color/' + id,
      type: "POST",
      data: {
        id: id,
        name: name,
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydata').trigger("reset");
          $('#practice_modal').modal('hide');
          window.location.reload(true);
      }
  });
});

$('body').on('click', '#editCompany', function (event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('color/' + id + '/edit', function (data) {
         $('#userCrudModal').html("Edit category");
         $('#submit').val("Edit category");
         $('#practice_modal').modal('show');
         $('#color_id').val(data.data.id);
         $('#name').val(data.data.name);
     })
});

}); 
</script>
@endpush 
