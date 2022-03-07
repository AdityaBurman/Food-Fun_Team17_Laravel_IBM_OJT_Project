
<div>
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      @livewireStyles
      <title>Food & Fun</title>
      
      <!-- Favicon <link rel="shortcut icon" href="../../assets/images/favicon.ico" /> -->
      <link rel="shortcut icon"  href="https://img.icons8.com/fluency/50/000000/chili-pepper.png">
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="../../customAuth/css/core/libs.min.css">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="../../customAuth/css/aprycot.min.css?v=1.0.0">   </head>
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
               <div class="card-body">
                    <a>
                     <h3 class="mb-2 text-center">Welcome to</h3>
                    
                     <h1 class="mb-2 text-center text-primary"><img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>Food & Fun</h1>
                  
            
                   
                  </a><br>
                           @if(Session::has('password_success'))
                           <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                           @endif
                           @if(Session::has('password_error'))
                           <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                           @endif
                           <h2 class="mb-2 text-center">Change Password</h2>
                           <p class="text-center">Stay connected to us</p>
                           
                           <form wire:submit.prevent="changePassword">@csrf
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control form-control-s "  aria-describedby="email" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label"> Current Password</label>
                                       <input type="password" class="form-control form-control-sm"  wire:model="current_password" aria-describedby="password" placeholder=" ">
                                       @error('current_password')<p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label"> New Password</label>
                                       <input type="password" class="form-control form-control-sm"  wire:model="password" aria-describedby="password" placeholder=" ">
                                       @error('password')<p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label"> Confirm Password</label>
                                       <input type="password" class="form-control form-control-sm" wire:model="password_confirmation" aria-describedby="password" placeholder=" ">
                                       @error('password_confirmation')<p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                             
                                
                              
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




    @livewireScripts 

</body>
</html>

</div>
