<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('authen/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('authen/img/favicon.png')}}">
  <title>
    Regiss
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('authen/css/nucleo-icons.css" rel="stylesheet')}}" />
  <link href="{{asset('authen/css/nucleo-svg.css" rel="stylesheet')}}" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('authen/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('register') }}">
        @csrf
    <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{asset('authen/img/illustrations/illustration-signup.jpg')}}'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="input-group input-group-outline my-3" data-validate= "Please enter Name">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                      </div>
                      <div class="input-group input-group-outline my-3" data-validate= "Please enter username">
                        <input class="form-control" type="username" name="username" placeholder="Username" >
                      </div>
                      <div class="input-group input-group-outline my-3" data-validate= "Please enter Phone">
                        <input class="form-control" type="phone" name="phone" placeholder="Phone" >
                      </div>
                      <div class="input-group input-group-outline my-3" data-validate= "Please enter Email">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                      </div>
                      <div class="input-group input-group-outline my-3" data-validate= "Please enter password">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                      </div>
                      <div class="input-group input-group-outline my-3" data-validate= "Please enter Confirm Password">
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                      </div>
                    <div class="text-center">
                      <button class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="{{ route('login')}}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="{{asset('authen/js/core/popper.min.js')}}"></script>
  <script src="{{asset('authen/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('authen/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('authen/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('authen/js/material-dashboard.min.js?v=3.1.0')}}"></script>
</form>
</div>
</div>
</div>
</body>

</html>
