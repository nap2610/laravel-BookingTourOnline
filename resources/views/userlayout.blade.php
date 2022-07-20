<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="@yield('linkcss')">
    <link rel="stylesheet" href="{{asset('css/user/header.css')}}">
    <script src="https://kit.fontawesome.com/0426dedeb4.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

        <div class="container-fluid">
          <h3><b style="color: red;">Viet</b><span>Tour</span></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{url('user/home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('user/news')}}">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('user/tour')}}">Tour</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('user/about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('user/contact')}}">Contact</a>
              </li>
              <li class="nav-item">

                    @if (session('userName'))
                        <a class="nav-link" href="{{url('user/profile')}}"><small>{{session()->get('userName')}}</small></a> <a class="nav-link" href="logout"><h6>logout</h6></a>
                    @else
                    <a class="nav-link" href="sign"><i class="fa-solid fa-user">Sign in</a>
                    @endif
                </i>
              </li>

            </ul>
          </div>
    </nav>

      @yield('content')

      <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Address</h4>
                                <span>590 Cach Mang Thang 8, District 3, Ho Chi Minh city.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Contact</h4>
                                <span>+84 123456789</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Email</h4>
                                <span>info@viettour.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <h2><b style="color: red;">Viet</b><span>Tour</span></h2>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{url('user/home')}}">Home</a></li>
                                    <li><a href="{{url('user/news')}}">News</a></li>
                                    <li><a href="{{url('user/tour')}}">Tours</a></li>
                                    <li><a href="{{url('user/about')}}">About</a></li>
                                    <li><a href="{{url('user/contact')}}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text text-center">
                    <p>Copyright &copy;VietTour 2022.</p>
                </div>
            </div>
        </div>
      </footer>

    <script src="@yield('linkjs')"></script>
    @yield('page-script')
</body>
</html>
