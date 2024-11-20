<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>My Orders</title>
    <style>
        .confetti {
            position: fixed;
            top: 0;
            background-color: #ffffff;
            opacity: 1;
            animation: fall 5s linear infinite;
        }
        @keyframes fall {
            0% { transform: translateY(-100px) rotate(0); opacity: 1; }
            100% { transform: translateY(100vh) rotate(360deg); opacity: 1; }
        }
    </style>
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
                            <h4>Orders</h4>
                            @if ($orders->count() > 0)
                            <div class="table-responsive tbl-800 mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Currency Pair</th>
                                            <th>Amount to Buy</th>
                                            <th>Currency Buy</th>
                                            <th>Amount to Sell</th>
                                            <th>Currency Sell</th>
                                            <th>Target Price</th>
                                            <th>Order Date</th>
                                            <th>Order Filled</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                        <tr class="align-middle">
                                            <td>
                                                <div>
                                                    <p class="mb-0 font-semi">{{ $order['FundType'] !== null && $order['FundType'] !== '' ? $order['FundType'] : '/' }}</p>
                                                    <p class="mb-0">{{ $order['underlying'] }}</p>
                                                </div>
                                            </td>
                                            <td>{{ $order['firstcurrency'] }}{{' / '}}{{ $order['secondcurrency'] }}</td>
                                            <td>{{ $order['amountb'] !== null && $order['amountb'] !== '' ? $order['amountb'] : '/' }}</td>
                                            <td>{{ $order['currencytb'] !== null && $order['currencytb'] !== '' ? $order['currencytb'] : '/' }}</td>
                                            <td>{{ $order['amountts'] !== null && $order['amountts'] !== '' ? $order['amountts'] : '/' }}</td>
                                            <td>
                                                @if (is_null($order['currencyts']) && $order['FundType'] == 'FX')
                                                    {{ $order['firstcurrency'] !== $order['currencytb'] ? $order['firstcurrency'] : ($order['secondcurrency'] !== null && $order['secondcurrency'] !== '' ? $order['secondcurrency'] : '/') }}
                                                @else
                                                    {{ $order['currencyts'] !== null && $order['currencyts'] !== '' ? $order['currencyts'] : '/' }}
                                                @endif
                                            </td>
                                            <td>{{ $order['targetp'] !== null && $order['targetp'] !== '' ? $order['targetp'] : '/' }}</td>
                                            <td>{{ $order['created_at'] !== null && $order['created_at'] !== '' ? $order['created_at'] : '/' }}</td>
                                            <td>
                                                <button
                                                    class="{{ $order['filled'] === 'Yes' ? 'btngreen' : 'btnred' }}">
                                                    {{ $order['filled'] !== null && $order['filled'] !== '' ? $order['filled'] : '/' }}
                                                </button>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical pointer"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false"></i>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        @if ($order['filled'] == 'No')
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ 'editorders/' . $order['id'] }}">
                                                                <i class="fa-solid text-muted me-2 fa-pen-to-square"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                        @endif
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ 'orderdeatils/' . $order['id'] }}">
                                                                <i class="fa-solid text-muted me-2 fa-eye"></i>
                                                                View
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
                            <p class="text-danger">No Orders Available.</p>
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