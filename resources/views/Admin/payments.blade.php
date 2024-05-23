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
                            <h4 class="font-bold">Payments</h4>
                            <div class="table-responsive tbl-800 mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="font-semi">Customer Name</th>
                                            <th class="font-semi">Email</th>
                                            <th class="font-semi">Status</th>
                                            <th class="font-semi">Active Date</th>
                                            <th class="font-semi">Spent</th>
                                            <th class="font-semi">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('img/user.png') }}" alt=""
                                                        class="me-2 rounded-3 tbl-user">
                                                    <span>Eddie Rivera</span>
                                                </div>
                                            </td>
                                            <td class="text-secondary align-middle">eddie.rivera@example.com</td>
                                            <td class="text-secondary align-middle">Approved</td>
                                            <td class="text-secondary align-middle">July 20, 2023</td>
                                            <td class="text-secondary align-middle">$600.00</td>
                                            <td class="text-secondary align-middle">
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i
                                                            class="fa-solid fa-trash text-secondary pointer me-3"></i></a>
                                                    <a href="#"><i
                                                            class="fa-solid fa-eye text-secondary pointer"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('img/user.png') }}" alt=""
                                                        class="me-2 rounded-3 tbl-user">
                                                    <span>Eddie Rivera</span>
                                                </div>
                                            </td>
                                            <td class="text-secondary align-middle">eddie.rivera@example.com</td>
                                            <td class="text-secondary align-middle">Approved</td>
                                            <td class="text-secondary align-middle">July 20, 2023</td>
                                            <td class="text-secondary align-middle">$600.00</td>
                                            <td class="text-secondary align-middle">
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i
                                                            class="fa-solid fa-trash text-secondary pointer me-3"></i></a>
                                                    <a href="#"><i
                                                            class="fa-solid fa-eye text-secondary pointer"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('img/user.png') }}" alt=""
                                                        class="me-2 rounded-3 tbl-user">
                                                    <span>Eddie Rivera</span>
                                                </div>
                                            </td>
                                            <td class="text-secondary align-middle">eddie.rivera@example.com</td>
                                            <td class="text-secondary align-middle">Approved</td>
                                            <td class="text-secondary align-middle">July 20, 2023</td>
                                            <td class="text-secondary align-middle">$600.00</td>
                                            <td class="text-secondary align-middle">
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i
                                                            class="fa-solid fa-trash text-secondary pointer me-3"></i></a>
                                                    <a href="#"><i
                                                            class="fa-solid fa-eye text-secondary pointer"></i></a>
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
