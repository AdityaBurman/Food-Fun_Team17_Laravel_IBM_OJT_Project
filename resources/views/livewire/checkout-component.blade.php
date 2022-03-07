
<div class="content-inner mt-5 py-0 ">
        



  
    	<div class="card my-cart-card border border-primary rounded p-3 mt-5">
    		<div class="row justify-content-center">
          <div class="col-xl-10">
		  <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();>
			<form  class="billing-form">
							<h3 class="mb-4 billing-heading">Enter Your Credentials</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control my-cart-card border border-primary rounded" placeholder="" wire:model="firstname">
					  @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control my-cart-card border border-primary rounded" placeholder="" wire:model="lastname">
					  @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
	                </div>
                </div>
				<div class="col-md-6">
						<div class="form-group">
							<label for="phone">Mobile No</label>
						<input type="number" class="form-control my-cart-card border border-primary rounded" placeholder="" wire:model="mobile">
						@error('mobile') <span class="text-danger">{{$message}}</span> @enderror
						</div>
	            	 </div>
					 <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control my-cart-card border border-primary rounded" placeholder="" wire:model="email">
					  @error('email') <span class="text-danger">{{$message}}</span> @enderror
	                </div>
                	</div>
					
                <div class="w-100"></div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Address 1</label>
	                  <input type="text" class="form-control my-cart-card border border-primary rounded" placeholder="House number and street name" wire:model="line1">
					  @error('line1') <span class="text-danger">{{$message}}</span> @enderror
	                </div>
		            </div>
					<div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Address 2</label>
	                  <input type="text" class="form-control my-cart-card border border-primary rounded" placeholder="House number and street name" wire:model="line2">
					  @error('line2') <span class="text-danger">{{$message}}</span> @enderror
	                </div>
		            </div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control my-cart-card border border-primary rounded" placeholder="" wire:model="city">
					  @error('city') <span class="text-danger">{{$message}}</span> @enderror
	                </div>
		            </div>
					<div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Province</label>
	                  <input type="text" class="form-control my-cart-card border border-primary rounded" placeholder="" wire:model="province">
					  @error('province') <span class="text-danger">{{$message}}</span> @enderror
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">ZIP *</label>
	                  <input type="text" class="form-control my-cart-card border border-primary rounded" placeholder="" wire:model="zipcode">
					  @error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
	                </div>
		            </div>
		            <div class="w-100"></div>
		            
	             
               
                </div>
             </div>
	          



	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
						  @if(Session::has('checkout'))
	          			<p class="d-flex">
							 
		    						<span>Subtotal</span>
		    						<span>₹ {{Session::get('checkout')['subtotal']}}</span>
		    					</p>
		    					
								<p class="d-flex">
		    						<span>Taxes & Charges</span>
		    						<span>₹ {{Session::get('checkout')['tax']}}</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>₹ 0.00</span>
		    					</p>
								<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>₹ 0.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price badge bg-success">
		    						<span class=""> Total</span>
		    						<span>₹ {{Session::get('checkout')['total']}}</span>
		    					</p>
								@endif
								</div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
						  		<label class="choose-payment-method">
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio" >
											   <label><input type="radio" name="optradio" class="mr-2" disabled > UPI Payment (Disabled)</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input  type="radio"  name="optradio" class="mr-2" disabled> Card Payment (Disabled)</label>
											   
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input wire:model="paymentmode" type="radio" value="cod" name="optradio" class="mr-2"> Cash Payment</label>
											   
											</div>
										</div>
									</div>
									
								</label>
								@error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror
								
									<div class="form-group">
										
										@if($errors->isEmpty())
										<div wire:ignore id="processing" style="font-size:22px; margin-botton:20px;padding-left:37px;color:orange;display:none;">
											<i class="fa faspinner fa-pulse fa-fw"></i>
											<span> Processing...... </span>
										</div>
										@endif
										<button type="submit" href="#" wire:submit.prevent="placeOrder" class="btn btn-primary rounded-pill py-3 px-4">Place an order</button>
									</div>
								
									
								</div>
								</form><!-- END -->
							
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
    	</div>























  
    	