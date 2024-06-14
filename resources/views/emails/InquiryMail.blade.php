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
            <h1 class="fs-3">{{ $requestMail['in_fullname'] }} has sent an inquiry" </h1>
                <p><strong>In Fullname:</strong> {{ $requestMail['in_fullname'] }}</p>
                <p><strong>In Position:</strong> {{ $requestMail['in_position'] }}</p>
                <p><strong>In Email:</strong> {{ $requestMail['in_email'] }}</p>
                <p><strong>In Phone:</strong> {{ $requestMail['in_phone'] }}</p>
                <p><strong>Legal Name:</strong> {{ $requestMail['legalname'] }}</p>
                <p><strong>Trading Name:</strong> {{ $requestMail['tradingname'] }}</p>
                <p><strong>Reg Number:</strong> {{ $requestMail['regNmber'] }}</p>
                <p><strong>Reg Date:</strong> {{ $requestMail['regDate'] }}</p>
                <p><strong>VAT:</strong> {{ $requestMail['vat'] }}</p>
                <p><strong>Company Link:</strong> {{ $requestMail['companylink'] }}</p>
                <p><strong>Corporate Website:</strong> {{ $requestMail['corWeb'] }}</p>
                <p><strong>Company Email:</strong> {{ $requestMail['companyEmail'] }}</p>
                <p><strong>Directors:</strong> {{ $requestMail['directors'] }}</p>
                <p><strong>Employees:</strong> {{ $requestMail['emp'] }}</p>
                <p><strong>Incorporation Country:</strong> {{ $requestMail['incorporationCountry'] }}</p>

                <h2>Director Details:</h2>
                @if(is_array($requestMail['dirName']))
                    @foreach($requestMail['dirName'] as $index => $dirName)
                        <h3>Director {{ $index + 1 }}:</h3>
                        <p><strong>Name:</strong> {{ $dirName }}</p>
                        <p><strong>Country:</strong> {{ $requestMail['dirCountry'][$index] }}</p>
                        <p><strong>Address:</strong> {{ $requestMail['dirAddress'][$index] }}</p>
                        <p><strong>City:</strong> {{ $requestMail['dirCity'][$index] }}</p>
                        <p><strong>Postcode:</strong> {{ $requestMail['dirPostcode'][$index] }}</p>
                        <p><strong>DOB:</strong> {{ $requestMail['dirDOB'][$index] }}</p>
                        <p><strong>Passport:</strong> {{ $requestMail['dirPassport'][$index] }}</p>
                        <p><strong>Experience:</strong> {{ $requestMail['dirExp'][$index] }}</p>
                        <p><strong>Nationality:</strong> {{ $requestMail['dirNationality'][$index] }}</p>
                    @endforeach
                @endif
                <h2>Owner Details:</h2>
                @if(is_array($requestMail['ownerName']))
                    @foreach($requestMail['ownerName'] as $index => $ownerName)
                        <h3>Owner {{ $index + 1 }}:</h3>
                        <p><strong>Name:</strong> {{ $ownerName }}</p>
                        <p><strong>Country:</strong> {{ $requestMail['ownerCountry'][$index] }}</p>
                        <p><strong>Address:</strong> {{ $requestMail['ownerAddress'][$index] }}</p>
                        <p><strong>City:</strong> {{ $requestMail['ownerCity'][$index] }}</p>
                        <p><strong>Postcode:</strong> {{ $requestMail['ownerPostcode'][$index] }}</p>
                        <p><strong>DOB:</strong> {{ $requestMail['ownerDOB'][$index] }}</p>
                        <p><strong>Passport:</strong> {{ $requestMail['ownerPassport'][$index] }}</p>
                        <p><strong>Experience:</strong> {{ $requestMail['ownerExp'][$index] }}</p>
                        <p><strong>Nationality:</strong> {{ $requestMail['ownerNationality'][$index] }}</p>
                        <p><strong>Share:</strong> {{ $requestMail['ownerShare'][$index] }}</p>
                    @endforeach
                @endif

                <!-- Displaying UBO details -->
                <h2>UBO Details:</h2>
                @if(is_array($requestMail['uboName']))
                    @foreach($requestMail['uboName'] as $index => $uboName)
                        <h3>UBO {{ $index + 1 }}:</h3>
                        <p><strong>Name:</strong> {{ $uboName }}</p>
                        <p><strong>Country:</strong> {{ $requestMail['uboCountry'][$index] }}</p>
                        <p><strong>Address:</strong> {{ $requestMail['uboAddress'][$index] }}</p>
                        <p><strong>City:</strong> {{ $requestMail['uboCity'][$index] }}</p>
                        <p><strong>Postcode:</strong> {{ $requestMail['uboPostcode'][$index] }}</p>
                        <p><strong>DOB:</strong> {{ $requestMail['uboDOB'][$index] }}</p>
                        <p><strong>Passport:</strong> {{ $requestMail['uboPassport'][$index] }}</p>
                        <p><strong>Experience:</strong> {{ $requestMail['uboExp'][$index] }}</p>
                        <p><strong>Nationality:</strong> {{ $requestMail['uboNationality'][$index] }}</p>
                        <p><strong>Share:</strong> {{ $requestMail['uboShare'][$index] }}</p>
                    @endforeach
                @endif
        </div>
      </div>
    </div>
 </section>
</body>
</html>
