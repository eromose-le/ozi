@extends('layouts.reg')
@section('reg')

 <div class="app-container app-theme-white body-tabs-shadow">
  <div class="app-container">
   <div class="h-100">
    <div class="h-100 no-gutters row">
     <div class="d-none d-lg-block col-lg-4">
      <div class="slider-light">
       <div class="slick-slider">
        <div>
         <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate"
          tabindex="-1">
          <div class="slide-img-bg" style="background-image: url('assets/images/originals/city.jpg');"></div>
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
        <div>
         <div class="h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
          <div class="position-relative slide-img-bg"
           style="background-image: url('assets/images/originals/citynights.jpg');"></div>
          <div class="slider-content">
           <h3>Scalable, Modular, Consistent</h3>
           <p>Easily exclude the components you don't require. Lightweight, consistent
            Bootstrap based styles across all elements and components
           </p>
          </div>
         </div>
        </div>
        <div>
         <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning"
          tabindex="-1">
          <div class="slide-img-bg opacity-6" style="background-image: url('assets/images/originals/citydark.jpg');">
          </div>
          <div class="slider-content">
           <h3>Complex, but lightweight</h3>
           <p>We've included a lot of components that cover almost all use cases for any type of application.</p>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
      <div class="mx-auto app-login-box col-sm-12 col-md-8 col-lg-6">
       <div class="app-logo"></div>
       <h4>
        <div>Forgot your Password?</div>
        <span>Use the form below to recover it.</span>
       </h4>
       <div>
        <form action="login.html" class="">
         <div class="form-row">
          <div class="col-md-12">
           <div class="position-relative form-group">
            <label for="exampleEmail" class="">Email</label>
            <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control">
           </div>
          </div>
         </div>
         <div class="mt-4 d-flex align-items-center">
          <h6 class="mb-0">
           <a href="login.html" class="text-primary">Sign in existing account</a>
          </h6>
          <div class="ml-auto">
           <button class="btn btn-primary btn-lg">Recover Password</button>
          </div>
         </div>
        </form>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
    
@endsection