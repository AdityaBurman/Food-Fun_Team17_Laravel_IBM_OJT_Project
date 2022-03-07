
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

            
         <div class="hero-image p-4" style="background: url('foodfun/html/assets/images/layouts/01.png') no-repeat center right;background-size: cover;background-position: center;">
            <div class="card-body d-grid  d-flex justify-content-center ">
               <div class="row banner-container ">
                  <div class="col-lg-12 banner-item">
                     <span class="text-primary d-flex justify-content-center align-items-center">
                    
                                       <h4 class="text-primary navbar-inner mb-1d"><img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>Food & Fun</h4>
                              
                       
                     </span>
                     <div class="banner-text pt-4 d-flex justify-content-center align-items-center">
                        <h3 class="fw-bold mb-4 text-dark">
                        @if(Route::has('login'))
                 @auth
                    @if(Auth::user()->utype === 'ADM')
                        Hello,  {{Auth::user()->name}}
                        @else
                        Hi!   {{Auth::user()->name}}  
                       
                        @endif
                        @else
                  
               
                
                        <a class="text-dark text-primary d-flex justify-content-center align-items-center" href="{{route('login')}}">Hi There</a><br>
                   
             
              

                  
	            @endif   
                @endif
                </h3>

                       
                     </div>
                     
                    
                  
                     <div class="justify-content-center align-items-center">
                     <ul class="list-inline p-0 m-2 text-center">
                        <li class="d-flex align-items-center justify-content-center mb-1s">
                           <div class="btn-group btn-group-toggle btn-group-edges me-2 btn-group1"> 
                              <a class="button btn button-icon btn-primary rounded-pill"  href="/menu"><h6> Order Food </h6></a>
                            
                           </div>
                          
                           <div class="btn-group btn-group-toggle btn-group-edges me-2 btn-group2"> 
                              <a class="button btn button-icon btn-primary rounded-pill"  href="/table"><h6>Reserve Table</h6></a>
                             
                           </div>
                          
                        </li>
                   
                    
                     </ul>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>     
<section>
<div class="row">
    <div class="col-md-12 col-lg-8">
        <div class="dish-card-vertical">
            <div class="card dish-card3">
                <div class="card-body my-cart-card border border-primary rounded ">
                    <div class="d-flex profile-img41">
                        <div class="d-flex align-items-center mb-4 mb-md-0">
                            <div class="d-flex ms-3">
                                <div>
                                <a href="/">
                                       <h3 class="text-primary navbar-inner mb-1d"><img src="https://img.icons8.com/fluency/35/000000/chili-pepper.png"/>Food & Fun</h3>
                                       </a>                             
                                </div>
                            </div>
                        </div>             
                    </div>
                    <div class="py-2">
                        <h6 class="heading-title fw">The food & Fun website provides delicious hygienic food and excellent services, features to our valuable customers. Our customers can also interact with our AI bot for food ordering & reserving a restaurant table in a sophisticated way. Our smart food card provides a variety of food categories and you love it.</h6>        
                    </div>
                    <div class="py-3">
                        <h6 class="heading-title fw-bolder">Our Services & Featues</h6>   
                        <ul>
                        <li> 
                        <div class="d-flex mt-2">
                        <p class="mb-0 ms-3">Smart AI bot for food ordering & table reservation.</p>
                        </div>  
                        </li>   
                        <li> 
                        <div class="d-flex mt-2">
                        <p class="mb-0 ms-3">Smart digital food menu card.</p>
                        </div>
                        </li> 
                        <li> 
                        <div class="d-flex mt-2">
                        <p class="mb-0 ms-3">We provide restaurant table reservations.</p>
                        </div> 
                        </li> 
                        <li>
                        <div class="d-flex mt-2">
                        <p class="mb-0 ms-3">Online food ordering its delivery and takeaway.</p>
                        </div>
                        </li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
    <div class="card my-cart-card border border-primary rounded">
                  <div class="card-header d-flex justify-content-center">
                     <div class="header-title">
                        <h4 class="card-title">Food Gallery</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                           <ol class="carousel-indicators">
                              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class=""></li>
                              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class=""></li>
                              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="active" aria-current="true"></li>
                           </ol>
                           <div class="carousel-inner">
                              <div class="carousel-item">
                                 <img src="{{asset('foodfun/html/assets/images/layouts/new.jpg')}}" class="d-block w-100" alt="#">
                                
                              </div>
                              <div class="carousel-item">
                                 <img src="{{asset('foodfun/html/assets/images/layouts/ggg.jpg')}}" class="d-block w-100" alt="#">
                                
                              </div>
                              <div class="carousel-item active">
                                 <img src="{{asset('foodfun/html/assets/images/layouts/999.jpg')}}" class="d-block w-100" alt="#">
                                
                              </div>
                           </div>
                           <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           </a>
                           <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
             </div>
    
         </div>

       
      



