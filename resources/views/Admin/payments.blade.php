<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Payments</title>
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
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <h4 class="font-bold">Payments</h4>
                                <a href="{{route('admin.addpayment')}}"
                                    class=" px-4 py-2 border-0 rounded-3 text-decoration-none green text-white font-semi">
                                    Add Payments
                                </a>
                            </div>
                            <div class="table-responsive tbl-800 mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="font-semi">Customer Name</th>
                                            <th class="font-semi">Beneficiary Name</th>
                                            <th class="font-semi">Beneficiary Account</th>
                                            <th class="font-semi">Amount</th>
                                            <th class="font-semi">Status</th>
                                            <th class="font-semi">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-secondary align-middle">Alexander</td>
                                            <td class="text-secondary align-middle">John Doe</td>
                                            <td class="text-secondary align-middle">000000000000</td>
                                            <td class="text-secondary align-middle">$600.00</td>
                                            <td class=" align-middle">
                                                <button class="btngreen">
                                                    Approved
                                                </button>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.editpayment')}}">
                                                    <i class="fa-solid text-muted fa-pen-to-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-secondary align-middle">Alexander</td>
                                            <td class="text-secondary align-middle">John Doe</td>
                                            <td class="text-secondary align-middle">000000000000</td>
                                            <td class="text-secondary align-middle">$600.00</td>
                                            <td class=" align-middle">
                                                <button class="btnyellow">
                                                    Pending
                                                </button>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.editpayment')}}">
                                                    <i class="fa-solid text-muted fa-pen-to-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-secondary align-middle">Alexander</td>
                                            <td class="text-secondary align-middle">John Doe</td>
                                            <td class="text-secondary align-middle">000000000000</td>
                                            <td class="text-secondary align-middle">$600.00</td>
                                            <td class=" align-middle">
                                                <button class="btnred">
                                                    Cancelled
                                                </button>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.editpayment')}}">
                                                    <i class="fa-solid text-muted fa-pen-to-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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