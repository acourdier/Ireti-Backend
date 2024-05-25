<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Bank</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.usersidebar')
            <div class="rightmain">
                @include('../Template.usernav')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <form action="{{route('user.addbank')}}" method="POST">
                            @csrf
                            
                            <div class="row px-3 px-md-5">
                                <h4>Bank Account</h4>
                                <div class="col-12">
                                    <div class="mt-3">
                                        <label for="name">Account Name</label>
                                        <input type="text" value="{{$account['accountname']}}" name="accountname" id="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3">
                                        <label for="account">Account Number</label>
                                        <input type="text" value="{{ $account ['accountnumber'] }}" name="accountnumber" id="account" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <label for="bic">BIC</label>
                                        <input type="text" value="{{ $account ['bic'] }}" name="bic" id="bic" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <label for="currency">Currency of the account</label>
                                        <input type="text" value="{{ $account ['currency'] }}" name="currency" id="currency" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button type="submit" class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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