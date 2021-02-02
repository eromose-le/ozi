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
                  <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark"
                    tabindex="-1">
                    <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');">
                    </div>
                    <div class="slider-content">
                      <h3>Automate Replies</h3>
                      <p>Guild your Audience through your service
                        categories, complete sales and orders
                        and even answer complex FAQ. Ozi
                        Chatbot does all the heavy lifting.
                      </p>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning"
                    tabindex="-1">
                    <div class="slide-img-bg" style="background-image: url('assets/images/originals/citydark.jpg');">
                    </div>
                    <div class="slider-content">
                      <h3>Guaranteed Delivery</h3>
                      <p>Unlike Bulk SMS which has terrible
                        delivery rate, Ozi always delivers your
                        messages to your people, as it utilizes
                        WhatsApp Instant messaging APIs to
                        ensure consistent performance.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
              <div class="app-logo"></div>
              <h4 class="mb-0">
                <span class="d-block">Welcome back,</span>
                <span>Please sign in to your account.</span>
              </h4>
              <h6 class="mt-3">No account? <a href="{{ route('register') }}" class="text-primary">Sign up now</a></h6>
              <div class="divider row"></div>
              <div>

                {{-- ALERT FOR INVALID LOGIN --}}
                @if (session('status'))

                <div class="alert alert-warning fade show" role="alert">
                  {{ session('status') }}
                </div>

                @endif
                <form action="{{ route('login') }}" method="post">
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

                  </div>

                  {{-- SUBMIT --}}
                  <div class="position-relative form-check">
                    <input name="remember" id="exampleCheck" type="checkbox" class="form-check-input">
                    <label for="remember" class="form-check-label">Keep me logged in</label>
                  </div>

                  <div class="divider row"></div>
                  <div class="d-flex align-items-center">
                    <div class="ml-auto">
                      <a href="forgot-password.html" class="btn-lg btn btn-link">Recover Password</a>
                      <button class="btn btn-primary btn-lg">Login to Dashboard</button>
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