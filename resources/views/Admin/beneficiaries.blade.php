<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Beneficiaries</title>
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
                            <h4>Beneficiaries</h4>
                            <div class="col-md-8">
                                <div class="mt-3">
                                    <label for="name">Bank Account Details</label>
                                    <select name="opn" id="name" class="form-control">
                                        <option value="opt" selected disabled>Select by name</option>
                                        <option value="option1">option1</option>
                                        <option value="option2">option2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 border-bottom border-2 py-5">
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
                            </div>
                            <div class="col-md-8 border-bottom border-2 py-5">
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