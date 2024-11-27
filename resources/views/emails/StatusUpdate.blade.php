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
                    @if ($requestMail['mailstatus'] == 'rejected')
                        <p><span class="mb-0 fw-bold">Subject: </span>Application Status – Unable to Proceed</p>
                        <p class="mb-0">Dear  {{ $requestMail['fname'] }},</p>
                        <p class="mb-0 mt-3 p2">Thank you for your interest in Ireti Capital and for submitting your
                            application. After careful review, we regret to inform you that we are unable to proceed
                            with your application at this time.
                        <p>This decision was made in accordance with our policies and guidelines. If you have any
                            questions or would like further clarification, please feel free to reach out to us.</p>
                        <p>We appreciate your understanding and wish you the best in your endeavors.</p>
                    @else
                        <p><span class="mb-0 fw-bold">Subject: </span>Application Status – Approved</p>
                        <p class="mb-0">Dear {{ $requestMail['fname'] }},</p>
                        <p class="mb-0 mt-3 p2">Thank you for your interest in Ireti Capital and for submitting your
                            application. We are delighted to inform you that your application has been successfully
                            accepted.</p>
                        <p>Please log in to your account using the credentials you created during signup.</p>
                        <p>
                            We are excited to have you on board and look forward to working with you. Should you have
                            any questions or need further assistance, please do not hesitate to contact us.</p>
                        <p>Thank you for choosing Ireti Capital. We wish you success and prosperity in your journey with
                            us.</p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="mb-0">Best regards,</p>
                    <p class="mb-0">Ireti Investment Team</p>
                </div>
            </div>
    </section>
</body>

</html>
