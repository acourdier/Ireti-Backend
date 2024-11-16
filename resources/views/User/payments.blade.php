<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Payments</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.usersidebar')
            <div class="rightmain">
                @include('../Template.usernav')
                @include('Template.status-alert')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 ">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <h4>Payments</h4>
                            </div>
                            @if ($payments->count() > 0)
                                <div class="table-responsive tbl-800 mt-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="font-semi">Customer Name</th>
                                                <th class="font-semi">Order ID</th>
                                                <th class="font-semi">Beneficiary Name</th>
                                                <th class="font-semi">Beneficiary Account</th>
                                                <th class="font-semi">Amount</th>
                                                <th class="font-semi">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payments as $payment)
                                            <tr>
                                                <td class="text-secondary align-middle">{{$payment['fname']}}</td>
                                                <td class="text-secondary align-middle">{{$payment['orderid']}}</td>
                                                <td class="text-secondary align-middle">{{$payment['accountname']}}</td>
                                                <td class="text-secondary align-middle">{{$payment['accountnumber']}}</td>
                                                <td class="text-secondary align-middle">{{$payment['amount']}}</td>
                                                <td class=" align-middle">
                                                    <button class=" 
                                                    @if ($payment['status'] == 'Accepted') btngreen
                                                        @elseif($payment['status'] == 'Pending') btnyellow
                                                        @elseif($payment['status'] == 'Declined') btnred
                                                    @endif">
                                                        {{$payment['status']}}
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="text-danger">No Payment Available.</p>
                            @endif
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