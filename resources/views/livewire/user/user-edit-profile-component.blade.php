<div class="content-inner mt-5 py-0">
<div class="card my-cart-card border border-primary rounded p-3 mt-5">
                <div class="card-header d-flex justify-content-between ">
                    <div class="header-title">
                        <h4 class="card-title">Update Your Profile</h4>
                        @if(Session::has('message'))
                <div class="alert alert-successs" role="alert">{{Session::get('message')}}</div>
                @endif
                    </div>
                </div>
                <div class="card-body">
                    <p></p>

                  <form wire:submit.prevent="updateProfile"> 
                      
                    
                          @if($newimage)
                           <img src="{{$newimage->temporaryUrl()}}" class="img-fluid avatar avatar-100 avatar-rounded" alt="profile-image"><br>
                           @elseif($image)
                           <img src="{{asset('User1/images/profile')}}/{{$image}}" class="img-fluid avatar avatar-100 avatar-rounded" alt="profile-image"><br>
                           @else
                           <img src="{{asset('User1/images/profile/user.png')}}" class="img-fluid avatar avatar-100 avatar-rounded" alt="profile-image">
                           @endif<br>
                           <div class="form-group col-lg-7">
                           <label class="form-label" for="exampleInputText1">Image </label>
                           <input type="file" class="form-control my-cart-card border border-primary rounded" wire:model="newimage" />
                           </div>

                        <div class="form-group col-lg-7">
                            <label class="form-label" for="exampleInputText1">Name </label>
                            <input type="text" class="form-control my-cart-card border border-primary rounded"  wire:model="name"/>
                        </div>
                        <div class="form-group col-lg-7">
                            <label class="form-label" for="exampleInputEmail3">Address 1</label>
                            <input type="text" class="form-control my-cart-card border border-primary rounded"  wire:model="line1"/>
                        </div>
                        <div class="form-group col-lg-7">
                            <label class="form-label" for="exampleInputurl">Addresss 2</label>
                            <input type="text" class="form-control my-cart-card border border-primary rounded"  wire:model="line2"/>
                        </div>
                        <div class="form-group col-lg-7">
                            <label class="form-label" for="exampleInputphone">City </label>
                            <input type="text" class="form-control my-cart-card border border-primary rounded"  wire:model="city"/>
                        </div>
                        <div class="form-group col-lg-7">
                            <label class="form-label" for="exampleInputNumber1">Province</label>
                            <input type="text" class="form-control my-cart-card border border-primary rounded"  wire:model="province" />
                        </div>
                        <div class="form-group col-lg-7">
                            <label class="form-label" for="exampleInputPassword3">Zipcode</label>
                            <input type="text" class="form-control my-cart-card border border-primary rounded"  wire:model="zipcode" />
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary rounded">Submit</button>
                   
                        <a href="{{route('user.profile')}}" class="btn btn-danger rounded" >Go Back</a> 
                   
                    </form>
                </div>
            </div>
        
       
       
</div>
          
      