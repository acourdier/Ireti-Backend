<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.csslinks')
    <title>About Us</title>
</head>

<body>
    @include('Template.navbar')
    <section class="bg-greyabt py-5">
        <div class="mycontainer">
            <div class="row justify-content-center align-items-center py-5 px-5 px-lg-5">
                <div class="col-12">
                    <h1 class="font-black display-4 green-text text-center" data-aos="fade-right" data-aos-delay="300">
                        About Us</h1>
                    <p class=" text-center mt-4 fs-5 lh-base" data-aos="fade-up" data-aos-delay="500">At Ireti capital,
                        our journey is rooted in a vision to transform Emerging economies. Our team is dedicated to
                        empowering businesses and NGOs to expand their presence in Emerging countries through secure,
                        reliable, and fast liquidity services.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-5">
        <div class="mycontainer">
            <div class="row align-items-center py-4">
                <h2 class="display-5 font-bold text-black text-center" data-aos="fade-right" data-aos-delay="300">Our
                    Approach</h2>
                <p class="text-center fs-5 text-black font-medium" data-aos="fade-right" data-aos-delay="500">We build
                    our approach on 4 pillars</p>
                <div class="row align-items-start mt-5" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                        <div class="approach-model rounded-circle">
                            <img src="{{asset('img/approcach1.svg')}}" alt="approach1" class="img-fluid cirimg">
                        </div>
                        <h3 class="fs-4 mt-3 green-text font-semi">Expertise</h3>
                        <p class="text-center">
                            Thanks to an audit of our client's situation and needs
                        </p>
                    </div>
                    <div
                        class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                        <div class="approach-model rounded-circle">
                            <img src="{{asset('img/approcach2.svg')}}" alt="approach1" class="img-fluid cirimg">
                        </div>
                        <h3 class="fs-4 mt-3 green-text font-semi">Transparency</h3>
                        <p class="text-center">
                            In the follow-up of operations and with the provision of a dedicated contact on our
                            trading desk
                        </p>
                    </div>
                    <div
                        class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                        <div class="approach-model rounded-circle">
                            <img src="{{asset('img/approcach3.svg')}}" alt="approach1" class="img-fluid cirimg">
                        </div>
                        <h3 class="fs-4 mt-3 green-text font-semi">Price</h3>
                        <p class="text-center">
                            With the optimisation of our partner's operations
                        </p>
                    </div>
                    <div
                        class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                        <div class="approach-model rounded-circle">
                            <img src="{{asset('img/approcach4.svg')}}" alt="approach1" class="img-fluid cirimg">
                        </div>
                        <h3 class="fs-4 mt-3 green-text font-semi">Sourcing</h3>
                        <p class="text-center">
                            With the contribution of our privileged network
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-lgrey details py-5">
        <div class="mycontainer">
            <h2 class="display-5 font-semi text-black text-center">Executive Team</h2>
            <div class="row">
                <div class="d-flex flex-column flex-sm-row" data-aos="fade-right" data-aos-delay="300">
                    <div class="team-img mx-auto mt-4 mt-sm-0 me-sm-4">
                        <img src="{{asset('img/teammember1.svg')}}" alt="team-member" class="w-100">
                    </div>
                    <div class="mt-sm-5">
                        <div
                            class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start mt-4">
                            <p class="fs-5 font-bold me-2">Gabriel Olugbenga</p>
                            <p>Founding Partner</p>
                        </div>
                        <p class="text-justify">Prior to co-founding Ireti Capital in 2023, Gabriel spent
                            over 8 years working at Goldman Sachs in London, New York and Paris in the equity division.
                            As an Executive Director, he was responsible, among other things, for overseeing Goldman
                            Sachs equity trading venue and providing clients within the European Union a solution to
                            their execution and liquidity needs. Gabriel holds a Master of Science degree in Financial
                            Markets & Investment from the SKEMA Business School.</p>

                    </div>
                </div>
                <div class="d-flex flex-column-reverse flex-sm-row  mt-4 mt-sm-5" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="mt-sm-5 me-sm-4">
                        <div
                            class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-end mt-4">
                            <p class="fs-5 font-bold me-2">Sullivan Joubert</p>
                            <p>Founding Partner</p>
                        </div>
                        <p class="text-justify">After working in corporate finance at the French National
                            Bank and BNP Paribas Wealth Management, Sullivan had a
                            number of sales and trading experiences with well-known banks and hedge funds. Building on
                            this experience, he
                            moved to the Fintech sector and more specifically to Ebury, a company owned by the group
                            Banco Santander, where
                            he was Head of the Sales and Trading teams for the French and French-speaking Swiss market
                            for seven and a half
                            years. He was appointed Partner after 6 years with the group.<br>
                            Sullivan holds a Master's degree in Financial Markets & Investments (FMI) from SKEMA
                            Business School.</p>
                    </div>
                    <div class="team-img mx-auto mt-4 mt-sm-0 ">
                        <img src="{{asset('img/teammember2.svg')}}" alt="team-member" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('Template.footer')
    @include('Template.jslinks')
</body>

</html>