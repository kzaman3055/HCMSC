<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('backend/css/login.css') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>


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

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="email" id="email" name="email" placeholder="Email or Phone" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
