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
                    <h1 class="fs-3">{{ $requestMail['in_fullname'] }} has sent an inquiry" </h1>
                    <p><strong>In Fullname:</strong> {{ $requestMail['in_fullname'] }}</p>
                    <p><strong>In Position:</strong> {{ $requestMail['position'] }}</p>
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
                    @if (isset($requestMail) &&
                            is_array($requestMail) &&
                            isset($requestMail['dirName']) &&
                            is_array($requestMail['dirName']))

                        @foreach ($requestMail['dirName'] as $index => $dirName)
                            <h3>Director {{ $index + 1 }}:</h3>
                            <p><strong>Name:</strong> {{ $dirName }}</p>
                            <p><strong>Country:</strong> {{ $requestMail['dirCountry'][$index] ?? 'N/A' }}</p>
                            <p><strong>Address:</strong> {{ $requestMail['dirAddress'][$index] ?? 'N/A' }}</p>
                            <p><strong>City:</strong> {{ $requestMail['dirCity'][$index] ?? 'N/A' }}</p>
                            <p><strong>Postcode:</strong> {{ $requestMail['dirPostcode'][$index] ?? 'N/A' }}</p>
                            <p><strong>DOB:</strong> {{ $requestMail['dirDOB'][$index] ?? 'N/A' }}</p>
                            <p><strong>Passport:</strong> {{ $requestMail['dirPassport'][$index] ?? 'N/A' }}</p>
                            <p><strong>Experience:</strong> {{ $requestMail['dirExp'][$index] ?? 'N/A' }}</p>
                            <p><strong>Nationality:</strong> {{ $requestMail['dirNationality'][$index] ?? 'N/A' }}</p>
                        @endforeach

                    @endif
                    <h2>Owner Details:</h2>
                    @if (isset($requestMail) &&
                            is_array($requestMail) &&
                            isset($requestMail['ownerName']) &&
                            is_array($requestMail['ownerName']))
                        @foreach ($requestMail['ownerName'] as $index => $ownerName)
                            <h3>Owner {{ $index + 1 }}:</h3>
                            <p><strong>Name:</strong> {{ $ownerName }}</p>
                            <p><strong>Country:</strong> {{ $requestMail['ownerCountry'][$index] ?? 'N/A' }}</p>
                            <p><strong>Address:</strong> {{ $requestMail['ownerAddress'][$index] ?? 'N/A' }}</p>
                            <p><strong>City:</strong> {{ $requestMail['ownerCity'][$index] ?? 'N/A' }}</p>
                            <p><strong>Postcode:</strong> {{ $requestMail['ownerPostcode'][$index] ?? 'N/A' }}</p>
                            <p><strong>DOB:</strong> {{ $requestMail['ownerDOB'][$index] ?? 'N/A' }}</p>
                            <p><strong>Passport:</strong> {{ $requestMail['ownerPassport'][$index] ?? 'N/A' }}</p>
                            <p><strong>Experience:</strong> {{ $requestMail['ownerExp'][$index] ?? 'N/A' }}</p>
                            <p><strong>Nationality:</strong> {{ $requestMail['ownerNationality'][$index] ?? 'N/A' }}
                            </p>
                            <p><strong>Share:</strong> {{ $requestMail['ownerShare'][$index] ?? 'N/A' }}</p>
                        @endforeach
                    @endif

                    <!-- Displaying UBO details -->
                    <h2>UBO Details:</h2>
                    @if (isset($requestMail) &&
                            is_array($requestMail) &&
                            isset($requestMail['uboName']) &&
                            is_array($requestMail['uboName']))
                        @foreach ($requestMail['uboName'] as $index => $uboName)
                            <h3>UBO {{ $index + 1 }}:</h3>
                            <p><strong>Name:</strong> {{ $uboName }}</p>
                            <p><strong>Country:</strong> {{ $requestMail['uboCountry'][$index] ?? 'N/A' }}</p>
                            <p><strong>Address:</strong> {{ $requestMail['uboAddress'][$index] ?? 'N/A' }}</p>
                            <p><strong>City:</strong> {{ $requestMail['uboCity'][$index] ?? 'N/A' }}</p>
                            <p><strong>Postcode:</strong> {{ $requestMail['uboPostcode'][$index] ?? 'N/A' }}</p>
                            <p><strong>DOB:</strong> {{ $requestMail['uboDOB'][$index] ?? 'N/A' }}</p>
                            <p><strong>Passport:</strong> {{ $requestMail['uboPassport'][$index] ?? 'N/A' }}</p>
                            <p><strong>Experience:</strong> {{ $requestMail['uboExp'][$index] ?? 'N/A' }}</p>
                            <p><strong>Nationality:</strong> {{ $requestMail['uboNationality'][$index] ?? 'N/A' }}</p>
                            <p><strong>Share:</strong> {{ $requestMail['uboShare'][$index] ?? 'N/A' }}</p>
                        @endforeach
                    @endif
                    <h2>Attachments:</h2>
                    <p><strong>ID Front:</strong>
                        @if (isset($requestMail['idFile']))
                            <a href="{{ asset('https://ireticapital.com/uploads/' . $requestMail['idFile']) }}">Click
                                here</a>
                        @else
                            not found !
                        @endif

                    </p>
                    <p><strong>ID Back:</strong>
                        @if (isset($requestMail['billFile']))
                            <a href="{{ asset('https://ireticapital.com/uploads/' . $requestMail['billFile']) }}">Click
                                here</a>
                        @else
                            not found !
                        @endif
                    </p>
                    <p><strong>Incorporation File:</strong>
                        @if (isset($requestMail['incorporationFile']))
                            <a
                                href="{{ asset('https://ireticapital.com/uploads/' . $requestMail['incorporationFile']) }}">Click
                                here</a>
                        @else
                            not found !
                        @endif
                    </p>
                    <p><strong>Memorandum File:</strong>
                        @if (isset($requestMail['memorandumFile']))
                            <a
                                href="{{ asset('https://ireticapital.com/uploads/' . $requestMail['memorandumFile']) }}">Click
                                here</a>
                        @else
                            not found !
                        @endif
                    </p>
                    <p><strong>ResolutionFile:</strong>
                        @if (isset($requestMail['resolutionFile']))
                            <a
                                href="{{ asset('https://ireticapital.com/uploads/' . $requestMail['resolutionFile']) }}">Click
                                here</a>
                        @else
                            not found !
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
