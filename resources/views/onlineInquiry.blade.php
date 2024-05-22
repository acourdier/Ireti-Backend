<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.csslinks')
    <title>Online Inquiry</title>
</head>

<body>
    @include('Template.navbar')
    <section class="py-5">
        <div class="mycontainer">
            <form action="signin.html">
                <h2 class="display-4 fw-bold text-center text-black">Online Inquiry</h2>
                <div class="mt-5">
                    <p class="fw-bold mb-2 fs-5">IRETI CAPITAL</p>
                    <p class="fs-5">Application Form (the “Application”) should be signed by or on behalf of the Client. It
                        is
                        very important that the Client has read the Application and the declarations set out within in
                        conjunction with Agreement
                        (as defined in the “Declarations” section below) before signing. By signing the Application, you
                        are
                        confirming that the details provided within are correct and that you have read, understood, and
                        agreed
                        to be bound by the terms of the Agreement and that the signatory has the capacity to enter into
                        the
                        agreement on behalf of the applicant (company).</p>
                </div>
                <div class="accordion mb-2" id="accordionExample">
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Contact Information
                                <span class="text-danger fw-bold ms-1">
                                    *
                                </span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <label for="inputtext" class="form-label fw-bold mb-3">Full Name</label>
                                <input type="text" id="inputtext" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="position" class="form-label fw-bold mb-3">Position</label>
                                <input type="text" id="position" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="inputEmail" class="form-label fw-bold mb-3">Email</label>
                                <input type="email" id="inputEmail" class="form-control mb-2"
                                    aria-describedby="emailHelpBlock">
                                <label for="inputPhone" class="form-label fw-bold mb-3">Phone Number</label>
                                <input type="tel" id="inputPhone" class="form-control mb-2"
                                    aria-describedby="phoneHelpBlock">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Company Information
                                <span class="text-danger fw-bold ms-1">
                                    *
                                </span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <label for="inputtext" class="form-label fw-bold mb-3">Full Name</label>
                                <input type="text" id="inputtext" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="position" class="form-label fw-bold mb-3">Position</label>
                                <input type="text" id="position" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="inputEmail" class="form-label fw-bold mb-3">Email</label>
                                <input type="email" id="inputEmail" class="form-control mb-2"
                                    aria-describedby="emailHelpBlock">
                                <label for="inputPhone" class="form-label fw-bold mb-3">Phone Number</label>
                                <input type="tel" id="inputPhone" class="form-control mb-2"
                                    aria-describedby="phoneHelpBlock">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Business Location
                                <span class="text-danger fw-bold ms-1">
                                    *
                                </span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <label for="inputtext" class="form-label fw-bold mb-3">Full Name</label>
                                <input type="text" id="inputtext" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="position" class="form-label fw-bold mb-3">Position</label>
                                <input type="text" id="position" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="inputEmail" class="form-label fw-bold mb-3">Email</label>
                                <input type="email" id="inputEmail" class="form-control mb-2"
                                    aria-describedby="emailHelpBlock">
                                <label for="inputPhone" class="form-label fw-bold mb-3">Phone Number</label>
                                <input type="tel" id="inputPhone" class="form-control mb-2"
                                    aria-describedby="phoneHelpBlock">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Business Information
                                <span class="text-danger fw-bold ms-1">
                                    *
                                </span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <label for="inputtext" class="form-label fw-bold mb-3">Full Name</label>
                                <input type="text" id="inputtext" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="position" class="form-label fw-bold mb-3">Position</label>
                                <input type="text" id="position" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="inputEmail" class="form-label fw-bold mb-3">Email</label>
                                <input type="email" id="inputEmail" class="form-control mb-2"
                                    aria-describedby="emailHelpBlock">
                                <label for="inputPhone" class="form-label fw-bold mb-3">Phone Number</label>
                                <input type="tel" id="inputPhone" class="form-control mb-2"
                                    aria-describedby="phoneHelpBlock">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Business Principals
                                <span class="text-danger fw-bold ms-1">
                                    *
                                </span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <label for="inputtext" class="form-label fw-bold mb-3">Full Name</label>
                                <input type="text" id="inputtext" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="position" class="form-label fw-bold mb-3">Position</label>
                                <input type="text" id="position" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="inputEmail" class="form-label fw-bold mb-3">Email</label>
                                <input type="email" id="inputEmail" class="form-control mb-2"
                                    aria-describedby="emailHelpBlock">
                                <label for="inputPhone" class="form-label fw-bold mb-3">Phone Number</label>
                                <input type="tel" id="inputPhone" class="form-control mb-2"
                                    aria-describedby="phoneHelpBlock">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                Business Owners
                                <span class="text-danger fw-bold ms-1">
                                    *
                                </span>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <label for="inputtext" class="form-label fw-bold mb-3">Full Name</label>
                                <input type="text" id="inputtext" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="position" class="form-label fw-bold mb-3">Position</label>
                                <input type="text" id="position" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="inputEmail" class="form-label fw-bold mb-3">Email</label>
                                <input type="email" id="inputEmail" class="form-control mb-2"
                                    aria-describedby="emailHelpBlock">
                                <label for="inputPhone" class="form-label fw-bold mb-3">Phone Number</label>
                                <input type="tel" id="inputPhone" class="form-control mb-2"
                                    aria-describedby="phoneHelpBlock">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                Ultimate Beneficiary Owners
                                <span class="text-danger fw-bold ms-1">
                                    *
                                </span>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <label for="inputtext" class="form-label fw-bold mb-3">Full Name</label>
                                <input type="text" id="inputtext" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="position" class="form-label fw-bold mb-3">Position</label>
                                <input type="text" id="position" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="inputEmail" class="form-label fw-bold mb-3">Email</label>
                                <input type="email" id="inputEmail" class="form-control mb-2"
                                    aria-describedby="emailHelpBlock">
                                <label for="inputPhone" class="form-label fw-bold mb-3">Phone Number</label>
                                <input type="tel" id="inputPhone" class="form-control mb-2"
                                    aria-describedby="phoneHelpBlock">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                How did you hear about IRETI CAPITAL?
                                <span class="text-danger fw-bold ms-1">
                                    *
                                </span>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <label for="inputtext" class="form-label fw-bold mb-3">Full Name</label>
                                <input type="text" id="inputtext" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="position" class="form-label fw-bold mb-3">Position</label>
                                <input type="text" id="position" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="inputEmail" class="form-label fw-bold mb-3">Email</label>
                                <input type="email" id="inputEmail" class="form-control mb-2"
                                    aria-describedby="emailHelpBlock">
                                <label for="inputPhone" class="form-label fw-bold mb-3">Phone Number</label>
                                <input type="tel" id="inputPhone" class="form-control mb-2"
                                    aria-describedby="phoneHelpBlock">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                Supporting Documentation
                                <span class="text-danger fw-bold ms-1">
                                    *
                                </span>
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <label for="inputtext" class="form-label fw-bold mb-3">Full Name</label>
                                <input type="text" id="inputtext" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="position" class="form-label fw-bold mb-3">Position</label>
                                <input type="text" id="position" class="form-control mb-2"
                                    aria-describedby="textHelpBlock">
                                <label for="inputEmail" class="form-label fw-bold mb-3">Email</label>
                                <input type="email" id="inputEmail" class="form-control mb-2"
                                    aria-describedby="emailHelpBlock">
                                <label for="inputPhone" class="form-label fw-bold mb-3">Phone Number</label>
                                <input type="tel" id="inputPhone" class="form-control mb-2"
                                    aria-describedby="phoneHelpBlock">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 bg-grey4 py-4 rounded-3">
                    <div class="py-4 px-4">
                        <p class="fs-3 fw-bold text-sm-center">IMPORTANT NOTES</p>
                        <p class="mt-3 mb-3">
                            The personal information that we collect in this application form and during the lifetime of
                            your account is kept private. We collect personal information to determine your eligibility
                            for
                            products and services, to ensure high service standards, to meet regulatory requirements,
                            and to
                            verify your identity. Personal information you provide to IRETI CAPITAL will not be used in
                            any
                            commercial way and will not be provided to anyone else except in response to a request from
                            regulatory, governmental, or law enforcement agencies, or with our business partners and
                            service
                            providers to assist us in providing services to you. These business partners and service
                            providers may be located within or outside of the European Economic Area. Whenever we
                            request
                            services from our business partners, we enter into a contractual agreement to ensure
                            confidentiality and share the least amount of information needed to perform the required
                            task.
                        </p>
                        <p class="mb-5">
                            IRETI CAPITAL may request additional documentation after review of this Application Form.
                            IRETI
                            CAPITAL may request relevant URLs or other relevant promotional material along with
                            completed
                            and signed service agreements before we can set up accounts or process payments on your
                            behalf.
                            If service agreements have not been sent to you already, they will be issued based on
                            information provided in this Application Form.
                        </p>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="p-3 ps-0 pe-0">
                        <p class="fs-3 fw-bold text-sm-center">DECLARATIONS</p>
                        <p class="mt-3 mb-3">
                            I hereby confirm that the account(s) requested to be opened will be used only for the needs
                            of
                            the applicant and that all operations performed will be at the will of the applicant:
                        </p>
                        <div class="row mt-3">
                            <div class="col-md-1 col-sm-2">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="check1" name="option1"
                                        value="something" checked>
                                    <label class="form-check-label fw-bold" for="check1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-2">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="check2" name="option1"
                                        value="something">
                                    <label class="form-check-label fw-bold" for="check2">No</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <div class="fw-bold">
                                    <p>If Yes, please specify:</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>Do any of the above-named directors or shareholders or any members of their family hold a
                                politically exposed position or are they close associates or cohabitants of anyone who
                                holds a politically exposed position? A politically exposed position is a head of state
                                or government minister, deputy or assistant a member of the executive council or
                                legislature, and ambassador, embassy attaché or counsellor a high-ranking officer in the
                                armed forces a member of the administrative management or supervisory body of a
                                state-owned enterprise a member of a court of auditors or the board of a central bank a
                                head of a government agency a member of a supreme court constitutional court or
                                high-level judicial body.</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-1 col-sm-2">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="check3" name="option2"
                                        value="something" checked>
                                    <label class="form-check-label fw-bold" for="check3">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-2">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="check4" name="option2"
                                        value="something">
                                    <label class="form-check-label fw-bold" for="check4">No</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <div class="fw-bold">
                                    <p>If Yes, please specify:</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p> Words and expressions used in this Application will, unless otherwise defined in this
                                Application, have the same meaning as set out in the Terms and Conditions. By signing
                                this
                                Application, you are:</p>
                        </div>
                        <ul class="mt-3">
                            <li>Confirming that you are duly authorized to sign for and act on behalf of the Company and
                                no
                                consent or
                                approval is required from any other person.</li>
                            <li>Confirming that you are duly authorized to sign for and act on behalf of the Company and
                                no
                                consent or
                                approval is required from any other person.</li>
                            <li>Agreeing to and authorizing the searches, due diligence enquiries and
                                use of your information as set out in the
                                Privacy Policy and Framework Terms for Payment Services.</li>
                        </ul>
                        <div class="mt-3">
                            <p>Acknowledging and agreeing that you have read and are bound by the terms of the Agreement
                                (comprising this
                                Application, the Framework Terms, and such other documents as the two parties may from
                                time to time agree which
                                together shall constitute the entire Agreement between the parties).</p>
                        </div>
                        <div class="mt-3">
                            <p class="fw-bold fs-5 mb-2">SIGNATURE</p>
                            <p>I certify the above information to be true and correct:
                            </p>
                        </div>
                        <div class=" mb-3">
                            <label for="FormControlTextarea1" class="form-label fw-bold">Signature (Name):</label>
                            <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="row d-flex mt-3">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="FormControlInput1" class="form-label fw-bold">Position</label>
                                    <input type="email" class="form-control " id="FormControlInput1">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="DateInput" class="form-label fw-bold">Date and Place</label>
                                    <input class="form-control" type="date" id="DateInput">
                                </div>
                            </div>

                        </div>
                        <div class="mt-3 text-center">
                            <button type="submit"
                                class="bg-green ps-5 pe-5 pt-3 pb-3 rounded-3 text-white border-0">Done</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @include('Template.footer')
    @include('Template.jslinks')
</body>

</html>