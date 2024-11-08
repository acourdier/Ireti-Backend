<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Underlying Commodities</title>
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
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <h4>Underlying Commodities</h4>
                                <a href="{{route('admin.addCommodity')}}"
                                    class=" px-4 py-2 border-0 rounded-3 text-decoration-none green text-white font-semi">
                                    Add Commodity
                                </a>
                            </div>
                            @if ($UnderLayings->count() > 0)
                                <div class="table-responsive tbl-800 mt-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Product Type</th>
                                                <th>Underlying Commodity</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach ($UnderLayings as $UnderLaying)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$UnderLaying['Type']}}</td>
                                                <td>{{$UnderLaying['underlaying']}}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ 'deleteCommodity/' . $UnderLaying['id'] }}"><i
                                                                class="fa-solid fa-trash text-secondary pointer me-3"></i></a>
                                                        <a href="{{ 'editCommodity/' . $UnderLaying['id'] }}">
                                                            <i class="fa-solid text-muted fa-pen-to-square"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="text-danger">No Underlying Commodities Available.</p>
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