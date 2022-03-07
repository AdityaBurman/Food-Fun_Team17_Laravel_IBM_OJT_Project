<div class="content-inner mt-5 py-0">
<div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card border border-primary rounded">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Reserved Table</h4>
               </div>
            </div>
            <div class="card-body px-0">
               <div class="table-responsive">
                  <div id="user-list-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center"><div class="col-md-6"><div class="dataTables_length" id="user-list-table_length"></div></div></div><div class="table-responsive my-3"><table id="user-list-table" class="table table-striped dataTable no-footer" role="grid" data-toggle="data-table" aria-describedby="user-list-table_info">
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
                  </table></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      </div>
      