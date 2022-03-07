
<section>
      
	  <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/" >Home <i class="fa fa-chevron-right"></i></a></span> <span>Food Menu <i class="fa fa-chevron-right"></i></span><span> Cart <i class="fa fa-chevron-right"></i></span></p>
	<h2 class="mb-0 bread">Your Food Cart &#128523;</h2>
 




<div class="ftco-section">

    <div class="container" style="pading:30px 0;">
    <div class="row">
        <div class="col-md-12">
    
											<div id="review_form">
                                                @if(Session::has('message'))
                                                    <p class="alart alert-success" role="alert">{{Session::get('message')}}</p>
                                                    @endif
												<div id="respond" class="comment-respond"> 

													<form wire:submit.prevent="addReview"  href="#" class="comment-form" novalidate="">
                                                  
														<p class="comment-notes">
															<span id="">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
														</p>
                                                        <div class="col-lg-6 mb-5 img d-flex ftco-animate">
    				<a href="{{asset('User1/images')}}/{{$orderItem->product->image}}" class="image-popup prod-img-bg"><img src="{{asset('User1/images')}}/{{$orderItem->product->image}}" height="200" width="200" class="img-fluid" alt="Images"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{$orderItem->product->name}}</h3>
														<div class="comment-form-rating">
															<span>Add Your rating</span>
															<p class="stars">
																
																<label for="rated-1"></label>
																<input type="radio"  name="rating" value="1" wire:model="rating">
																<label for="rated-2"></label>
																<input type="radio" name="rating" value="2" wire:model="rating">
																<label for="rated-3"></label>
																<input type="radio" name="rating" value="3" wire:model="rating">
																<label for="rated-4"></label>
																<input type="radio" name="rating" value="4" wire:model="rating">
																<label for="rated-5"></label>
																<input type="radio" name="rating" value="5" wire:model="rating">
                                                                @error('rating') <span class="text-danger">{{$message}}</span> @enderror
                                                            </p>
														</div>
														
														<p class="comment-form-comment">
															<label for="comment">Your review <span class="required">*</span>
															</label>
															<textarea name="comment" cols="45" rows="8" wire:model="comment"></textarea>
                                                            @error('comment') <span class="text-danger">{{$message}}</span> @enderror
                                                        </p>
														<p class="form-submit">
															<input name="submit" type="submit" id="" class="submit" value="Submit">
														</p>
													</form>

												</div><!-- .comment-respond-->
											</div><!-- #review_form -->
										</div><!-- #review_form_wrapper -->
        </div>
    </div>
</div>

</div>
</div>
</section