<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Notifications</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.sidebar')
            <div class="rightmain">
                @include('../Template.adminnav')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 px-md-5">
                            <h4>Notifications</h4>
                            <div class="col-12 mt-3">
                                <div class="d-flex align-content-start">
                                    <img src="{{asset('img/profile.svg')}}" alt="user" class="notimg">
                                    <div class="ms-3">
                                        <p class="mb-0 small"><span class="font-semi fs-6">Lex Murphy</span>
                                            requested access to UNIX directory tree hierarchy</p>
                                        <div class="d-flex align-items-center my-2">
                                            <button
                                                class=" px-3 py-1 me-2 border-0 rounded-3 green text-white font-semi">
                                                Accept
                                            </button>
                                            <button
                                                class=" px-3 py-1 ms-2  border-0 rounded-3 bg-secondary text-white font-semi">
                                                Decline
                                            </button>
                                        </div>
                                        <p class="mb-0 gray small font-semi">Today at 9:42 AM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="d-flex align-content-start">
                                    <img src="{{asset('img/teammember1.svg')}}" alt="user" class="notimg">
                                    <div class="ms-3">
                                        <p class="mb-0 small"><span class="font-semi fs-6">Ray Arnold</span> left 6 comments on Isla Nublar SOC2
                                            compliance report
                                        </p>
                                        <p class="mb-0 gray small font-semi">Today at 9:42 AM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="d-flex align-content-start">
                                    <img src="{{asset('img/teammember2.svg')}}" alt="user" class="notimg">
                                    <div class="ms-3">
                                        <p class="mb-0 small"><span class="font-semi fs-6">Denise Nedry</span> replied to Anna Srzand</p>
                                        <div class="border-start border-4">
                                            <p class="ms-2 my-3 small">
                                                “Oh, I finished de-bugging the phones, but the system's compiling for
                                                eighteen minutes, or twenty. So, some minor systems may go on and off
                                                for a while.”
                                            </p>
                                        </div>
                                        <p class="mb-0 gray small font-semi">Today at 9:42 AM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="d-flex align-content-start">
                                    <img src="{{asset('img/profile.svg')}}" alt="user" class="notimg">
                                    <div class="ms-3">
                                        <p class="mb-0 small"><span class="font-semi fs-6">John Hammond</span> attached a file to Isla Nublar SOC2
                                            compliance report </p>
                                        <div class=" d-flex align-items-center">
                                            <img src="{{asset('img/FileIcon.svg')}}" alt="">
                                            <p class="ms-2 my-3 small">
                                                EY_review.pdf
                                            </p>
                                        </div>
                                        <p class="mb-0 gray small font-semi">Today at 9:42 AM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="d-flex align-content-start">
                                    <img src="{{asset('img/teammember1.svg')}}" alt="user" class="notimg">
                                    <div class="ms-3">
                                        <p class="mb-0 small"><span class="font-semi fs-6">Denise Nedry</span> commented on Isla Nublar SOC2 compliance
                                            report</p>
                                        <div class="border-start border-4">
                                            <p class="ms-2 my-3 small">
                                                “Oh, I finished de-bugging the phones, but the system's compiling for
                                                eighteen minutes, or twenty. So, some minor systems may go on and off
                                                for a while.”
                                            </p>
                                        </div>
                                        <p class="mb-0 gray small font-semi">Today at 9:42 AM</p>
                                    </div>
                                </div>
                            </div>
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