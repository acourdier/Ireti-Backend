<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Profile</title>
    <style>
        <style>

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 400px;
            height: 300px;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 500px;
            position: relative;
            text-align: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            color: #000000;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        canvas {
            display: block;
            width: 460px;
            height: 300px;
            background-color: #fff;
        }
    </style>
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
                    // swal("Good job!", "{{ session('success') }}", "success");
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
                                            <td>
                                                @if (is_null($order['amountb']) && $order['buysell'] == 'Buy')
                                                    {{ $order['quantity'] }}
                                                @else
                                                    {{ $order['amountb'] }}
                                                @endif
                                            </td>
                                            <td>
                                                @if (is_null($order['amountts']) && $order['buysell'] == 'Sell')
                                                    {{ $order['quantity'] }}
                                                @else
                                                    {{ $order['amountts'] }}
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
                            <p class="text-danger">No orders available.</p>
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
    <!-- Popup Modal -->
    <div id="fireworks-popup" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <!-- Fireworks canvas -->
            <canvas id="fw"></canvas>
            <p class="fw-semibold fs-4">Order validated Successfully</p>
        </div>
    </div>

    <!-- Fireworks JS -->
    <script src="https://cdn.jsdelivr.net/npm/fireworks-js@2.x/dist/index.umd.js"></script>

    <!-- Trigger button -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
                const popup = document.getElementById('fireworks-popup');
                const closeBtn = document.querySelector('.close');
                const canvas = document.getElementById('fw');
    
                // Fireworks instance
                let fireworks;
                popup.style.display = 'block';
    
    fireworks = new Fireworks.default(canvas, {
        speed: 5,
        acceleration: 1.05,           
        friction: 0.98,             
        gravity: 1.2,                
        particles: 350,               
        trace: 2,                     
        explosion: 12,
        sound: {
            enabled: true,
            files: [
                'https://fireworks.js.org/sounds/explosion0.mp3',
                'https://fireworks.js.org/sounds/explosion1.mp3',
                'https://fireworks.js.org/sounds/explosion2.mp3'
            ],
            volume: { min: 50, max: 50 }
        },
    });
    fireworks.start();
                // Check for the Laravel success session (from server-side)
                @if (session('success'))
                    // Open the modal and start fireworks
                    popup.style.display = 'block';
    
                    fireworks = new Fireworks.default(canvas, {
                        speed: 5,
                        acceleration: 1.05,           
                        friction: 0.98,             
                        gravity: 1.2,                
                        particles: 350,               
                        trace: 2,                     
                        explosion: 12,
                        sound: {
                            enabled: true,
                            files: [
                                'https://fireworks.js.org/sounds/explosion0.mp3',
                                'https://fireworks.js.org/sounds/explosion1.mp3',
                                'https://fireworks.js.org/sounds/explosion2.mp3'
                            ],
                            volume: { min: 50, max: 50 }
                        },
                    });
                    fireworks.start();
    
                    // Stop fireworks and close modal after 2 seconds
                    setTimeout(function () {
                        fireworks.stop();
                        popup.style.display = 'none';
                    }, 5000); // 2 seconds
                @endif
    
                // Close the modal manually with close button
                closeBtn.addEventListener('click', function () {
                    fireworks.stop();
                    popup.style.display = 'none';
                });
    
                // Close the modal if clicking outside of the modal content
                window.addEventListener('click', function (e) {
                    if (e.target == popup) {
                        fireworks.stop();
                        popup.style.display = 'none';
                    }
                });
            });
    </script>

    @include('../Template.jslinks')

</body>

</html>