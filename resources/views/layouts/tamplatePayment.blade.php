<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css')}}/sweetalert2.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('css')}}/home.css">
    <link rel="icon" href="{{asset('img')}}/MainLogo.png">
    <title>@yield('title')</title>
  </head>
  <body>

    @yield('content')
    
    <div class="footer" style="margin-top: 100px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <img src="{{asset('img')}}/LogoGericht.png" alt="">
                <div class="info-restaurant-footer d-flex justify-content-center">
                    <h5 style="font-size: 15px;">Jakarta, Indonesia</h5>
                    <h5 style="margin: 0 10px; font-size: 15px;">|</h5>
                    <h5 style="font-size: 15px;">+62 2124 8913</h5>
                    <h5 style="margin: 0 10px; font-size: 15px;">|</h5>
                    <h5 style="font-size: 15px;">Gericht@Gericht.com</h5>
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

    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"> --}}
    <script src="{{asset('js')}}/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{asset('js')}}/sweetalert2.all.min.js"></script>
    <script src="{{asset('js')}}/apexcharts.min.js"></script>
    <script src="{{asset('js')}}{{$JS}}"></script>
</body>
</html>