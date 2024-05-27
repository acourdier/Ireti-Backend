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
                                            <th>Product</th>
                                            <th>Price Target</th>
                                            <th>Order Date</th>
                                            <th>Order Filled</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                        <tr class="align-middle">
                                            <td>{{$order['fname']}}</td>
                                            <td>
                                                <div>
                                                    <p class="mb-0 font-semi">{{$order['FundType']}}</p>
                                                    <p class="mb-0">{{$order['underlying']}}</p>
                                                </div>
                                            </td>
                                            <td>{{$order['targetp']}}</td>
                                            <td>{{$order['created_at']}}</td>
                                            <td>
                                                <button class="{{ $order['filled'] === 'YES' ? 'btngreen' : 'btnred' }}">
                                                    {{$order['filled']}}
                                                </button>
                                            </td>
                                            <td>
                                                <a href="{{ 'editorders/' . $order['id'] }}">
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