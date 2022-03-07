

<li class="nav-item dropdown">
@if(Cart::instance('cart')->count()>0)
                  <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
                  <svg  width="20" data-bs-toggle="tooltip" data-bs-placement="bottom"   data-bs-original-title="Food Cart"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="orange"></path></svg>
                      <span class="position-relative top-10 start-1 p-0 translate-middle badge rounded-pill text-black rounded-circle">
                      {{Cart::instance('cart')->count()}}
                    <span class="visually-hidden"></span>  
                  </a>
@endif       


                  <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="notification-drop">
                      <div class="card  border border-primary rounded shadow-none m-0">
                        <div class="card-header d-flex justify-content-between bg-primary mx-0 px-4">
                            <div class="header-title">
                            <a href="/cart">
                            <h5 class="mb-0 text-white">Food Items in Your cart                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="white"></path>                            </svg>                        </h5>
                           </a>
                            </div>
                        </div>
                        @foreach(Cart::instance('cart')->content() as $item)
					
                        <div class="card-body p-0">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img class="avatar-40 rounded-pill" src="{{asset('User1/images/products')}}/{{$item->model->image}}" alt="">
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">{{$item->model->name}}</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">₹ {{$item->model->regular_price}}</p>
                                        <span class="quantity ml-3">{{$item->qty}}</span>
                                        <small class="float-end font-size-12">Total: ₹ {{$item->subtotal}}</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
							
                        </div>
						@endforeach 
                        <div class="text pl-3">
            <p class="mb-0" align="center"><a href="#" class="price">Sub Total:₹ {{Cart::subtotal()}}</a>
         
            
            <p class="mb-0" align="center"><a href="#" class="price">Total:₹ {{Cart::total()}}</a> 
            <a class="dropdown-item text-center btn-link d-block w-100" href="{{route('product.cart')}}">
				    	View All
				    	<span class="ion-ios-arrow-round-forward"></span>
				    </a>
            </div>
                       
                     
                          
                        </div>
                      
                  </div>
                </li>