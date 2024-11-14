<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Dashboard</title>
</head>

<body>

    <div class="section">
        <div class="maindiv">
            @include('../Template.sidebar')
            <div class="rightmain">
                @include('../Template.adminnav')
                <div class="rightbottom">
                    <div class="container-fluid px-3 px-md-4 pb-5">
                        <div class="row">
                            <div class="col-lg-6 col-xxl-3 mt-3">
                                <div class="lgreen p-4 rounded-4 h-100">
                                    <p class="mb-0">Total Live Orders</p>
                                    <div class="d-flex">
                                        <p class="mb-0"><span class="fs-3 font-semi me-2">{{$totalorders}}</span></p>
                                    </div>
                                    <div class="text-center lime py-1 mt-2 rounded-pill">
                                        <p class="mb-0 ex-small">
                                            <span>
                                                @if ($totalOrdersChange > 0)
                                                    +{{ abs($totalOrdersChange) }}% <i class="fa-solid mx-1 text-success fa-arrow-up"></i>
                                                @elseif ($totalOrdersChange < 0)
                                                    -{{ abs($totalOrdersChange) }}% <i class="fa-solid mx-1 text-danger fa-arrow-down"></i>
                                                @else
                                                    0% <i class="fa-solid mx-1 text-muted fa-arrow-right"></i>
                                                @endif
                                            </span>
                                            Order Last Month
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-xxl-3 mt-3">
                                <div class="lgreen p-4 rounded-4 h-100">
                                    <p class="mb-0">Total Filled Orders</p>
                                    <div class="d-flex">
                                        <p class="mb-0"><span class="fs-3 font-semi me-2">{{$filledorders}}</span></p>
                                    </div>
                                    <div class="text-center lime py-1 mt-2 rounded-pill">
                                        <p class="mb-0 ex-small">
                                            <span>
                                                @if ($filledOrdersChange > 0)
                                                    +{{ abs($filledOrdersChange) }}% <i class="fa-solid mx-1 text-success fa-arrow-up"></i>
                                                @elseif ($filledOrdersChange < 0)
                                                    -{{ abs($filledOrdersChange) }}% <i class="fa-solid mx-1 text-danger fa-arrow-down"></i>
                                                @else
                                                    0% <i class="fa-solid mx-1 text-muted fa-arrow-right"></i>
                                                @endif
                                            </span>
                                            Last Month Payments
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 mt-3">
                                <div class="green p-4 text-white rounded-4 h-100">
                                    <p class="mb-0 font-bold fs-2">${{$sumfilledordersFormatted}}</p>
                                    <p class="mb-0 font-bold fs-5">Total Executed YTD in USD</p>

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
                                <h4>Total Orders</h4>
                                <div class="table-responsive">
                                    <table class="table dashtbl">
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
                                                        <p class="mb-0 font-semi">{{$order['FundType']}}</p>
                                                        <p class="mb-0">{{$order['underlying']}}</p>
                                                    </div>
                                                </td>
                                                <td>{{$order['firstcurrency']}}{{' / '}}{{$order['secondcurrency']}}</td>
                                                <td>{{ $order['amountb'] }}</td>
                                                <td>{{$order['currencytb']}}</td>
                                                <td>{{ $order['amountts'] }}</td>
                                                <td>
                                                    @if (is_null($order['currencyts']) && $order['FundType'] == 'FX')
                                                        {{ $order['firstcurrency'] !== $order['currencytb'] ? $order['firstcurrency'] : $order['secondcurrency'] }}
                                                    @else
                                                        {{ $order['currencyts'] }}
                                                    @endif
                                                </td>
                                                <td>{{$order['targetp']}}</td>
                                                <td>{{$order['created_at']}}</td>
                                                <td>
                                                    <button
                                                        class="{{ $order['filled'] === 'Yes' ? 'btngreen' : 'btnred' }}">
                                                        {{$order['filled']}}
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
                                                                    <i
                                                                        class="fa-solid text-muted me-2 fa-pen-to-square"></i>
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
    
        const monthsData = @json($monthsData); 
        const totalOrdersData = @json($totalOrdersData); 
        const totalConvertedData = @json($totalConvertedData);
    
        const currentMonth = new Date().getMonth(); 
    
        const data = {
            labels: monthsData, 
            datasets: [{
                label: 'Total Orders',
                borderColor: '#AA7D09',
                data: totalOrdersData,
                yAxisID: 'y',
                tension: 0.4,
                fill: false
            }, {
                label: 'Total Converted',
                borderColor: '#7AC231',
                data: totalConvertedData, 
                yAxisID: 'y1',
                tension: 0.4,
                fill: false
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
                    x: {
                        type: 'category',
                        labels: monthsData, 
                    },
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                        grid: {
                            drawOnChartArea: false,
                        },
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        grid: {
                            drawOnChartArea: false,
                        },
                        ticks: {
                            beginAtZero: true,
                            callback: function(value) {
                                return value.toLocaleString(); 
                            }
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                        position: 'top',
                    }
                },
                elements: {
                    line: {
                        tension: 0.4
                    }
                }
            },
        };
    
        new Chart(ctx, config);
    </script>
</body>

</html>