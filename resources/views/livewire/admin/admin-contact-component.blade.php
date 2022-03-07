<li class="nav-item dropdown">
                  <a href="#" class="nav-link" id="mail-drop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg data-bs-toggle="tooltip" data-bs-placement="bottom"   data-bs-original-title="Client Message" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M20 13.441C20 16.231 17.76 18.491 14.97 18.501H14.96H5.05C2.27 18.501 0 16.251 0 13.461V13.451C0 13.451 0.006 9.02498 0.014 6.79898C0.015 6.38098 0.495 6.14698 0.822 6.40698C3.198 8.29198 7.447 11.729 7.5 11.774C8.21 12.343 9.11 12.664 10.03 12.664C10.95 12.664 11.85 12.343 12.56 11.763C12.613 11.728 16.767 8.39398 19.179 6.47798C19.507 6.21698 19.989 6.45098 19.99 6.86798C20 9.07698 20 13.441 20 13.441Z" fill="currentColor"></path>
                    <path d="M19.4769 3.174C18.6109 1.542 16.9069 0.5 15.0309 0.5H5.05086C3.17486 0.5 1.47086 1.542 0.60486 3.174C0.41086 3.539 0.50286 3.994 0.82586 4.252L8.25086 10.191C8.77086 10.611 9.40086 10.82 10.0309 10.82C10.0349 10.82 10.0379 10.82 10.0409 10.82C10.0439 10.82 10.0479 10.82 10.0509 10.82C10.6809 10.82 11.3109 10.611 11.8309 10.191L19.2559 4.252C19.5789 3.994 19.6709 3.539 19.4769 3.174Z" fill="currentColor"></path>
                    </svg>
                    <span class="bg-primary count-mail"></span>
                  </a>
                  <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop2">
                      <div class="card shadow-none m-0 border border-primary">
                        <div class="card-header d-flex justify-content-between bg-primary mx-0 px-4">
                            <div class="header-title">
                              <h5 class="mb-0 text-white">User Message</h5>
                            </div>
                        </div>
                        @php
                                $i = 1;
                            @endphp
                         @foreach($contacts as $contact)
                        <div class="card-body p-0 ">
                            <a href="#" class="iq-sub-card ">
                              <div class="d-flex  align-items-center">
                                  <div class="">
                                  <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" alt="User-Profile" >                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.294 7.29105C17.294 10.2281 14.9391 12.5831 12 12.5831C9.0619 12.5831 6.70601 10.2281 6.70601 7.29105C6.70601 4.35402 9.0619 2 12 2C14.9391 2 17.294 4.35402 17.294 7.29105ZM12 22C7.66237 22 4 21.295 4 18.575C4 15.8539 7.68538 15.1739 12 15.1739C16.3386 15.1739 20 15.8789 20 18.599C20 21.32 16.3146 22 12 22Z" fill="black"></path>                            </svg>                        
                                  </div>
                                  <div class="ms-3">
                                  <h6 class="mb-0 ">{{$contact->name}}</h6>
                                  <h6 class="mb-0 ">{{$contact->comment}}</h6>
                                    <small class="float-start font-size-12">{{$contact->email}}</small>
                                    <small class="float-start font-size-12">{{$contact->phone}}</small>
                                
                                    <small class="float-start font-size-12">{{$contact->created_at}}</small>
                                 
                                  </div>
                                 
                              </div>
                              
                            </a> 
                           
                        </div>
                        @endforeach 
                      </div>
                  </div>
                </li>















              