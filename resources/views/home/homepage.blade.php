<!doctype html>
<html lang="en">
    @yield('head')
  <body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">cheeseteamomo@gmail.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">0823-6207-3745</span></a>


              <div class="float-right">

                <a href="https://www.instagram.com/momocheesetea.id/" class=""><span class="mr-2  icon-instagram"></span>
                  <span class="d-none d-md-inline-block">momocheesetea.id</span></a>
                <span class="mx-md-2 d-inline-block"></span>
           

              </div>

            </div>

          </div>

        </div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="/" class="text-black profil-m"><img style="height: 80px;" src="assets01/images/intro.png"></a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="/" class="nav-link navnow"><span>Beranda</span></a></li>
                  <li><a href="menu" class="nav-link"><span>Menu</span></a></li>



                  <li><a href="oulet" class="nav-link"><span>Outlet</span></a></li>

  
                  <li><a href="kemitraan" class="nav-link"><span>Kemitraan</span></a></li>
                  <li><a href="login" class="nav-link"><span>Login</span></a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

            
            
      </header>

@yield('content')
  

<footer class="footer-32892 pb-0">
  <div class="site-section">
    <div class="container">


      <div class="row">

        <div class="col-md pr-md-5 mb-4 mb-md-0">
          <h3>Hubungi Kami</h3>
          <p class="mb-4">Informasi kemitraan dapat diakses melalui tautan Kemitraan</p>
          <ul class="list-unstyled quick-info mb-4">
            <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-phone"></span> 0823-6207-3745</a></li>
            <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-envelope"></span>
              cheeseteamomo@gmail.com</a>
            <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-map"></span>
                Jl. Tuasan No.68 Sidorejo Hilir, Kec. Medan Tembung, Kota Medan, Sumatera Utara 20371</a>
            </li>
          </ul>

       
        </div>
   
        <div class="col-md-3 mb-4 mb-md-0">
          <h3>Bekerja Sama Dengan</h3>
          <div class="row gallery">
            <div class="col-6">
              <a href="#"><img src="assets01/images/gofood.jpg" alt="Image" class="img-fluid"></a>
            
            </div>
            <div class="col-6">
              <a href="#"><img src="assets01/images/GRAB2PNG.png" alt="Image" class="img-fluid"></a>
  
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="py-5 footer-menu-wrap d-md-flex align-items-center">
           
            <div class="site-logo-wrap ml-auto">
              <a href="#" class="site-logo">
            @2022 Momo Cheese Tea Inc.
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</footer>
<script src="assets01/js/jquery-3.3.1.min.js"></script>
    <script src="assets01/js/popper.min.js"></script>
    <script src="assets01/js/bootstrap.min.js"></script>
    <script src="assets01/js/jquery.sticky.js"></script>
    <script src="assets01/js/main.js"></script>
    <script src="assets01/caraousel/js/owl.carousel.min.js"></script>
    <script src="assets01/caraousel/js/main.js"></script>
@yield('footer')
  </body>


</html>