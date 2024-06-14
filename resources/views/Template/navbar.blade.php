<section>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="mycontainer d-flex flex-wrap justify-content-between px-sm-4 py-2">
            <a class="navbar-brand" href="{{route('/')}}">
                <img src="{{asset('img/logo.svg')}}" alt="logo">
            </a>
            <div class="d-flex">
                <div class="d-flex d-lg-none align-items-center me-sm-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="green-text mbl-small text-decoration-none py-2 rounded-pill opacity-hover font-medium me-2">Sign
                        In</a>
                    <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal1"
                        class="green-bg mbl-small text-white text-decoration-none me-2 px-4 py-2 mbl-padding rounded-pill opacity-hover font-medium">Sign
                        Up</a>
                </div>
                <button class="navbar-toggler mbl-small" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse w-auto" id="mynavbar">
                <ul class="navbar-nav my-3 my-sm-0 d-flex align-items-lg-center ms-auto">
                    <li class="nav-item px-md-2">
                        <a href="{{route('/')}}" class="{{ request()->routeIs('/') ? 'green-text' : ' text-black' }} nav-link font-medium">Home</a>
                    </li>
                    <li class="nav-item px-md-2">
                        <a href="{{route('about')}}" class="{{ request()->routeIs('about') ? 'green-text' : ' text-black' }} nav-link font-medium">About us</a>
                    </li>
                    <li class="nav-item px-md-2 position-relative">
                        <a class="nav-link text-black font-medium services-btn pointer">
                            Services
                            <i class="fa-solid fa-chevron-down small inactiveic"></i>
                            <i class="fa-solid fa-chevron-up small activeic"></i>
                        </a>
                        <div class="position-absolute cus-dropdown bg-white rounded-2 px-3 py-2">
                            <a href="{{route('liquidityProvider')}}"
                                class="d-flex align-items-center text-decoration-none small py-2 text-black">
                                <img src="{{asset('img/icon1.svg')}}" alt="liquidity" class="me-2">
                                <span>Liquidity provider</span>
                            </a>
                            <a href="{{route('fxMmanagement')}}"
                                class="d-flex align-items-center text-decoration-none small py-2 text-black">
                                <img src="{{asset('img/icon2.svg')}}" alt="liquidity" class="me-2">
                                <span>FX Management Consulting</span>
                            </a>
                            <a href="{{route('NgoFlowOptimization')}}"
                                class="d-flex align-items-center text-decoration-none small py-2 text-black">
                                <img src="{{asset('img/icon3.svg')}}" alt="liquidity" class="me-2">
                                <span>NGO Flow Optimization</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item px-md-2">
                        <a href="{{route('platform')}}" class="{{ request()->routeIs('platform') ? 'green-text' : ' text-black' }} nav-link font-medium">Our platform</a>
                    </li>
                </ul>
                <div class="d-none d-lg-flex align-items-center">
                    <a href="/login" 
                        class="green-text text-decoration-none px-2 py-2 rounded-pill opacity-hover font-medium me-3">Sign
                        In</a>
                    <a href="/signup"   
                        class="green-bg  text-white text-decoration-none me-3 px-4 py-2 rounded-pill opacity-hover font-medium">Sign
                        Up</a>
                </div>
            </div>
        </div>
    </nav>
</section>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <h1 class="font-black green-text">Coming Soon!</h1>
            <p class="mt-3">We are working hard to bring you something amazing. Stay tuned for updates and be the first to experience what's coming next!</p>
            <p class="mt-3">Thank you for your patience and excitement. We can't wait to share it with you!</p>
          </div>
      </div>
    </div>
  </div>