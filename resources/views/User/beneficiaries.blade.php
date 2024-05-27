<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Beneficiaries</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.usersidebar')
            <div class="rightmain">
                @include('../Template.usernav')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 px-md-5">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <h4 class="font-bold">Beneficiaries</h4>
                                <a href="{{route('user.addbeneficiaries')}}"
                                    class=" px-4 py-2 border-0 rounded-3 text-decoration-none green text-white font-semi">
                                    Add Beneficiaries
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="mt-3">
                                    <label for="name">Bank Account Details</label>
                                    <select name="opn" id="name" class="form-control">
                                        <option value="opt" selected disabled>Select by name</option>
                                        @foreach ($beneficiaries as $beneficiary)
                                        <option value="{{$beneficiary['accountname']}}">{{$beneficiary['accountname']}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @foreach ($beneficiaries as $beneficiary)
                            <div class="col-md-8 border-bottom border-2 py-5">
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <p class="font-semi small mb-0">Account name</p>
                                    <p class="mb-0 small">{{$beneficiary['accountname']}}</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <p class="font small font-semi mb-0">Account number</p>
                                    <p class="mb-0 small">{{$beneficiary['accountnumber']}}</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <p class="font-semi mb-0 small">BIC</p>
                                    <p class="mb-0 small">{{$beneficiary['bic']}}</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <p class="font-semi small mb-0">Currency</p>
                                    <p class="mb-0 small">{{$beneficiary['currency']}}</p>
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