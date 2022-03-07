<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Food & Fun</title>
      
      <!-- Favicon  <link rel="shortcut icon" href="../../assets/images/favicon.ico" /> -->
      <link rel="shortcut icon"  href="https://img.icons8.com/fluency/50/000000/chili-pepper.png">
      
      <link rel="stylesheet" href="../../customAuth/css/core/libs.min.css">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="../../customAuth/css/aprycot.min.css?v=1.0.0"> 
   </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
   
      </div>  
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="container-fluid bg-circle-login">
         <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 col-xl-4">               
               <div class="d-flex justify-content-center mb-0">
                  <div class="card-body mt-5">
                  <a>
                     <h3 class="mb-2 text-center">Welcome to</h3>
                    
                     <h1 class="mb-2 text-center text-primary"><img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>Food & Fun</h1>
                  
            
                   
                  </a><br>
                     <h3 class="mb-2 text-center">Sign Up</h3>
                     <p class="text-center">Create your account.</p>
                   
              
                     <x-jet-validation-errors class="mb-2 text text-success" />
                        @if (session('status'))
                           <div class="alert alert-success">
                              {{ session('status') }}
                           </div>
                        @endif

                     <form method="POST" action="{{ route('register') }}">  @csrf
                   
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                              <x-jet-label for="name" class="form-label" value="{{ __('Name') }}" />
                              <x-jet-input id="name" class="form-control form-control-sm my-cart-card border border-primary rounded" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                              </div>
                           </div>

                           <div class="col-lg-12">
                              <div class="form-group">
                                 <x-jet-label for="email" class="form-label" value="{{ __('Email') }}" />
                                 <x-jet-input id="email" class="form-control form-control-sm my-cart-card border border-primary rounded" type="email" name="email" :value="old('email')" required />
                              </div>
                           </div>
                           
                           

                           <div class="col-lg-6">
                              <div class="form-group">
                                 <x-jet-label for="password" class="form-label" value="{{ __('Password') }}" />
                                 <x-jet-input id="password" class="form-control form-control-sm my-cart-card border border-primary rounded" type="password" name="password" required autocomplete="new-password" />
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <x-jet-label for="password_confirmation"  class="form-label" value="{{ __('Confirm Password') }}" />
                                 <x-jet-input id="password_confirmation" class="form-control form-control-sm my-cart-card border border-primary rounded" type="password" name="password_confirmation" required autocomplete="new-password" />
                              </div>
                           </div>
                        </div>
                        <div class="d-flex justify-content-center">
                       
                        <x-jet-button type="submit" class="btn btn-primary rounded-pill">{{ __('Register') }}</x-jet-button>
                        </div>
                       
                      
                       
                          

                           
                     


                        <p class="mt-3 text-center">
                           <a href="{{ route('login') }}" class="text-underline">{{ __('Already registered?') }}</a>
                          
                        </p>
                        
                     </form>
                  </div>
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