<div class="card-transparent bg-transparent mb-0" >
         <div class="card-header border-0  "></div>
            <div class="d-flex justify-content-between align-items-center">
            <div class="card-header d-flex justify-content-between ">
                     <div class="header-title">
                        <h4 class="card-title">Food Category</h4>
                     </div>
                  </div>
               
              
            </div>
         </div>
        
         <div class="card-body p-0">
            <div class="swiper-container d-slider2">
               <div class="swiper-wrapper">
               @foreach($categories as $category)
                  <div class="swiper-slide">
                     <div class="card category-menu"
                     data-iq-gsap="onStart"
                     data-iq-opacity="0"
                     data-iq-position-y="-40"
                     data-iq-duration=".6"
                     data-iq-delay=".6"
                     data-iq-trigger="scroll"
                     data-iq-ease="none"
                     >
                        <div class="card-body my-cart-card border border-primary rounded bg-soft-primary">
                           <div class="text-center iq-menu-category">
                              
                              <h6 class="heading-title fw-bolder pb-4">{{$category->name}}</h6>
                              
                              <div class="category-icon pt-4">
                              <a href="{{route('product.category',['category_slug'=>$category->slug])}}">
                              <svg data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Click Here"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="24" height="24" rx="12" fill="currentColor"/>
                                    <path d="M10.25 8.5L13.75 12L10.25 15.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>

                              </a>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach

                 
                 
                 
               </div>
            </div>
            
         </div>
      
      </div>
</section>

