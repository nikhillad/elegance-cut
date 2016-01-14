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
            </ul>
            <!-- /Nav Tabs -->

            <!-- Tab panes -->
            <div class="tab-content tab-no-borders">
            
              <!-- Tab Latest -->
              <div class="tab-pane active" id="tab-latest">
              
                <!-- Row -->
                <div class="row">
                  
                  @foreach ($arrItemCategoryWise as $cat_id => $items)
                  <div>
                  <div class="col-xs-12 generic-page-header-left">
                    <h4 class="left-align-header-h4">{{$arrCetegory_id_name[$cat_id]}}</h4>
                  </div>

                      @foreach ($items as $item)
                      <!-- Col -->
                      <div class="col-sm-6 col-md-3">
                      
                        <!-- product -->
                        <div class="product clearfix">
                        
                          <!-- Image -->
                          <div class="image"> 
                            <a href="product.html" class="main"><img src="{{WEB_ROOT}}/images/products/{{strtoupper($item->item_image[0])}}/{{$item->item_image}}" alt=""></a>
                          </div>
                          <!-- Image -->
                          
                          <!-- <span class="label label-sale">sale</span> -->
                          
                          <!-- Details -->
                          <div class="details">
                          
                            <a class="title" href="product.html" title="{{$item->name}}">{{strlen($item->name) > 85 ? substr($item->name,0,80)."..." : $item->name}}</a>
                            
                            <!-- rating -->
                            <!-- <ul class="hlinks hlinks-rating">
                              <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                              <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                              <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                              <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                              <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                            </ul> -->
                            <!-- /rating -->
                            
                            <p class="desc">{{strtolower($item->type_name)}}</p>
                            
                            <!-- Price Box -->
                            <div class="price-box">
                             <!--  <span class="price price-old">$2350</span> -->
                             <span class="price"><i class="fa fa-inr"></i> {{$item->price}}</span>
                            </div>
                            <!-- /Price Box -->
                            
                            <!-- buttons -->
                           <!--  <div class="btn-group">
                              <a class="btn btn-outline btn-base-hover" href="cart.html">add to cart</a>  
                              <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                            </div>  -->
                            <!-- /buttons -->
                            
                          </div>
                          <!-- /Details -->
                          
                        </div>
                        <!-- /product -->
                      
                      </div>
                      @endforeach
                  <!-- /Col -->
                      <div class="button-div-center">
                        <a href="" class="btn btn-primary">More</a>
                      </div> 
                  </div>
                  @endforeach

                </div>
                <!-- /Row -->
              
              </div>
              <!-- /Tab Latest -->
              
            
              <!-- Tab Featured -->
              <div class="tab-pane" id="tab-featured">
              
                <!-- Row -->
                <div class="row">
                
                  
                
                </div>
                <!-- /Row -->
              
              </div>
              <!-- /Tab Featured -->
            


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