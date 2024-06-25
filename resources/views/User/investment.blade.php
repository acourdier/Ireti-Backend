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
                        <div class="row px-3 px-md-5 ">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <h4>My Investments</h4>
                                <a href="{{route('user.makeinvestment')}}"
                                    class=" px-4 py-2 border-0 rounded-3 text-decoration-none green text-white font-semi">
                                    Make Investment
                                </a>
                            </div>
                            @if ($investments->count() > 0)
                                <div class="table-responsive tbl-800 mt-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="font-semi align-middle">Fund type</th>
                                                <th class="font-semi align-middle">Target yield</th>
                                                <th class="font-semi align-middle">Geographical Exposure</th>
                                                <th class="font-semi align-middle">Amount</th>
                                                <th class="font-semi align-middle">Status</th>
                                                <th class="font-semi align-middle">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($investments as $investment)
                                            <tr>
                                                <td class="text-black align-middle">{{$investment['fund']}}</td>
                                                <td class="text-secondary align-middle">{{$investment['yeild']}}</td>
                                                <td class="text-secondary align-middle">{{$investment['geographical']}}</td>
                                                <td class="text-secondary align-middle">{{$investment['amount']}}</td>
                                                <td class="text-secondary align-middle">
                                                    <button
                                                        class="{{ $investment['status'] === 'Pending' ? 'btnyellow' : ($investment['status'] === 'Accepted' ? 'btngreen' : 'btnred') }}">
                                                        {{$investment['status']}}
                                                    </button>

                                                </td>
                                                <td class="text-secondary align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ 'Deleteinvestment/' . $investment['id'] }}"><i
                                                                class="fa-solid fa-trash text-secondary pointer me-3"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="text-danger">No investment available.</p>
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