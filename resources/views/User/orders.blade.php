<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>My Orders</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 100vh;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
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
                @if (session('success'))
                <script>
                    swal("Good job!", "{{ session('success') }}", "success");

                    // Confetti animation function
                    const colors = ["#2F7630", "#38833A"];

                    function createConfetti() {
                        const confetti = document.createElement("div");
                        confetti.classList.add("confetti");
                        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                        confetti.style.left = Math.random() * 100 + "vw";
                        const size = Math.random() * 10 + 5; 
                        confetti.style.width = size + "px";
                        confetti.style.height = (Math.random() * 10 + 5) + "px"; 
                        if (Math.random() > 0.5) {
                            confetti.style.borderRadius = "50%"; 
                        }
                        confetti.style.animationDuration = (Math.random() * 1 + 2) + "s"; 
                        confetti.style.transform = `rotate(${Math.random() * 360}deg)`;
                        document.body.appendChild(confetti);
                        setTimeout(() => {
                            confetti.remove();
                        }, 5000);
                    }

                    // Start the confetti animation only when session is successful
                    const confettiInterval = setInterval(createConfetti, 1);

                    // Stop the confetti animation after 5 seconds
                    setTimeout(() => {
                        clearInterval(confettiInterval);
                    }, 5000);
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