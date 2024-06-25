<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Add Payments</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.sidebar')
            <div class="rightmain">
                @include('../Template.adminnav')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 ">
                            <h4 class="fw-bold">User Details:</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Name</h2>
                                        <p>{{$user['fname']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Email</h2>
                                        <p>{{$user['email']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Phone</h2>
                                        <p>{{$user['phone']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Username</h2>
                                        <p>{{$user['username']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">City</h2>
                                        <p>{{$user['city']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Country</h2>
                                        <p>{{$user['country']}}</p>
                                    </div>
                                </div> 
                            </div>

                            <h4 class="fw-bold mt-4">Inquiry Details:</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Full Name</h2>
                                        <p>{{$user['in_fullname']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Position</h2>
                                        <p>{{$user['in_position']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Email</h2>
                                        <p>{{$user['in_email']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Phone Number</h2>
                                        <p>{{$user['in_phone']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Legal Name</h2>
                                        <p>{{$user['legalname']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">DBA / Trading Name</h2>
                                        <p>{{$user['tradingname']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Registration #</h2>
                                        <p>{{$user['regNmber']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Date of Registration</h2>
                                        <p>{{$user['regDate']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">VAT / TIN ID</h2>
                                        <p>{{$user['vat']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Company Link in a Public
                                            registry </h2>
                                        <p>{{$user['companylink']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Corporate Website</h2>
                                        <p>{{$user['corWeb']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Company Email</h2>
                                        <p>{{$user['companyEmail']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Number of Directors</h2>
                                        <p>{{$user['directors']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Number of Employees</h2>
                                        <p>{{$user['emp']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Incorporation Country</h2>
                                        <p>{{$user['incorporationCountry']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Registered Address</h2>
                                        <p>{{$user['regAdd']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Registered City</h2>
                                        <p>{{$user['regCity']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">County / State</h2>
                                        <p>{{$user['regState']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Registered Postcode</h2>
                                        <p>{{$user['regPostCode']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Operating Country</h2>
                                        <p>{{$user['opCountry']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Operating Address</h2>
                                        <p>{{$user['opAdd']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Operating City</h2>
                                        <p>{{$user['opCity']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">County / State</h2>
                                        <p>{{$user['opState']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Operating Postcode</h2>
                                        <p>{{$user['opPostCode']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Industry</h2>
                                        <p>{{$user['industry']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Product/Service
                                            Description</h2>
                                        <p>{{$user['serviceDes']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Sales Channel</h2>
                                        <p>{{$user['salesChannel']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Website URL1</h2>
                                        <p>{{$user['webURL1']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Website URL2</h2>
                                        <p>{{$user['webURL2']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Website URL3</h2>
                                        <p>{{$user['webURL3']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Other</h2>
                                        <p>{{$user['other']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Number of years in business</h2>
                                        <p>{{$user['businessYears']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Is License Required</h2>
                                        <p>{{$user['licence']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Regulatory Authority</h2>
                                        <p>{{$user['regAuthority']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Regulatory Authority Country</h2>
                                        <p>{{$user['regAuthCountry']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Regulatory Registration #</h2>
                                        <p>{{$user['regAuthNmbr']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Referral</h2>
                                        <p>{{$user['refName']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Referral Details</h2>
                                        <p>{{$user['refDetails']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Date and Place</h2>
                                        <p>{{$user['dateAndPlace']}}</p>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Personal Documentation</h2>
                                        <a class="text-black" href="<?php echo asset('uploads/' . $user['idFile']); ?>">File</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Proof of home address of Directors and the UBOs: latest Utility, Council Tax or
                                            Telecommunication bill, or
                                            Bank statement, not older than 3 months.</h2>
                                        <a class="text-black" href="<?php echo asset('uploads/' . $user['billFile']); ?>">File</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Certificate of Incorporation</h2>
                                        <a class="text-black" href="<?php echo asset('uploads/' . $user['incorporationFile']); ?>">File</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6"> Memorandum and/or Articles of Association</h2>
                                        <a class="text-black" href="<?php echo asset('uploads/' . $user['memorandumFile']); ?>">File</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-2">
                                        <h2 class="fw-bold fs-6">Resolution of the Board of Directors for to open a transaction account with
                                            IRETI CAPITAL</h2>
                                        <a class="text-black" href="<?php echo asset('uploads/' . $user['resolutionFile']); ?>">File</a>
                                    </div>
                                </div>
                               
                            </div>

                            <h4 class="fw-bold mt-4">Director Details:</h4>
                            @php
                                $dnum = 1;
                            @endphp
                            @foreach ($directors as $director)
                                <h5 class="fw-bold mt-3">Director {{$dnum++}}:</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Full Name</h2>
                                            <p>{{$director['dirName']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Country / State</h2>
                                            <p>{{$director['dirCountry']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Address</h2>
                                            <p>{{$director['dirAddress']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">City</h2>
                                            <p>{{$director['dirCity']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Postcode</h2>
                                            <p>{{$director['dirPostcode']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">DOB</h2>
                                            <p>{{$director['dirDOB']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Passport #</h2>
                                            <p>{{$director['dirPassport']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Passport Expiry Date</h2>
                                            <p>{{$director['dirExp']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Nationality</h2>
                                            <p>{{$director['dirNationality']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h4 class="fw-bold mt-4">Owner Details:</h4>
                            @php
                                $onum = 1;
                            @endphp
                            @foreach ($owners as $owner)
                                <h5 class="fw-bold mt-3">Owner {{$onum++}}:</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Full Name</h2>
                                            <p>{{$owner['ownerName']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Country / State</h2>
                                            <p>{{$owner['ownerCountry']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Address</h2>
                                            <p>{{$owner['ownerAddress']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">City</h2>
                                            <p>{{$owner['ownerCity']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Postcode</h2>
                                            <p>{{$owner['ownerPostcode']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">DOB</h2>
                                            <p>{{$owner['ownerDOB']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Passport #</h2>
                                            <p>{{$owner['ownerPassport']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Passport Expiry Date</h2>
                                            <p>{{$owner['ownerExp']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Nationality</h2>
                                            <p>{{$owner['ownerNationality']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Share %</h2>
                                            <p>{{$owner['ownerShare']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h4 class="fw-bold mt-4">UBO Details:</h4>
                            @php
                                $unum = 1;
                            @endphp
                            @foreach ($ubos as $ubo)
                                <h5 class="fw-bold mt-3">UBO {{$unum++}}:</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Full Name</h2>
                                            <p>{{$ubo['uboName']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Country / State</h2>
                                            <p>{{$ubo['uboCountry']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Address</h2>
                                            <p>{{$ubo['uboAddress']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">City</h2>
                                            <p>{{$ubo['uboCity']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Postcode</h2>
                                            <p>{{$ubo['uboPostcode']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">DOB</h2>
                                            <p>{{$ubo['uboDOB']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Passport #</h2>
                                            <p>{{$ubo['uboPassport']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Passport Expiry Date</h2>
                                            <p>{{$ubo['uboExp']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Nationality</h2>
                                            <p>{{$ubo['uboNationality']}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-2">
                                            <h2 class="fw-bold fs-6">Share %</h2>
                                            <p>{{$ubo['uboShare']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="ftr text-center">
                    <p class="mb-0 text-muted">©2024 Ireti Capital. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    @include('../Template.jslinks')
</body>

</html>