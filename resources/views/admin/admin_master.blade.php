
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>HCMSC - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.ico')}}">

        <!-- third party css -->
        <link href="{{ asset('../assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ asset('../assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('../assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{ asset('../assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">





 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 









    </head>





    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

  <div class="wrapper">
    @include('admin.body.sidebar')

    <div class="content-page">
      <div class="content">

    @include('admin.body.header')

    <!-- Left side column. contains the logo and sidebar -->

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Content Wrapper. Contains page content -->
    @yield('admin')
    <!-- /.content-wrapper -->


      </div>



    </div>
    @include('admin.body.footer')

  </div>
  <!-- ./wrapper -->




  <!-- bundle -->
  <script src="{{ asset('../assets/js/vendor.min.js')}}"></script>
  <script src="{{ asset('../assets/js/app.min.js')}}"></script>

  <!-- third party js -->
  <script src="{{ asset('../assets/js/vendor/apexcharts.min.js')}}"></script>
  <script src="{{ asset('../assets/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{ asset('../assets/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- third party js ends -->

  <!-- demo app -->
  <script src="{{ asset('../assets/js/pages/demo.dashboard.js')}}"></script>
  <!-- end demo js-->








  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  
  
  
  
  <script type="text/javascript">
      $('.show-alert-delete-box').click(function(event){
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: "Are you sure you want to delete this record?",
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              type: "warning",
              buttons: ["Cancel","Yes!"],
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
          }).then((willDelete) => {
              if (willDelete) {
                  form.submit();
              }
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