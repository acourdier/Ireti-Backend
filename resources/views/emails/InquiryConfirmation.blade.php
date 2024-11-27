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
                    <p><span class="mb-0 fw-bold">Subject: </span>Thank You – Due Diligence Form Received</p>
                    <p class="mb-0">Dear {{ $requestMail['fname'] }},</p>
                    <p class="mb-0 mt-3 p2">We’re delighted to inform you that your investment request has been filled
                        up.</p>

                </div>
            </div>
            <div class="row p3">
                <div class="col-12">
                    <div class="mt-5 border-top border-bottom border-dark border-3">
                        <p>Thank you for submitting your application and completing the due diligence form. We’ve
                            successfully received your details and are currently reviewing your submission.
                        </p>
                        <p>
                            If we need any additional information, we will reach out to you. In the meantime, feel free
                            to contact us with any questions or concerns.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                        <p>We appreciate your trust in us and look forward to assisting you further.</p>
                    <p class="mb-0">Best regards,</p>
                    <p class="mb-0">Ireti Onboarding Team</p>
                </div>
            </div>
    </section>
</body>

</html>
