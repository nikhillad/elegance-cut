@extends('main')

@section('title')
Elegance Cut
@endsection

@section('content')    
      <!-- Intro Block
      ============================================ -->
      <div class="intro-block mgb-20">
      
        <!-- Container -->
        <div class="container">

          <!-- Slider Wrapper -->
          <div class="intro-slider">
          
            <!-- BxSlider -->
            <div class="bxslider" data-call="bxslider" data-options="{pager:false, mode:'fade'}">
            
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/slides/slide1.jpg" alt=""/><!-- slider image + background -->
                <!-- Text -->
                <div class="text">
                  <div class="vcenter">
                    <div class="vcenter-this text-block">
                      <h5 class="bx-layer" data-anim="bounceInLeft" data-dur="1000" data-delay="700">from 5th March - 26 March</h5>
                      <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100">fresh from the runway</h1><br/>
                      <p class="bx-layer" data-anim="bounceInRight" data-dur="1000" data-delay="500">Helena is a freelance fashion house specialisings in print designs and fabrics.</p>
                      <a class="btn btn-base bx-layer" data-anim="bounceInUp" data-dur="1000" data-delay="1000">shop now</a>
                    </div>
                  </div>
                </div>
                <!-- /Text -->
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/slides/slide2.jpg" alt=""/><!-- slider image + background -->
                <!-- Text -->
                <div class="text">
                  <div class="vcenter">
                    <div class="vcenter-this text-block">
                      <h5 class="bx-layer" data-anim="bounceInLeft" data-dur="1000" data-delay="700">from 5th March - 26 March</h5>
                      <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100">designer clothes only</h1><br/>
                      <p class="bx-layer" data-anim="bounceInRight" data-dur="1000" data-delay="500">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur veli..</p>
                      <a class="btn btn-white bx-layer" data-anim="bounceInUp" data-dur="1000" data-delay="1000">shop now</a>
                    </div>
                  </div>
                </div>
                <!-- /Text -->
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/slides/slide3.jpg" alt=""/><!-- slider image + background -->
                <!-- Text -->
                <div class="text">
                  <div class="vcenter">
                    <div class="vcenter-this text-block">
                      <h5 class="bx-layer" data-anim="bounceInLeft" data-dur="1000" data-delay="700">from 5th March - 26 March</h5>
                      <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100">hot summer collection</h1><br/>
                      <p class="bx-layer" data-anim="bounceInRight" data-dur="1000" data-delay="500">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur veli..</p>
                      <a class="btn btn-primary bx-layer" data-anim="bounceInUp" data-dur="1000" data-delay="1000">shop now</a>
                    </div>
                  </div>
                </div>
                <!-- /Text -->
              </div>
              <!-- /Slide -->
            
            </div>
            <!-- /BxSlider -->
            
          </div>
          <!-- Slider Wrapper -->

        </div>
        <!-- /Container -->
      
      </div>
      <!-- /Intro Block
      ============================================ -->
      
      <!-- Content Block
      ============================================ -->
      <div class="content-block">
      
        <!-- Container -->
        <div class="container no-pad-t simple-container">

          <!-- Product Tabs -->
          <div class="product-tabs">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-line-bottom line-pcolor nav-tabs-center case-u" role="tablist">
              <li class="active"><a href="#tab-latest" data-toggle="tab">latest</a></li>
              <li><a href="#tab-featured" data-toggle="tab">featured</a></li>
              <li><a href="#tab-trending" data-toggle="tab">trending</a></li>
            </ul>
            <!-- /Nav Tabs -->

            <!-- Tab panes -->
            <div class="tab-content tab-no-borders">
            
              <!-- Tab Latest -->
              <div class="tab-pane active" id="tab-latest">
              
                <!-- Row -->
                <div class="row">
                
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product1.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-sale">sale</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Grey winter jacket</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price price-old">$2350</span><span class="price">$1500</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product2.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Black lase blouse</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$2600</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product3.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-hot">popular</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Chinese style coat</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$840</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product4.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Long striped dress</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$1820</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product5.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Srapless night dress</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$675</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product6.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-sale">sale</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Gold detailed dress</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price price-old">$1550</span><span class="price">$1220</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product7.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      
                      <span class="label label-sale">sale</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">One pice business suit</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price price-old">$3350</span><span class="price">$2050</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product8.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Premium fur jacket</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$8400</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="product.html">add to cart</a> 
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                
                </div>
                <!-- /Row -->
              
              </div>
              <!-- /Tab Latest -->
              
              <!-- Tab Featured -->
              <div class="tab-pane" id="tab-featured">
              
                <!-- Row -->
                <div class="row">
                
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product5.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Srapless night dress</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$675</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product6.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-sale">sale</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Gold detailed dress</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price price-old">$1550</span><span class="price">$1220</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product7.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      
                      <span class="label label-sale">sale</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">One pice business suit</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price price-old">$3350</span><span class="price">$2050</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product8.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Premium fur jacket</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$8400</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="product.html">add to cart</a> 
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product1.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-sale">sale</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Grey winter jacket</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price price-old">$2350</span><span class="price">$1500</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product2.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Black lase blouse</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$2600</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product3.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-hot">popular</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Chinese style coat</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$840</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product4.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Long striped dress</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$1820</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                
                </div>
                <!-- /Row -->
              
              </div>
              <!-- /Tab Featured -->
            
              <!-- Tab Trending -->
              <div class="tab-pane" id="tab-trending">
              
                <!-- Row -->
                <div class="row">
                
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product2.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                          <li><a href="images/products/product2.jpg" data-gal="prettyPhoto[gallery 2]" title="Product Name"><img src="images/products/product2.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Black lase blouse</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$2600</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product3.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                          <li><a href="images/products/product3.jpg" data-gal="prettyPhoto[gallery 3]" title="Product Name"><img src="images/products/product3.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-hot">popular</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Chinese style coat</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$840</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product4.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                          <li><a href="images/products/product4.jpg" data-gal="prettyPhoto[gallery 4]" title="Product Name"><img src="images/products/product4.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Long striped dress</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$1820</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product7.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                          <li><a href="images/products/product7.jpg" data-gal="prettyPhoto[gallery 7]" title="Product Name"><img src="images/products/product7.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      
                      <span class="label label-sale">sale</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">One pice business suit</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price price-old">$3350</span><span class="price">$2050</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product8.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                          <li><a href="images/products/product8.jpg" data-gal="prettyPhoto[gallery 8]" title="Product Name"><img src="images/products/product8.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Premium fur jacket</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$8400</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="product.html">add to cart</a> 
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product1.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-sale">sale</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Grey winter jacket</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price price-old">$2350</span><span class="price">$1500</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product5.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                          <li><a href="images/products/product5.jpg" data-gal="prettyPhoto[gallery 5]" title="Product Name"><img src="images/products/product5.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Srapless night dress</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price">$675</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="images/products/product6.jpg" alt=""></a>
                        <ul class="additional">
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                          <li><a href="images/products/product6.jpg" data-gal="prettyPhoto[gallery 6]" title="Product Name"><img src="images/products/product6.jpg" alt=""></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-sale">sale</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="product.html">Gold detailed dress</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                          <span class="price price-old">$1550</span><span class="price">$1220</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                  

                
                </div>
                <!-- /Row -->
              
              </div>
              <!-- /Tab Trending -->
            </div>
            <!-- /Tab Panes -->
            
          </div>
          <!-- /Product Tabs -->
          
        </div>
        <!-- /Container -->
        
      </div>
      <!-- /Content Block
      ============================================ -->
 
     

@endsection      