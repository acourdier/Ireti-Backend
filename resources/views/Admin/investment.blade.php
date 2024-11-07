<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Investment</title>
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
                @if (session('Delete'))
                <script>
                    swal("Good job!", "{{ session('Delete') }}", "success");
                </script>
                @endif
                @if (session('update'))
                <script>
                    swal("Good job!", "{{ session('update') }}", "success");
                </script>
                @endif
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 ">
                            <h4>Investment</h4>
                            @if ($investments->count() > 0)
                                <div class="table-responsive tbl-800 mt-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Fund Type</th>
                                                <th>Target Yield</th>
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
                                                    <div class="dropdown">
                                                        <i class="fa-solid fa-ellipsis-vertical pointer" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ 'editinvestment/' . $investment['id'] }}">
                                                                    <i
                                                                        class="fa-solid text-muted me-2 fa-pen-to-square"></i>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ 'investmentemail/' . $investment['id'] }}">
                                                                    <i class="fa-regular text-muted me-2 fa-envelope"></i>
                                                                    Send Email
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="text-danger">No Investment Available.</p>
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