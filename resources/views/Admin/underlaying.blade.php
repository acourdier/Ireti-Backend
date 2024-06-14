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
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <h4 class="font-bold">Underlying Commodities</h4>
                                <a href="{{route('admin.addCommodity')}}"
                                    class=" px-4 py-2 border-0 rounded-3 text-decoration-none green text-white font-semi">
                                    Add Commodity
                                </a>
                            </div>
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
                                                    <a href=""><i
                                                            class="fa-solid fa-trash text-secondary pointer me-3"></i></a>
                                                    <a href="">
                                                        <i class="fa-solid text-muted fa-pen-to-square"></i>
                                                    </a>
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