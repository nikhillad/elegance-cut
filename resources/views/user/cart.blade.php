@extends('main_wo_header_nav')

@section('title')
Elegance Cut
@endsection

@section('content')    
      
      <!-- Content Block
      ============================================-->
      <section class="content-block default-bg">
      
        <!-- Container -->
        <div class="container cont-pad-t-sm">
          
          <!-- generic header title -->
          <div class="col-md-12 generic-page-header-left">
            <h4>Shopping Cart</h4>
          </div>
          <div class="clearfix"></div>

          <!-- Cart -->
          <div class="cart">
          
            <!-- Cart Contents -->
            <table class="cart-contents">
              <thead>
                <tr>
                  <th class="hidden-xs">Image</th>
                  <th>Description</th>
                  <th>Qty</th>
                  <th class="hidden-xs">Price</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="image hidden-xs"><img src="images/products/product1.jpg" alt="product"/></td>
                  <td class="details">
                    <div class="clearfix">
                      <div class="pull-left no-float-xs">
                        <a href="#" class="title">Some Product Title</a>
                        <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star disabled"></i>
                          <i class="fa fa-star disabled"></i>
                        </div>
                        <span>Code: GK0904</span>
                      </div>
                      <div class="action pull-right no-float-xs">
                        <div class="clearfix">
                          <button class="edit"><i class="fa fa-pencil"></i></button>
                          <button class="refresh"><i class="fa fa-refresh"></i></button>
                          <button class="delete"><i class="fa fa-trash-o"></i></button> 
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="qty">
                      <input type="text" value="1" name="">
                  </td>
                  <td class="unit-price hidden-xs"><span class="currency">&#36;</span>1500.00</td>
                  <td class="total-price"><span class="currency">&#36;</span>1500.00</td>
                </tr>
                
                <tr>
                  <td class="image hidden-xs"><img src="images/products/product2.jpg" alt="product"/></td>
                  <td class="details">
                    <div class="clearfix">
                      <div class="pull-left no-float-xs">
                        <a href="#" class="title">Some Product Title</a>
                        <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star disabled"></i>
                          <i class="fa fa-star disabled"></i>
                        </div>
                        <span>Code: GK0904</span>
                      </div>
                      <div class="action pull-right no-float-xs">
                        <div class="clearfix">
                          <button class="edit"><i class="fa fa-pencil"></i></button>
                          <button class="refresh"><i class="fa fa-refresh"></i></button>
                          <button class="delete"><i class="fa fa-trash-o"></i></button> 
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="qty">
                      <input type="text" value="1" name="">
                  </td>
                  <td class="unit-price hidden-xs"><span class="currency">&#36;</span>1500.00</td>
                  <td class="total-price"><span class="currency">&#36;</span>1500.00</td>
                </tr>

                <tr>
                  <td class="image hidden-xs"><img src="images/products/product3.jpg" alt="product"/></td>
                  <td class="details">
                    <div class="clearfix">
                      <div class="pull-left no-float-xs">
                        <a href="#" class="title">Some Product Title</a>
                        <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star disabled"></i>
                          <i class="fa fa-star disabled"></i>
                        </div>
                        <span>Code: GK0904</span>
                      </div>
                      <div class="action pull-right no-float-xs">
                        <div class="clearfix">
                          <button class="edit"><i class="fa fa-pencil"></i></button>
                          <button class="refresh"><i class="fa fa-refresh"></i></button>
                          <button class="delete"><i class="fa fa-trash-o"></i></button> 
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="qty">
                      <input type="text" value="1" name="">
                  </td>
                  <td class="unit-price hidden-xs"><span class="currency">&#36;</span>1500.00</td>
                  <td class="total-price"><span class="currency">&#36;</span>1500.00</td>
                </tr>
              </tbody>
          
            </table>
            <!-- /Cart Contents -->
            
            <!-- Cart Summary -->
            <table class="cart-summary">
              <tr>
                <td class="terms">  
                  <h5><i class="fa fa-info-circle"></i> our return policy</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
               </td>
                <td class="totals"> 
                  <table class="cart-totals">
                    <tr>
                      <td>Sub Total</td>
                      <td class="price">&#36; 4500.00</td>
                    </tr>
                    <tr>
                      <td>Shipping</td>
                      <td class="price">&#36; 500.00</td>
                    </tr>
                    <tr>
                      <td>VAT</td>
                      <td class="price">&#36; 250.00</td>
                    </tr>
                    <tr>
                      <td class="cart-total">total</td>
                      <td class="cart-total price">&#36; 5250.00</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>  
            <!-- /Cart Summary -->

          </div>
          <!-- /Cart -->
      
          <!-- Cart Buttons -->
          <div class="cart-buttons clearfix"> 
            <a class="btn btn-base checkout" href="checkout.html"><i class="icon-left fa fa-shopping-cart"></i>checkout</a>
            <a class="btn btn-primary checkout" href="{{route('home')}}"><i class="icon-left fa fa-arrow-left"></i>continue shopping</a>
          </div>
          <!-- /Cart Buttons -->
          
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