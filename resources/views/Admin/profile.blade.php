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
                        <form action="#">
                            <div class="row px-3 px-md-5">
                                <h4>Profile</h4>
                                <div class="col-12">
                                    <div class="mt-3">
                                        <label for="name">Account Name</label>
                                        <input type="text" id="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3">
                                        <label for="account">Account Number</label>
                                        <input type="text" id="account" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <label for="number">Phone Number</label>
                                        <input type="tel" id="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3">
                                        <label for="contact">Dedicated Contact Number</label>
                                        <input type="tel" id="contact" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button type="submit" class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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