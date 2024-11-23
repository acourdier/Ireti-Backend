<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.csslinks')
    <title>ESG Investments</title>
</head>

<body>
    @include('Template.navbar')
    <section class="bg-grey details py-5">
        <div class="mycontainer">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-12">
                    <h1 class="font-bold text-black  display-4 text-center" data-aos="fade-right" data-aos-delay="300">
                        ESG Investments</h1>
                    <p class=" text-center text-center mt-3 fs-5" data-aos="fade-up" data-aos-delay="500">
                        We provide tailored solutions for funds seeking to invest in ESG projects across Africa. Our
                        local presence enables our partners to access projects that align with their specific investment
                        policies and objectives.
                        Our Investment process is designed to secure our partners investments against an adverse move on
                        the FX markets while offering a full transparency on the allocation of the funds.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white ">
        <div class="mycontainer py-5">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-10 col-sm-8 col-md-6 py-lg-3" data-aos="fade-down" data-aos-delay="500">
                    <img src="{{asset('img/cranes.svg')}}" alt="crane" class="w-100">
                </div>
                <div class="col-md-6 mt-5 mt-md-0 py-lg-3 ps-md-4" data-aos="fade-right" data-aos-delay="300">
                    <h2 class="font-semi fs-1 green-text">The Right Projects</h2>
                    <p class="fs-5">
                        We source projects that align with the Sustainable Development Goals (SDGs) set
                        by the United Nations are selected based on your specific investment objectives, including
                        sector, impact, duration, capital amount, and yield targets. Additionally, we manage the
                        preliminary due diligence process to optimize time and resources for all parties.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center flex-column-reverse flex-md-row align-items-center py-5">
                <div class="col-md-6 py-lg-3 mt-5 mt-md-0 pe-md-4" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="font-semi fs-1 green-text  ">Our Actions</h2>
                    <p class="fs-5">
                        With offices in Western and Central Africa, Ireti Capital directly contributes
                        to the local economy by collaborating closely with local communities.
                        Ireti Capital is a member of Principles for Responsible Investments (PRI), an
                        organization supported by the United Nations which is the leading proponent of responsible
                        investment around the world.
                        Our annual investment program is designed to assist our NGO and ESG fund
                        partners in securing additional resources to achieve their missions.
                    </p>
                </div>
                <div class="col-md-6 py-lg-3" data-aos="fade-right" data-aos-delay="300">
                    <img src="{{asset('img/esgplan.svg')}}" alt="plan" class="w-100">
                </div>
            </div>
            <div class="row align-items-center justify-content-center py-5">
                <div class="col-12 px-sm-5">
                    <p class="mt-4 text-center fs-5" data-aos="fade-right" data-aos-delay="300">
                        Ireti Capital provides financial support by committing its own capital to selected projects.
                    </p>
                    <p class="mt-2 text-center font-bold fs-5" data-aos="fade-up" data-aos-delay="500">
                        Get in touch with us to learn more about our investment process and discover how we can help you
                        generate immediate Alpha for your fund.
                    </p>
                </div>
                <div class="col-md-8  px-sm-5" data-aos="fade-right" data-aos-delay="300">
                    <img src="{{ asset('img/esgmain.svg') }}" alt="ngo" class="w-100">
                </div>
            </div>
        </div>
    </section>
    @include('Template.footer')
    @include('Template.jslinks')
</body>

</html>