
   

<div class="content-inner mt-5 py-0 ">
<div>
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card my-cart-card border border-primary rounded p-3 mt-5">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Add New Food Categories</h4>
                        @if(Session::has('message'))
                          <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                    </div>
                    
                    <div class="header-title-right">
                    <a href="{{route('admin.categories')}}" class="badge bg-primary">Food Category</a> 
                    </div>
                   
                </div>
                <div class="card-body">  
                    <form class="forms-sample" wire:submit.prevent="storeCategory">
                      <div class="form-group">
                        <label for=""> Category Name</label>
                        <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="" placeholder=" Category Name" wire:model="name" wire:keyup="generateslug" required>
                        @error('name') <p class="text-danger">{{$message}}</p>@enderror
                      </div>
                      <div class="form-group">
                        <label for="">Category Slug</label>
                        
                        <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="" placeholder="Category Slug" wire:model="slug" required>
                        @error('slug') <p class="text-danger">{{$message}}</p>@enderror
                      </div>

                      <button type="submit" class="btn btn-primary rounded">Submit</button>
                      <a href="{{route('admin.categories')}}" class="btn btn-danger rounded" >Go back</a> 
                      
                    </form>
                </div>
            </div>     
          </div>
      </div>
</div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  











    

    



    	

      
   