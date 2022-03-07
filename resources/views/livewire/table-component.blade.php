
<div class="content-inner mt-5 py-0">
<div class="col-lg-12">
            <div class="card my-cart-card border border-primary rounded ">
                <div class="card-header border-bottom-0 pb-0 ">
                    <h2 class="card-title">Reserve a Table</h2>
                   
                </div>
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                <div class="card-body ">
                    <div class="row">
                        <div class="col-lg-12 col-xl-8  mb-4 mt-xl-0">
                              
                            <img src="{{asset('foodfun/html/assets/images/layouts/layout.jpg')}}" class="img-fluid rounded" alt="image">
                        </div>
                        <div class="col-lg-12 col-xl-4">
                            
                        <div class="card my-cart-card border border-primary rounded ">
                <div class="card-header d-flex justify-content-center">
                    <div class="header-title">
                        <h4 class="card-title">Reserve a Table</h4>
                       
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="sendMessage">
                        <div class="form-group">
                            <label class="form-label" for="">Name</label>
                            <input type="text" class="form-control my-cart-card border border-primary rounded" id="" value="" placeholder="Enter Name"  wire:model="name">
                            @error('name')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="">Email ID</label>
                            <input type="email" class="form-control my-cart-card border border-primary rounded" id="" value="" placeholder="Enter Email" wire:model="email">
                            @error('email')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="">Mobile No</label>
                            <input type="number" class="form-control my-cart-card border border-primary rounded" id="" value="" wire:model="phone">
                            @error('phone')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="">No. of Guest</label>
                            <input type="number" class="form-control my-cart-card border border-primary rounded" id="" value="" wire:model="guest">
                            @error('guest')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="">Select Date</label>
                            <input type="date" class="form-control my-cart-card border border-primary rounded" id="" value="" wire:model="date">
                            @error('date')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="">Select Time</label>
                            <input type="time" class="form-control my-cart-card border border-primary rounded" id="" value="" wire:model="time">
                            @error('time')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Select Table Type</label>
                            <select class="form-select mb-3 shadow-none my-cart-card border border-primary rounded" wire:model="table"> 
                                <option value="circle">Circle</option>
                                <option value="square">Square</option>
                                <option value="rectangle">Rectangle</option>
                            </select>
                            @error('table')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="">Your Message</label>
                            <textarea class="form-control my-cart-card border border-primary rounded" id="" rows="5" wire:model="comment"></textarea>
                            @error('comment')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary rounded">Submit</button>
                        <button type="submit" class="btn btn-danger rounded">cancel</button>
                    </form>
                </div>
            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

























      </div>