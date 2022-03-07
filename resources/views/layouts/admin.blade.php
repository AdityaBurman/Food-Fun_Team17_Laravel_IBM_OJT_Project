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
    
    <aside class="sidebar sidebar-default   sidebar-hover sidebar-mini navs-pill-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{route('admin.dashboard')}}" class="navbar-brand py-2" >
                <!--Logo start-->
                <div class="logo">

                <img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>
                    
                </div>
                <div class="logo-hover">
                <h2 class="text-primary"><img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>Food & Fun</h2>
                </div>
                <!--logo End-->
            </a>

            <div class="sidebar-toggle " data-toggle="sidebar" data-active="true">
                    <i class="icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </i>
                </div>
        </div>
        
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="navbar-collapse" id="sidebar">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon"></span>
                            
                        </a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-widget" role="button" aria-expanded="false" aria-controls="sidebar-widget">
                            <i class="icon">
                            <img src="https://img.icons8.com/plumpy/25/000000/administrator-male.png"/>
                            </i>
                            <span class="item-name">Administrator</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-widget" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('admin.dashboard')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"></i>
                                    <span class="item-name">Admin</span>
                                </a>
                            </li>
                           
                           
                        </ul>
                    </li>
                    <li><hr class="hr-horizontal"></li>
                  
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false" aria-controls="sidebar-special">
                            <i class="icon">
                            <img src="https://img.icons8.com/plumpy/25/000000/restaurant-building.png"/>
                            </i>
                            <span class="item-name">Food Category</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('admin.categories')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"></i>
                                    <span class="item-name">Category List</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('admin.addcategory')}}">
                                   <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                   <i class="sidenav-mini-icon"></i>
                                   <span class="item-name">Add new Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                            <img src="https://img.icons8.com/plumpy/25/000000/grocery-bag.png"/>
                            </i>
                            <span class="item-name">Food Items</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.products')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"></i>
                                    <span class="item-name">Food List</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.addproduct')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"></i>
                                    <span class="item-name">Add new Food</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                            <img src="https://img.icons8.com/plumpy/25/000000/waiter.png"/>
                            </i>
                            <span class="item-name">Food Orders</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('admin.orders')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"></i>
                                    <span class="item-name">Customer Order</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#utilities-error" role="button" aria-expanded="false" aria-controls="utilities-error">
                            <i class="icon">
                            <img src="https://img.icons8.com/ios-filled/30/000000/meeting-room.png"/>
                            </i>
                            <span class="item-name">Table</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('admin.table')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon">  </i>
                                    <span class="item-name">Reserved Table</span>
                                </a>
                            </li>   
                        
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu End -->        </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>    
    <main class="main-content">
      <div class="position-relative">
        <!--Nav Start-->
        <nav class="nav navbar fixed-top navbar-expand-lg  py-2  navbar-light iq-navbar border border-primary justify-content-between">
            <a href="{{route('admin.dashboard')}}" class="navbar-brand">
                <!--Logo start-->
                
                <div class="logo-hover">
                <h3 class="text-primary"><div></div><img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>Food & Fun</h3>
                </div>
                
                <!--logo End-->
                
                
            </a>
          
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
            
            <button class="navbar-toggler border-primary rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="navbar-toggler-bar bar1 mt-2"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto align-items-center navbar-list mb-2 mb-lg-0">
              
            
              @livewire('admin.admin-contact-component')
               
      

                
               


                 
             

               


                @if(Route::has('login'))
                 @auth
                    @if(Auth::user()->utype === 'ADM')
                <li class="nav-item dropdown ">
                  <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg  data-bs-toggle="tooltip" data-bs-placement="bottom"   data-bs-original-title="Admin"  width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" alt="User-Profile" >                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.294 7.29105C17.294 10.2281 14.9391 12.5831 12 12.5831C9.0619 12.5831 6.70601 10.2281 6.70601 7.29105C6.70601 4.35402 9.0619 2 12 2C14.9391 2 17.294 4.35402 17.294 7.29105ZM12 22C7.66237 22 4 21.295 4 18.575C4 15.8539 7.68538 15.1739 12 15.1739C16.3386 15.1739 20 15.8789 20 18.599C20 21.32 16.3146 22 12 22Z" fill="orange"></path>                            </svg>                        
                    
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
                    <img src="{{asset('foodfun/html/assets/images/avatars/01.png')}}" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                    


                   
                    <div class="caption ms-3 d-none d-md-block ">
                     
                        <h6 class="mb-0 caption-title">{{Auth::user()->name}}</h6>

                        
                        
                       <!-- <p class="mb-0 caption-sub-title">Marketing Administrator</p>-->
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end  my-cart-card border border-primary rounded " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('user.profile')}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{route('user.orders')}}">My Orders</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Log Out</a></li>
                    <form id="logout-form" method="POST" action="{{route('logout')}}">@csrf</form>

                  </ul>
                </li>
                @endif

                @else
                
                  <li class="nav-item"><a href="{{route('login')}}" class="nav-link">
                        <div>
                        <svg  width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                        
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.294 7.29105C17.294 10.2281 14.9391 12.5831 12 12.5831C9.0619 12.5831 6.70601 10.2281 6.70601 7.29105C6.70601 4.35402 9.0619 2 12 2C14.9391 2 17.294 4.35402 17.294 7.29105ZM12 22C7.66237 22 4 21.295 4 18.575C4 15.8539 7.68538 15.1739 12 15.1739C16.3386 15.1739 20 15.8789 20 18.599C20 21.32 16.3146 22 12 22Z" fill="orange"></path>                           
                                    
                                    </svg> 

                    </div>

                                       
                   

                  </li>
                  <li class="nav-item"><a href="{{route('register')}}" class="nav-link"></a></li>
                        
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
      <footer class="footer  bg-soft-primary text-black ">
          <div class="footer-body justify-content-center">
              <ul class="left-panel list-inline mb-0 p-0 text-black">
                  <li class="list-inline-item "><a href=""></a><h5> Food&Fun </h5></li>
                  <li class="list-inline-item "><a href="" class="text-black">IBM - Edunet On The Job Traning Project</a></li>
              </ul>
              
          </div>
      </footer>
       <footer class="footer bg-soft-primary  ">
          <div class="footer-body justify-content-center">
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