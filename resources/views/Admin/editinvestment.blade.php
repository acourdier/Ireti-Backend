<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Edit Investment</title>
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
                            <h4>Edit Investment</h4>
                            <form action="{{route('admin.updateinvestment')}}" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <input type="text" name="id" class="d-none" value="{{$investment['id']}}">
                                    <div class="col-12">
                                        <label for="status">Update Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option {{ $investment['status']=='Pending' ? 'selected' : '' }}>Pending
                                            </option>
                                            <option {{ $investment['status']=='Accepted' ? 'selected' : '' }}>Accepted
                                            </option>
                                            <option {{ $investment['status']=='Declined' ? 'selected' : '' }}>Declined
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mt-5">
                                        <input type="submit" value="Update"
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