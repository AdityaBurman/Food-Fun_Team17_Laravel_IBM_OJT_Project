
<div class="content-inner mt-5 py-0 ">
     
<section>





<section class="col-md-12 col-lg-12" >
<div class="card my-cart-card my-cart-card border border-primary rounded p-3 mt-5">

      <div class="card-header d-flex align-items-center justify-content-center pb-0  border-bottom-0">
      <form class="" method="">
          @if(Cart::instance('cart')->count()>0)
            <h4 class="list-main">Your Food Cart</h4>
            @if(Session::has('success_message'))
								<div class="alert alert-success">
								<strong>Success</strong> {{Session::get('success_message')}}
							    </div>
						  @endif
            
          
          
            @if(Cart::instance('cart')->count()>0)
            @foreach(Cart::instance('cart')->content() as $item)
         </div>
         
         <div class="card-body">
         
            <div class="rounded-pill bg-soft-primary iq-my-cart">
           
               <div class="d-flex align-items-center justify-content-between profile-img4">
                  <div class="profile-img11">
                      <img src="{{asset('User1/images/products')}}/{{$item->model->image}}" class="img-fluid rounded-pill avatar-115 blur-shadow position-end" alt="img">
                      <img src="{{asset('User1/images/products')}}/{{$item->model->image}}" class="img-fluid rounded-pill avatar-115" alt="img">
                  </div>
                  <div class="d-flex align-items-center profile-content">
                     <div>
                     <h6 class="mb-1 heading-title fw-bolder" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</h6>
                        <p class="mb-0 text-dark">₹ {{$item->model->regular_price}}</p> 
                        
                        <div class="d-flex  justify-content-between ">
                           <a class="" href="#"  wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"><svg   width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.165 11.9934L13.1634 11.6393C13.1513 10.2348 13.0666 8.98174 12.9206 8.18763C12.9206 8.17331 12.7613 7.38572 12.6599 7.12355C12.5006 6.74463 12.2126 6.42299 11.8515 6.2192C11.5624 6.0738 11.2592 6 10.9417 6C10.6922 6.01157 10.2806 6.13714 9.98692 6.24242L9.74283 6.33596C8.12612 6.97815 5.03561 9.07656 3.85199 10.3598L3.76473 10.4495L3.37527 10.8698C3.12982 11.1915 3 11.5847 3 12.0077C3 12.3866 3.11563 12.7656 3.3469 13.0718C3.41614 13.171 3.52766 13.2983 3.62693 13.4058L4.006 13.8026C5.31046 15.1243 8.13485 16.9782 9.59883 17.5924C9.59883 17.6057 10.5086 17.9857 10.9417 18H10.9995C11.6639 18 12.2846 17.6211 12.6021 17.0086C12.6888 16.8412 12.772 16.5132 12.8352 16.2252L12.949 15.6813C13.0788 14.8067 13.165 13.465 13.165 11.9934ZM19.4967 13.5183C20.3269 13.5183 21 12.8387 21 12.0004C21 11.1622 20.3269 10.4825 19.4967 10.4825L15.7975 10.8097C15.1463 10.8097 14.6183 11.3417 14.6183 12.0004C14.6183 12.6581 15.1463 13.1912 15.7975 13.1912L19.4967 13.5183Z" fill="currentColor"></path>                            </svg></a>
                           <small class="text-dark ms-6"><h4> {{$item->qty}} </h4>
                           </small>
                           <a class=""  href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')" ><svg width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.0066L10.8366 12.3607C10.8487 13.7652 10.9334 15.0183 11.0794 15.8124C11.0794 15.8267 11.2387 16.6143 11.3401 16.8764C11.4994 17.2554 11.7874 17.577 12.1485 17.7808C12.4376 17.9262 12.7408 18 13.0583 18C13.3078 17.9884 13.7194 17.8629 14.0131 17.7576L14.2572 17.664C15.8739 17.0218 18.9644 14.9234 20.148 13.6402L20.2353 13.5505L20.6247 13.1302C20.8702 12.8085 21 12.4153 21 11.9923C21 11.6134 20.8844 11.2344 20.6531 10.9282C20.5839 10.829 20.4723 10.7017 20.3731 10.5942L19.994 10.1974C18.6895 8.87572 15.8652 7.02183 14.4012 6.40756C14.4012 6.39435 13.4914 6.01432 13.0583 6H13.0005C12.3361 6 11.7154 6.37892 11.3979 6.99137C11.3112 7.1588 11.228 7.48678 11.1648 7.77483L11.051 8.31871C10.9212 9.19332 10.835 10.535 10.835 12.0066ZM4.50325 10.4817C3.67308 10.4817 3 11.1613 3 11.9996C3 12.8378 3.67308 13.5175 4.50325 13.5175L8.20248 13.1903C8.85375 13.1903 9.38174 12.6583 9.38174 11.9996C9.38174 11.3419 8.85375 10.8088 8.20248 10.8088L4.50325 10.4817Z" fill="currentColor"></path>                            </svg>                        
                           </div>
                          
                        </div>
                   
                  </div>
                 
                
                  <div class="d-flex  justify-content-between ">
                        
                          
                       
                          
                  </div>
                  
                    <div class="me-4 text-top">
                  
                      
                     <span class="mb-1">
                        <a href="#" wire:click.prevent="switchToSaveForLater('{{$item->rowId}}')" >
                        <svg data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Save For later"  width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1535 16.64L14.995 13.77C15.2822 13.47 15.2822 13 14.9851 12.71C14.698 12.42 14.2327 12.42 13.9455 12.71L12.3713 14.31V9.49C12.3713 9.07 12.0446 8.74 11.6386 8.74C11.2327 8.74 10.896 9.07 10.896 9.49V14.31L9.32178 12.71C9.03465 12.42 8.56931 12.42 8.28218 12.71C7.99505 13 7.99505 13.47 8.28218 13.77L11.1139 16.64C11.1832 16.71 11.2624 16.76 11.3515 16.8C11.4406 16.84 11.5396 16.86 11.6386 16.86C11.7376 16.86 11.8267 16.84 11.9158 16.8C12.005 16.76 12.0842 16.71 12.1535 16.64ZM19.3282 9.02561C19.5609 9.02292 19.8143 9.02 20.0446 9.02C20.302 9.02 20.5 9.22 20.5 9.47V17.51C20.5 19.99 18.5 22 16.0446 22H8.17327C5.58911 22 3.5 19.89 3.5 17.29V6.51C3.5 4.03 5.4901 2 7.96535 2H13.2525C13.5 2 13.7079 2.21 13.7079 2.46V5.68C13.7079 7.51 15.1931 9.01 17.0149 9.02C17.4333 9.02 17.8077 9.02318 18.1346 9.02595C18.3878 9.02809 18.6125 9.03 18.8069 9.03C18.9479 9.03 19.1306 9.02789 19.3282 9.02561ZM19.6045 7.5661C18.7916 7.5691 17.8322 7.5661 17.1421 7.5591C16.047 7.5591 15.145 6.6481 15.145 5.5421V2.9061C15.145 2.4751 15.6629 2.2611 15.9579 2.5721C16.7203 3.37199 17.8873 4.5978 18.8738 5.63395C19.2735 6.05379 19.6436 6.44249 19.945 6.7591C20.2342 7.0621 20.0223 7.5651 19.6045 7.5661Z" fill="currentColor"></path>              
                        </svg></a>
                     </span>
                      <span class="mb-1">
                     <a href="#"  wire:click.prevent="destroy('{{$item->rowId}}')" >
                        <svg data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Remove"  width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M19.6449 9.48924C19.6449 9.55724 19.112 16.298 18.8076 19.1349C18.6169 20.8758 17.4946 21.9318 15.8111 21.9618C14.5176 21.9908 13.2514 22.0008 12.0055 22.0008C10.6829 22.0008 9.38936 21.9908 8.1338 21.9618C6.50672 21.9228 5.38342 20.8458 5.20253 19.1349C4.88936 16.288 4.36613 9.55724 4.35641 9.48924C4.34668 9.28425 4.41281 9.08925 4.54703 8.93126C4.67929 8.78526 4.86991 8.69727 5.07026 8.69727H18.9408C19.1402 8.69727 19.3211 8.78526 19.464 8.93126C19.5973 9.08925 19.6644 9.28425 19.6449 9.48924" fill="#E60A0A"></path>
                        <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="#E60A0A"></path>
                        </svg>
                     </a>
                       
                     </span>
                     <p class="mb-4 text-dark">₹ {{$item->subtotal}}</p>
                  </div>
               </div>
               
            </div>
            @endforeach 
               @else
               <p> No Food item in your cart</p>
					        @endif


          
           
            <div class="my-cart-body">
               <div class="border border-primary rounded p-3 mt-5">
                  <div class="d-flex justify-content-center align-items-center mb-3">
                   
                 
                    
                     <h6 class="heading-title  fw-bolder text-primary">Cart Total</h6>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <h6 class="heading-title fw-bolder">Final</h6>
                     <h6 class="heading-title fw-bolder text-primary">₹ {{Cart::instance('cart')->subtotal()}}</h6>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <h6 class="heading-title fw-bolder">Tax</h6>
                     <h6 class="heading-title fw-bolder text-primary">₹ {{Cart::instance('cart')->tax()}}</h6>
                  </div>
                  <div class="d-flex justify-content-between align-items-center ">
                     <h6 class="heading-title fw-bolder">Total</h6>
                     <h6 class="heading-title fw-bolder text-primary">₹ {{Cart::instance('cart')->total()}}</h6>
                  </div>
               </div>
               <div class="text-center mt-3">
              
                  <div class="justify-content-center align-items-center">
                     <ul class="list-inline p-0 m-2 text-center">
                        <li class="d-flex align-items-center justify-content-center mb-1s">
                           <div class="btn-group btn-group-toggle btn-group-edges me-2 btn-group1"> 
                              <a class="button btn button-icon btn-primary rounded-pill"   href="#" wire:click.prevent="destroyAll()" ><h6>Clear Cart</h6></a>
                            
                           </div>
                          
                           <div class="btn-group btn-group-toggle btn-group-edges me-2 btn-group2"> 
                              <a class="button btn button-icon btn-primary rounded-pill" href="#" wire:click.prevent="checkout"  ><h6>Proceed To Checkout</h6></a>
                             
                           </div>
                          
                        </li>
                   
                    
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         </form>
      </div>

      <div class="card my-cart-card my-cart-card border border-primary rounded p-3 mt-5">
         <div class="card-header d-flex align-items-center justify-content-center pb-0  border-bottom-0">
         <form class="" method="">
            <p class="list-main">{{Cart::instance('cart')->instance('saveForLater')->count()}} Food item save for later</p>
            @if(Session::has('s_success_message'))
								  <div class="alert alert-success">
							    	<strong>Success</strong> {{Session::get('s_success_message')}}
							    </div>
						@endif
            
            @if(Cart::instance('saveForLater')->count()>0)
				    @foreach(Cart::instance('saveForLater')->content() as $item)
         </div>
         <div class="card-body">
            <div class="rounded-pill bg-soft-primary iq-my-cart">
               <div class="d-flex align-items-center justify-content-between profile-img4">
                  <div class="profile-img11">
                      <img src="{{asset('User1/images/products')}}/{{$item->model->image}}" class="img-fluid rounded-pill avatar-115 blur-shadow position-end" alt="img">
                      <img src="{{asset('User1/images/products')}}/{{$item->model->image}}" class="img-fluid rounded-pill avatar-115" alt="img">
                  </div>
                  <div class="d-flex align-items-center profile-content">
                     <div>
                     <h6 class="mb-1 heading-title fw-bolder" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</h6>
                       

                     
                        <span class="d-flex align-items-center "><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect x="0.875" y="2.05469" width="1.66667" height="10" rx="0.833333" transform="rotate(-45 0.875 2.05469)" fill="#EA6A12"></rect>
                           <rect x="2.05469" y="9.125" width="1.66666" height="10" rx="0.833332" transform="rotate(-135 2.05469 9.125)" fill="#EA6A12"></rect>
                           </svg><small class="text-dark ms-1">1</small>
                        </span>
                     </div>
                  </div>

                  <span class="">
                     <a href="#" class="" href="#" wire:click.prevent="moveToCart('{{$item->rowId}}')"  >
                     <svg data-bs-toggle="tooltip" data-bs-placement="bottom"   data-bs-original-title="Move to cart" width="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0066 13.165L12.3607 13.1634C13.7652 13.1513 15.0183 13.0666 15.8124 12.9206C15.8267 12.9206 16.6143 12.7613 16.8764 12.6599C17.2554 12.5006 17.577 12.2126 17.7808 11.8515C17.9262 11.5624 18 11.2592 18 10.9417C17.9884 10.6922 17.8629 10.2806 17.7576 9.98692L17.664 9.74283C17.0218 8.12612 14.9234 5.03561 13.6402 3.85199L13.5505 3.76473L13.1302 3.37527C12.8085 3.12982 12.4153 3 11.9923 3C11.6134 3 11.2344 3.11563 10.9282 3.3469C10.829 3.41614 10.7017 3.52766 10.5942 3.62693L10.1974 4.006C8.87572 5.31046 7.02183 8.13485 6.40756 9.59883C6.39435 9.59883 6.01432 10.5086 6 10.9417V10.9995C6 11.6639 6.37892 12.2846 6.99137 12.6021C7.1588 12.6888 7.48678 12.772 7.77483 12.8352L8.31871 12.949C9.19332 13.0788 10.535 13.165 12.0066 13.165ZM10.4817 19.4967C10.4817 20.3269 11.1613 21 11.9996 21C12.8378 21 13.5175 20.3269 13.5175 19.4967L13.1903 15.7975C13.1903 15.1463 12.6583 14.6183 11.9996 14.6183C11.3419 14.6183 10.8088 15.1463 10.8088 15.7975L10.4817 19.4967Z" fill="currentColor"></path>                            </svg>                        
                     </a>
                        </span>



                
                  <div class="me-4 text-end">
                     <span class="mb-1">
                     <a href="#" wire:click.prevent="deleteFromSaveForLater('{{$item->rowId}}')" >
                        <svg data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Remove"  width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M19.6449 9.48924C19.6449 9.55724 19.112 16.298 18.8076 19.1349C18.6169 20.8758 17.4946 21.9318 15.8111 21.9618C14.5176 21.9908 13.2514 22.0008 12.0055 22.0008C10.6829 22.0008 9.38936 21.9908 8.1338 21.9618C6.50672 21.9228 5.38342 20.8458 5.20253 19.1349C4.88936 16.288 4.36613 9.55724 4.35641 9.48924C4.34668 9.28425 4.41281 9.08925 4.54703 8.93126C4.67929 8.78526 4.86991 8.69727 5.07026 8.69727H18.9408C19.1402 8.69727 19.3211 8.78526 19.464 8.93126C19.5973 9.08925 19.6644 9.28425 19.6449 9.48924" fill="#E60A0A"></path>
                        <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="#E60A0A"></path>
                        </svg>
                     </a>
                      
                     </span>
                     <p class="mb-0 text-dark">₹ {{$item->model->regular_price}}</p>
                  </div>
               </div>
</div>
               @endforeach 
                
				@else
					
					@endif
              
            @else 
          <div class="text-center" style="padding:30px 0;">
            <h1> Your Cart is empty </h1>
          
            <span style='font-size:70px;'>&#128533;</span>
            <p> Add Food items to it now </p>
              <a href="/menu" class="btn btn-primary rounded-pill" > Food Menu &#128523;</a> 
            
          

          </div>
          @endif
          <br><br>
            </div>
           
            </form>
         </div>
      </div>
<br><br><br><br><br><br><br><br><br><br><br><br>





















