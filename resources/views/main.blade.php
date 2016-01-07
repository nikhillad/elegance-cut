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
         
          <!-- top header menu -->
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

          <div class="clearfix"></div>
          <!-- Header Cols -->
          <div class="header-cols"> 
          
            <!-- Brand Col -->
            <div class="brand-col hidden-xs">
              
              <!-- vcenter -->
              <div class="vcenter">
                <!-- v-centered -->               
                <div class="vcenter-this">
                  <a href="{{route('home')}}">
                    <img src="{{asset('images/logo.png')}}" alt="Elegance Cut">
                    <span class="tag-line">Be Elegant, Be Unique</span>
                  </a>
                </div>
                <!-- v-centered -->
              </div>
              <!-- vcenter -->

            </div>
            <!-- /Brand Col -->

            @if (!isset($_SESSION['elegance_cut_user']['obj']))
            <!-- Right Col -->
            <div class="right-col">
            
              <!-- vcenter -->
              <div class="vcenter">
              
                <!-- v-centered -->
                <div class="vcenter-this">

                  <!-- Nav Side -->
                  <nav class="nav-side navbar hnav hnav-sm hnav-borderless" role="navigation">
                  
                    <!-- Dont Collapse -->
                    <div class="navbar-dont-collapse no-toggle">
                    
                      <!-- Nav Right -->
                      <ul class="nav navbar-nav navbar-right case-u active-bcolor navbar-center-xs">
                        <li class="dropdown has-panel">
                          <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-left ti ti-user"></i><span class="hidden-sm">sign in</span><i class="fa fa-angle-down toggler hidden-xs"></i></a>
                          
                          <!-- Dropdown Panel -->
                          <div class="dropdown-menu dropdown-panel arrow-top dropdown-left-xs" data-keep-open="true">
                            <fieldset>
                              <form method="post" action="{{route('login')}}">
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input name="email" class="form-control" placeholder="Email" type="email">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input name="password" class="form-control" placeholder="Password" type="password">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="checkbox-inline"><input name="remember_me" value="selected" type="checkbox">Remember me </label>
                                </div>
                                {{csrf_field()}}
                                <button class="btn btn-primary btn-block">sign in</button>
                              </form>
                            </fieldset>
                          </div>
                          <!-- /Dropdown Panel -->
                          
                        </li>
                        
                        <li class="dropdown has-panel">
                          <a aria-expanded="false" href="{{route('register')}}"><i class="icon-left ti ti-pencil-alt"></i><span class="hidden-sm">sign up</span></a>
                        </li>
                      </ul>
                      <!-- /Nav Right-->

                    </div>
                    <!-- /Dont Collapse -->
                    
                  </nav>
                  <!-- /Nav Side -->
                
                </div>
                <!-- /v-centered -->
              </div>
              <!-- /vcenter -->
              
            </div>
            <!-- /Right Col -->
            @endif

            <!-- Left Col -->
            <div class="left-col">
            
              <!-- vcenter -->
              <div class="vcenter">
                
                <!-- v-centered -->               
                <div class="vcenter-this">
                  
                  <form class="header-search">
                    <div class="form-group">
                      <input class="form-control" placeholder="SEARCH" type="text">
                      <button class="btn btn-empty"><i class="fa fa-search"></i></button>
                    </div>
                  </form>

                </div>
                <!-- v-centered -->
                
              </div>
              <!-- vcenter -->
            
            </div>
            <!-- /Left Col -->
          </div>
          <!-- Header Cols -->
        
        </div>
        <!-- /Main Header
        .............................................. -->
        
        <!-- Nav Bottom
        .............................................. -->
        <nav class="nav-bottom hnav hnav-ruled white-bg boxed-section">
        
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
                <li class="dropdown dropdown-mega"><a href="#" class="dropdown-toggle" data-toggle="dropdown">WOMEN<i class="fa fa-angle-down toggler"></i></a>
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
                <li class="dropdown dropdown-mega"><a href="#" class="dropdown-toggle" data-toggle="dropdown">MEN<i class="fa fa-angle-down toggler"></i></a>
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
          <!-- /Container -->
          
        </nav>
        <!-- /Nav Bottom
        .............................................. -->
        
      </header>
      <!-- /Header Block
      ============================================== -->

      @yield('content')

      <!-- Footer
      =================================================== -->
      <footer class="footer-block">
      
        <!-- Container -->
        <div class="container cont-top clearfix simple-container">
        
          <!-- Row -->
          <div class="row">
          
            <!-- Brand -->
            <div class="col-md-3 brand-col brand-center">
              <div class="vcenter">
                <a class="vcenter-this" href="#">
                  <img src="images/logo_184x136.jpg" alt="logo"/>
                  <br>
                   <span class="tag-line">Be Elegant, Be Unique</span>
                </a>
              </div>
            </div>
            <!-- /Brand -->
            
            <!-- Links -->
            <div class="col-md-9 links-col">
            
              <!-- Row -->
              <div class="row-fluid">
              
                <!-- Col -->
                <div class="col-xs-12 col-sm-3 col-md-3">
                  <h5>CUSTOMER SERVICE</h5>
                    <ul class="vlinks">
                      <li><a href="#">Shipping & Delivery</a></li>
                      <li><a href="#">Returns & Exchange</a></li>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="{{route('orders')}}">Track Order</a></li>
                      <li><a href="#">Call Us: +91 9999999999</a></li>
                    </ul>         
                </div>
                <!-- /Col -->
                
                <!-- Col -->
                <div class="col-xs-12 col-sm-3 col-md-3">
                  <h5>ABOUT ElEGANCE CUT</h5>
                  <ul class="vlinks">
                    <li><a href="{{route('account')}}">Account</a></li>
                    <li><a href="#">Wishlist and Favourites</a></li>
                    <li><a href="{{route('orders')}}">Purchase History</a></li>
                    <li><a href="{{route('cart')}}">View Cart</a></li>
                  </ul>
                </div>
                <!-- /Col -->
                
                <!-- Col -->
                <div class="col-xs-12 col-sm-3 col-md-3">
                  <h5>POLICIES</h5>
                  <ul class="vlinks">
                    <li><a href="#">Privacy Policies</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                  </ul>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-xs-12 col-sm-3 col-md-3 newsletter">
                  <h5>payment methods</h5>
                  <ul class="grid-list cols-3 cell-pad-5">
                    <li><img src="images/cards/amazon.png" alt=""></li>
                    <li><img src="images/cards/paypal.png" alt=""></li>
                    <li><img src="images/cards/visa.png" alt=""></li>
                    <li><img src="images/cards/mastercard.png" alt=""></li>
                    <li><img src="images/cards/maestro.png" alt=""></li>
                    <li><img src="images/cards/obopay.png" alt=""></li>
                    <li><img src="images/cards/discover.png" alt=""></li>
                    <li><img src="images/cards/cirrus.png" alt=""></li>
                    <li><img src="images/cards/google.png" alt=""></li>
                  </ul>
                </div>
                <!-- /Col -->
             </div>
             <!-- /Row -->
            </div>
            <!-- /Links -->
          </div>
          <!-- /Row -->
        </div>
        <!-- /Container -->
        
        <div class="container cont-top clearfix simple-container">
          <div class="row">
              <div class="col-md-12">
                  <ul style="text-align:center" class="hlinks hlinks-icons color-icons-borders color-icons-bg color-icons-hovered">
                    <li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="icon fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="icon fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="icon fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="icon fa fa-youtube"></i></a></li>
                  </ul>
              </div>
          </div>
        </div>

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
