<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Dashboard</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.usersidebar')
            <div class="rightmain">
                @include('../Template.usernav')
                <div class="rightbottom">
                    <div class="container-fluid px-3 px-md-4 pb-5">
                        <div class="row">
                            <div class="col-lg-6 col-xxl-3 mt-3">
                                <div class="lgreen p-4 rounded-4 h-100">
                                    <p class="mb-0">Total Live Orders</p>
                                    <div class="d-flex">
                                        <p class="mb-0"><span class="fs-3 font-semi me-2">{{$totalorders}}</p>
                                    </div>
                                    <div class="text-center lime py-1 mt-2 rounded-pill">
                                        <p class="mb-0 ex-small">
                                            <span>+25% <i class="fa-solid mx-1 text-success fa-arrow-up"></i></span>
                                            Order Last Month
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xxl-3 mt-3">
                                <div class="lgreen p-4 rounded-4 h-100">
                                    <p class="mb-0">Total Filled Orders</p>
                                    <div class="d-flex">
                                        <p class="mb-0"><span class="fs-3 font-semi me-2">{{$filledorders}}</p>
                                    </div>
                                    <div class="text-center lime py-1 mt-2 rounded-pill">
                                        <p class="mb-0 ex-small">
                                            <span>-25% <i class="fa-solid mx-1 text-danger fa-arrow-down"></i></span>
                                            Last Month payments
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 mt-3">
                                <div class="green p-4 text-white rounded-4 h-100">
                                    <p class="mb-0 font-bold fs-2">{{$sumfilledorders}}</p>
                                    <p class="mb-0 font-bold fs-5">Total Executed YTD</p>

                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="chardiv p-3 p-md-5">
                                <h4>Yearly View</h4>
                                <div class="col-12 d-flex justify-content-center">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="chardiv p-3 p-md-5">
                                <h4>My Orders</h4>
                                @if ($orders->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table dashtbl">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Currency pair</th>
                                                    <th>Amount to Buy</th>
                                                    <th>Amount to Sell</th>
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
                                                            <p class="mb-0 font-semi">{{$order['FundType']}}</p>
                                                            <p class="mb-0">{{$order['underlying']}}</p>
                                                        </div>
                                                    </td>
                                                    <td>{{$order['firstcurrency']}}{{' / '}}{{$order['secondcurrency']}}</td>
                                                    <td>{{$order['amountb']}}</td>
                                                    <td>{{$order['amountts']}}</td>
                                                    <td>{{$order['targetp']}}</td>
                                                    <td>{{$order['created_at']}}</td>
                                                    <td>
                                                        <button
                                                            class="{{ $order['filled'] === 'YES' ? 'btngreen' : 'btnred' }}">
                                                            {{$order['filled']}}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a
                                                            href="{{ 'orderdeatils/' . $order['id'] }}">
                                                                <i class="fa-solid text-muted me-2 fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                  <p class="text-danger">No orders available.</p>
                                @endif
                                <div class="mt-2 d-flex justify-content-end">
                                    {{ $orders->links() }}
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
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Dataset 1',
                borderColor: '#AA7D09',
                data: [21, 23, 24, 27, 29, 31, 29, 27, 25, 23, 21, 25,],
                tension: 0.4
            }, {
                label: 'Dataset 2',
                borderColor: '#7AC231',
                data: [22, 24, 21, 28, 30, 28, 26, 24, 22, 26, 24, 28,],
                tension: 0.4
            }]
        };
        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                stacked: false,
                scales: {
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                        grid: {
                            drawOnChartArea: false,
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    }
                },
            },
        };
        new Chart(ctx, config);
    </script>
</body>

</html>