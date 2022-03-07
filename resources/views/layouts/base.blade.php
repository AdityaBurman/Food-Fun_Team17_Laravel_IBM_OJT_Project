<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      @livewireStyles
      <title>Food & Fun</title>
      <link rel="shortcut icon"  href="https://img.icons8.com/fluency/50/000000/chili-pepper.png">
      <!-- Library / Plugin Css Build -->
   
      <link rel="stylesheet" href="{{asset('foodfun/html/assets/css/core/libs.min.css')}}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('foodfun/html/assets/css/aprycot.min.css?v=1.0.0')}}">  
      <style>

      </style>

    </head>
    <body class=" "  style="background:url{{asset('foodfun/html/assets/images/dashboard.png')}}; 
      
    background-attachment: fixed;
    background-size: cover;">
    <!-- loader Start -->
    
    <div class="position-relative">
      <div class="user-img1">
          <svg width="1857"  viewBox="0 0 1857 327" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4.05078 189.348C86.8841 109.514 348.951 -25.2523 734.551 74.3477C1120.15 173.948 1641.22 91.181 1853.55 37.3477" stroke="#EA6A12" stroke-opacity="0.3"/>
          <path d="M0.99839 152.331C90.9502 80.6133 364.495 -28.9952 739.062 106.31C1113.63 241.616 1640.16 208.056 1856.6 174.363" stroke="#EA6A12" stroke-opacity="0.3"/>
          </svg>
      </div>
    </div>
    
      
    <main class="main-content">
      <div class="position-relative">
        <!--Nav Start-->
        <nav class="nav navbar fixed-top navbar-expand-lg   navbar-light iq-navbar border border-primary justify-content-between">
           
        <a href="/">
          
          <h3 class="text-primary navbar-inner"><img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>Food & Fun</h3>
        
              
          </a>
        <!--<div class="input-group search-input">
              <span class="input-group-text" id="search-input">
                <svg width="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
              <input type="search" class="form-control" placeholder="Search...">
            </div>-->
          
          
            
            <button class="navbar-toggler border-primary rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="navbar-toggler-bar bar1 mt-2"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent"  id="navbarNavAltMarkup">
              <ul class="navbar-nav ms-auto align-items-center  navbar-list mb-2 mb-lg-0">
              
              <li class="nav-item">
                  <a class="nav-link text-primary " href="/">Home</a>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link text-primary " href="/menu">Food Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary "  href="/table">Reserve Table</a>
                </li>
                
                  
                
                
                @livewire('wishlist-count-component')
                @livewire('cart-count-component')
               
      

                
              

               


                @if(Route::has('login'))
                 @auth
                    @if(Auth::user()->utype === 'ADM')
                <li class="nav-item dropdown ">
                  <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" alt="User-Profile" >                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.294 7.29105C17.294 10.2281 14.9391 12.5831 12 12.5831C9.0619 12.5831 6.70601 10.2281 6.70601 7.29105C6.70601 4.35402 9.0619 2 12 2C14.9391 2 17.294 4.35402 17.294 7.29105ZM12 22C7.66237 22 4 21.295 4 18.575C4 15.8539 7.68538 15.1739 12 15.1739C16.3386 15.1739 20 15.8789 20 18.599C20 21.32 16.3146 22 12 22Z" fill="orange"></path>                            </svg>                        
                    
                    <div class="caption ms-3 d-none d-md-block ">
                        <h6 class="mb-0 caption-sub-title">{{Auth::user()->name}}</h6>
                       <!-- <p class="mb-0 caption-sub-title">Food & Fun Administrator</p>-->
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end  my-cart-card border border-primary rounded" aria-labelledby="navbarDropdown">
                   <!-- <li><a class="dropdown-item" href="foodfun/html/dashboard/app/user-profile.html">Profile</a></li>-->
                    <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.categories')}}">Food Categories</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.products')}}">Food Details</a></li>

                    <li><a class="dropdown-item" href="{{route('admin.orders')}}">All Orders</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.table')}}">Reserved Table</a></li>
                    <li><hr class="dropdown-divider"></li>
                 
         
                  
                   <!-- <li><a class="dropdown-item" href="foodfun/html/dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                    <li><hr class="dropdown-divider"></li>-->
                    <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a></li>
                  <form id="logout-form" method="POST" action="{{route('logout')}}">@csrf</form>
                  </ul>
                </li>

                @else
                <li class="nav-item dropdown">
                  <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg  width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" alt="User-Profile" >                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.294 7.29105C17.294 10.2281 14.9391 12.5831 12 12.5831C9.0619 12.5831 6.70601 10.2281 6.70601 7.29105C6.70601 4.35402 9.0619 2 12 2C14.9391 2 17.294 4.35402 17.294 7.29105ZM12 22C7.66237 22 4 21.295 4 18.575C4 15.8539 7.68538 15.1739 12 15.1739C16.3386 15.1739 20 15.8789 20 18.599C20 21.32 16.3146 22 12 22Z" fill="orange"></path>                            </svg>                        
                    


                 
                    <div class="caption ms-3 d-none d-md-block ">
                     
                        <h6 class="mb-0 caption-title text-black">{{Auth::user()->name}}</h6>

                        
                        
                       <!-- <p class="mb-0 caption-sub-title">Marketing Administrator</p>-->
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end  my-cart-card border border-primary rounded " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('user.profile')}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{route('user.changepassword')}}">Change Password</a></li>
                    <li><a class="dropdown-item" href="{{route('user.orders')}}">My Orders</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Log Out</a></li>
                    <form id="logout-form" method="POST" action="{{route('logout')}}">@csrf</form>

                  </ul>
                </li>
                @endif

                @else
                <li class="nav-item">
                  <a class="nav-link text-primary "  href="{{route('login')}}"> 
                  <svg  data-bs-toggle="tooltip" data-bs-placement="bottom"   data-bs-original-title="login"  width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" alt="User-Profile" >                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.294 7.29105C17.294 10.2281 14.9391 12.5831 12 12.5831C9.0619 12.5831 6.70601 10.2281 6.70601 7.29105C6.70601 4.35402 9.0619 2 12 2C14.9391 2 17.294 4.35402 17.294 7.29105ZM12 22C7.66237 22 4 21.295 4 18.575C4 15.8539 7.68538 15.1739 12 15.1739C16.3386 15.1739 20 15.8789 20 18.599C20 21.32 16.3146 22 12 22Z" fill="orange"></path>                            </svg>                        

                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary " href="{{route('register')}}" ></a>
                </li>


                  
                        
                        @endif   
                    @endif
              </ul>
            </div>
          </div>
        </nav>          <!-- Nav Header Component Start -->
          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>
      
      
     
     
