<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    
    <link rel="stylesheet" href="{{asset('css')}}/admin.css">
    <link rel="stylesheet" href="{{asset('css/Table')}}/buttons.dataTables.min.css">
    <link rel="icon" href="{{asset('img')}}/MainLogo.png">
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
    />
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <title>@yield('title')</title>
</head>
<body>
  <div class="parentWrapper">
  
      <div class="sideNavbar">
        <div class="container">
          <div class="BrandHeader">
            <h3>Gericht</h3>
            <img src="{{asset('img')}}/MainLogo.png" alt="">
          </div>
        </div>
  
        <div class="contentSide">
          <div class="container">
            
            <ul class="sideNav-link <?php echo($Status == "Dasbord") ? 'activeBG' : '' ?>">
              <li>
                <a class="nav-link <?php echo($Status == "Dasbord") ? 'activeColor' : '' ?>" href="/dasbord">
                  <i class="material-icons <?php echo($CekIcon == "dasbord") ? '' : 'dasbordIcon' ?> ">dashboard</i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
  
            <ul class="sideNav-link <?php echo($Status == "Profile") ? 'activeBG' : '' ?> mt-2">
              <li>
                <a class="nav-link <?php echo($Status == "Profile") ? 'activeColor' : '' ?>" href="/profileAdmin">
                  <i class="material-icons <?php echo($CekIcon == "profile") ? '' : 'profileIcon' ?> ">person</i>
                  <p>Profile</p>
                </a>
              </li>
            </ul>
            
            <ul class="sideNav-link <?php echo($Status == "Total Order") ? 'activeBG' : '' ?> mt-2">
              <li>
                <a class="nav-link <?php echo($Status == "Total Order") ? 'activeColor' : '' ?>" href="/totalOrder">
                  <i class="material-icons <?php echo($CekIcon == "Total_Order") ? '' : 'totalOrderIcon' ?>">content_paste</i>
                  <p>Total order</p>
                </a>
              </li>
            </ul>
            
            <ul class="sideNav-link <?php echo($Status == "Total User") ? 'activeBG' : '' ?> mt-2">
              <li>
                <a class="nav-link <?php echo($Status == "Total User") ? 'activeColor' : '' ?>" href="/totalUser">
                  <i class="material-icons <?php echo($CekIcon == "Total_User") ? '' : 'totalUserIcon' ?>">library_books</i>
                  <p>Total User</p>
                </a>
              </li>
            </ul>

            <ul class="sideNav-link <?php echo($Status == "Total Menu") ? 'activeBG' : '' ?> mt-2">
              <li>
                <a class="nav-link <?php echo($Status == "Total Menu") ? 'activeColor' : '' ?>" href="/totalMenu">
                  <i class="material-icons <?php echo($CekIcon == "Total_Menu") ? '' : 'totalUserIcon' ?>">library_books</i>
                  <p>Total Menu</p>
                </a>
              </li>
            </ul>
           
            <ul class="sideNav-link <?php echo($Status == "Order Failed") ? 'activeBG' : '' ?> mt-2">
              <li>
                <a class="nav-link <?php echo($Status == "Order Failed") ? 'activeColor' : '' ?>" href="/orderFailed">
                  <i class="material-icons <?php echo($CekIcon == "Order_Failed") ? '' : 'failIcon' ?>">donut_small</i>
                  <p>Order Failed</p>
                </a>
              </li>
            </ul>
            
            <ul class="sideNav-link <?php echo($Status == "Order Success") ? 'activeBG' : '' ?> mt-2">
              <li>
                <a class="nav-link <?php echo($Status == "Order Success") ? 'activeColor' : '' ?>" href="/orderSuccess">
                  <i class="material-icons <?php echo($CekIcon == "Order_Success") ? '' : 'trueIcon' ?>">donut_small</i>
                  <p>Order Success</p>
                </a>
              </li>
            </ul>
            
  
          </div>
        </div>
      </div>
    
      <div class="container">
    
          <div class="navRight d-flex justify-content-between">
            <div class="barClick">
              <i class="material-icons barIcon">menu</i>
            </div>
            <div class="profilAdmin d-flex">
              <div class="leftProfile d-flex align-items-center">
                <i class="material-icons notifIcon">notifications</i>
                <i class="material-icons copyIcon">content_copy</i>
              </div>
              <div class="MoreProfile">
                <div class="clickValueProfile d-flex">
                  <img src="{{asset('img')}}/{{$Gambar}}" class="rounded-circle clickBtnProfile" alt="">
                  <p class="clickBtnProfile">{{$Name}}</p>
                </div>

                <div class="slideDown-Profile">
                  <p class="text-dark" style="font-size: 12px;">WELCOME!</p>
                  <div class="contentSlide-Profile mt-3">
                      <a href="#" class="d-flex">
                        <i class="material-icons noteIcon">tune</i>
                        <p>Options</p>
                      </a>
                      <a href="#" class="d-flex">
                        <i class="material-icons noteIcon">event_note</i>
                        <p>Activity</p>
                      </a>
                      <div class="lineSlide my-2"></div>
                      <a href="logout" class="d-flex">
                        <i class="material-icons noteIcon">directions_run</i>
                        <p>Logout</p>
                      </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @yield('content') 

          <div class="FooterAdmin d-flex align-items-center justify-content-between mt-5">
              <div class="leftFooter d-flex">
                <a class="nav-link">About Us</a>
                <a  class="nav-link">Licenses</a>
              </div>
              <div class="rightFooter">Copyright &copy;
                <script>
                document.write(new Date().getFullYear())
              </script> Gericht. All rights reserved.
              </div>
          </div>
          
      </div>
      
      <div class="bgBlue-{{$CekIcon}}"></div>

      </div>

    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="{{asset('js/Table')}}/jquery.dataTables.min.js"></script>
        <script src="{{asset('js/Table')}}/dataTables.bootstrap4.min.js"></script>
        <script src="{{asset('js/Table')}}/dataTables.responsive.min.js"></script>
        <script src="{{asset('js/Table')}}/responsive.bootstrap4.min.js"></script>
        <script src="{{asset('js/Table')}}/dataTables.buttons.min.js"></script>
        <script src="{{asset('js/Table')}}/jszip.min.js"></script>
        <script src="{{asset('js/Table')}}/pdfmake.min.js"></script>
        <script src="{{asset('js/Table')}}/vfs_fonts.js"></script>
        <script src="{{asset('js/Table')}}/buttons.html5.min.js"></script>
        <script src="{{asset('js/Table')}}/buttons.print.min.js"></script>

        <script src="{{asset('js')}}/sweetalert2.all.min.js"></script>
        <script src="{{asset('js')}}/apexcharts.min.js"></script>    
        <script src="{{asset('js')}}/navbarAdmin.js"></script>
        {{-- <script src="{{asset('js')}}/jspdf.umd.min.js"></script>
        <script src="{{asset('js')}}/html2pdf.bundle.min.js"></script> --}}

        <script src="{{asset('js')}}{{$JS}}"></script>    
        
</body>
</html>
