<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | HCMSC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.ico')}}">
        
        <!-- App css -->
        <link href="{{ asset('../assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('../assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('../assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="{{ asset('../assets/images/logo.png')}}" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                    <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                                </div>
                                @if (isset(Auth::user()->email))
                                <script>
                                    window.location = "/main/successlogin";
                                </script>
                            @endif
                        
                            @if ($message = Session::get('error'))
                                <div class="error">
                                    <strong >{{ $message }}</strong>
                                </div>
                            @endif
                        
                            @if (count($errors) > 0)
                                <div >
                                    <h5>
                                        @foreach ($errors->all() as $error)
                                            <h5>{{ $error }}  </h5>
                                        @endforeach
                                    </h5>
                                </div>
                            @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="email" name="email" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 mb-3">
                                        <div class="form-check">
                                     
                                        </div>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->


                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
           2022 © HCMSC
        </footer>

        <!-- bundle -->
        <script src="{{ asset('../assets/js/vendor.min.js')}}"></script>
        <script src="{{ asset('../assets/js/app.min.js')}}"></script>
        
    </body>
</html>
