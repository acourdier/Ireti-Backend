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

        .mail-sec .p2 {
            padding-bottom: 66px;
            border-bottom: 1px solid black;
        }

        .mail-sec .p3 {
            padding-bottom: 66px;
            border-bottom: 1px solid black;
        }

        .mail-sec .p4 {
            padding-bottom: 66px;
        }
    </style>
</head>

<body>
    <section class="py-4 mail-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="mb-0">Dear {{ $requestMail['fname'] }},</p>
                    <p class="mb-0 mt-3 p2">Your Order has been updated successfully and the details are summarized below:</p>
                </div>
            </div>
            <div class="row p3">
                <div class="col-12">
                    <div class="mt-5 border-top border-bottom border-dark border-3">
                        <p class="mb-0 fw-bold">Order Summary</p>
                        <ul>
                            <li>
                                <p class="mb-0 "><span class="fw-bold">Order Number: </span>{{ $requestMail['id'] }}
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 "><span class="fw-bold">Date: </span>{{ $requestMail['created_at'] }}
                                </p>
                            </li>
                            @if ($requestMail['FundType'] == 'FX')
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Currency pair:
                                        </span>{{ $requestMail['firstcurrency'] }} /
                                        {{ $requestMail['secondcurrency'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Currency Buy:
                                        </span>{{ $requestMail['currencytb'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Target Exchange Rate:
                                        </span>{{ $requestMail['targetp'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Amount to buy:
                                        </span>{{ $requestMail['amountb'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Amount to sell:
                                        </span>{{ $requestMail['amountts'] }}</p>
                                </li>
                            @elseif($requestMail['FundType'] == 'Soft Commodities')
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Underlying:
                                        </span>{{ $requestMail['underlying'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Country of Origin:
                                        </span>{{ $requestMail['country'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Grade: </span>{{ $requestMail['grade'] }}
                                    </p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Buy/Sell:
                                        </span>{{ $requestMail['buysell'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Quantity:
                                        </span>{{ $requestMail['quantity'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Unit of Measurement:
                                        </span>{{ $requestMail['unit'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Price Target per Unit:
                                        </span>{{ $requestMail['targetp'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Incoterm:
                                        </span>{{ $requestMail['Incoterm'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Details:
                                        </span>{{ $requestMail['details'] }}</p>
                                </li>
                            @else
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Underlying:
                                        </span>{{ $requestMail['underlying'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Country of Origin:
                                        </span>{{ $requestMail['country'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Grade: </span>{{ $requestMail['grade'] }}
                                    </p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Buy/Sell:
                                        </span>{{ $requestMail['buysell'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Quantity:
                                        </span>{{ $requestMail['quantity'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Unit of Measurement:
                                        </span>{{ $requestMail['unit'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Price Target per Unit:
                                        </span>{{ $requestMail['targetp'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Incoterm:
                                        </span>{{ $requestMail['Incoterm'] }}</p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="fw-bold">Details:
                                        </span>{{ $requestMail['details'] }}</p>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="mb-0 fw-bold mt-3">Next Steps</p>
                    <p class="mb-0">You will receive a confirmation once your order has been filled.</p>
                    <p class="mb-0">You will then be ask to send the funds to ireti Capital in order for your
                        operation to be processes.</p>
                    <p class="mb-0">You will receive a confirmation once the payment has been executes</p>
                    <p class="mb-0">If you have any questions or require assistance, please feel free to connect with
                        our support team at <a href="mailto:info@ireticapital.com">info@ireticapital.com</a>.</p>
                    <p class="py-5 p4">Thank you for choosing Ireti Capital.</p>
                    <p class="mb-0">Best regards</p>
                    <p class="mb-0">Ireti Capital Team</p>
                    <a href="mailto:info@ireticapital.com" class="d-flex">info@ireticapital.com</a><br>
                    <a href="https://www.ireticapital.com" target="_blank">www.ireticapital.com</a>
                </div>
            </div>
    </section>
</body>

</html>
