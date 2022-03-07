<section>
<div class="content-inner mt-5 py-0">
<div>
    <div class="row ">
        <div class="col-sm-12 col-lg-12">
            <div class="card my-cart-card border border-primary rounded p-3 mt-5">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Add New Food Details</h4>
                        @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    </div>
                    <div class="header-title-right">
               
                       <a href="{{route('admin.products')}}" class="badge bg-primary">View All Food Details</a>
            </div>
                </div>
                <div class="card-body  ">
               
                    <form method="post" enctype="multipart/form-data" wire:submit.prevent="addProduct">@csrf
             
                        <div class="form-group " >
                            <label class="form-label" for=""> Food Name</label>
                            <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="" placeholder="Add Food Name" wire:model="name" wire:keyup="generateslug" required>
                            @error('name') <p class="text-danger">{{$message}}</p>@enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="">Food Slug</label>
                            <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="" placeholder=" Food Slug" wire:model="slug"   required>
                        @error('slug') <p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group" wire:ignore>
                            <label class="form-label" for="exampleInputurl">Food Info 1</label>
                            <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="short_description" placeholder="Add Food Info" wire:model="short_description" required>
                        @error('short_description') <p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group" wire:ignore>
                            <label class="form-label" for="exampleInputphone">Food Info 2</label>
                            <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="description" placeholder="Add Food Info" wire:model="description" required>
                        @error('description') <p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                        <label class="form-label" for=""> Food Regular Price</label>
                        <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="" placeholder="Add Food Price" wire:model="regular_price" required>
                        @error('regular_price') <p class="text-danger">{{$message}}</p>@enderror
                      </div>
                      <div class="form-group">
                        <label  class="form-label" for=""> Food Sales Price</label>
                        <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="" placeholder="Add Food Sales Price" wire:model="sales_price"  >
                        @error('sales_price') <p class="text-danger">{{$message}}</p>@enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label"  for=""> Food SKU</label>
                        <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="" placeholder="Add Food SKU" wire:model="SKU" required>
                        @error('SKU') <p class="text-danger">{{$message}}</p>@enderror
                      </div>
                      <div class="form-group">
                            <label class="form-label">Food Availibility</label>
                            <select class="form-select mb-3 shadow-none my-cart-card border border-primary rounded" wire:model="stock_status">
                                            <option value="instock">Availible</option>
                                            <option value="outofstock">Not Availible</option>
                            </select>
                            @error('stock_status') <p class="text-danger">{{$message}}</p>@enderror
                      </div>
                       <div class="form-group">
                        <label class="form-label" for=""> Type of Food</label>
                                <select class="form-select mb-3 shadow-none  my-cart-card border border-primary rounded" wire:model="featured">
                                    <option value="0">Non Vegetarian</option>
                                    <option value="1">Vegetarian</option>
                                </select>
                      </div>

                      <div class="form-group">
                        <label class="form-group " for=""> Food Quantity</label>
                        <input type="text" class="form-control input-md my-cart-card border border-primary rounded" id="" placeholder="Add Food Quantity" wire:model="quantity" required>
                        @error('quantity') <p class="text-danger">{{$message}}</p>@enderror
                      </div>

                      <div class="form-group">
                        <label class="form-label" for=""> Food Image</label>
                      
                        @if($image)
                        <img class="avatar-100 rounded-pill" src="{{$image->temporaryURL()}}" alt="">
                        @endif
                        
               
                        <input class="form-control my-cart-card border border-primary rounded" type="file" id="image"  wire:model="image">
                      
                        
                       
                   
                        @error('image') <p class="text-danger">{{$message}}</p>@enderror
            
                      <div class="form-group">
                        <label class="form-label ">Food Category</label>
                        <select class="form-select mb-3 shadow-none my-cart-card border border-primary rounded" wire:model="category_id" >
                            <option selected="">Select Food Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                           @error('category_id') <p class="text-danger">{{$message}}</p>@enderror
                        </select>
                    </div>
                </div>
                        <button type="submit" class="btn btn-primary rounded">Submit</button>
                        
                        <a href="{{route('admin.products')}}" class="btn btn-danger rounded">View All Food Details</a>
                    </form>
                </div>
            </div>
 
          
            
        </div>
        
           
            
        
    </div>
</div>
      </div>

</section>

    



    	

      
@push('scripts')
<script>
  $(function(){
    tinymce.init({
      selector:'#short_description',
      setup:function(editor){
        editor.on('Change',function(e){
          tinyMCE.triggerSave();
          var sd_data = $('#short_description').val();
          @this.set('short_description',sd_data);
        });
      }
    });
    tinymce.init({
      selector:'#description',
      setup:function(editor){
        editor.on('Change',function(e){
          tinyMCE.triggerSave();
          var d_data = $('#description').val();
          @this.set('description',d_data);
        });
      }
    });
  });
</script>
@endpush
