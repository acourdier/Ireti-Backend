<!DOCTYPE html>
<html lang="en">
<head>
    @include('Template.csslinks')
    <title>Home</title>
</head>

<body>
    @include('Template.navbar')
    <div>
    @if (session('error'))
        <script>
            swal("Ooops!", "{{session('error')}}", "error");
        </script>
    @endif
    <section class="bg-grey">
        <div class="mycontainer py-5">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                    <h1 class="font-black green-text display-5">We are Ireti Capital</h1>
                    <p >We drive Liquidity and Value across Emerging markets thanks to our in-house market making solution.</p>
                    <div class="mt-4">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="green-bg text-white text-uppercase text-decoration-none me-3 hero-btn opacity-hover font-bold fs-5">Get
                            Started</a>
                    </div>
                </div>
                <div class="col-sm-8 col-md-6 mt-5 mt-md-0" data-aos="fade-down" data-aos-delay="100">
                    <img src="{{asset('img/hero-img.svg')}}" alt="hero-img" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-5 details2">
        <div class="mycontainer">
            <div class="row justify-content-center align-items-center py-4">
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="500">
                    <h2 class="font-black display-5 green-text d-none d-md-block">Our Global<br>
                        Presence</h2>
                    <h2 class="font-black fs-1 green-text d-md-none">Our Global Presence</h2>
                    <p>With offices in Europe and Africa, we are strategically located to tackle the lack of Liquidity in certain geographic zones and serve our clients.</p>
                </div>
                <div class="col-sm-8 col-md-7 mt-5 mt-md-0" data-aos="fade-right" data-aos-delay="500">
                    <img src="{{asset('img/global-presence.svg')}}" alt="global-presence" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-lgrey details">
        <div class="mycontainer">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-10 col-sm-8 col-md-5 pe-lg-5" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{asset('img/liquidity-provider.svg')}}" alt="Liquidity provider " class="w-100">
                </div>
                <div class="col-md-7 mt-5 mt-md-0" data-aos="fade-right" data-aos-delay="300">
                    <h2 class="font-bold fs-2 green-text">Liquidity provider</h2>
                    <p>Experience the next level of trading with Ireti Capital's bespoke liquidity solutions. We bring liquidity to the forefront, ensuring you have the tools and resources needed to thrive in the ever-evolving commodities and foreign exchange markets.</p>
                    <div class="mt-4">
                        <a href="{{route('liquidityProvider')}}" class="green-bg text-white  text-decoration-none me-3 px-4 py-3 rounded-3 opacity-hover font-bold fs-6">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center flex-column-reverse flex-md-row align-items-center py-5">
                <div class="col-md-6 mt-5 mt-md-0" data-aos="fade-down" data-aos-delay="300">
                    <h2 class="font-bold fs-2 green-text">FX Management Consulting</h2>
                    <p>Our experienced consultants collaborate closely with companies to assess their FX risks and design tailored strategies for risk mitigation and exposure optimization. By streamlining currency transactions we empower businesses to navigate the complexities of foreign exchange, ensuring resilience, informed decision-making, and strategic advantage in the face of market uncertainties.</p>
                    <div class="mt-4">
                        <a href="{{route('fxMmanagement')}}" class="green-bg text-white  text-decoration-none me-3 px-4 py-3 rounded-3 opacity-hover font-bold fs-6">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-10 col-sm-8 ps-lg-5  " data-aos="fade-right" data-aos-delay="300">
                    <img src="{{asset('img/consultation.svg')}}" alt="consultation" class="w-100">
                </div>
            </div>
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-md-6 col-10 col-sm-8 pe-lg-5" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{asset('img/ngo.svg')}}" alt="ngo" class="w-100">
                </div>
                <div class="col-md-6 mt-5 mt-md-0" data-aos="fade-right" data-aos-delay="300">
                    <h2 class="font-bold fs-2 green-text">NGO flow optimization</h2>
                    <p>At Ireti Capital, we strive to empower NGOs with cost-effective solutions, ensuring that they can allocate more resources directly to their impactful projects. We stand as a dedicated partner, optimizing NGOs operations to enhance the financing of their projects. Our commitment encompasses providing a seamless, secure, and expeditious transaction experience that will provide peace of mind for our partners.</p>
                    <div class="mt-4">
                        <a href="{{route('NgoFlowOptimization')}}" class="green-bg text-white  text-decoration-none me-3 px-4 py-3 rounded-3 opacity-hover font-bold fs-6">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    @include('Template.footer')
    @include('Template.jslinks')
</body>

</html>