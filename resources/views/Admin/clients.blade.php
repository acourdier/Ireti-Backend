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
                @if (session('success'))
                <script>
                    swal("Good job!", "{{ session('success') }}", "success");
                </script>
                @endif
                @if (session('reject'))
                <script>
                    swal("Good job!", "{{ session('reject') }}", "success");
                </script>
                @endif
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 ">                            
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <h4>My Clients</h4>
                                <a href="{{route('admin.addclient')}}"
                                    class=" px-4 py-2 border-0 rounded-3 text-decoration-none green text-white font-semi">
                                    Add Clients
                                </a>
                            </div>
                            @if ($users->count() > 0)
                                <div class="table-responsive tbl-800 mt-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="font-semi">Customer Name</th>
                                                <th class="font-semi">Active Date</th>
                                                <th class="font-semi">Status</th>
                                                <th class="font-semi">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td class="text-secondary align-middle">{{$user['fname']}}</td>
                                                <td class="text-secondary align-middle">{{$user['created_at']}}</td>
                                                <td class="text-secondary align-middle">
                                                    @php
                                                    if($user['status'] == 1) {
                                                    $status = "Pending";
                                                    $statusClass = "text-warning";
                                                    } elseif ($user['status'] == 2) {
                                                    $status = "Approved";
                                                    $statusClass = "text-success";
                                                    } else {
                                                    $status = "Rejected";
                                                    $statusClass = "text-danger";
                                                    }
                                                    @endphp
                                                    <span class="{{ $statusClass }}">{{ $status }}</span>
                                                </td>
                                                <td class="text-secondary align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ 'editclient/' . $user['id'] }}"><i
                                                            class="fa-solid fa-pen-to-square text-secondary pointer me-3"></i></a>
                                                        <a href="{{ 'Deleteuser/' . $user['id'] }}"><i
                                                            class="fa-solid fa-trash text-secondary pointer me-3"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="text-danger">No clients available.</p>
                            @endif
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