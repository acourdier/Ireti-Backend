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
                        <p><span class="mb-0 fw-bold">Subject: </span>Investment Approved – Funds to Be Released</p>
                        <p class="mb-0">Dear Admin,</p>
                        <p class="mb-0 mt-3 p2">Investment request query of {{ $requestMail['fname'] }} has been successfully
                            entered into our system</p>
                    @else
                        <p><span class="mb-0 fw-bold">Subject: </span>Investment Approved – Funds to Be Released</p>
                        <p class="mb-0">Dear {{ $requestMail['fname'] }},</p>
                        <p class="mb-0 mt-3 p2">We’re delighted to inform you that your investment request has been filled up.</p>
                    @endif
                </div>
            </div>
            <div class="row p3">
                <div class="col-12">
                    <div class="mt-5 border-top border-bottom border-dark border-3">
                        <p class="mb-0 fw-bold">Investment details recap :</p>
                        <ul>
                            <li>
                                <p class="mb-0 "><span class="fw-bold">Fund Type :
                                    </span>{{ $requestMail['fund'] }}
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 "><span class="fw-bold">Target Yield :
                                    </span>{{ $requestMail['yeild'] }}
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 "><span class="fw-bold">Geographical Exposure :
                                    </span>{{ $requestMail['geographical'] }}
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 "><span class="fw-bold">Amount :
                                    </span>{{ $requestMail['amount'] }}
                                </p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if ($requestMail['role'] == 'user')
                        <p>Thank you for trusting us. Feel free to reach out with any questions or concerns.</p>
                    @endif
                    <p class="mb-0">Best regards,</p>
                    <p class="mb-0">Ireti Investment Team</p>
                </div>
            </div>
    </section>
</body>

</html>
