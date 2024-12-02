<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main2.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Map</title>
    <style>
        .mail-sec p {
            font-weight: 400;
            font-size: 16px;
        }

        .mail-sec h1 {
            font-size: 30px !important;
            margin-bottom: 10px;
        }

        .mail-sec h2 {
            font-size: 20px;
            color: green;
        }

        .mail-sec .fw-bold {
            font-weight: 700
        }
    </style>
</head>

<body>
    <section class="py-4 mail-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($requestMail['role'] == 'admin')
                        <p class="mb-0">Dear Admin,</p>
                        <p class="mb-0 mt-3 p2">Order of {{ $requestMail['username'] }} has been filled up. Please find
                            the recap below.</p>
                    @else
                        <p class="mb-0">Dear {{ $requestMail['username'] }},</p>
                        <p class="mb-0 mt-3 p2">Congratulations ! Your order has been filled up. Please find the recap
                            below.</p>
                    @endif
                </div>
            </div>
            <div class="row p3">
                <div class="col-12">
                    <div class="mt-5 border-top border-bottom border-dark border-3">
                        <p class="mb-0 fw-bold">Order recap : </p>
                        <ul>
                            @php
                            $order = \App\Models\Order::find($requestMail['id']); // Fetch the order record
                        @endphp
                        
                        <li>
                            <p class="mb-0"><span class="fw-bold">Date: </span>
                                {{ \Carbon\Carbon::parse($requestMail['created_at'])->format('Y-m-d') }}
                                {{ $order && \Carbon\Carbon::parse($requestMail['created_at'])->format('Y-m-d') != \Carbon\Carbon::parse($order->created_at)->format('Y-m-d') ? '' : '' }}
                            </p>
                        </li>
                        
                        @if ($requestMail['FundType'] == 'FX')
                        <li>
                            <p class="mb-0"><span class="fw-bold">Currency pair: </span>
                                {{ $requestMail['firstcurrency'] ?? $order->firstcurrency }} /
                                {{ $requestMail['secondcurrency'] ?? $order->secondcurrency }}{{ $order && (isset($requestMail['firstcurrency'], $requestMail['secondcurrency']) && ($requestMail['firstcurrency'] != $order->firstcurrency || $requestMail['secondcurrency'] != $order->secondcurrency)) ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Currency Buy: </span>
                                {{ $requestMail['currencytb'] ?? $order->currencytb }}{{ $order && isset($requestMail['currencytb']) && $requestMail['currencytb'] != $order->currencytb ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Target Exchange Rate: </span>
                                {{ $requestMail['targetp'] ?? $order->targetp }}{{ $order && isset($requestMail['targetp']) && $requestMail['targetp'] != $order->targetp ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Amount to buy: </span>
                                {{ $requestMail['amountb'] ?? $order->amountb }}{{ $order && isset($requestMail['amountb']) && $requestMail['amountb'] != $order->amountb ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Amount to sell: </span>
                                {{ $requestMail['amountts'] ?? $order->amountts }}{{ $order && isset($requestMail['amountts']) && $requestMail['amountts'] != $order->amountts ? '*' : '' }}
                            </p>
                        </li>
                    @else
                        <li>
                            <p class="mb-0"><span class="fw-bold">Underlying: </span>
                                {{ $requestMail['underlying'] ?? '' }}{{ $order && isset($requestMail['underlying']) && $requestMail['underlying'] != $order->underlying ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Country of Origin: </span>
                                {{ $requestMail['country'] ?? '' }}{{ $order && isset($requestMail['country']) && $requestMail['country'] != $order->country ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Grade: </span>
                                {{ $requestMail['grade'] ?? '' }}{{ $order && isset($requestMail['grade']) && $requestMail['grade'] != $order->grade ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Quantity: </span>
                                {{ $requestMail['quantity'] ?? '' }}{{ $order && isset($requestMail['quantity']) && $requestMail['quantity'] != $order->quantity ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Unit of Measurement: </span>
                                {{ $requestMail['unit'] ?? '' }}{{ $order && isset($requestMail['unit']) && $requestMail['unit'] != $order->unit ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Price Target per Unit: </span>
                                {{ $requestMail['targetp'] ?? '' }}{{ $order && isset($requestMail['targetp']) && $requestMail['targetp'] != $order->targetp ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            @if($requestMail['buysell'] != $order->buysell )
                                @if($requestMail['buysell'] == "Buy" )
                                    <p class="mb-0"><span class="fw-bold">Currency to Buy: </span>
                                        {{ $requestMail['currencytb'] }}*
                                    </p>
                                @else
                                    <p class="mb-0"><span class="fw-bold">Currency to Sell: </span>
                                        {{ $requestMail['currencyts'] }}*
                                    </p>
                                @endif
                            @else
                                @if($requestMail['buysell'] == "Buy" )
                                    <p class="mb-0"><span class="fw-bold">Currency to Buy: </span>
                                        {{ $requestMail['currencytb'] ?? '' }}{{ $order && isset($requestMail['currencytb']) && $requestMail['currencytb'] != $order->currencytb ? '*' : '' }}
                                    </p>
                                @else
                                    <p class="mb-0"><span class="fw-bold">Currency to Sell: </span>
                                        {{ $requestMail['currencytb'] ?? '' }}{{ $order && isset($requestMail['currencytb']) && $requestMail['currencytb'] != $order->currencytb ? '*' : '' }}
                                    </p>
                                @endif
                            @endif
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Incoterm: </span>
                                {{ $requestMail['Incoterm'] ?? '' }}{{ $order && isset($requestMail['Incoterm']) && $requestMail['Incoterm'] != $order->Incoterm ? '*' : '' }}
                            </p>
                        </li>
                        <li>
                            <p class="mb-0"><span class="fw-bold">Additional Details: </span>
                                {{ $requestMail['details'] ?? '' }}{{ $order && isset($requestMail['details']) && $requestMail['details'] != $order->details ? '*' : '' }}
                            </p>
                        </li>
                    @endif
                    
                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if ($requestMail['role'] == 'user')
                    <p class="mb-0"> Thank you for your continued trust in our service. We remain at your disposal should you need any further information.</p>
                    @endif
                    <p class="mb-0"> Warm regards,</p>
                    <p class="mb-0">Ireti Operations Team</p>
                </div>
            </div>
    </section>
</body>

</html>
