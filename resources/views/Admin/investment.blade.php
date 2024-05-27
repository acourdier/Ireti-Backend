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
                                            <th>User ID</th>
                                            <th>Fund type</th>
                                            <th>Target yield</th>
                                            <th>Geographical Exposure</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($investments as $investment)
                                        <tr class="align-middle">
                                            <td>{{$investment['fname']}}</td>
                                            <td>{{$investment['fund']}}</td>
                                            <td>{{$investment['yeild']}}</td>
                                            <td>{{$investment['geographical']}}</td>
                                            <td>{{$investment['amount']}}</td>
                                            <td>
                                                <button
                                                    class="{{ $investment['status'] === 'Pending' ? 'btnyellow' : ($investment['status'] === 'Accepted' ? 'btngreen' : 'btnred') }}">
                                                    {{$investment['status']}}
                                                </button>
                                            </td>
                                            <td>
                                                <a href="{{ 'editinvestment/' . $investment['id'] }}">
                                                    <i class="fa-solid text-muted fa-pen-to-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
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