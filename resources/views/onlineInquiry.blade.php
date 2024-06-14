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
        
            <form  action="{{route('saveInquiry')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="display-4 fw-bold text-center text-black">Online Inquiry</h2>
                <div class="mt-5">
                    <p class="fw-bold mb-2 fs-5">IRETI CAPITAL</p>
                    <p class="fs-5">Application Form (the “Application”) should be signed by or on behalf of the
                        Client. It
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
                                <input type="number" name="id" class="d-none" value="{{ session('userId') }}" readonly>
                                <div>
                                    <label for="inputtext" class="form-label fw-bold mb-2">Full Name</label>
                                    <input type="text" id="inputtext" class="form-control mb-3" name="in_fullname" value="{{old('name')}}" required>
                                </div>
                                <div>
                                    <label for="position" class="form-label fw-bold mb-2">Position</label>
                                    <input type="text" id="position" class="form-control mb-3" name="in_position" value="{{old('in_position')}}" required>
                                </div>
                                <div>
                                    <label for="inputEmail" class="form-label fw-bold mb-2">Email</label>
                                    <input type="email" id="inputEmail" class="form-control mb-3" name="in_email" value="{{old('in_email')}}" required>
                                </div>
                                <div>
                                    <label for="inputPhone" class="form-label fw-bold mb-2">Phone Number</label>
                                    <input type="tel" id="inputPhone" class="form-control mb-3" name="in_phone" value="{{old('in_phone')}}" required>
                                </div>
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
                                <div>
                                    <label for="legalname" class="form-label fw-bold mb-2">Legal Name</label>
                                    <input type="text" id="legalname" class="form-control mb-3" value="{{old('legalname')}}" name="legalname" required>
                                </div>
                                <div>
                                    <label for="tradingname" class="form-label fw-bold mb-2">DBA / Trading Name</label>
                                    <input type="text" id="tradingname" class="form-control mb-3" value="{{old('tradingname')}}" name="tradingname" required>
                                </div>
                                <div>
                                    <label for="regNmber" class="form-label fw-bold mb-2">Registration #</label>
                                    <input type="text" id="regNmber" class="form-control mb-3" value="{{old('regNmber')}}" name="regNmber" required>
                                </div>
                                <div>
                                    <label for="regDate" class="form-label fw-bold mb-2">Date of Registration</label>
                                    <input type="date" id="regDate" class="form-control mb-3" value="{{old('regDate')}}" name="regDate" required>
                                </div>
                                <div>
                                    <label for="vat" class="form-label fw-bold mb-2">VAT / TIN ID</label>
                                    <input type="text" id="vat" class="form-control mb-3" value="{{old('vat')}}" name="vat" required>
                                </div>
                                <div>
                                    <label for="companylink" class="form-label fw-bold mb-2">Company Link in a Public
                                        registry </label>
                                    <input type="url" id="companylink" class="form-control mb-3" value="{{old('companylink')}}" name="companylink" required>
                                </div>
                                <div>
                                    <label for="corWeb" class="form-label fw-bold mb-2">Corporate Website</label>
                                    <input type="text" id="corWeb" class="form-control mb-3" value="{{old('corWeb')}}" name="corWeb" required>
                                </div>
                                <div>
                                    <label for="companyEmail" class="form-label fw-bold mb-2">Company Email</label>
                                    <input type="email" id="companyEmail" class="form-control mb-3" value="{{old('companyEmail')}}" name="companyEmail" required>
                                </div>
                                <div>
                                    <label for="directors" class="form-label fw-bold mb-2">Number of Directors</label>
                                    <input type="text" id="directors" class="form-control mb-3" value="{{old('directors')}}" name="directors" required>
                                </div>
                                <div>
                                    <label for="emp" class="form-label fw-bold mb-2">Number of Employees</label>
                                    <input type="text" id="emp" class="form-control mb-3" value="{{old('emp')}}" name="emp" required>
                                </div>
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
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div>
                                    <label for="regCountry" class="form-label fw-bold mb-2">Incorporation
                                        Country</label>
                                    <input type="text" id="incorporationCountry" class="form-control mb-3" name="incorporationCountry">
                                </div>
                                <div>
                                    <label for="regAdd" class="form-label fw-bold mb-2">Registered Address</label>
                                    <input type="text" id="regAdd" class="form-control mb-3" value="{{old('regAdd')}}" name="regAdd" required>
                                </div>
                                <div>
                                    <label for="regCity" class="form-label fw-bold mb-2">Registered City</label>
                                    <input type="text" id="regCity" class="form-control mb-3" value="{{old('regCity')}}" name="regCity" required>
                                </div>
                                <div>
                                    <label for="regState" class="form-label fw-bold mb-2">County / State</label>
                                    <input type="text" id="regState" class="form-control mb-3" value="{{old('regState')}}" name="regState" required>
                                </div>
                                <div>
                                    <label for="regPostCode" class="form-label fw-bold mb-2">Registered
                                        Postcode</label>
                                    <input type="text" id="regPostCode" class="form-control mb-3" value="{{old('regPostCode')}}" name="regPostCode" required>
                                </div>
                                <div class="d-flex align-items-center mt-4 mb-2">
                                    <input type="checkbox" id="same" class="me-2"  onclick="copyAddress()" value="{{old('regPostCode')}}" >
                                    <label for="same">Same as above</label>
                                </div>
                                <div>
                                    <label for="opCountry" class="form-label fw-bold mb-2">Operating Country </label>
                                    <input type="text" id="opCountry" class="form-control mb-3" value="{{old('opCountry')}}" name="opCountry" required>
                                </div>
                                <div>
                                    <label for="opAdd" class="form-label fw-bold mb-2">Operating Address</label>
                                    <input type="text" id="opAdd" class="form-control mb-3" value="{{old('opAdd')}}" name="opAdd" required>
                                </div>
                                <div>
                                    <label for="opCity" class="form-label fw-bold mb-2">Operating City</label>
                                    <input type="text" id="opCity" class="form-control mb-3" value="{{old('opCity')}}" name="opCity" required>
                                </div>
                                <div>
                                    <label for="opCountry" class="form-label fw-bold mb-2">County / State</label>
                                    <input type="text" id="opState" class="form-control mb-3" value="{{old('opState')}}" name="opState" required>
                                </div>
                                <div>
                                    <label for="opPostCode" class="form-label fw-bold mb-2">Operating Postcode</label>
                                    <input type="text" id="opPostCode" class="form-control mb-3" value="{{old('opPostCode')}}" name="opPostCode" required>
                                </div>
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
                        <div id="collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div>
                                    <label for="industry" class="form-label fw-bold mb-2">Industry</label>
                                    <input type="text" id="industry" class="form-control mb-3" value="{{old('industry')}}" name="industry" required>
                                </div>
                                <div>
                                    <label for="serviceDes" class="form-label fw-bold mb-2">Product/Service
                                        Description</label>
                                    <textarea rows="6" id="serviceDes" class="form-control mb-3" value="{{old('serviceDes')}}" name="serviceDes"
                                        placeholder="Please describe in detail the product or service you offer, solutions provided by your services or services, and the scope of the product or service, the markets to sell the product and service, as well as the main business partners." required></textarea>
                                </div>
                                <div>
                                    <label for="salesChannel" class="form-label fw-bold mb-2">Sales Channel</label>
                                    <input type="text" id="salesChannel" class="form-control mb-3" value="{{old('salesChannel')}}" name="salesChannel" required>
                                </div>
                                <div>
                                    <label for="web" class="form-label fw-bold mb-2">Website, if online</label>
                                    <input type="text" id="web" class="form-control mb-3"
                                        placeholder="URL 1" value="{{old('webURL1')}}" name="webURL1">
                                    <input type="text" id="" class="form-control mb-3"
                                        placeholder="URL 2" value="{{old('webURL2')}}" name="webURL2">
                                    <input type="text" id="" class="form-control mb-3"
                                        placeholder="URL 3" value="{{old('webURL3')}}" name="webURL3">
                                </div>
                                <div>
                                    <label for="otherweb" class="form-label fw-bold mb-2">Please specify, if
                                        other</label>
                                    <textarea rows="6" id="otherweb" class="form-control mb-3" placeholder="Please " name="other">{{old('other')}}</textarea>
                                </div>
                                <div>
                                    <label for="businessYears" class="form-label fw-bold mb-2">Number of years in
                                        business</label>
                                    <input type="number" id="businessYears" class="form-control mb-3" name="businessYears"  value="{{old('businessYears')}}">
                                </div>
                                <div>
                                    <label class="form-label fw-bold mb-2">Is License Required</label>
                                    <div class="d-flex mb-3">
                                        <div class="d-flex me-4">
                                            <input type="radio" name="licence" id="yesLicence" class="me-1"
                                                value="yes" required>
                                            <label for="yesLicence">Yes</label>
                                        </div>
                                        <div class="d-flex">
                                            <input type="radio" name="licence" id="noLicence" class="me-1"
                                                value="no" required>
                                            <label for="noLicence">No</label>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-3">If Yes, please specify: </p>
                                <div>
                                    <label for="regAuthority" class="form-label fw-bold mb-2">Regulatory
                                        Authority</label>
                                    <input type="text" id="regAuthority" class="form-control mb-3" value="{{old('regAuthority')}}" name="regAuthority">
                                </div>
                                <div>
                                    <label for="regAuthCountry" class="form-label fw-bold mb-2">Regulatory Authority
                                        Country</label>
                                    <input type="text" id="regAuthCountry" class="form-control mb-3" value="{{old('regAuthCountry')}}" name="regAuthCountry">
                                </div>
                                <div>
                                    <label for="regAuthNmbr" class="form-label fw-bold mb-2">Regulatory Registration
                                        #</label>
                                    <input type="text" id="regAuthNmbr" class="form-control mb-3" value="{{old('regAuthNmbr')}}" name="regAuthNmbr">
                                </div>
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
                        <div id="collapseFive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div>
                                    <div>
                                        <label for="numdirectors" class="form-label fw-bold mb-2">No. of
                                            Directors</label>
                                        <input type="number" id="numdirectors" class="form-control mb-3" >
                                    </div>
                                    <div class="director-main">

                                    </div>
                                </div>
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
                                <div>
                                    <div>
                                        <label for="numowners" class="form-label fw-bold mb-2">No. of Owners</label>
                                        <input type="number" id="numowners" class="form-control mb-3">
                                    </div>
                                    <div class="owner-main">

                                    </div>
                                </div>
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
                        <div id="collapseSeven" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div>
                                    <div>
                                        <label for="numubo" class="form-label fw-bold mb-2">No. of Owners</label>
                                        <input type="number" id="numubo" class="form-control mb-3">
                                    </div>
                                    <div class="ubo-main">

                                    </div>
                                </div>
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
                        <div id="collapseEight" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="">
                                    <div>
                                        <input type="radio" id="companyRef" name="refName">
                                        <label for="companyRef" class="form-label fw-bold mb-2">Referred by a company:
                                            Which company?
                                        </label>
                                    </div>
                                    <input type="text" class="form-control mb-3 companyRef">
                                </div>
                                <div>
                                    <div>
                                        <input type="radio" id="personRef" name="refName">
                                        <label for="personRef" class="form-label fw-bold mb-2">Referred by a person:
                                            Which person? </label>
                                    </div>
                                    <input type="text" class="form-control mb-3 personRef">
                                </div>
                                <div>
                                    <div>
                                        <input type="radio" id="advRef" name="refName">
                                        <label for="advRef" class="form-label fw-bold mb-2">Online Advertisement:
                                            Which website? </label>
                                    </div>
                                    <input type="text" class="form-control mb-3 advRef">
                                </div>
                                <div>
                                    <div>
                                        <input type="radio" id="onlinesearchRef" name="refName">
                                        <label for="onlinesearchRef" class="form-label fw-bold mb-2">Online Search:
                                            Which keyword? </label>
                                    </div>
                                    <input type="text" class="form-control mb-3 onlinesearchRef">
                                </div>
                                <div>
                                    <div>
                                        <input type="radio" id="tradeRef" name="refName">
                                        <label for="tradeRef" class="form-label fw-bold mb-2">Tradeshow: Which
                                            tradeshow? </label>
                                    </div>
                                    <input type="text" class="form-control mb-3 tradeRef" >
                                </div>
                                <input type="text" name="refDetails" value="" class="refDetails d-none ">
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
                        <div id="collapseNine" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div>
                                    <label for="idcard" class="form-label fw-bold mb-2">Personal Documentation
                                        Required</label>
                                    <p>Original seen (certified true copy) Valid photo ID of Directors and the UBOs. The
                                        copy document must be in colour, (Passport or Driving License). Copy must be of
                                        front and back of any card used for ID verification or double page of the
                                        passport.</p>
                                    <input type="file" id="idcard" class="form-control mb-3" name="idFile" required>
                                </div>
                                <div>
                                    <p>Proof of home address of Directors and the UBOs: latest Utility, Council Tax or
                                        Telecommunication bill, or
                                        Bank statement, not older than 3 months.
                                    </p>
                                    <input type="file" id="Upload2" class="form-control mb-3" name="billFile" required>
                                </div>
                                <div>
                                    <label for="" class="form-label fw-bold mb-2">
                                        Company Documentation Required
                                    </label>
                                    <p>All documents shall be either provided in English language or a translation from
                                        original language must be
                                        provided
                                    </p>
                                    <div>
                                        <label for="incorporation" class="form-label fw-bold mb-2">
                                            Certificate of Incorporation *
                                        </label>
                                        <input type="file" id="incorporation" class="form-control mb-3" name="incorporationFile" required>
                                    </div>
                                    <div>
                                        <label for="memorandum" class="form-label fw-bold mb-2">
                                            Memorandum and/or Articles of Association *
                                        </label>
                                        <input type="file" id="memorandum" class="form-control mb-3" name="memorandumFile" required>
                                    </div>
                                    <div>
                                        <label for="boardOfDirRes" class="form-label fw-bold mb-2">
                                            Resolution of the Board of Directors for to open a transaction account with
                                            IRETI CAPITAL
                                        </label>
                                        <input type="file" id="boardOfDirRes" class="form-control mb-3" name="resolutionFile" required>
                                    </div>
                                </div>
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
                            <br>
                            IRETI CAPITAL may request additional documentation after review of this Application
                            Form.<br>
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
                        <div class="row align-items-center mt-3">
                            <div class="col-3 col-md-1 col-sm-2">
                                <div class="">
                                    <input type="radio" class="" id="check1" name="confirm1"
                                        value="yes" checked>
                                    <label class=" fw-bold" for="check1">Yes</label>
                                </div>
                            </div>
                            <div class="col-3 col-md-1 col-sm-2">
                                <div class="">
                                    <input type="radio" class="" id="check2" name="confirm1"
                                        value="no">
                                    <label class=" fw-bold" for="check2">No</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-8 mt-3 mt-sm-0">
                                <div class="fw-bold d-sm-flex align-items-center">
                                    <label for="specify1" class="mb-0 text-nowrap me-3">If Yes, please
                                        specify:</label>
                                    <input id="specify1" type="text" class="form-control " name="confirm1Details">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>Do any of the above-named directors or shareholders or any members of their family hold a
                                <b>politically exposed position</b> or are they close associates or cohabitants of
                                anyone who
                                holds a politically exposed position? A politically exposed position is a head of state
                                or government minister, deputy or assistant a member of the executive council or
                                legislature, and ambassador, embassy attaché or counsellor a high-ranking officer in the
                                armed forces a member of the administrative management or supervisory body of a
                                state-owned enterprise a member of a court of auditors or the board of a central bank a
                                head of a government agency a member of a supreme court constitutional court or
                                high-level judicial body.
                            </p>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-3 col-md-1 col-sm-2">
                                <div class="">
                                    <input type="radio" class="" id="check3" name="confirm2"
                                        value="yes" checked>
                                    <label class=" fw-bold" for="check3">Yes</label>
                                </div>
                            </div>
                            <div class="col-3 col-md-1 col-sm-2">
                                <div class="">
                                    <input type="radio" class="" id="check4" name="confirm2"
                                        value="no">
                                    <label class=" fw-bold" for="check4">No</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-8 mt-3 mt-sm-0">
                                <div class="fw-bold d-sm-flex align-items-center">
                                    <label for="specify2" class="mb-0 text-nowrap me-3">If Yes, please
                                        specify:</label>
                                    <input id="specify2" type="text" class="form-control " name="confirm2Details">
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
                            <textarea class="form-control" id="FormControlTextarea1" rows="3" name="sign"></textarea>
                        </div>
                        <div class="row d-flex mt-3">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="FormControlInput1" class="form-label fw-bold">Position</label>
                                    <input type="email" class="form-control " id="FormControlInput1" name="position">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="DateInput" class="form-label fw-bold">Date and Place</label>
                                    <input class="form-control" type="text" id="DateInput" name="dateAndPlace">
                                </div>
                            </div>
                            <input class="form-control d-none" type="number" name="status" value="1" readonly>
                        </div>
                        <div class="mt-3 text-center">
                            <button type="submit" id="myButton"
                                class="bg-green ps-5 pe-5 pt-3 pb-3 rounded-3 text-white border-0">Done</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @include('Template.footer')
    @include('Template.jslinks')
    <script>
        //  document.getElementById('myButton').addEventListener('click', function() {
        //     Swal.fire({
        //         title: "Thank you!",
        //         text: "We will get back to you soon to finalize your onboarding.",
        //         icon: "success"
        //     });
        // });
        $(document).ready(function() {
            $('#numdirectors').on('input', function() {
                var numCars = $(this).val();
                var carForm = $('.director-main');
                carForm.empty(); // Clear previous form fields
                for (var i = 0; i < numCars; i++) {
                    var formFields = `<div class="director-fields">
                                <h2 class="fs-3 fw-bold"> Director ${i + 1} Details</h2>
                                        <div>
                                            <label for="dirName" class="form-label fw-bold mb-2">Full Name</label>
                                            <input type="text" id="dirName" class="form-control mb-3" name="dirName[]">
                                        </div>
                                        <div>
                                            <label for="dirCountry" class="form-label fw-bold mb-2">Country / State</label>
                                            <input type="text" id="dirCountry" class="form-control mb-3" name="dirCountry[]">
                                        </div>
                                        <div>
                                            <label for="dirAddress" class="form-label fw-bold mb-2">Address</label>
                                            <input type="text" id="dirAddress" class="form-control mb-3" name="dirAddress[]">
                                        </div>
                                        <div>
                                            <label for="dirCity" class="form-label fw-bold mb-2">City</label>
                                            <input type="text" id="dirCity" class="form-control mb-3" name="dirCity[]">
                                        </div>
                                        <div>
                                            <label for="dirPostcode" class="form-label fw-bold mb-2">Postcode</label>
                                            <input type="text" id="dirPostcode" class="form-control mb-3" name="dirPostcode[]">
                                        </div>
                                        <div>
                                            <label for="dirDOB" class="form-label fw-bold mb-2">DOB</label>
                                            <input type="date" id="dirDOB" class="form-control mb-3" name="dirDOB[]">
                                        </div>
                                        <div>
                                            <label for="dirPassport" class="form-label fw-bold mb-2">Passport #</label>
                                            <input type="text" id="dirPassport" class="form-control mb-3" name="dirPassport[]">
                                        </div>
                                        <div>
                                            <label for="dirExp" class="form-label fw-bold mb-2">Passport Expiry Date</label>
                                            <input type="text" id="dirExp" class="form-control mb-3" name="dirExp[]">
                                        </div>
                                        <div>
                                            <label for="dirNationality" class="form-label fw-bold mb-2">Nationality</label>
                                            <input type="text" id="dirNationality" class="form-control mb-3" name="dirNationality[]">
                                        </div>
                                    </div>
                        `;
                    carForm.append(formFields);
                }
            });

            $('#numowners').on('input', function() {
                var numCars = $(this).val();
                var carForm = $('.owner-main');
                carForm.empty(); // Clear previous form fields
                for (var i = 0; i < numCars; i++) {
                    var formFields = `<div class="owner-fields">
                                <h2 class="fs-3 fw-bold"> Owner ${i + 1} Details</h2>
                                        <div>
                                            <label for="ownerName" class="form-label fw-bold mb-2">Full Name</label>
                                            <input type="text" id="ownerName" class="form-control mb-3" name="ownerName[]">
                                        </div>
                                        <div>
                                            <label for="ownerCountry" class="form-label fw-bold mb-2">Country / State</label>
                                            <input type="text" id="ownerCountry" class="form-control mb-3" name="ownerCountry[]">
                                        </div>
                                        <div>
                                            <label for="ownerAddress" class="form-label fw-bold mb-2">Address</label>
                                            <input type="text" id="ownerAddress" class="form-control mb-3" name="ownerAddress[]">
                                        </div>
                                        <div>
                                            <label for="ownerCity" class="form-label fw-bold mb-2">City</label>
                                            <input type="text" id="ownerCity" class="form-control mb-3" name="ownerCity[]">
                                        </div>
                                        <div>
                                            <label for="ownerPostcode" class="form-label fw-bold mb-2">Postcode</label>
                                            <input type="text" id="ownerPostcode" class="form-control mb-3" name="ownerPostcode[]">
                                        </div>
                                        <div>
                                            <label for="ownerDOB" class="form-label fw-bold mb-2">DOB</label>
                                            <input type="date" id="ownerDOB" class="form-control mb-3" name="ownerDOB[]">
                                        </div>
                                        <div>
                                            <label for="ownerPassport" class="form-label fw-bold mb-2">Passport #</label>
                                            <input type="text" id="ownerPassport" class="form-control mb-3" name="ownerPassport[]">
                                        </div>
                                        <div>
                                            <label for="ownerExp" class="form-label fw-bold mb-2">Passport Expiry Date</label>
                                            <input type="text" id="ownerExp" class="form-control mb-3" name="ownerExp[]">
                                        </div>
                                        <div>
                                            <label for="ownerNationality" class="form-label fw-bold mb-2">Nationality</label>
                                            <input type="text" id="ownerNationality" class="form-control mb-3" name="ownerNationality[]">
                                        </div>
                                        <div>
                                            <label for="ownerShare" class="form-label fw-bold mb-2">Share %</label>
                                            <input type="text" id="ownerShare" class="form-control mb-3" name="ownerShare[]">
                                        </div>
                                    </div>
                        `;
                    carForm.append(formFields);
                }
            });

            $('#numubo').on('input', function() {
                var numCars = $(this).val();
                var carForm = $('.ubo-main');
                carForm.empty(); // Clear previous form fields
                for (var i = 0; i < numCars; i++) {
                    var formFields = `<div class="ubo-fields">
                                <h2 class="fs-3 fw-bold"> UBO ${i + 1} Details</h2>
                                        <div>
                                            <label for="uboName" class="form-label fw-bold mb-2">Full Name</label>
                                            <input type="text" id="uboName" class="form-control mb-3" name="uboName[]">
                                        </div>
                                        <div>
                                            <label for="uboCountry" class="form-label fw-bold mb-2">Country / State</label>
                                            <input type="text" id="uboCountry" class="form-control mb-3" name="uboCountry[]">
                                        </div>
                                        <div>
                                            <label for="uboAddress" class="form-label fw-bold mb-2">Address</label>
                                            <input type="text" id="uboAddress" class="form-control mb-3" name="uboAddress[]">
                                        </div>
                                        <div>
                                            <label for="uboCity" class="form-label fw-bold mb-2">City</label>
                                            <input type="text" id="uboCity" class="form-control mb-3" name="uboCity[]">
                                        </div>
                                        <div>
                                            <label for="uboPostcode" class="form-label fw-bold mb-2">Postcode</label>
                                            <input type="text" id="uboPostcode" class="form-control mb-3" name="uboPostcode[]">
                                        </div>
                                        <div>
                                            <label for="uboDOB" class="form-label fw-bold mb-2">DOB</label>
                                            <input type="text" id="uboDOB" class="form-control mb-3" name="uboDOB[]">
                                        </div>
                                        <div>
                                            <label for="uboPassport" class="form-label fw-bold mb-2">Passport #</label>
                                            <input type="text" id="uboPassport" class="form-control mb-3" name="uboPassport[]">
                                        </div>
                                        <div>
                                            <label for="uboExp" class="form-label fw-bold mb-2">Passport Expiry Date</label>
                                            <input type="text" id="uboExp" class="form-control mb-3" name="uboExp[]">
                                        </div>
                                        <div>
                                            <label for="uboNationality" class="form-label fw-bold mb-2">Nationality</label>
                                            <input type="text" id="uboNationality" class="form-control mb-3" name="uboNationality[]">
                                        </div>
                                        <div>
                                            <label for="uboShare" class="form-label fw-bold mb-2">Share %</label>
                                            <input type="text" id="uboShare" class="form-control mb-3" name="uboShare[]">
                                        </div>
                                    </div>
                        `;
                    carForm.append(formFields);
                }
            });
        });

        document.getElementById('Upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
        document.getElementById('Upload2').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview2').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
   <script>
    function copyAddress() {
        const isChecked = document.getElementById('same').checked;

        const fields = [
            { from: 'incorporationCountry', to: 'opCountry' },
            { from: 'regAdd', to: 'opAdd' },
            { from: 'regCity', to: 'opCity' },
            { from: 'regState', to: 'opState' },
            { from: 'regPostCode', to: 'opPostCode' }
        ];

        if (isChecked) {
            fields.forEach(field => {
                document.getElementById(field.to).value = document.getElementById(field.from).value;
            });
        } else {
            fields.forEach(field => {
                document.getElementById(field.to).value = '';
            });
        }
    }

    function setupFieldListeners() {
        const fields = [
            { from: 'incorporationCountry', to: 'opCountry' },
            { from: 'regAdd', to: 'opAdd' },
            { from: 'regCity', to: 'opCity' },
            { from: 'regState', to: 'opState' },
            { from: 'regPostCode', to: 'opPostCode' }
        ];

        fields.forEach(field => {
            document.getElementById(field.from).addEventListener('input', () => {
                if (document.getElementById('same').checked) {
                    document.getElementById(field.to).value = document.getElementById(field.from).value;
                }
            });
        });
    }

    document.addEventListener('DOMContentLoaded', setupFieldListeners);
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to update refDetails based on selected radio button
        function updateRefDetails() {
            let refDetails = document.querySelector('.refDetails');
            if (document.getElementById('companyRef').checked) {
                refDetails.value = document.querySelector('.companyRef').value;
            } else if (document.getElementById('personRef').checked) {
                refDetails.value = document.querySelector('.personRef').value;
            } else if (document.getElementById('advRef').checked) {
                refDetails.value = document.querySelector('.advRef').value;
            } else if (document.getElementById('onlinesearchRef').checked) {
                refDetails.value = document.querySelector('.onlinesearchRef').value;
            } else if (document.getElementById('tradeRef').checked) {
                refDetails.value = document.querySelector('.tradeRef').value;
            }
        }

        // Attach event listeners to radio buttons
        document.getElementById('companyRef').addEventListener('change', updateRefDetails);
        document.getElementById('personRef').addEventListener('change', updateRefDetails);
        document.getElementById('advRef').addEventListener('change', updateRefDetails);
        document.getElementById('onlinesearchRef').addEventListener('change', updateRefDetails);
        document.getElementById('tradeRef').addEventListener('change', updateRefDetails);

        // Attach event listeners to input fields
        document.querySelector('.companyRef').addEventListener('input', updateRefDetails);
        document.querySelector('.personRef').addEventListener('input', updateRefDetails);
        document.querySelector('.advRef').addEventListener('input', updateRefDetails);
        document.querySelector('.onlinesearchRef').addEventListener('input', updateRefDetails);
        document.querySelector('.tradeRef').addEventListener('input', updateRefDetails);
    });
</script>
</body>

</html>
