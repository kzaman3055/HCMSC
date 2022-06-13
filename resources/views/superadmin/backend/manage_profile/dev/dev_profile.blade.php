@extends(Auth::user()->role === 'super_admin' ? 'superadmin.superadmin_master' : 'admin.admin_master')
@section(Auth::user()->role === 'super_admin' ? 'superadmin' : 'admin')


<div class="container-fluid">


<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">Project Developer</a></li>

                    <li class="breadcrumb-item active">View</li>
                </ol>
            </div>

            <h4 class="page-title">Developer Information</h4>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-xl-4 col-lg-5">
        <div class="card text-center">
            <div class="card-body">
                <img src="assets/images/users/polash.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                <h4 class="mb-0 mt-2">Kamruzzaman Polash</h4>
                <p class="text-muted font-14">Software Engineer | Web Dveloper</p>


                <div class="text-start mt-3">
            

                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">(+880)
                            1791 296967 </span></p>

                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 ">kzaman3055@gmail.com</span></p>

                    <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">Dhaka</span></p>
                </div>

                <ul class="social-list list-inline mt-3 mb-0">
               
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/kzaman3055/" class="social-list-item border-info text-info"><i class="mdi mdi-linkedin
                            "></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/kzaman3055" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://kzaman3055.github.io" class="social-list-item border-dark text-dark"><i class="mdi mdi-web"></i></a>
                    </li>
                  
                </ul>
            </div> <!-- end card-body -->
        </div> <!-- end card -->


    </div> <!-- end col-->



    <div class="col-xl-4 col-lg-5">
        <div class="card text-center">
            <div class="card-body">
                <img src="assets/images/users/rony.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                <h4 class="mb-0 mt-2">Rifat Ahmed Rony</h4>
                <p class="text-muted font-14">Professional Fuckboy</p>

         

                <div class="text-start mt-3">
              

                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">(+880) 1628 979644
                    </span></p>

                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 ">rifatrony018@gmail.com</span></p>

                    <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">Dhaka</span></p>
                </div>

                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="https://web.facebook.com/rifatahmed.rony.12" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/rifatrony/" class="social-list-item border-info text-info"><i class="mdi mdi-linkedin
                            "></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/Rifatrony" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                    </li>
                
                </ul>
            </div> <!-- end card-body -->
        </div> <!-- end card -->


    </div> <!-- end col-->
</div>














</div>



@endsection