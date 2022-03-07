

<div class="content-inner mt-5 py-0 ">
        <div class="row">
            <div class="col-md-12 col-lg-12">
            <div class="card my-cart-card border border-primary rounded "
            data-iq-gsap="onStart"
            data-iq-opacity="0"
            data-iq-position-y="-40"
            data-iq-duration=".6"
            data-iq-delay=".8"
            data-iq-trigger="scroll"
            data-iq-ease="none">

            
         <div class="hero-image p-4" style="background: url('') no-repeat center right;background-size: cover;background-position: center;">
            <div class="card-body d-grid  d-flex justify-content-center ">
               <div class="row banner-container ">
                  <div class="col-lg-12 banner-item">
                     <span class="text-primary d-flex justify-content-center align-items-center">
                        <a href="/">
                     <h3 class="text-primary navbar-inner"><img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>Food & Fun</h3>   
                     </a>
                        
                     </span>
                     
                     <div class="banner-text pt-4 d-flex justify-content-center align-items-center">
                        <h3 class="fw-bold mb-4 text-primary">
                        @if(Route::has('login'))
                 @auth
                    @if(Auth::user()->utype === 'ADM')
                        Hello,  {{Auth::user()->name}}
                        @else
                        <span  class="d-flex justify-content-center align-items-center" style='font-size:70px;'>
                     @if($user->profile->image)
                           <img src="{{asset('User1/images/profile')}}/{{$user->profile->image}}" class="img-fluid avatar avatar-100 avatar-rounded" alt="profile-image">
                           @else
                           <img src="{{asset('User1/images/profile/user.png')}}" class="img-fluid avatar avatar-100 avatar-rounded" alt="profile-image">
                           @endif
                    </span><br>
                        Hi!   {{Auth::user()->name}}  
                       
                        @endif
                        @else
                  
               
                
                        <a class="text-dark text-primary d-flex justify-content-center align-items-center" href="{{route('login')}}"></a><br>
                   
             
              

                  
	            @endif   
                @endif
                </h3>

                       
                     </div>
                  

                     <span  class="d-flex justify-content-center align-items-center" style='font-size:70px;'><img src="{{asset('foodfun/html/assets/images/layouts/tq.gif')}}" class="img-fluid avatar-rounded avatar-130" alt="profile-image"/></span>
                     
                    
                     <div class="justify-content-center align-items-center">
                     <ul class="list-inline p-0 m-2 text-center">
                        <li class="d-flex align-items-center justify-content-center mb-1s">
                           <div class="btn-group btn-group-toggle btn-group-edges me-2 btn-group1"> 
                              
                            <h1 class="text-primary"> Thank you! for your order</h1>
                           </div>
                          
                        </li>
                   
                    
                     </ul>
                  </div>
                  <div class="justify-content-center align-items-center">
                     <ul class="list-inline p-0 m-2 text-center">
                        <li class="d-flex align-items-center justify-content-center mb-1s">
                           <div class="btn-group btn-group-toggle btn-group-edges me-2 btn-group1"> 
                              
                            <h4 class="text-black">  We will send you a mail with order ID & payment details within a second!</h4>
                           </div>
                          
                        </li>
                   
                    
                     </ul>
                  </div><br>
                 


                     <div class="justify-content-center align-items-center">
                     <ul class="list-inline p-0 m-2 text-center">
                        <li class="d-flex align-items-center justify-content-center mb-1s">
                           <div class="btn-group btn-group-toggle btn-group-edges me-2 btn-group1"> 
                              <a class="button btn button-icon btn-primary rounded-pill" href="{{route('user.orders')}}"><h6> View Order</h6></a>
                            
                           </div>
                          
                          
                          
                        </li>
                   
                    
                     </ul>
                  </div>
                     
                
                    
                     
                     </div>
                     
                  </div>
                  
               </div>
              
            </div>
         </div>
         <br><br><br><br><br>
      </div>








