<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

  <title>HCMSC - Dashboard</title>

  <!-- Vendors Style-->
  <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

  <!-- Style-->
  <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">


  <link rel="stylesheet" href="{{ asset('backend/css/modal.css') }}">


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">


{{-- class modal --}}

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  {{-- end class modal --}}

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

  <div class="wrapper">

    @include('superadmin.body.header')

    <!-- Left side column. contains the logo and sidebar -->
    @include('superadmin.body.sidebar')



    <!-- Content Wrapper. Contains page content -->
    @yield('superadmin')
    <!-- /.content-wrapper -->


    @include('superadmin.body.footer')

    <div class="control-sidebar-bg"></div>

  </div>
  <!-- ./wrapper -->

  <!-- Vendor JS -->
  <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
  <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
  <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
  <script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>


  <!-- table JS -->


  <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
  <script src="{{ asset('backend/js/pages/data-table.js')}}"></script>




  <!-- Admin App -->
  <script src="{{ asset('backend/js/template.js') }}"></script>
  <script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>




  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <script type="text/javascript">
    $(function(){

$(document).on('click','#delete',function(e){

e.preventDefault();
var link = $(this).attr("href");




Swal.fire({
  title: 'Are you sure?',
  text: "Delete This Data???",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {

    window.location.href = link
    Swal.fire(
      'Deleted!',
      'Data has been deleted.',
      'success'
    )
  }
})





});


    });

  </script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
    @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

   
 }
 @endif 
  </script>


</body>

</html>