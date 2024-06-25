<footer class="bg-white pt-5 pb-4">
    <div class="mycontainer py-2">
        <div class="row">
            <div class="col-sm-6 my-2 my-lg-0 col-md-4 col-lg-3">
                <h2 class="fs-4 font-semi">
                    Company
                </h2>
                <div class="mt-3">
                    <a href="{{route('/')}}" class="text-decoration-none text-black my-2 d-block">Home</a>
                    <a href="#" class="text-decoration-none text-black my-2 d-block">Terms</a>
                    <a href="{{route('about')}}" class="text-decoration-none text-black my-2 d-block">About Us</a>
                </div>
            </div>

            <div class="col-sm-6 my-2 my-lg-0 col-md-4 col-lg-3">
                <h2 class="fs-4 font-semi">
                    Services
                </h2>
                <div class="mt-3">
                    <a href="{{route('liquidityProvider')}}"
                        class="text-decoration-none text-black my-2 d-block">Liquidity
                        provider</a>
                    <a href="{{route('fxMmanagement')}}" class="text-decoration-none text-black my-2 d-block">FX
                        Management
                        Consulting</a>
                    <a href="{{route('NgoFlowOptimization')}}" class="text-decoration-none text-black my-2 d-block">NGO
                        flow
                        optimization</a>
                </div>
            </div>
            <div class="col-sm-6 my-2 my-lg-0 col-md-4 col-lg-3">
                <h2 class="fs-4 font-semi">
                    Resources
                </h2>
                <div class="mt-3">
                    <a href="#" class="text-decoration-none text-black my-2 d-block">Contributors</a>
                    <a href="#" class="text-decoration-none text-black my-2 d-block">Insights</a>
                    <a href="#" class="text-decoration-none text-black my-2 d-block">Media Room</a>
                    <a href="#" class="text-decoration-none text-black my-2 d-block">Partners</a>
                </div>
            </div>
            <div class="col-sm-6 my-2 my-lg-0 col-md-4 col-lg-3">
                <h2 class="fs-4 font-semi">
                    Contact
                </h2>
                <div class="mt-3">
                    <a href="mailto:info@ireticapital.com"
                        class="text-decoration-none text-black my-2 d-flex align-items-center">
                        <i class="fa-regular fa-envelope me-2"></i>
                        <span>info@ireticapital.com</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <a class="d-flex justify-content-center" href="{{route('/')}}">
                <img src="{{asset('img/logo.svg')}}" alt="logo" class="img-fluid">
            </a>
            <p class="mb-0 text-center mt-2">
                © 2024 IRETI Capital. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>