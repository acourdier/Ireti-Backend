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
                            <h4>Add Payments</h4>
                            <form action="{{route('admin.savepayment')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="customer">Customer Name</label>
                                            <input type="text" required name="customer" id="customer"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="Beneficiary">Beneficiary Name</label>
                                            <input type="text" required name="Beneficiary" id="Beneficiary"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="baccount">Beneficiary Account</label>
                                            <input type="text" required name="baccount" id="baccount"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="amount">Amount</label>
                                            <input type="number" required name="amount" id="amount"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="status">Status</label>
                                            <select name="status"  id="status" class="form-control">
                                                <option value="Pending">Pending</option>
                                                <option value="Accepted">Accepted</option>
                                                <option value="Declined">Declined</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <button type="submit" class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                                Add Payment
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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