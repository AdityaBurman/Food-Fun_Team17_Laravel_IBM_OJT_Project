<div class="content-inner mt-5 py-0">

    <div class="row">
      <div class="col-sm-12">
         <div class="card my-cart-card border border-primary rounded p-3 mt-5">
            <div class="card-header d-flex justify-content-between ">
               <div class="header-title">
                  <h4 class="card-title">Your Food Orders List</h4>
               </div>
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
                          <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending" style="width: 152.459px;">Contact</th>
                          <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Zipcode</th>
                          <th style="min-width: 100px; width: 99.9921px;" class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                     </thead>
                     <tbody>                      
                     @foreach ($orders as $order) 
                     <tr class="">
                           <td><span class="badge bg-info">  {{$order->id}} </td>
                           <td> {{$order->created_at}} </td>
                           <td> {{$order->total}} </td>
                           <td><span class="badge bg-primary">  {{$order->status}} </td>
                           <td> {{$order->firstname}} </td>
                           <td> {{$order->lastname}} </td>
                           <td> {{$order->email}} </td>
                           <td> {{$order->zipcode}} </td>                     
                           <td>
                              <div class="flex align-items-center list-user-action">
                                 <a  href="{{route('user.orderdetails',['order_id'=>$order->id])}}" class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">
                                    <span class="btn-inner">
                                       <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
   
</div>
<br><br><br><br><br><br><br><br><br><br><br>
   
   