@extends('base')

@section('title')
Register - Elegance Cut
@endsection

@section('content')
	
	 <!-- Empty Block (use .abs-filler to fill page)
    ================================================== -->
    <div class="empty-block abs-filler">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="container">
            <!-- Form Panel -->
            <div class="form-panel width-40pc width-100pc-xs hcenter">
              <header>Sign up</header>
              <fieldset>
              <form>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="email" class="form-control" placeholder="Full Names">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="email" class="form-control" placeholder="Email Address">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="password" class="form-control" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="checkbox-inline"><input type="checkbox" value="">I agree to the <a class="href">Terms</a> of Use</label>
                </div>
                {{csrf_field()}}
                <button class="btn btn-default btn-lg btn-block">sign up</button>
              </form>
              </fieldset>
            </div>
            <!-- /Form Panel -->
            <div class="align-center">Already have an Account? <a href="#">Sign In</a></div>
            <br>
            <div class="align-center"><a href="{{route('home')}}" class="btn btn-primary">Back to home</a></div>

          </div>
          <!-- /Container -->

        </div>
        <!-- /Vcenter this -->
      </div>
      <!-- /Vcenter -->
    </div>
    <!-- /Empty Block
    ================================================== -->

@endsection   