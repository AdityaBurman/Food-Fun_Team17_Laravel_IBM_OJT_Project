
<section>

                  <a href="#contact"  class="nav-link" id="" data-bs-toggle="" >
                  <img src="https://img.icons8.com/office/16/000000/online-support.png"/>
                  </a>
                  
                  
              <div class="sub-drop dropdown-menu dropdown-menu-end p-2 my-cart-card border border-primary rounded  mt-5" aria-labelledby="notification-drop">
                 <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Contact Us</h4>
                    </div>
                </div>
                <div class="card-body">
                        @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    
                    <form wire:submit.prevent="sendMessage">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Your Name </label>
                            <input type="text" class="form-control"  placeholder="Name"  wire:model="name">
                              @error('name')<p class="text-danger">{{$message}}</p>@enderror
                          </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail3">Your Email</label>
                            <input type="email" class="form-control" placeholder="Email" wire:model="email">
                              @error('email')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputurl">Mobile Number</label>
                            <input type="number" class="form-control" placeholder=" Mobile Number" wire:model="phone">
                              @error('phone')<p class="text-danger">{{$message}}</p>@enderror
                        </div>  
                        <div class="form-group">
                            <label class="form-label" for="exampleFormControlTextarea1">Your Message</label>
                            <textarea class="form-control"  rows="5" wire:model="comment"></textarea>
                            @error('comment')<p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary rounded">                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path d="M21.4354 2.58198C20.9352 2.0686 20.1949 1.87734 19.5046 2.07866L3.408 6.75952C2.6797 6.96186 2.16349 7.54269 2.02443 8.28055C1.88237 9.0315 2.37858 9.98479 3.02684 10.3834L8.0599 13.4768C8.57611 13.7939 9.24238 13.7144 9.66956 13.2835L15.4329 7.4843C15.723 7.18231 16.2032 7.18231 16.4934 7.4843C16.7835 7.77623 16.7835 8.24935 16.4934 8.55134L10.72 14.3516C10.2918 14.7814 10.2118 15.4508 10.5269 15.9702L13.6022 21.0538C13.9623 21.6577 14.5826 22 15.2628 22C15.3429 22 15.4329 22 15.513 21.9899C16.2933 21.8893 16.9135 21.3558 17.1436 20.6008L21.9156 4.52479C22.1257 3.84028 21.9356 3.09537 21.4354 2.58198Z" fill="currentColor"></path>                            </svg>                        </button>
                        <button type="submit" class="btn btn-danger rounded">                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.3746 3.86954V3.85937C21.7017 3.5138 21.7017 2.97511 21.3746 2.62954C21.216 2.46691 20.998 2.36426 20.77 2.36426C20.542 2.36426 20.324 2.46691 20.1753 2.62954L2.21511 21.0568C2.18537 21.0873 2.16555 21.1167 2.14573 21.1482L2.11599 21.1889C1.92767 21.5141 1.96731 21.9512 2.24484 22.246C2.42326 22.4086 2.6314 22.5 2.84946 22.5C3.06752 22.5 3.27567 22.4086 3.44417 22.246L8.80583 16.7479C16.2063 23.9876 18.6902 21.3328 19.2649 20.7184C19.303 20.6777 19.3327 20.646 19.3549 20.6267C22.0219 17.9051 21.2874 17.1915 19.4479 15.4043L19.4479 15.4043C19.191 15.1548 18.9126 14.8843 18.6189 14.5845C17.5129 13.4606 16.7238 13.7447 15.8466 14.0604C14.8811 14.408 13.8089 14.794 12.0901 13.3825L11.5623 13.9213L11.9584 13.5151L21.3746 3.86954ZM6.18501 14.2053C0.192084 7.41512 2.57556 5.06046 3.15871 4.48437C3.20138 4.44221 3.23441 4.40958 3.25382 4.38543C5.94079 1.66026 6.63999 2.40738 8.39072 4.27807C8.63945 4.54384 8.9094 4.83228 9.20929 5.13668C10.3148 6.26409 10.0385 7.07037 9.73113 7.9674C9.4738 8.71842 9.19468 9.53305 9.68636 10.653L6.18501 14.2053Z" fill="currentColor"></path>                            </svg>                        </button>
                    </form>
                </div>
            </div>
                  </div>
                </li>

                


</section>
 