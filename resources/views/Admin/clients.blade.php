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
                            <h4 class="font-bold">My Clients</h4>
                            <div class="table-responsive tbl-800 mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="font-semi">Customer Name</th>
                                            <th class="font-semi">Email</th>
                                            <th class="font-semi">Phone</th>
                                            <th class="font-semi">Active Date</th>
                                            <th class="font-semi">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)                                            
                                        <tr>
                                            <td class="text-secondary align-middle">{{$user['fname']}}</td>
                                            <td class="text-secondary align-middle">{{$user['email']}}</td>
                                            <td class="text-secondary align-middle">{{$user['phone']}}</td>
                                            <td class="text-secondary align-middle">{{$user['created_at']}}</td>
                                            <td class="text-secondary align-middle">
                                                <div class="d-flex align-items-center">
                                                    <a href="{{ 'Deleteuser/' . $user['id'] }}"><i
                                                            class="fa-solid fa-trash text-secondary pointer me-3"></i></a>
                                                    <a href="#"><i
                                                            class="fa-solid fa-eye text-secondary pointer"></i></a>
                                                </div>
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
