<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.csslinks')
    <title>NGO flow optimization</title>
</head>

<body>
    @include('Template.navbar')
    <section class="bg-grey details py-5">
        <div class="mycontainer">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-12">
                    <h1 class="font-bold text-black  display-4 text-center" data-aos="fade-right" data-aos-delay="300">
                        NGO flow optimization</h1>
                    <p class=" text-center text-center fs-5" data-aos="fade-up" data-aos-delay="500">
                        At Ireti Capital, we extend our expertise to NGOs, recognizing the unique challenges they face
                        in optimizing their foreign exchange flows for project financing. Many NGOs are exposed to
                        exotic markets where they lack efficient solutions. Our specialized service in NGO Flow
                        Optimization is tailored to address these challenges, providing a secure, fast, and
                        competitively priced solution.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white details2">
        <div class="mycontainer">
            <div class="row align-items-center justify-content-center py-5">
                <div class="col-12 px-sm-5">
                    <img src="{{ asset('img/ngo1.svg') }}" alt="ngo" class="w-100" data-aos="fade-down"
                        data-aos-delay="600">
                    <p class="mt-4 text-center fs-5" data-aos="fade-right" data-aos-delay="300">
                        Ireti Capital is committed to sourcing highly competitive rates, ensuring that NGOs receive
                        optimal value for their funds. By providing cost-effective solutions, we empower NGOs to
                        allocate more resources directly to their impactful projects, maximizing the positive outcomes
                        of their initiatives.
                    </p>
                    <p class="mt-2 text-center fs-5" data-aos="fade-up" data-aos-delay="500">
                        Not only do we provide tools for NGOs to optimize their resources and accomplish their missions,
                        we, at Ireti Capital also participate in the financing of these projects. We firmly believe in
                        being fully invested in our partners' endeavors, which is why we are committed to offering
                        assistance in the development of their projects.
                    </p>
                </div>
                <div class="col-md-8  px-sm-5" data-aos="fade-right" data-aos-delay="300">
                    <img src="{{ asset('img/ngo2.svg') }}" alt="ngo" class="w-100">
                </div>
            </div>
        </div>
    </section>
    @include('Template.footer')
    @include('Template.jslinks')
</body>

</html>
