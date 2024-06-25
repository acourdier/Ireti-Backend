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
                            <form action="{{route('admin.updateCurrency')}}" method="POST">
                                @csrf
                                <input type="text" name="id" class="d-none" value="{{$currency['id']}}">
                                <div class="Add Currency">
                                    <h4>Update Currency</h4>
                                    <div class="col-12 my-2">
                                        <label for="currency" class="font-medium fs-5">Currency:</label>
                                        <input type="text" name="currency" value="{{ $currency['currency'] }}"
                                            class="form-control" id="currency">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button type="submit"
                                            class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                            Save
                                        </button>
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