</div>
      </div>
      <br><br>
      {{$slot}}
      </main>
      <!-- Footer Section Start -->
       <footer class="footer  bg-soft-primary text-black  ">
          <div class="footer-body ">
              <ul class="left-panel list-inline mb-0 p-0 text-black">
                  <li class="list-inline-item "><a href=""></a><h5> Food&Fun </h5></li>
                  <li class="list-inline-item "><a href="" class="text-black">IBM - Edunet On The Job Traning Project</a></li>
              </ul>
              <div class="right-panel text-black">
                  ©<script>document.write(new Date().getFullYear())</script> Develop and design
                  <span class="text-black">
                  <a  href="" class=""  ><img src="{{asset('foodfun/html/assets/images/layouts/heart.gif')}}" class="img-fluid avatar-rounded avatar-30" alt="profile-image"/></a>
                  </span>by <a href="https://github.com/DynamicDevelopers17" class="text-black"> Team 17 - Full Stack Developers</a>
                  </span><a data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Github Link"  href="https://github.com/DynamicDevelopers17" class="text-black"  ><img src="{{asset('foodfun/html/assets/images/layouts/git.gif')}}" class="img-fluid avatar-rounded avatar-40" alt="profile-image"/></a>
              
                 
                </div>
          </div>
      </footer>
      
    
      
      <!-- Footer Section End -->    
    
    <!-- Wrapper End-->
    <!-- offcanvas start -->

<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "6221ed2dba88b900073bca32";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
    
    <!-- Required Library Bundle Script -->
    <script src="{{asset('foodfun/html/assets/js/core/libs.min.js')}}"></script>
    
    <!-- External Library Bundle Script -->
    <script src="{{asset('foodfun/html/assets/js/core/external.min.js')}}"></script>
    
    <!-- Widgetchart JavaScript -->
    <script src="{{asset('foodfun/html/assets/js/charts/widgetcharts.js')}}"></script>
    
    <!-- Mapchart JavaScript -->
    <script src="{{asset('foodfun/html/assets/js/charts/vectore-chart.js')}}"></script>
    <script src="{{asset('foodfun/html/assets/js/charts/dashboard.js')}}"></script>
    
    <!-- Admin Dashboard Chart -->
    <script src="{{asset('foodfun/html/assets/js/charts/admin.js')}}"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="{{asset('foodfun/html/assets/js/fslightbox.js')}}"></script>
    
    <!-- GSAP Animation -->
    <script src="{{asset('foodfun/html/assets/vendor/gsap/gsap.min.js')}}"></script>
    <script src="{{asset('foodfun/html/assets/vendor/gsap/ScrollTrigger.min.js')}}"></script>
    <script src="{{asset('foodfun/html/assets/js/animation/gsap-init.js')}}"></script>
    
    <!-- Stepper Plugin -->
    <script src="{{asset('foodfun/html/assets/js/stepper.js')}}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{asset('foodfun/html/assets/js/form-wizard.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('foodfun/html/assets/js/app.js')}}"></script>
    
    <!-- moment JavaScript -->
    <script src="{{asset('foodfun/html/assets/vendor/moment.min.js')}}"></script>
    @livewireScripts  </body>
</html>