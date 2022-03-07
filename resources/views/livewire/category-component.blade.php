
<div class="content-inner mt-5 py-0 ">
       
<section>
	  <div class="card-transparent bg-transparent mb-0">
         <div class="card-header border-0 m-2 mb-5 ">
            <div class="d-flex justify-content-between">
               <h3>{{$category_name}}</h3>
              <!-- <a href="#" class="text-dark">View Food categories

                  <svg width="24" height="24"  class="ms-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <rect width="24" height="24" rx="12" fill="#EA6A12"/>
                     <path d="M10.25 8.5L13.75 12L10.25 15.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
					 
                         <div class="card-body ">
                         
                             <div class="d-flex profile-img1">
                                 <div class="profile-img31">
                                     
                                 <a href="{{route('product.details',['slug'=>$product->slug])}}" ><img src="{{asset('User1/images/products')}}/{{$product->image}}" class="img-fluid rounded-pill avatar-130 hover-image" alt="profile-image"></a>
                                     
                                 </div>
                                 <div>
                                 <span class="text-primary">
                               <svg data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Vegetarian Food"  xmlns="http://www.w3.org/2000/svg" width="15" viewBox="0 0 24 24" fill="none">                                <circle cx="12" cy="12" r="8" fill="green"></circle>                            </svg>                        
                                  <small>Top of the week</small>
                                    
                                     <h6 class="mb-3 mt-3 heading-title fw-bolder">{{$product->name}}</h6>
                                    <!-- <p class="mt-2 mb-0 pb-4 iq-calories small">60 Calories</p>-->
                                     <p class="mt-2 mb-0 pb-4 iq-calories small">{!! $product->short_description !!}</p>
                                     <div class="d-flex mt-2">
                                         <span class="text-primary me-4">₹ {{$product->regular_price}}</span>
                                         <div>
                            
                                         <a href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"></a>
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
												

										<a href="#"  wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="black"></path>                            </svg>                        </a>

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

   </div>
   
</section>




