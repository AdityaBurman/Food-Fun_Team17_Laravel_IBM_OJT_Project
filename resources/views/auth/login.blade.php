
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Food & Fun</title>
      
      <!-- Favicon <link rel="shortcut icon" href="../../assets/images/favicon.ico" /> -->
      <link rel="shortcut icon"  href="https://img.icons8.com/fluency/50/000000/chili-pepper.png">
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="../../customAuth/css/core/libs.min.css">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="../../customAuth/css/aprycot.min.css?v=1.0.0">  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
      </div>    
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="container-fluid bg-circle-login" id="auth-sign">
         <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 col-xl-4">
               <div class="card-body ">
                  <a>
                     <h3 class="mb-2 text-center">Welcome to</h3>
                    
                     <h1 class="mb-2 text-center text-primary"><img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>Food & Fun</h1>
                  
            
                   
                  </a><br>
                           <h3 class="mb-2 text-center">Sign In</h3>
                           <p class="text-center">Sign in to stay connected.</p>
                           <x-jet-validation-errors class="mb-2 text text-danger" />
                        @if (session('status'))
                           <div class="mb-2 text text-danger">
                              {{ session('status') }}
                           </div>
                        @endif
                           <form method="POST" action="{{ route('login') }}">@csrf
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                          <x-jet-label for="email" class="form-label " value="{{ __('Email') }}" />
                                          <x-jet-input id="email"  class="form-control form-control-sm my-cart-card border border-primary rounded" type="email" aria-describedby="email" name="email" :value="old('email')" required autofocus />
                                    </div>  
                                 </div>
                                 <div class="col-lg-12">
                                       <div class="form-group">
                                            <x-jet-label for="password" class="form-label" value="{{ __('Password') }}" />
                                          <x-jet-input id="password" class="form-control form-control-sm my-cart-card border border-primary rounded" aria-describedby="password" type="password" name="password" required autocomplete="current-password" />
                                       </div>
                                 </div>        
                                 <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="form-check mb-3">
                                       <x-jet-checkbox type="checkbox" class="form-check-input"  name="remember" id="remember_me"/>
                                       <label class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                          </a>
                                       @endif
                                   <!-- <a href="{{('/recoverpw')}}">Forgot Password?</a>--> 
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <x-jet-button class="btn btn-primary rounded-pill" type="submit">{{ __('Log in') }}</x-jet-button>
                              </div>






                              
                              <p class="mt-3 text-center">
                                 Don’t have an account? <a href="{{('/register')}}" class="text-underline">Click here to sign up.</a>
                              </p>
                           </form>
                        </div>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-8 d-lg-block d-none vh-100 overflow-hidden">
               <img src="../../customAuth/images/auth/09.png" class="img-fluid sign-in-img" alt="images">

            </div>
         </div>
      </section>
      </div>
    
    <!-- Required Library Bundle Script -->
    <script src="../../customAuth/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="../../customAuth/js/core/external.min.js"></script>
    
    <!-- Mapchart JavaScript -->
    <script src="../../customAuth/js/charts/dashboard.js"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="../../customAuth/js/fslightbox.js"></script>
    
    <!-- app JavaScript -->
    <script src="../../customAuth/js/app.js"></script>
    
    <!-- moment JavaScript -->
    <script src="../../customAuth/vendor/moment.min.js"></script>  
</body>
</html>