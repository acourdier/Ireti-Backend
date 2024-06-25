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
  </style>
</head>

<body>
  <section class="py-4 mail-sec">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-11 bg-white p-4 mailshadow rounded-4">
          <h1 class="fs-3">{{ Auth::user()->fname }} has sent an inquiry" </h1>
          {{ $requestMail['username'] }} Updated a Payement whose status is {{ $requestMail['status'] }}
        </div>
      </div>
    </div>
  </section>
</body>

</html>