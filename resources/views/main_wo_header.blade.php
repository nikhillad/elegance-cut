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
          
            <!-- Collapse -->
            <div class="collapse navbar-collapse navbar-absolute">
            
              <!-- Navbar Center -->
              <ul class="nav navbar-nav navbar-center line-top line-pcolor case-c">
                <li class="active"><a href="{{route('home')}}">home</a></li>
                <li class="dropdown dropdown-mega"><a href="#" class="dropdown-toggle" data-toggle="dropdown">women<i class="fa fa-angle-down toggler"></i></a>
                  <!-- Mega Menu -->
                  <div class="mega-menu dropdown-menu">
                    <!-- Row -->
                    <div class="row">
                    
                      <!-- col -->
                      <div class="col-md-3">
                        <img class="featured-img hidden-xs hidden-sm" src="images/menu-pic.jpg" alt="">
                      </div>
                      <!-- /col -->
                      
                      <!-- col -->
                      <div class="col-md-3">
                        <!-- <h5>shop pages</h5> -->
                        <ul class="links">
                          <li><a href="category.html">TOPS, TEES</a></li>
                          <li><a href="category2.html">CARDIGAN</a></li>
                          <li><a href="product.html">V-NECK SWEATER</a></li>
                          
                        </ul>
                      </div>
                      <!-- /col -->
                      
                      <!-- col -->
                      <div class="col-md-3">
                        <!-- <h5>common pages</h5> -->
                        <ul class="links">
                          <li><a href="cart.html">TURTLE NECK SWEATER</a></li>
                          <li><a href="checkout.html">SHRUGS</a></li>
                          <li><a href="error-generic.html">TANK TOPS</a></li>
                        </ul>
                      </div>
                      <!-- /col -->
                      
                      <!-- col -->
                      <div class="col-md-3">
                        <!-- <h5>other pages</h5> -->
                        <ul class="links">
                          <li><a href="contact.html">YOGA WEAR</a></li>
                        </ul>
                      </div>
                      <!-- /col -->
                    </div>
                    <!-- /Row -->
                  </div>
                  <!-- /Mega Menu -->
                </li>
                <li class="dropdown dropdown-mega"><a href="#" class="dropdown-toggle" data-toggle="dropdown">men<i class="fa fa-angle-down toggler"></i></a>
                  <!-- Mega Menu -->
                  <div class="mega-menu dropdown-menu">
                    <!-- Row -->
                    <div class="row">
                    
                      <!-- col -->
                      <div class="col-md-3">
                        <img class="featured-img hidden-xs hidden-sm" src="images/menu-pic-men.jpg" alt="">
                      </div>
                      <!-- /col -->
                      
                      <!-- col -->
                      <div class="col-md-3">
                        <!-- <h5>shop pages</h5> -->
                        <ul class="links">
                          <li><a href="category.html">ROUND NECK T-SHIRT</a></li>
                          <li><a href="category2.html">V-NECK T-SHIRT</a></li>
                          <li><a href="product.html">SLEEVELESS T-SHIRT</a></li>
                          
                        </ul>
                      </div>
                      <!-- /col -->
                      
                      <!-- col -->
                      <div class="col-md-3">
                        <!-- <h5>common pages</h5> -->
                        <ul class="links">
                          <li><a href="cart.html">STINGER</a></li>
                          <li><a href="checkout.html">CARDIGAN</a></li>
                          <li><a href="error-generic.html">V-NECK SWEATER</a></li>
                        </ul>
                      </div>
                      <!-- /col -->
                      
                      <!-- col -->
                      <div class="col-md-3">
                        <!-- <h5>other pages</h5> -->
                        <ul class="links">
                          <li><a href="contact.html">TURTLE NECK SWEATER</a></li>
                          <li><a href="contact.html">HIGH NECK SWEATER</a></li>
                        </ul>
                      </div>
                      <!-- /col -->
                    </div>
                    <!-- /Row -->
                  </div>
                  <!-- /Mega Menu -->
                </li>
               
                
              </ul>
              <!-- /Navbar Center -->
              
            </div>
            <!-- /Collapse -->
            
            <!-- Dont Collapse -->
            <div class="navbar-dont-collapse">

              <!-- Navbar btn-group -->
              <div class="navbar-btn-group btn-group navbar-right no-margin-r-xs">
              
               
                <!-- Btn Wrapper -->
                <div class="btn-wrapper dropdown">
                
                <!--   <a aria-expanded="false" class="btn btn-outline"><b class="count count-scolor count-round">2</b><i class="fa fa-shopping-cart" style="font-size:28px"></i> My Cart</a> -->
                  <a href="{{route('cart')}}">
                  <button class="btn blue-button"><b class="count count-scolor count-round">2</b><i class="fa fa-shopping-cart" style="font-size:23px"></i><span class="cart-button-title hidden-xs">My Cart</span></button>
                  </a>


                </div>
                <!-- /Btn Wrapper -->

              </div>
              <!-- /Navbar btn-group -->
              
              <!-- Navbar Left -->
             
            </div>
            <!-- /Dont Collapse -->

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
              @if (isset($_SESSION['elegance_cut_user']['obj']))
                <li><a href="{{route('logout')}}">Logout</a></li>
              @else
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Sign Up</a></li>
              @endif    
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
