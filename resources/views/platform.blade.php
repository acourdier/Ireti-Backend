<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.csslinks')
    <title>Platform</title>
</head>

<body>
    @include('Template.navbar')
    <section class="bg-grey py-5">
        <div class="mycontainer">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-12">
                    <h1 class="font-bold display-4 text-black text-center" data-aos="fade-right" data-aos-delay="300">
                        Our Platform</h1>
                    <p class=" text-center text-center fs-5" data-aos="fade-up" data-aos-delay="500">Our platform is
                        designed to provide you with liquidity in scarce
                        environments at the best price. Input your trade request to get access to our partners.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white details2">
        <div class="mycontainer">
            <div class="row justify-content-center py-5">
                <div class="col-6" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{asset('img/platform1.svg')}}" alt="" class="w-100">
                </div>
                <div class="col-6" data-aos="fade-right" data-aos-delay="500">
                    <img src="{{asset('img/platform2.svg')}}" alt="" class="w-100">
                </div>
                <div class="col-6 neg-div" data-aos="fade-down" data-aos-delay="300">
                    <img src="{{asset('img/platform3.svg')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="my-4 d-flex justify-content-center">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="green-bg text-white text-uppercase text-decoration-none me-3 px-4 py-2 rounded-3 opacity-hover font-medium">Get
                    Started</a>
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
                    <p class="mt-3">We are working hard to bring you something amazing. Stay tuned for updates and be
                        the first to experience what's coming next!</p>
                    <p class="mt-3">Thank you for your patience and excitement. We can't wait to share it with you!</p>
                </div>
            </div>
        </div>
    </div>
    @include('Template.footer')
    @include('Template.jslinks')
</body>

</html>