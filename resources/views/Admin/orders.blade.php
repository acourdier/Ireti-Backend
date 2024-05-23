<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Profile</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.sidebar')
            <div class="rightmain">
                @include('../Template.adminnav')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 ">
                            <h4 class="font-bold">My Orders</h4>
                            <div class="table-responsive tbl-800 mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="font-semi align-middle">Products</th>
                                            <th class="font-semi align-middle">Buy</th>
                                            <th class="font-semi align-middle">Sell</th>
                                            <th class="font-semi align-middle">Date of live order</th>
                                            <th class="font-semi align-middle">Executed Date</th>
                                            <th class="font-semi align-middle">Price Target</th>
                                            <th class="font-semi align-middle">Filled</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-black align-middle">Soft Commidities</td>
                                            <td class="text-secondary align-middle">$2500</td>
                                            <td class="text-secondary align-middle">$3200</td>
                                            <td class="text-secondary align-middle">March 20, 2024</td>
                                            <td class="text-secondary align-middle">March 26, 2024</td>
                                            <td class="text-secondary align-middle">$4500</td>
                                            <td class="text-secondary align-middle">
                                                <button class="no-bg border-0 status-btn px-4 rounded-3 text-danger font-medium py-2">No</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-black align-middle">Soft Commidities</td>
                                            <td class="text-secondary align-middle">$2500</td>
                                            <td class="text-secondary align-middle">$3200</td>
                                            <td class="text-secondary align-middle">March 20, 2024</td>
                                            <td class="text-secondary align-middle">March 26, 2024</td>
                                            <td class="text-secondary align-middle">$4500</td>
                                            <td class="text-secondary align-middle">
                                                <button class="yes-bg border-0 status-btn px-4 rounded-3 text-success font-medium py-2">Yes</button>
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
