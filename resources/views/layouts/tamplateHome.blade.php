<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css')}}/sweetalert2.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/aos.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/home.css">
    <link rel="icon" href="{{asset('img')}}/MainLogo.png">
    <title>@yield('title')</title>
  </head>
  <body>
    <input type="file" name="change" id="change" style="display: none;">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    <div class="modal-body">
        <form action="/updateFoto" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('img')}}/{{$Gambar}}" style="width: 200px; height: 200px;" alt="">
                    </div>
                    <div class="col-md-6">
                        <input type="file" name="change" id="change">
                        <div class="mt-2">
                            @error('change')
                                <div class="wrong alert-danger" style="border-radius: 5px; padding: 10px;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
        </div>
        </form>
      </div>
    </div>
  </div>

    <nav class="Header d-flex flex-column pt-5">
        <h4 class="text-white LogoTitle fw-bold text-center">Gericht</h4>
        <div class="nav-links">
            <ul class="d-flex justify-content-center">
                <li>
                    <a href="/" style="color: {{Request()->is('/') ? '#fb6340' : ''}};" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="/about" style="color: {{Request()->is('about') ? '#fb6340' : ''}};" class="nav-link">About</a>
                </li>
                <li>
                    <a href="/privatedining" style="color: {{Request()->is('privatedining') ? '#fb6340' : ''}};" class="nav-link">Private Dining</a>
                </li>
                <li>
                    <a href="/menu" style="color: {{Request()->is('menu') ? '#fb6340' : ''}}" class="nav-link">Menu</a>
                </li>
                <li>
                    @if ($Name != 'Guest')
                    <a style="width: 100%; height: 100%; position: relative;" href="/order" class="nav-link">
                        <span style="color: {{Request()->is('order') ? '#fb6340' : ''}};">Order</span>
                        <div class="infoAllOrder d-flex justify-content-center align-items-center rounded-circle">
                            <div class="AmountOrderValue">0</div>
                        </div>
                    </a>
                    @endif
                </li>
            </ul>
        </div>

        <div class="profile-image position-absolute" style="right: 50px; top: 40px;">
            <div class="position-relative d-flex">
                <img class="rounded-circle" style="width: 50px; height: 50px; margin-right: 10px;" src="{{asset('img')}}/{{$Gambar}}" alt="">
                <div class="dropdown">
                    <h5 class="text-white dropdown-toggle idUser" style="line-height: 50px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">@if (($Name)){{$Name}}@else Profile @endif</h5>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <form action="/home" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if ($Email != "Guest@gmail.com")
                            <label class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Change Picture</label>     
                            <a href="/withoutPicture" class="dropdown-item">Without Picture</a>
                            <a href="/subscribe" style="background: {{Request()->is('subscribe') ? '#fb6340' : ''}}; color: {{Request()->is('subscribe') ? '#fff' : ''}}" class="dropdown-item">Subscribe</a>
                            <label class="dropdown-item">Status : {{$StatusUser}}</label>     
                        @endif
                        
                        <a href="signIn" class="nav-link">Sign In</a>
                        <a href="signUp" class="nav-link">Sign Up</a>
                      </form>
                      <li><hr class="dropdown-divider"></li>
                      <a href="logout" class="nav-link">Logout</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>

    @yield('content')
    
    <div class="footer" style="margin-top: 100px;">
        <div class="container">
            <div class="row d-flex justify-content-center align=items-center flex-column">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('img')}}/LogoGericht.png" data-aos="fade-up">
                </div>
                <div class="info-restaurant-footer d-flex justify-content-center">
                    <h5 style="font-size: 15px;" data-aos="fade-up" data-aos-delay="0">Jakarta, Indonesia</h5>
                    <h5 style="margin: 0 10px; font-size: 15px;" data-aos="fade-up" data-aos-delay="200">|</h5>
                    <h5 style="font-size: 15px;" data-aos="fade-up" data-aos-delay="300">+62 2124 8913</h5>
                    <h5 style="margin: 0 10px; font-size: 15px;" data-aos="fade-up" data-aos-delay="400">|</h5>
                    <h5 style="font-size: 15px;" data-aos="fade-up" data-aos-delay="500">Gericht@Gericht.com</h5>
                </div>
                <div class="wrapper-footer d-flex justify-content-center mt-3">
                    <div class="wrapper-icon">
                        <div class="icon"><i class="fab fa-facebook-f"></i></div>
                        <label>Facebook</label>
                    </div>
                    <div class="wrapper-icon">
                        <div class="icon"><i class="fab fa-twitter"></i></div>
                        <label>Twitter</label>
                    </div>
                    <div class="wrapper-icon">
                        <div class="icon"><i class="fab fa-instagram"></i></div>
                        <label>Instagram</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Btn Slide Up --}}

    <a href="#." class="LinkCircleUp">
        <div class="WrapperCircleUp">
            <i class="fas fa-angle-up"></i>
        </div>
    </a>

    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"> --}}
    <script src="{{asset('js')}}/sweetalert2.all.min.js"></script>
    <script src="{{asset('js')}}/jquery.min.js"></script>
    <script src="{{asset('js')}}/apexcharts.min.js"></script>
    <script src="{{asset('js')}}/TweenMax.min.js"></script>
    <script src="{{asset('js')}}/aos.min.js"></script>
    <script src="{{asset('js')}}/owl.carousel.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{asset('js')}}/navbarHome.js"></script>
    <script src="{{asset('js')}}{{$JS}}"></script>
  </body>
</html>