<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project
  <link href="{{asset('demo/demo.css" rel="stylesheet')}}" /> -->
  <style type="text/css">
    .card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
    }
    .card-img-top {
    display: block;
    width: 100%;
    height: auto;
    }
    .card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
    }
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
      <div class="logo">
        <a href="{{url('home')}}" class="simple-text logo-normal">
          <img src="{{asset('uploads/image/logo.png')}}">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('superadmin')}}">
              <i class="material-icons">dashboard</i>
              <p>Accommodation</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('billing')}}">
              <i class="material-icons">content_paste</i>
              <p>Billing</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('rate')}}">
              <i class="material-icons">star</i>
              <p>Rating</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Accommodation</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          @foreach($types as $type)
            <div class="col-md-4">
              <div class="card card-inverse card-info">
                <img class="card-img-top" src="{{$type['']}}">
                  <div class="card-block">
                    <h4 class="card-title mt-3">{{$type['name']}}</h4>
                    <div class="meta card-text">
                      <a>Description</a>
                    </div>
                    <div class="card-text">
                      {{$type['description']}} 
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-info float-right btn-sm"><i class="material-icons">edit</i> Edit</button>
                  </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="col-md-4">
              <div class="card card-inverse card-info">
                <img class="card-img-top" src="{{asset('uploads/image/logo.png')}}">
                  <div class="card-block">
                    <h4 class="card-title mt-3">Bungalow</h4>
                    <div class="meta card-text">
                      <a>Description</a>
                    </div>
                    <div class="card-text">
                      lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem 
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-info float-right btn-sm"><i class="material-icons">edit</i> Edit</button>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-inverse card-info">
                <img class="card-img-top" src="{{asset('uploads/image/logo.png')}}">
                  <div class="card-block">
                    <h4 class="card-title mt-3">Bungalow</h4>
                    <div class="meta card-text">
                      <a>Description</a>
                    </div>
                    <div class="card-text">
                      lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem 
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-info float-right btn-sm"><i class="material-icons">edit</i> Edit</button>
                  </div>
              </div>
            </div>
 -->
          
      <footer class="footer">
        <div class="container-fluid">
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/material-dashboard.min.js?v=2.1.0')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>