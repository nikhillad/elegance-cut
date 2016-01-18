@extends('main')

@section('title')
Elegance Cut
@endsection

@section('content')    
      
      
<!-- Content Block
============================================-->
<section class="content-block default-bg">
  <!-- Container -->
  <div class="container">
    
    <!-- Row -->
    <div class="row">

       <!-- Product Row -->
          <div class="product-details">
          
            <!-- Col -->
            <div class="col-md-4 mgb-30-xs">
            
              <!-- Slider Wrapper -->
              <div class="main-slider">
                <!-- BxSlider -->
                <ul class="bxslider" data-call="bxslider" data-options="{pagerCustom:'#thumb-pager', controls:false}">
                  <li>
                    <a href="#"><img class="fillw" src="data:image/jpeg;base64,{{base64_encode(thumbnailImage(DOCUMENT_ROOT.'images/products/'.strtoupper($objItem->item_image[0]).'/'.$objItem->item_image))}}" alt="" /></a>
                  </li>
                  @foreach ($objProductImages as $product_image)
                  <li>
                    <a href="#"><img class="fillw" src="data:image/jpeg;base64,{{base64_encode(thumbnailImage(DOCUMENT_ROOT.'images/products/'.strtoupper($product_image->image[0]).'/'.$product_image->image))}}" alt="" /></a>
                  </li>
                  @endforeach
                </ul>
                <!-- /BxSlider -->
              </div>
              <!-- /Slider Wrapper -->
              
              <!-- Slider Wrapper -->
              <div  class="thumb-slider bx-controls-box">
                <!-- BxSlider -->
                <ul id="thumb-pager" class="bxslider" data-call="bxslider" data-options="{pager:false, slides:10, slideMargin:10}">
                  @foreach ($objProductImages as $product_image)
                  <li>
                    <a data-slide-index="1" href="#"><img class="fillw" src="data:image/jpeg;base64,{{base64_encode(thumbnailImage(DOCUMENT_ROOT.'images/products/'.strtoupper($product_image->image[0]).'/'.$product_image->image))}}" alt="" /></a>
                  </li>
                  @endforeach
                </ul>
                <!-- /BxSlider -->
              </div>
              <!-- /Slider Wrapper -->
              
            </div>
            <!-- /Col -->
            
            <!-- Col -->
            <div class="col-md-7">
            
              
              <h3 class="product-title" style="padding-left:10px">{{$objItem->name}}</h3>
              
              <div class="price-box" style="padding-left:10px">
                <h4 class="product-price"><i class="fa fa-inr"></i> {{$objItem->price}}</h4>
              </div>
              
              <!-- Accordion -->
              <div class="panel-group" id="accordion">
              
                <!-- Panel -->
                @if ($objItem->desc != '')
                <div class="panel panel-default">
                  <!-- Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Product Details
                    </a>
                    </h4>
                  </div>
                  <!-- /Heading -->
                  
                  <!-- Collapse -->
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                    {{$objItem->desc}}
                    </div>
                  </div>
                  <!-- /Collapse -->
                </div>
                @endif

                @if ($objItem->specs != '')
                <!-- Panel -->
                <div class="panel panel-default">
                  <!-- Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Product Specifications
                    </a>
                    </h4>
                  </div>
                  <!-- /Heading -->
                  
                  <!-- Collapse -->
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                    {{$objItem->specs}}
                    </div>
                  </div>
                  <!-- /Collapse -->
                </div>
                @endif
                
                @if ($objItem->add_info != '')
                <!-- Panel -->
                <div class="panel panel-default">
                  <!-- Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Additional Information
                    </a>
                    </h4>
                  </div>
                  <!-- /Heading -->
                  
                  <!-- Collapse -->
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                    {{$objItem->add_info}}
                    </div>
                  </div>
                  <!-- /Collapse -->
                </div>
                @endif

              </div>
              <!-- /Accordion -->

              <!-- Row -->
              <div class="row grid-20">
                <!-- Col -->
                <div class="col-md-6">
                  <!-- /Form Group -->
                  <div class="form-group">
                    <!-- Input Group -->
                    <div class="input-group">
                      <div class="input-group-addon"><i class="icon fa fa-male"></i></div>
                      <select class="form-control">
                        <option>Select size</option>
                        <option>Large</option>
                        <option>Medium</option>
                        <option>Small</option>
                      </select>
                    </div>
                    <!-- /Input Group -->
                  </div>
                </div>
                <!-- /Col -->
                
                <!-- Col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <!-- Input Group -->
                    <div class="input-group">
                      <div class="input-group-addon"><i class="icon fa fa-calculator"></i></div>
                      <select class="form-control">
                        <option>Select Quantity</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <!-- /Input Group -->
                  </div>
                  <!-- /Form Group -->

   
                </div>
                <!-- /Col -->
                
              </div>
              <!-- /Row -->
              
              <a href="cart.html" class="btn btn-default btn-bigger"><i class="icon-left ti ti-shopping-cart"></i>Buy Now</a>
            </div>
            <!-- /Col -->
            
          </div>
          <!-- /Product Row -->
      
    </div>
    <!-- /Row -->
  
  </div>
  <!-- /Container -->
</section>
<!-- /Content Block
============================================-->


@section('script')    
    <script type="text/javascript">
      if({{ (isset($message) && $message != '') ? 1 : 0 }})
      {
        $('.message-div').html('{{ (isset($message)) ? $message : ''}}');
        $('.message-div').show();
      }
    </script>
@endsection    
@endsection      