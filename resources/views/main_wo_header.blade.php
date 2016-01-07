<!DOCTYPE html>
<html lang="en">
  
  @include('head')

  <body class="preload tile-1-bg">
  
    <!-- Preloader 
    ============================================ -->
    <div class="page-preloader">
      <div class="vcenter"> <div class="vcenter-this"><img class="anim" src="{{asset('images/loader.gif')}}" alt="loading..." /></div></div>
    </div>
    <!-- /Preloader 
    ============================================ --> 
    
    <!-- Page Wrapper
    ++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="page-wrapper boxed-wrapper shadow">

      <!-- Header Block
      ============================================== -->
      <header class="header-block line-top">
        
       
        <!-- Main Header
        ............................................ -->
        
        <div class="main-header container">

          <div class="vcenter-this hidden-xs pull-left">
            <a href="{{route('home')}}">
              <img src="{{asset('images/ec_xs-100x70.png')}}" alt="Elegance Cut">
            </a>
          </div>

         <ul class="nav nav-pills top-header-menu hidden-xs">
            <li class="top-header-menu-li"><a href="{{route('orders')}}"><i style="font-size:18px" class="icon-left fa fa-map-marker"></i><span>Track Order</span></a></li>
            
            @if (isset($_SESSION['elegance_cut_user']['obj']))
            <li class="dropdown top-header-menu-li">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <strong>{!! $_SESSION['elegance_cut_user']['obj']->fname !!}</strong>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-down toggler hidden-xs"></i></a>

              <!-- Dropdown Panel -->
              <ul class="dropdown-menu">
                <li><a href="{{route('account')}}">My Account</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
              </ul>
             <!-- /Dropdown Panel -->
            </li>
             @endif 
          </ul>
        
        </div>
        <!-- /Main Header
        .............................................. -->
        
        <!-- Nav Bottom
        .............................................. -->
        <nav class="visible-xs nav-bottom hnav hnav-ruled white-bg boxed-section">
        
          <!-- Container -->
          <div class="container">
          
            <!-- Header-->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle no-border" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-navicon"></i>
              </button>
              <a class="navbar-brand visible-xs" href="#"><img src="images/ec_xs-100x70.png" alt="Elegance Cut"></a>
            </div>
            <!-- /Header-->
          </div>

        </nav>
       
        
      </header>
      <!-- /Header Block
      ============================================== -->

      @yield('content')

      <!-- Footer
      =================================================== -->
      <footer class="footer-block">
      

        <!-- Bottom -->
        <div class="footer-bottom invert-colors bcolor-bg">
        
          <!-- Container -->
          <div class="container">
          
            <span class="copy-text">&copy; 2016 Elegance Cut</span>
            <!-- hlinks -->
            <ul class="hlinks pull-right">
              <li><a href="{{route('about_us')}}">About</a></li>
              <li><a href="{{route('login')}}">Login</a></li>
              <li><a href="{{route('register')}}">Sign Up</a></li>
              <li><a href="#">Support</a></li>
            </ul>
            <!-- /hlinks -->
            
          </div>
          <!-- /Container -->
          
        </div>
        <!-- /Bottom -->
        
      </footer>
      <!-- /Footer
      =================================================== -->
      
      <!-- Promo Modal
      ============================================ -->      
      <div class="modal fade modal-promo" data-call="bs-modal" data-options="">
        <!-- Dialog -->
        <div class="modal-dialog">
        
          <!-- Promo Image (use background image to allow scaling) -->
          <div class="promo-img bg-cover" style="background:url(images/modal-promo.jpg)"></div>
          
          <!-- Text Col -->
          <div class="text-col">
            <div class="text">
              <h5>daily exclusive deals</h5>
              
              <img src="images/modal-promo-xs.jpg" alt="" class="visible-xs mgb-20" />
              <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet.</p>
              
              <!-- Modal Form -->
              <form class="form-inline modal-form">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address"/>
                </div>
                <button type="submit" class="btn btn-base">Subscribe</button>
              </form>
              <!-- /Modal Form -->
              <p class="hidden-xs" >Follow us on social media for exclusive deals.</p>
              
              <!-- hlinks -->
              <ul class="hlinks hlinks-icons hlinks-icons-round color-icons-bg color-icons-hovered">
                <li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="icon fa fa-rss"></i></a></li>
                <li><a href="#"><i class="icon fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="icon fa fa-youtube"></i></a></li>
              </ul>
              <!-- /hlinks --> 
            </div>
          </div>
          <!-- /Text Col -->

          <button type="button" class="btn-close btn btn-base" data-dismiss="modal"><i class="fa fa-close"></i></button>
        </div>
        <!-- /Dialog -->
      </div>
      <!-- /Promo Modal
      ============================================ --> 
      
    </div>
    <!-- /Page Wrapper
    ++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- Javascript
    ================================================== -->
    <script src="{{asset('js/jquery-latest.min.js')}}"></script>
    <script src="{{asset('js/uikit.js')}}"></script>
    @yield('script')
    <!-- /JavaScript
    ================================================== -->
  </body>
</html>