<section>
	  <div class="card-transparent bg-transparent mb-0">
     <div class="card-header border-0  m-2 mb-5 ">
            <div class="d-flex justify-content-between align-items-center">
               <h4>Food Menu</h4>
               <a class="button btn button-icon btn-outline-primary rounded-pill text-white"  href="/menu"><h6>View All                             <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.0066L10.8366 12.3607C10.8487 13.7652 10.9334 15.0183 11.0794 15.8124C11.0794 15.8267 11.2387 16.6143 11.3401 16.8764C11.4994 17.2554 11.7874 17.577 12.1485 17.7808C12.4376 17.9262 12.7408 18 13.0583 18C13.3078 17.9884 13.7194 17.8629 14.0131 17.7576L14.2572 17.664C15.8739 17.0218 18.9644 14.9234 20.148 13.6402L20.2353 13.5505L20.6247 13.1302C20.8702 12.8085 21 12.4153 21 11.9923C21 11.6134 20.8844 11.2344 20.6531 10.9282C20.5839 10.829 20.4723 10.7017 20.3731 10.5942L19.994 10.1974C18.6895 8.87572 15.8652 7.02183 14.4012 6.40756C14.4012 6.39435 13.4914 6.01432 13.0583 6H13.0005C12.3361 6 11.7154 6.37892 11.3979 6.99137C11.3112 7.1588 11.228 7.48678 11.1648 7.77483L11.051 8.31871C10.9212 9.19332 10.835 10.535 10.835 12.0066ZM4.50325 10.4817C3.67308 10.4817 3 11.1613 3 11.9996C3 12.8378 3.67308 13.5175 4.50325 13.5175L8.20248 13.1903C8.85375 13.1903 9.38174 12.6583 9.38174 11.9996C9.38174 11.3419 8.85375 10.8088 8.20248 10.8088L4.50325 10.4817Z" fill="currentColor"></path>                            </svg>                        </h6></a>
              <!-- <a href='/menu' class="text-dark d-flex">View All
                  <svg width="24" height="24" class="ms-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <rect width="24" height="24" rx="12" fill="#EA6A12"></rect>
                     <path d="M10.25 8.5L13.75 12L10.25 15.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
               </a>-->
            </div>
         </div>
       
		 
         <div class="card-body p-0 dish-card-vertical ">
		
      <div class="swiper swiper-container ">
         <div class="swiper-wrapper">
            
            <div class="swiper-slide"
               data-iq-gsap="onStart"
               data-iq-opacity="0"
               data-iq-position-y="-40"
               data-iq-duration=".6"
               data-iq-delay=".4"
               data-iq-trigger="scroll"
               data-iq-ease="none"
            >
        @php
         $witems = Cart::instance('wishlist')->content()->pluck('id'); 
      @endphp
       @foreach($products as $product)
               <div class="card card-white dish-card2 index my-cart-card border border-primary rounded">
                   <div class="card-body">
                       <div class="d-flex profile-img1">
                           <div class="profile-img31">
                               
                           <a href="{{route('product.details',['slug'=>$product->slug])}}" ><img src="{{asset('User1/images/products')}}/{{$product->image}}" class="img-fluid rounded-pill avatar-130 hover-image" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="View Detail"  alt="profile-image"></a>
                               
                           </div>
                           <div>
                               <span class="text-primary">
                               <svg data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Vegetarian Food"  xmlns="http://www.w3.org/2000/svg" width="15" viewBox="0 0 24 24" fill="none">                                <circle cx="12" cy="12" r="8" fill="green"></circle>                            </svg>                        
                                  <small>Top of the week</small>
                                   
                               </span>
                               <h6 class="mb-3 mt-3 heading-title fw-bolder">{{$product->name}}</h6>
                              <!-- <p class="mt-2 mb-0 pb-4 iq-calories small">60 Calories</p>-->
                               <p class="mt-2 mb-0 pb-4 iq-calories small">{!! $product->short_description !!}</p>
                               <div class="d-flex mt-2">
                                   <span class="text-primary me-4">₹ {{$product->regular_price}}</span>
                                   <div>
                      
                                   
                                  </div>


                        
                              @if($witems->contains($product->id))
                              <a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})" >
                              <svg width="32" data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Unlike Food"  viewBox="0 0 24 24" fill="orange" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87187 11.5983C1.79887 8.24832 3.05287 4.41932 6.56987 3.28632C8.41987 2.68932 10.4619 3.04132 11.9999 4.19832C13.4549 3.07332 15.5719 2.69332 17.4199 3.28632C20.9369 4.41932 22.1989 8.24832 21.1269 11.5983C19.4569 16.9083 11.9999 20.9983 11.9999 20.9983C11.9999 20.9983 4.59787 16.9703 2.87187 11.5983Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M16 6.69995C17.07 7.04595 17.826 8.00095 17.917 9.12195" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                
                        </svg>   
                              </a>
                              @else
                              <a href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})" >
                              <svg data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Like Favourite Food"  width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87187 11.5983C1.79887 8.24832 3.05287 4.41932 6.56987 3.28632C8.41987 2.68932 10.4619 3.04132 11.9999 4.19832C13.4549 3.07332 15.5719 2.69332 17.4199 3.28632C20.9369 4.41932 22.1989 8.24832 21.1269 11.5983C19.4569 16.9083 11.9999 20.9983 11.9999 20.9983C11.9999 20.9983 4.59787 16.9703 2.87187 11.5983Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M16 6.69995C17.07 7.04595 17.826 8.00095 17.917 9.12195" stroke="orange" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                
                        </svg>   
                              </a>
                              @endif
                                                 


                        <a href="#"  wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><svg data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Add to cart"  width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="black"></path>                            </svg>                        </a>

                        
                                      
                               
                                   
            
                               </div>
                           </div>            
                       </div>
                
                   </div>
                
               </div>                    
          @endforeach
         </div>
      </div>
   
   </div>
		
      </div>
      
   </div>
	
   <span class="text-primary d-flex justify-content-center align-items-center">
                    
   <a class="button btn button-icon btn-outline-primary rounded-pill text-white"  href="/menu"><h6>View All                             <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.0066L10.8366 12.3607C10.8487 13.7652 10.9334 15.0183 11.0794 15.8124C11.0794 15.8267 11.2387 16.6143 11.3401 16.8764C11.4994 17.2554 11.7874 17.577 12.1485 17.7808C12.4376 17.9262 12.7408 18 13.0583 18C13.3078 17.9884 13.7194 17.8629 14.0131 17.7576L14.2572 17.664C15.8739 17.0218 18.9644 14.9234 20.148 13.6402L20.2353 13.5505L20.6247 13.1302C20.8702 12.8085 21 12.4153 21 11.9923C21 11.6134 20.8844 11.2344 20.6531 10.9282C20.5839 10.829 20.4723 10.7017 20.3731 10.5942L19.994 10.1974C18.6895 8.87572 15.8652 7.02183 14.4012 6.40756C14.4012 6.39435 13.4914 6.01432 13.0583 6H13.0005C12.3361 6 11.7154 6.37892 11.3979 6.99137C11.3112 7.1588 11.228 7.48678 11.1648 7.77483L11.051 8.31871C10.9212 9.19332 10.835 10.535 10.835 12.0066ZM4.50325 10.4817C3.67308 10.4817 3 11.1613 3 11.9996C3 12.8378 3.67308 13.5175 4.50325 13.5175L8.20248 13.1903C8.85375 13.1903 9.38174 12.6583 9.38174 11.9996C9.38174 11.3419 8.85375 10.8088 8.20248 10.8088L4.50325 10.4817Z" fill="currentColor"></path>                            </svg>                        </h6></a>
           
    
  </span>
