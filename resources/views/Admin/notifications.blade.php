<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Notifications</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.sidebar')
            <div class="rightmain">
                @include('../Template.adminnav')
                <div class="rightbottom">
                    <div class="container-fluid">
                        <div class="row px-3 px-md-5">
                            <h4>Notifications</h4>
                            @foreach ($notifications as $notification)
                            <div class="col-12 mt-3">
                                <div class="d-flex align-content-start">
                                    <div class="">
                                        <p class="mb-0 small"><span class="font-semi fs-6">{{$notification['fname']}}</span>
                                            {{$notification['message']}}</p>
                                        <p class="mb-0 gray small font-semi">{{$notification['created_at']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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