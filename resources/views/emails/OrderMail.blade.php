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
      .mail-sec p{
        font-weight: 400;
        font-size: 16px;
    }

    .mail-sec h1{
        font-size: 30px !important;
        margin-bottom:10px;
    }
    .mail-sec h2{
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
            <h1 class="fs-3"><strong>{{ $requestMail['username'] }}</strong> has sent an inquiry" </h1>
                
            <p class="mb-0 small"><strong>{{ $requestMail ['FundType'] }}</strong></p>
                @if($requestMail ['FundType']=="FX")
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Currency Buy:</strong> {{ $requestMail ['currencytb'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"> <strong>Amount to Buy:</strong> {{ $requestMail ['amountb'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Currency Sell:</strong> {{ $requestMail ['currencyts'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="font-semi mb-0 small"></p>
                    <p class="mb-0 small"><strong>Amount to Sell:</strong> {{ $requestMail ['amountts'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Target Price:</strong> {{ $requestMail ['targetp'] }}</p>
                </div>
            @elseif($requestMail ['FundType']=="Soft Commodities")
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Underlying:</strong> {{ $requestMail ['underlying'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Country of Origin:</strong> {{ $requestMail ['country'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Grade:</strong> {{ $requestMail ['grade'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Buy/Sell:</strong> {{ $requestMail ['buysell'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Quantity:</strong> {{ $requestMail ['quantity'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Unit of Measurement:</strong> {{ $requestMail ['unit'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Price Target per Unit:</strong> {{ $requestMail ['targetp'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Incoterm:</strong> {{ $requestMail ['Incoterm'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Details:</strong> {{ $requestMail ['details'] }}</p>
                </div>
            @else
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Underlying:</strong> {{ $requestMail ['underlying'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Country of Origin:</strong> {{ $requestMail ['country'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Grade:</strong> {{ $requestMail ['grade'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Buy/Sell:</strong> {{ $requestMail ['buysell'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Quantity:</strong> {{ $requestMail ['quantity'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Unit of Measurement:</strong> {{ $requestMail ['unit'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Price Target per Unit:</strong> {{ $requestMail ['targetp'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Incoterm:</strong> {{ $requestMail ['Incoterm'] }}</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0 small"><strong>Details:</strong> {{ $requestMail ['details'] }}</p>
                </div>
            @endif
      </div>
    </div>
 </section>
</body>
</html>