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
                @if (session('success'))
                <script>
                    swal("Good job!", "{{ session('success') }}", "success");
                </script>
                @endif
                @if (session('Delete'))
                <script>
                    swal("Good job!", "{{ session('Delete') }}", "success");
                </script>
                @endif
                @if (session('update'))
                <script>
                    swal("Good job!", "{{ session('update') }}", "success");
                </script>
                @endif
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 ">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <h4>Payments</h4>
                                <a href="{{route('admin.addpayment')}}"
                                    class=" px-4 py-2 border-0 rounded-3 text-decoration-none green text-white font-semi">
                                    Add Payments
                                </a>
                            </div>
                            @if ($payments->count() > 0)
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
                                            @foreach ($payments as $payment)
                                            <tr>
                                                <td class="text-secondary align-middle">{{$payment['customer']}}</td>
                                                <td class="text-secondary align-middle">{{$payment['Beneficiary']}}</td>
                                                <td class="text-secondary align-middle">{{$payment['baccount']}}</td>
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
                                                <td>
                                                    <div class="dropdown">
                                                        <i class="fa-solid fa-ellipsis-vertical pointer" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ 'deletePayment/' . $payment['id'] }}">
                                                                    <i
                                                                        class="fa-solid fa-trash text-secondary pointer me-2"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ 'editpayment/' . $payment['id'] }}">
                                                                    <i
                                                                        class="fa-solid me-2 text-muted fa-pen-to-square"></i>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ 'paymentemail/' . $payment['id'] }}">
                                                                    <i class="fa-regular text-muted me-2 fa-envelope"></i>
                                                                    Send Email
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="text-danger">No payment available.</p>
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