<br>

	
</section>




<div class="row" >
    <div class="col-md-12 col-lg-12" id="contact">
        <div class="dish-card-vertical1 ">
            <div class="card dish-card3 my-cart-card border border-primary rounded">
            <div class="card-header d-flex justify-content-between ">
               <h4 class="card-title list-main">Contact Us</h4>
            </div>
                     @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                <div class="card-body ">
                    <div class="d-flex profile-img41">
                        <div class="profile-img42">
                            <img src="{{asset('foodfun/html/assets/images/layouts/21.png')}}" class="img-fluid rounded-pill avatar-130" alt="profile-image">
                        </div>        
                    </div>
                <div class="card-body col-lg-9">
                <form wire:submit.prevent="sendMessage">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Your Name </label>
                            <input type="text" class="form-control my-cart-card border border-primary rounded"  placeholder="Name"  wire:model="name">
                              @error('name')<p class="text-danger">{{$message}}</p>@enderror
                          </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail3">Your Email</label>
                            <input type="email" class="form-control my-cart-card border border-primary rounded" placeholder="Email" wire:model="email">
                              @error('email')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputurl">Mobile Number</label>
                            <input type="number" class="form-control my-cart-card border border-primary rounded" placeholder=" Mobile Number" wire:model="phone">
                              @error('phone')<p class="text-danger">{{$message}}</p>@enderror
                        </div>  
                        <div class="form-group">
                            <label class="form-label" for="exampleFormControlTextarea1">Your Message</label>
                            <textarea class="form-control my-cart-card border border-primary rounded"  rows="5" wire:model="comment"></textarea>
                            @error('comment')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary rounded">                            <svg data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Send Message" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path d="M21.4354 2.58198C20.9352 2.0686 20.1949 1.87734 19.5046 2.07866L3.408 6.75952C2.6797 6.96186 2.16349 7.54269 2.02443 8.28055C1.88237 9.0315 2.37858 9.98479 3.02684 10.3834L8.0599 13.4768C8.57611 13.7939 9.24238 13.7144 9.66956 13.2835L15.4329 7.4843C15.723 7.18231 16.2032 7.18231 16.4934 7.4843C16.7835 7.77623 16.7835 8.24935 16.4934 8.55134L10.72 14.3516C10.2918 14.7814 10.2118 15.4508 10.5269 15.9702L13.6022 21.0538C13.9623 21.6577 14.5826 22 15.2628 22C15.3429 22 15.4329 22 15.513 21.9899C16.2933 21.8893 16.9135 21.3558 17.1436 20.6008L21.9156 4.52479C22.1257 3.84028 21.9356 3.09537 21.4354 2.58198Z" fill="currentColor"></path>                            </svg>                        </button>
                        
                    </form>
                </div>
            </div>
                    
                   
                 
            </div>
                        
                   
            </div>
        </div>
    </div>
<div>



</div>
</div>

