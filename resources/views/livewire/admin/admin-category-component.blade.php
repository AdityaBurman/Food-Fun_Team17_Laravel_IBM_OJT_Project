
<div class="content-inner mt-5 py-0">

<div class="row">
  <div class="col-sm-12">
     <div class="card my-cart-card border border-primary rounded p-3 mt-5">
        <div class="card-header d-flex justify-content-between ">
           <div class="header-title">
              <h4 class="card-title">List of Food Category </h4>
                  @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                  @endif
           </div>
          
           <div class="header-title-right">
           <a href="{{route('admin.addcategory')}}" class="badge bg-primary">Add New Food Category</a> 
           </div>
          
        </div>
     
       


       
        <div class="card-body px-0">
           <div class="table">
              <div id="user-list-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive my-3"><table id="user-list-table" class="table table-striped dataTable no-footer" role="grid" data-toggle="data-table" aria-describedby="user-list-table_info">
                 <thead>
                    <tr class="ligth">
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="width: 49.9842px;"> ID #</th>
                      <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Food Category Name</th>
                      <th class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 102.665px;">Slug</th>
                      <th style="min-width: 100px; width: 99.9921px;" class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Edit Food Category</th>
                      <th style="min-width: 100px; width: 99.9921px;" class="sorting" tabindex="0" aria-controls="user-list-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Delete Food Category</th>
                    </tr>
                 </thead>
                 <tbody>                      
                 @foreach ($categories as $category) 
                 <tr class="">
                            <td> {{$category->id}} </td>
                            <td> {{$category->name}} </td>
                            <td> {{$category->slug}} </td>
                                      
                            <td>
                              <div class="flex align-items-center list-user-action">

                              
                                 <a  href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}" class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">
                                    <span class="btn-inner">
                                       <svg  data-bs-toggle="tooltip" data-bs-placement="Top"   data-bs-original-title="Edit Food Category" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </a>
                        
                              </div>
                           </td>
                           <td>
                              <div class="flex align-items-center list-user-action">
                                 <a href="#" onclick="confirm('Are you sure, You want to delete this food category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})"  class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#">
                                    <span class="btn-inner">
                                       <svg  data-bs-toggle="tooltip" data-bs-placement="top"   data-bs-original-title="Delete Food Category" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
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
</div>










   