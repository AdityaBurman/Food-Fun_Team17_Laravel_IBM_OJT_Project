<div class="content-inner mt-5 py-0">

        <div class="col-lg-12">
            <div class="card order-history-card py-0 my-cart-card border border-primary rounded p-3 mt-5">
            
                <div class="card-body">
                <div class="card-header d-flex align-items-center justify-content-center p-0 m-0 border-bottom-0">
                    <div class="header-title">
                        <h4 class="card-title">Order Details</h4>
                    </div>
                    
                </div>
                    <div class="d-flex align-items-center justify-content-between mb-5">
                        <div class="">
                        <h6 class="heading-title fw-bolder">Order Details</h6>
                            <h6 class="heading-title mb-2">Order # {{$order->id}}</h6>
                            <h6 class="heading-title mb-2">Customer Name: {{$order->firstname}} {{$order->lastname}}</h6>
                            <h6 class="heading-title mb-2">Mobile No: {{$order->mobile}}</h6>
                            <h6 class="heading-title mb-2">Eamil ID: {{$order->email}}</h6>
                            <h6 class="heading-title mb-2">Order Date: {{$order->created_at}}</h6>
                            <h6 class="heading-title mb-2">Order Status:  {{$order->status}}</h6>  
                            @if($order->status == "delivered")
                            <h6 class="heading-title mb-2">Delivery Date:  {{$order->delivered_date}}</h6>
                            @elseif($order->status == "cancelled")
                            <h6 class="heading-title mb-2">Cancellation Date: {{$order->cancelled_date}}  </h6>
                            @endif
                            
                        </div>
                        <div class="">
                        <h6 class="heading-title fw-bolder">Cutomer Address</h6>
                            <h6 class="heading-title mb-2">Address 1:       {{$order->line1}}</h6>
                            <h6 class="heading-title mb-2">Address 2:      {{$order->line2}}</h6>
                            <h6 class="heading-title mb-2">City:      {{$order->city}}</h6>
                            <h6 class="heading-title mb-2">Province:      {{$order->province}}</h6>
                            <h6 class="heading-title mb-2">Zipcode:      {{$order->zipcode}}</h6>     
                        </div>
                    </div>
                    <h6 class="heading-title fw-bolder">Ordered Food Item</h6>
                   
                    <div class="table">
                  <div id="user-list-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive my-3"><table id="user-list-table" class="table table-striped dataTable no-footer" role="grid" data-toggle="data-table" aria-describedby="user-list-table_info">
                     <thead>
                        <tr class="ligth">
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
	      <th>Total Price</th>
                        </tr>
                     </thead>
                     @foreach($order->orderItems as $item)
                     <tbody>                      
                    
                           <tr class="">
                            <td> <div> 
                            <img src="{{asset('User1/images/products')}}/{{$item->product->image}}" class="img-fluid rounded-pill avatar-90 blur-shadow position-end" alt="">
                                <img src="{{asset('User1/images/products')}}/{{$item->product->image}}" class="img-fluid rounded-pill avatar-90" alt="">
                            </div></td>
                            <td> {{$item->product->name}}</td>
                            <td> ₹ {{$item->price}}</td>
                            <td> {{$item->quantity}} </td>
                            <td> ₹ {{$item->price * $item->quantity}}</td>
                           </td>
                        </tr>    
                    </tbody>
                    @endforeach 
                  </table>
                  </div>
               </div>
                   
                   
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                        <h6 class="heading-title fw-bolder">ORDER SUMMARY</h6>
                            
                            <h6 class="heading-title fw-bolder">Order Subtotal: ₹ {{$order->subtotal}}</h6>
                            <h6 class="heading-title fw-bolder">Tax : ₹ {{$order->tax}}</h6>
                            <h6 class="heading-title fw-bolder">Shipping : Free Shipping</h6>
                            <h6 class="heading-title fw-bolder">Order Total: ₹ {{$order->total}}</h6>
                        </div>
                        <hr><br>
                        <div class="">
                        <h6 class="fw-bolder">Mode of Transaction</h6>
                            
                            <h6 class="heading-title fw-bolder">Transaction Mode: {{$order->transaction->mode}}</h6>
                            <h6 class="heading-title fw-bolder">Status:    {{$order->transaction->status}}</h6>
                            
                            <h6 class="heading-title fw-bolder">Transaction:  {{$order->transaction->created_at}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

