<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.csslinks')
    <title>NGO flow optimization</title>
</head>

<body>
    @include('Template.navbar')
    <section class="bg-greyabt py-5">
        <div class="mycontainer">
            <div class="row justify-content-center align-items-center py-5 px-5 px-lg-5">
                <div class="col-12">
                    <h1 class="font-black display-4 green-text text-center" data-aos="fade-right" data-aos-delay="300">
                        Terms and Conditions</h1>
                    {{-- <p class=" text-center mt-4 fs-5 lh-base" data-aos="fade-up" data-aos-delay="500">At Ireti capital,
                        our journey is rooted in a vision to transform Emerging economies. Our team is dedicated to
                        empowering businesses and NGOs to expand their presence in Emerging countries through secure,
                        reliable, and fast liquidity services.</p> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="mycontainer">
            <div class="accordion" id="termsAccordion">
                <!-- Section 1: Introduction -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            1. Introduction
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            Ireti Capital provides various services aimed at empowering businesses and NGOs to
                            expand their presence in emerging economies. Our offerings include:
                            <ul>
                                <li>Liquidity Provider Services</li>
                                <li>FX Management Consulting</li>
                                <li>NGO Flow Optimization</li>
                                <li>ESG Investments</li>
                            </ul>
                            These Terms govern your use of our website and services.
                        </div>
                    </div>
                </div>

                <!-- Section 2: Use of Website -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            2. Use of Website
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            By using the Ireti Capital website, you agree to:
                            <ul>
                                <li>Provide accurate, current, and complete information.</li>
                                <li>Use the website and services only for lawful purposes and in accordance with
                                    these Terms.</li>
                                <li>Not engage in any activity that disrupts or interferes with the website or
                                    services.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Services Provided -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            3. Services Provided
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            Ireti Capital offers the following services:
                            <ul>
                                <li>Liquidity Provider Services: Solutions designed to enhance business
                                    operations in emerging economies.</li>
                                <li>FX Management Consulting: Tailored foreign exchange strategies for
                                    businesses.</li>
                                <li>NGO Flow Optimization: Helping NGOs optimize financial flows for greater
                                    efficiency and impact.</li>
                                <li>ESG Investments: Sustainable investment strategies based on Environmental,
                                    Social, and Governance (ESG) criteria.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Client Responsibilities -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            4. Client Responsibilities
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            As a client, you agree to:
                            <ul>
                                <li>Provide necessary documentation and information for us to deliver services.
                                </li>
                                <li>Comply with all applicable laws and regulations related to your business.
                                </li>
                                <li>Ensure that financial transactions or investments made through our services
                                    comply with relevant legal requirements.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Intellectual Property -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            5. Intellectual Property
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            All content on the Ireti Capital website, including text, graphics, logos, and
                            software, is owned by Ireti Capital or its content suppliers and is protected by
                            copyright and intellectual property laws. You may not reproduce, modify, or
                            distribute any of the content without our express permission.
                        </div>
                    </div>
                </div>

                <!-- Section 6: Confidentiality and Privacy -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            6. Confidentiality and Privacy
                        </button>
                    </h2>
                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            We are committed to protecting your privacy. Any personal information you provide
                            will be processed in accordance with our Privacy Policy. By using our website, you
                            consent to the collection and use of your data as outlined in the Privacy Policy.
                        </div>
                    </div>
                </div>

                <!-- Section 7 to 12 (continue similarly) -->
                <!-- Section 7: Disclaimers -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            7. Disclaimers
                        </button>
                    </h2>
                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            While we strive to provide accurate and timely information, Ireti Capital makes no
                            representations or warranties regarding the accuracy, completeness, or reliability
                            of the website or services. All services are provided "as is" without warranties of
                            any kind, either express or implied.
                        </div>
                    </div>
                </div>

                <!-- Section 8: Limitation of Liability -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            8. Limitation of Liability
                        </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            To the fullest extent permitted by law, Ireti Capital will not be liable for any
                            damages, including direct, indirect, incidental, or consequential damages, arising
                            from your use or inability to use the website or services.
                        </div>
                    </div>
                </div>

                <!-- Section 9: Indemnification -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            9. Indemnification
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            You agree to indemnify, defend, and hold harmless Ireti Capital, its affiliates, and
                            their respective directors, officers, employees, and agents from any claims, losses,
                            damages, or expenses arising from your use of the website or services or any
                            violation of these Terms.
                        </div>
                    </div>
                </div>

                <!-- Section 10: Amendments -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            10. Amendments
                        </button>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            We reserve the right to update or modify these Terms at any time. Any changes will
                            take effect when posted on this page, with the updated date. By continuing to use
                            the website after changes are posted, you agree to the updated Terms.
                        </div>
                    </div>
                </div>

                <!-- Section 11: Governing Law -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading11">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                            11. Governing Law
                        </button>
                    </h2>
                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            These Terms are governed by the laws of [Insert Country/Region]. Any disputes will
                            be subject to the exclusive jurisdiction of the courts in [Insert Jurisdiction].
                        </div>
                    </div>
                </div>

                <!-- Section 12: Contact Us -->
                <div class="accordion-item my-3">
                    <h2 class="accordion-header" id="heading12">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            12. Contact Us
                        </button>
                    </h2>
                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                        data-bs-parent="#termsAccordion">
                        <div class="accordion-body">
                            If you have any questions about these Terms, please contact us at:
                            <address>
                                Ireti Capital<br>
                                Email: <a href="mailto:info@ireti.com">info@ireti.com</a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('Template.footer')
    @include('Template.jslinks')
</body>

</html>