<div class="content-inner mt-5 py-0 ">

            <div class="row">
            <div class="card-header d-flex justify-content-center ">
          
               <h4 class="card-title list-main">Our Team</h4>
               <a  href="" class=""  ><img src="{{asset('foodfun/html/assets/images/layouts/team.gif')}}" class="img-fluid avatar-rounded avatar-35" alt="profile-image"/></a>
            </div>
               <div class="col-lg-2">
                  <div class="card  my-cart-card border border-primary rounded ">
                           <div class="card-body">
                              <div class="text-center">
                              <a href="https://www.linkedin.com/in/aditya-burman-240196/" ><img src="{{asset('foodfun/html/assets/images/layouts/adityaburman.jpg')}}" class="img-fluid avatar-rounded avatar-150 mt-5   border-primary" alt="profile-image"> </a>
                                 
                                 <h6 class="mt-3 heading-title fw-bolder text-primary"> Aditya Burman</h6>
                              </div>
                              <div class="d-flex mt-3 justify-content-center">
                                 <span class=" justify-content-center ">
                                    <a data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Linkedin"  href="https://www.linkedin.com/in/aditya-burman-240196/" class="text-black"  ><img src="{{asset('foodfun/html/assets/images/layouts/linkedin.gif')}}" class="img-fluid avatar-rounded avatar-30" alt="profile-image"/></a>
                                 </span>
                              </div>
                              <div class="d-flex mt-3 ">
                                 <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M21 10.8421C21 16.9172 12 23 12 23C12 23 3 16.9172 3 10.8421C3 4.76697 7.02944 1 12 1C16.9706 1 21 4.76697 21 10.8421Z" stroke="#07143B" stroke-width="1.5"></path>
                                 <circle cx="12" cy="9" r="3" stroke="#07143B" stroke-width="1.5"></circle>
                                 </svg>
                                 <span class="mb-0 ms-3 text-dark fw-bolder">NSTI Bhubaneswar (2019-21)</span>
                              </div>
                           </div>
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="card  my-cart-card border border-primary rounded ">
                           <div class="card-body">
                              <div class="text-center">
                                 <a href="https://www.linkedin.com/in/alauddin-mallick-b037b31a5/">
                                 <img src="{{asset('foodfun/html/assets/images/layouts/allu.jpg')}}" class="img-fluid avatar-rounded avatar-150 mt-5" alt="profile-image">
                                 </a>
                                 
                                 <h6 class="mt-3 heading-title fw-bolder text-primary"> Alauddin Mallick</h6>
                              </div>
                              <div class="d-flex mt-3 justify-content-center">
                                 <span class=" justify-content-center ">
                                    <a data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Linkedin"  href="https://www.linkedin.com/in/alauddin-mallick-b037b31a5/" class="text-black"  ><img src="{{asset('foodfun/html/assets/images/layouts/linkedin.gif')}}" class="img-fluid avatar-rounded avatar-30" alt="profile-image"/></a>
                                 </span>
                              </div>
                              <div class="d-flex mt-3 ">
                                 <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M21 10.8421C21 16.9172 12 23 12 23C12 23 3 16.9172 3 10.8421C3 4.76697 7.02944 1 12 1C16.9706 1 21 4.76697 21 10.8421Z" stroke="#07143B" stroke-width="1.5"></path>
                                 <circle cx="12" cy="9" r="3" stroke="#07143B" stroke-width="1.5"></circle>
                                 </svg>
                                 <span class="mb-0 ms-3 text-dark fw-bolder">NSTI Bhubaneswar (2019-21)</span>
                              </div>
                           </div>
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="card  my-cart-card border border-primary rounded ">
                           <div class="card-body">
                              <div class="text-center">
                                <a href="https://www.linkedin.com/in/amit-kumar-31a26b1a6/">

                                <img src="{{asset('foodfun/html/assets/images/layouts/amit.jpg')}}" class="img-fluid avatar-rounded avatar-150 mt-5" alt="profile-image">
                                </a>
                                
                                 <h6 class="mt-3 heading-title fw-bolder text-primary"> Amit Kumar</h6>
                              </div>
                              <div class="d-flex mt-3 justify-content-center">
                                 <span class=" justify-content-center ">
                                    <a data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Linkedin"  href="https://www.linkedin.com/in/amit-kumar-31a26b1a6/" class="text-black"  ><img src="{{asset('foodfun/html/assets/images/layouts/linkedin.gif')}}" class="img-fluid avatar-rounded avatar-30" alt="profile-image"/></a>
                                 </span>
                              </div>
                              <div class="d-flex mt-3 ">
                                 <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M21 10.8421C21 16.9172 12 23 12 23C12 23 3 16.9172 3 10.8421C3 4.76697 7.02944 1 12 1C16.9706 1 21 4.76697 21 10.8421Z" stroke="#07143B" stroke-width="1.5"></path>
                                 <circle cx="12" cy="9" r="3" stroke="#07143B" stroke-width="1.5"></circle>
                                 </svg>
                                 <span class="mb-0 ms-3 text-dark fw-bolder">NSTI Bhubaneswar (2019-21)</span>
                              </div>
                           </div>
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="card  my-cart-card border border-primary rounded ">
                           <div class="card-body">
                              <div class="text-center">
                               <a href="https://www.linkedin.com/in/anshu-jangid-462a791b0/">
                               <img src="{{asset('foodfun/html/assets/images/layouts/anshu.jpg')}}" class="img-fluid avatar-rounded avatar-150 mt-5" alt="profile-image">
                               </a>
                                 
                                 <h6 class="mt-3 heading-title fw-bolder text-primary"> Anshu Jangid</h6>
                              </div>
                              <div class="d-flex mt-3 justify-content-center">
                                 <span class=" justify-content-center ">
                                    <a data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Linkedin"  href="https://www.linkedin.com/in/anshu-jangid-462a791b0/" class="text-black"  ><img src="{{asset('foodfun/html/assets/images/layouts/linkedin.gif')}}" class="img-fluid avatar-rounded avatar-30" alt="profile-image"/></a>
                                 </span>
                              </div> <br>
                              <div class="d-flex mt-3 ">
                                 <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M21 10.8421C21 16.9172 12 23 12 23C12 23 3 16.9172 3 10.8421C3 4.76697 7.02944 1 12 1C16.9706 1 21 4.76697 21 10.8421Z" stroke="#07143B" stroke-width="1.5"></path>
                                 <circle cx="12" cy="9" r="3" stroke="#07143B" stroke-width="1.5"></circle>
                                 </svg>
                                 <span class="mb-0 ms-3 text-dark fw-bolder">NSTI Indore (2019-21)</span>
                              </div>
                           </div>
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="card  my-cart-card border border-primary rounded ">
                           <div class="card-body">
                              <div class="text-center">
                          <a href="https://www.linkedin.com/in/durga-sahu-0552591a6/">
                          <img src="{{asset('foodfun/html/assets/images/layouts/durga.jpg')}}" class="img-fluid avatar-rounded avatar-150 mt-5" alt="profile-image">
                          </a>
                                 
                                 <h6 class="mt-3 heading-title fw-bolder text-primary">Durga Teli</h6>
                              </div>
                              <div class="d-flex mt-3 justify-content-center">
                                 <span class=" justify-content-center ">
                                    <a data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Linkedin"  href="https://www.linkedin.com/in/durga-sahu-0552591a6/" class="text-black"  ><img src="{{asset('foodfun/html/assets/images/layouts/linkedin.gif')}}" class="img-fluid avatar-rounded avatar-30" alt="profile-image"/></a>
                                 </span>
                              </div><br> 
                              <div class="d-flex mt-3 ">
                                 <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M21 10.8421C21 16.9172 12 23 12 23C12 23 3 16.9172 3 10.8421C3 4.76697 7.02944 1 12 1C16.9706 1 21 4.76697 21 10.8421Z" stroke="#07143B" stroke-width="1.5"></path>
                                 <circle cx="12" cy="9" r="3" stroke="#07143B" stroke-width="1.5"></circle>
                                 </svg>
                                 <span class="mb-0 ms-3 text-dark fw-bolder">NSTI Indore (2019-21)</span>
                                
                              </div> 
                           </div>
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="card  my-cart-card border border-primary rounded ">
                           <div class="card-body">
                              <div class="text-center">
                                <a href=" https://www.linkedin.com/in/krishnasankha/">
                                <img src="{{asset('foodfun/html/assets/images/layouts/kpm.jpg')}}" class="img-fluid avatar-rounded avatar-150 mt-5" alt="profile-image">

                                </a>
                                 
                                 <h6 class="mt-3 heading-title fw-bolder text-primary"> Krishna Pada Mondal</h6>
                              </div>
                              <div class="d-flex mt-3 justify-content-center">
                                 <span class=" justify-content-center ">
                                    <a data-bs-toggle="tooltip" data-bs-placement="right"   data-bs-original-title="Linkedin"  href="https://www.linkedin.com/in/krishnasankha/" class="text-black"  ><img src="{{asset('foodfun/html/assets/images/layouts/linkedin.gif')}}" class="img-fluid avatar-rounded avatar-30" alt="profile-image"/></a>
                                 </span>
                              </div>
                              <div class="d-flex mt-3 ">
                                 <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M21 10.8421C21 16.9172 12 23 12 23C12 23 3 16.9172 3 10.8421C3 4.76697 7.02944 1 12 1C16.9706 1 21 4.76697 21 10.8421Z" stroke="#07143B" stroke-width="1.5"></path>
                                 <circle cx="12" cy="9" r="3" stroke="#07143B" stroke-width="1.5"></circle>
                                 </svg>
                                 <span class="mb-0 ms-3 text-dark fw-bolder">NSTI Bhubaneswar (2019-21)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>



    	