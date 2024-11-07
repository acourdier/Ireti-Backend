<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Edit Commodities</title>
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
                            <form action="{{route('admin.updateCommodity')}}" method="POST">
                                @csrf
                                <div class="Add Currency">
                                    <h4>Edit Commodities</h4>
                                    <input type="text" name="id" class="d-none" value="{{ $Commodity['id'] }}">
                                    <div class="row">
                                        <div class="col-6 my-2">
                                            <label for="Type" class="font-medium fs-5">Type:</label>
                                            <select name="Type" id="Type" class="form-control">
                                                <option {{ $Commodity['Type']=='Soft Commodities' ? 'selected' : '' }}>
                                                    Soft Commodities</option>
                                                <option {{ $Commodity['Type']=='Oil and oil Derivatives' ? 'selected'
                                                    : '' }}>Oil and Oil Derivatives</option>
                                                <option {{ $Commodity['Type']=='Metals and Precious Metals' ? 'selected'
                                                    : '' }}>Metals and Precious Metals</option>
                                            </select>
                                        </div>
                                        <div class="col-6 my-2">
                                            <label for="underlaying" class="font-medium fs-5">Underlaying:</label>
                                            <input type="text" value="{{ $Commodity['underlaying'] }}"
                                                name="underlaying" class="form-control" id="underlaying">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button type="submit"
                                            class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                            Update
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