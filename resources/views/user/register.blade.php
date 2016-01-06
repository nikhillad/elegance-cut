@extends('base')

@section('title')
Register - Elegance Cut
@endsection

@section('content')
	
	 <!-- Empty Block (use .abs-filler to fill page)
    ================================================== -->
    <div style="margin-top:15px;" class="empty-block abs-filler">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="register-container">
          <div class="col-xs-12 col-md-8">
            <!-- Form Panel -->
            <div style="padding-right:0px;padding-left:0px" class="form-panel col-xs-12 col-md-12 hcenter">
              <header>Sign up</header>
              <fieldset>
              <div class="message-div"></div>
              <form method="post" action="{{route('register')}}">
                <div class="col-md-6 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input name="fname" type="text" class="form-control" placeholder="First Name" value="{{(isset($form['fname']) && $form['fname'] != '') ? $form['fname'] : ''}}">
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input name="lname" type="text" class="form-control" placeholder="Last Name" value="{{(isset($form['lname']) && $form['lname'] != '') ? $form['lname'] : ''}}">
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    <input name="email" type="email" class="form-control" placeholder="Email Address" value="{{(isset($form['email']) && $form['email'] != '') ? $form['email'] : ''}}">
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input name="password" type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input name="cnf_password" type="password" class="form-control" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                    <input name="mobile" type="text" class="form-control" placeholder="Mobile number" value="{{(isset($form['mobile']) && $form['mobile'] != '') ? $form['mobile'] : ''}}">
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <input name="zip" type="text" class="form-control" placeholder="Zip code" value="{{(isset($form['zip']) && $form['zip'] != '') ? $form['zip'] : ''}}">
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <textarea name="address" type="text" class="form-control" placeholder="Address">{{(isset($form['address']) && $form['address'] != '') ? $form['address'] : ''}}</textarea>
                  </div>
                </div>
                 <div class="col-md-6 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <input name="city" type="text" class="form-control" placeholder="City" value="{{(isset($form['city']) && $form['city'] != '') ? $form['city'] : ''}}">
                  </div>
                </div>
                 <div class="col-md-6 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <select name="state" class="form-control">
                      <option value="select">Select state</option>
                      @foreach ($arrStates as $state)
                        @if ($form['state'] == $state['code'])
                          <option value="{{$state['code']}}" selected>{{$state['state']}}</option>
                         @else 
                          <option value="{{$state['code']}}">{{$state['state']}}</option>
                         @endif 
                      @endforeach
                    </select>
                    <!-- <input name="state" type="text" class="form-control" placeholder="State"> -->
                  </div>
                </div>
                 <div class="col-md-6 form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <select name="country" class="form-control">
                      <option value="select">Select country</option>
                      @foreach ($arrCountries as $country)
                        @if ($form['country'] == $country['code'] || ($form['country'] == '' && $country['code'] == 'IN'))
                          <option value="{{$country['code']}}" selected>{{$country['country']}}</option>
                        @else
                          <option value="{{$country['code']}}">{{$country['country']}}</option>
                        @endif
                      @endforeach
                    </select>
                    <!-- <input name="country" type="text" class="form-control" placeholder="Country"> -->
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <label class="checkbox-inline"><input name="tnc" type="checkbox" value="selected" {{($form['tnc'] == 'selected') ? 'checked' : ''}}>I agree to the <a class="href">Terms & Conditions</a></label>
                </div>
                {{csrf_field()}}
                <button class="btn btn-default btn-lg btn-block">sign up</button>
              </form>
              </fieldset>
            </div>
            <!-- /Form Panel -->
          </div>

          <div style="padding-top:100px" class="col-xs-12 col-md-4 hidden-xs">
            <div class="align-center">Already have an Account? <a href="{{route('login')}}">Sign In</a></div>
            <br>
            <div class="align-center"><a href="{{route('home')}}" class="btn btn-primary">Back to home</a></div>
          </div>
           <div style="margin-bottom:20px" class="col-xs-12 visible-xs">
            <div class="align-center">Already have an Account? <a href="{{route('login')}}">Sign In</a></div>
            <br>
            <div class="align-center"><a href="{{route('home')}}" class="btn btn-primary">Back to home</a></div>
          </div>
          <!-- /Container -->
          </div>
        </div>
        <!-- /Vcenter this -->
      </div>
      <!-- /Vcenter -->
    </div>
    <!-- /Empty Block
    ================================================== -->
@section('script')    
    <script type="text/javascript">
      if({{ (isset($message) && $message != '') ? 1 : 0 }})
      {
        $('.message-div').html("{!! (isset($message)) ? $message : '' !!}");
        $('.message-div').show();
      }
    </script>
@endsection  
@endsection   