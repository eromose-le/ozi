@extends('layouts.reg')
@section('reg')

 <div class="app-container app-theme-white body-tabs-shadow">
  <div class="app-container">
   <div class="h-100">
    <div class="h-100 no-gutters row">
     <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
      <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
       <div class="app-logo"></div>
       <h4>
        <div>Welcome,</div>
        <span>It only takes a <span class="text-success">few seconds</span> to create your account</span>
       </h4>
       <div>
        <form action="{{ route('register') }}" method="post">
          @csrf
         <div class="form-row">

           {{-- EMAIL FORM --}}
          <div class="col-md-6">
           <div class="position-relative form-group">
            <label for="email" class=""><span class="text-danger">*</span> Email</label>
            <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
           @enderror
           </div>
          </div>

          {{-- NAME FORM --}}
          <div class="col-md-6">
           <div class="position-relative form-group">
            <label for="name" class="">Name</label>
            <input name="name" id="exampleName" placeholder="Name here..." type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
           @enderror
           </div>
          </div>
          
          {{-- USERNAME FORM --}}
          <div class="col-md-6">
           <div class="position-relative form-group">
            <label for="username" class="">Username</label>
            <input name="username" id="exampleName" placeholder="Username here..." type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
           @enderror
           </div>
          </div>

          {{-- NUMBER FORM --}}
          <div class="col-md-6">
           <div class="position-relative form-group">
            <label for="number" class="">Number</label>
            <input name="number" id="exampleName" placeholder="Mobile here +234..." type="number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') }}">
            @error('number')
                <div class="invalid-feedback">{{ $message }}</div>
           @enderror
           </div>
          </div>
          
          {{-- PASSWORD FORM --}}
          <div class="col-md-6">
           <div class="position-relative form-group">
            <label for="password" class=""><span class="text-danger">*</span> Password</label>
            <input name="password" id="examplePassword" placeholder="Password here..." type="password"
             class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
           @enderror
           </div>
          </div>
          
          {{-- PASSWORD CONFIRM FORM --}}
          <div class="col-md-6">
           <div class="position-relative form-group">
            <label for="password_confirmation" class=""><span class="text-danger">*</span> Repeat Password</label>
            <input name="password_confirmation" id="examplePasswordRep" placeholder="Repeat Password here..." type="password"
             class="form-control @error('password_confirmation') is-invalid @enderror">
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
           @enderror
           </div>
          </div>

         </div>

         {{-- CHECKBOX --}}
         <div class="mt-3 position-relative form-check">
          <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
          <label for="exampleCheck" class="form-check-label">Accept our <a href="javascript:void(0);">Terms and
            Conditions</a>.</label>
         </div>

         {{-- SUBMIT --}}
         <div class="mt-4 d-flex align-items-center">
          <h5 class="mb-0">Already have an account? <a href="login.html" class="text-primary">Sign in</a></h5>
          <div class="ml-auto">
           <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Create Account </button>
          </div>
         </div>
        </form>
       </div>
      </div>
     </div>

     {{-- SLIDER --}}
     <div class="d-lg-flex d-xs-none col-lg-5">
      <div class="slider-light">
       <div class="slick-slider slick-initialized">
        <div>
         <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark"
          tabindex="-1">
          <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
          <div class="slider-content">
           <h3>Send Direct Messages</h3>
           <p>Nobody likes to be added to endless
          groups chats nowadays. Ozi let's you
          send direct messages to your audience
          any day, anytime.
           </p>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
    
@endsection