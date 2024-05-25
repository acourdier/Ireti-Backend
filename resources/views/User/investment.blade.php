<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Make Investment</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.usersidebar')
            <div class="rightmain">
                @include('../Template.usernav')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 ">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="font-bold">My Investments</h4>
                                <a href="{{route('user.makeinvestment')}}"
                                    class=" px-4 py-2 border-0 rounded-3 text-decoration-none green text-white font-semi">
                                    Make Investment
                                </a>
                            </div>
                            <div class="table-responsive tbl-800 mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="font-semi align-middle">Fund type</th>
                                            <th class="font-semi align-middle">Target yield</th>
                                            <th class="font-semi align-middle">Geographical Exposure</th>
                                            <th class="font-semi align-middle">Amount</th>
                                            <th class="font-semi align-middle">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-black align-middle">Listed Funds</td>
                                            <td class="text-secondary align-middle">0-5%</td>
                                            <td class="text-secondary align-middle">Geographical Exposure</td>
                                            <td class="text-secondary align-middle">$4500</td>
                                            <td class="text-secondary align-middle">
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i
                                                            class="fa-solid fa-trash text-secondary pointer me-3"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ftr text-center">
                    <p class="mb-0 text-muted">©2024 Ireti Capital. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    @include('../Template.jslinks')
</body>

</html>