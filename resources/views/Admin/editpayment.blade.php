<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Edit Payments</title>
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
                            <h4>Edit Payments</h4>
                            <form action="{{route('admin.updatepayment')}}" method="POST">
                                @csrf
                                <input type="text" name="id" class="d-none" value="{{$payment['pid']}}" readonly>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="customer">Customer Name</label>
                                            <select name="customer" id="customer" onchange="fetchBeneficiary(); fetchOrder();" class="form-control bg-grey" disabled>
                                                {{-- <option value="{{ $payment['customer'] }}">{{ $payment['customer'] }}</option> --}}
                                                @foreach ($users as $user)
                                                <option value="{{ $user['id'] }}" {{ $user['id'] == $payment['customer'] ? 'selected' : '' }}>
                                                    {{ $user['fname'] }}
                                                </option>
                                            @endforeach
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="baccount">Beneficiary</label>
                                                <select name="baccount" id="baccount" class="form-control bg-grey" disabled>
                                                    {{-- <option value="{{ $payment['baccount'] }}">{{ $payment['baccount'] }}</option> --}}
                                                    <option value=" {{ $payment['accountnumber'] }}">
                                                        {{ $payment['accountname'] }}
                                                    </option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="baccount">Order</label>
                                            <input type="text" value="{{ $payment['orderid'] }}" required
                                                name="baccount" id="baccount" class="form-control border border-1  bg-grey" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="currency">Currency</label>
                                            <input type="text" value="{{ $payment['currency'] }}" required name="currency"
                                                id="currency" class="form-control border border-1  bg-grey" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="amount">Amount</label>
                                            <input type="number" value="{{ $payment['amount'] }}" required name="amount"
                                                id="amount" class="form-control border border-1">
                                        </div>
                                    </div>
                                  
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control border border-1">
                                                <option {{ $payment['status']=='Pending' ? 'selected' : '' }}>Pending
                                                </option>
                                                <option {{ $payment['status']=='Accepted' ? 'selected' : '' }}>Accepted
                                                </option>
                                                <option {{ $payment['status']=='Declined' ? 'selected' : '' }}>Declined
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <button type="submit"
                                                class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                                Update Payment
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