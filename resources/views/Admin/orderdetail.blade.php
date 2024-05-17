<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Validate Order</title>
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
                            <h4>Validate Order</h4>
                            <div class="col-md-8 pb-5">
                                <div class="d-flex justify-content-center align-items-center mt-3">
                                    <p class="font-semi small mb-0">Order Details</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <p class="font-semi small mb-0">Account name</p>
                                    <p class="mb-0 small">Acme Crop</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <p class="font small font-semi mb-0">Account number</p>
                                    <p class="mb-0 small">2223330079595665</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <p class="font-semi mb-0 small">BIC</p>
                                    <p class="mb-0 small">RATNOVAAPIS</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <p class="font-semi small mb-0">Currency</p>
                                    <p class="mb-0 small">US$</p>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <p class="font-semi small mb-0  mt-3">Do you wish to validate this order ?</p>
                                    <div class="d-flex align-items-center  mt-3">
                                        <button class=" px-3 py-1 me-2 border-0 rounded-3 green text-white font-semi">
                                            Yes
                                        </button>
                                        <button class=" px-3 py-1 ms-2  border-0 rounded-3 bg-secondary text-white font-semi">
                                            No
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <p class="mb-0 small">
                                        This page will get get invoice data according to selection from previous page 
                                        (For Backend Developers)
                                    </p>
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