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
                            <h4>Order</h4>
                            <form action="{{route('admin.updateorder')}}" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <input type="text" name="id" class="d-none" value="{{$orders['id']}}">
                                    <div class="col-12">
                                        <label for="status">Order Filled</label>
                                        <select name="filled" id="status" class="form-control">
                                            <option {{ $orders['filled']=='YES' ? 'selected' : '' }}>YES</option>
                                            <option {{ $orders['filled']=='No' ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="mt-5">
                                        <input type="submit" value="Change Status"
                                            class="form-control green text-white font-semi">
                                    </div>
                                </div>
                            </form>
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