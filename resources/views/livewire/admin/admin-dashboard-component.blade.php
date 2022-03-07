
<div class="content-inner mt-5 py-0">

<div class="row">
</div>


<div class="row">
      <div class="col-lg-12">
         <div class="row">
            <div class="col-md-6">
               <div class="card my-cart-card border border-primary rounded bg-soft-primary p-3 mt-5 ">
                     <div class="card-body  ">
                        <div class="d-flex align-items-center justify-content-between">
                        <div class=" bg-soft-gradient rounded p-3">
                        <img src="https://img.icons8.com/cotton/75/000000/positive-dynamic--v2.png"/>
                    

                        </div>
                           <div>
                              <span><b>Total Revenue</b></span>
                              <div class="mt-2">
                                 <h2 class="counter" style="visibility: visible;">₹ {{$totalRevenue}}</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-danger">Live Updates</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
            <div class="col-md-6">
            <div class="card my-cart-card border border-primary rounded bg-soft-primary p-3 mt-5">
                 
                  <div class="card-body  ">
                        <div class="d-flex align-items-center justify-content-between">
                        <div class=" bg-soft-gradient rounded p-3">
                        <img src="https://img.icons8.com/plumpy/75/000000/waiter.png"/>
                        </div>
                           <div>
                              <span><b>Total Food Item Delivered</b></span>
                              <div class="mt-2">
                                 <h2 class="counter" style="visibility: visible;"> {{$totalSales}}</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-danger">Live Updates</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
           
         </div>
         <div class="row">
            <div class="col-md-6">
            <div class="card my-cart-card border border-info rounded bg-soft-info p-3 mt-5">
                
                  <div class="card-body  ">
                        <div class="d-flex align-items-center justify-content-between">
                        <div class=" bg-soft-gradient rounded p-3">
                        <img src="https://img.icons8.com/cotton/75/000000/positive-dynamic--v2.png"/>
                        </div>
                           <div>
                              <span><b>Today Revenue</b></span>
                              <div class="mt-2">
                                 <h2 class="counter" style="visibility: visible;"> ₹ {{$todayRevenue}}</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-danger">Live Updates</span>
                           </div>
                        </div>
                     </div>

               
               </div>
            </div>
            <div class="col-md-6">
            <div class="card my-cart-card border border-info rounded bg-soft-info p-3 mt-5">
            <div class="card-body  ">
                        <div class="d-flex align-items-center justify-content-between">
                        <div class=" bg-soft-gradient rounded p-3">
                        <img src="https://img.icons8.com/plumpy/75/000000/waiter.png"/>
                        </div>
                           <div>
                              <span><b>Today Food Item Delivered</b></span>
                              <div class="mt-2">
                                 <h2 class="counter" style="visibility: visible;"> {{$todaySales}}</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-danger">Live Updates</span>
                           </div>
                        </div>
                     </div>
              
               </div>
            </div>
         </div>
      </div>
    <!--  <div class="col-lg-3">
         <div class="card my-cart-card border border-primary rounded p-3 mt-5 ">
            <div class="card-body ">
               <div class="border-bottom text-center pb-3">
                  <img src="../../assets/images/avatars/01.png" alt="profile" class="img-fluid avatar-80 mb-4">
                  <div>
                     <h5 class="mb-3">Aditya Burman</h5>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                  <button type="button" class="btn btn-info rounded mb-2">Assign</button>
               </div>
               <div class="d-flex justify-content-between mt-3">
                <br>
               </div>
            </div>
         </div>
      </div>-->
   </div>
   
   

   <div class="row">
      <div class="col-lg-12">
         <div class="card  bg-soft-gradient my-cart-card border border-primary rounded p-3 mt-5">
            
      
            <div class="card-header d-flex justify-content-between ">
               <div class="header-title">
                  <h4 class="card-title">Customer Food Orders</h4>
               </div>
               @if(Session::has('order_message'))
                          <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                    @endif
            </div>
           
            <div class="card-body px-0">
               
               <div class="table">
                  <div id="user-list-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive my-3"><table id="user-list-table" class="table table-striped dataTable no-footer" role="grid" data-toggle="data-table" aria-describedby="user-list-table_info">
                     <thead>
                        <tr class="ligth">
                          <th class="sorting sorting_asc" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="width: 49.9842px;">Order ID #</th>
                          <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Order Date</th>
                          <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Total</th>
                          <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Status</th>
                          <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">First Name</th>
                          <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;"> Last Name</th>

                          <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 202.242px;">Email</th>
                          <th style="min-width: 100px; width: 99.9921px;" class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                        </tr>
                     </thead>
                     <tbody>                      
                     @foreach ($orders as $order) 
                     <tr class="">
                           <td><span class="badge bg-success"> {{$order->id}} </span></td>
                           <td> {{$order->created_at}} </td>
                           <td> {{$order->total}} </td>
                           <td><span class="badge bg-primary">{{$order->status}}</span></td>
                           <td> {{$order->firstname}} </td>
                           <td> {{$order->lastname}} </td>
                           <td> {{$order->email}} </td>
             
                           <td>
                              <div class="flex align-items-center list-user-action">
                                 <a  href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class="btn btn-sm btn-icon btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">
                                    <span class="btn-inner">
                                       <svg data-bs-toggle="tooltip" data-bs-placement="left"   data-bs-original-title="Order Details" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M19.2036 8.66919V12.6792" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M21.2497 10.6741H17.1597" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>                                        
                                    </span>
                                 </a>
                                 <a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')" class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">
                                    <span class="btn-inner">
                                       <svg data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Approve" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </a>
                                 <a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'cancelled')" class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#">
                                    <span class="btn-inner">
                                       <svg data-bs-toggle="tooltip" data-bs-placement="Top"   data-bs-original-title="Decline"  width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                          <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        @endforeach           
                    </tbody>
                  </table>
                </div>
               </div>
            </div>
         </div>
              
      </div>
           
      </div>
      <div class="col-lg-12">
      <div class="card  bg-soft-gradient my-cart-card border border-primary rounded p-3 mt-5">
            
      
            <div class="card-header d-flex justify-content-between ">
               <div class="header-title">
                  <h4 class="card-title">Reserved Table</h4>
               </div>
               
            </div>
            <div class="card-body px-0">
               <div class="table">
                  <div id="user-list-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive my-3"><table id="user-list-table" class="table table-striped dataTable no-footer" role="grid" data-toggle="data-table" aria-describedby="user-list-table_info">
                     <thead>
                        <tr class="ligth">
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="width: 49.9842px;">ID</th>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="width: 49.9842px;">Name</th>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="width: 49.9842px;">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Mobile No</th>
                        <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">No. of Guest</th>
                        <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Date</th>
                        <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Time</th>
                        <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Table Type</th>
                        <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Message</th>

                        </tr>
                     </thead>
                     <tbody>                      
                     @php
                                $i = 1;
                            @endphp
                         @foreach($tables as $table)      
                           <tr class="">
                            <td> {{$table->id}}</td>
                            <td> {{$table->name}}</td>
                            <td> {{$table->email}}</td>
                            <td> {{$table->phone}}</td>
                            <td> {{$table->guest}}</td>
                            <td> {{$table->date}}</td>
                            <td> {{$table->time}}</td>
                            <td> {{$table->table}}</td>
                            <td> {{$table->comment}}</td>
                          
                         
                        </tr>
                        @endforeach         
                    </tbody>
                  </table>
                  </div>
               </div>
            </div>
         </div>

   </div>



   <div class="row" id="contact">
    <div class="col-lg-12">
      <div class="card  bg-soft-gradient my-cart-card border border-primary rounded p-3 mt-5">
            
      
            <div class="card-header d-flex justify-content-between ">
               <div class="header-title">
                  <h4 class="card-title">Customer Message</h4>
               </div>
               
            </div>
            <div class="card-body px-0">
               <div class="table">
                  <div id="user-list-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive my-3"><table id="user-list-table" class="table table-striped dataTable no-footer" role="grid" data-toggle="data-table" aria-describedby="user-list-table_info">
                     <thead>
                        <tr class="ligth">
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="width: 49.9842px;">Customer Name</th>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="width: 49.9842px;">Message</th>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="width: 49.9842px;">Email ID</th>
                        <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Mobile No</th>
                        <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Date & Time</th>
                        </tr>
                     </thead>
                     <tbody>                      
                     @php
                                $i = 1;
                            @endphp
                            @foreach($contacts as $contact)   
                           <tr class="">
                            <td> {{$contact->name}}</td>
                            <td> {{$contact->comment}}</td>
                            <td> {{$contact->email}}</td>
                            <td> {{$contact->phone}}</td>
                            <td> {{$contact->created_at}}</td>
                        </tr>
                        @endforeach         
                    </tbody>
                  </table>
                  </div>
               </div>
            </div>
         </div>

   </div>
</div>
</div>
   
</div>






 
   



