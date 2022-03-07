
   
<div>

<div class="content-inner mt-5 py-0">
<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card my-cart-card border border-primary rounded ">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Update Your Password</h4>
                    </div>
                </div>
                <div class="card-body">
                <p>Stay connected with us</p>
                           @if(Session::has('password_success'))
                           <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                           @endif
                           @if(Session::has('password_error'))
                           <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                           @endif
                        <form class="form-horizontal" wire:submit.prevent="changePassword">
                 
                        <div class="row">
                           
                      
                         
                           <div class="col-lg-7">
                              <div class="form-group">
                                 <label for="password" class="form-label">Current Password</label>
                                 
                                 <input type="password" class="form-control form-control-sm my-cart-card border border-primary rounded"  wire:model="current_password" aria-describedby="password" placeholder=" ">
                                       @error('current_password')<p class="text-danger">{{$message}}</p> @enderror
                            
                              </div>
                           </div>
                           <div class="col-lg-7">
                              <div class="form-group ">
                                 <label for="password" class="form-label">New Password</label>
                               
                                 <input type="password" class="form-control form-control-sm my-cart-card border border-primary rounded"  wire:model="password" aria-describedby="password" placeholder=" ">
                                       @error('password')<p class="text-danger">{{$message}}</p> @enderror
                              </div>
                           </div>
                           <div class="col-lg-7">
                              <div class="form-group">
                                 <label for="confirm-password" class="form-label">Confirm Password</label>
                                 <input type="password" class="form-control form-control-sm my-cart-card border border-primary rounded" wire:model="password_confirmation" aria-describedby="password" placeholder=" ">
                                       @error('password_confirmation')<p class="text-danger">{{$message}}</p> @enderror
                              </div>
                           </div>
                        
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded">Submit</button>
                       
                        <a href="{{route('user.profile')}}" class="btn btn-danger rounded" >Cancel</a> 
                        </div>
                       
                       
                       
                        
                     </form>
                </div>
            </div>
           
        
        
            </div>
        </div>
     
    </div>
</div>
      </div><br><br><br><br><br><br><br><br><br>><br>

