<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Add Client</title>
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
                            <h4>Add Client</h4>
                            <form action="{{route('admin.saveclient')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 my-2 d-none">
                                        <label for="role">Role:</label>
                                        <input type="number" value="1" readonly name="role"
                                            class="form-control" id="role">
                                    </div>
                                    <div class="col-md-6 my-2 d-none">
                                        <label for="status">Status:</label>
                                        <input type="number" value="1" readonly name="status"
                                            class="form-control" id="status">
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="fname">Full Name:</label>
                                        <input type="text" name="fname"
                                            class="form-control" id="fname" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="uname">Username:</label>
                                        <input type="text" name="username"
                                            class="form-control" id="uname" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email"
                                            class="form-control" id="email" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="phone">Phone Number:</label>
                                        <input type="tel" name="phone" class="form-control"
                                            id="phone" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="city">City:</label>
                                        <input type="text" name="city" class="form-control"
                                            id="city" required>
                                    </div>
                
                                    <div class="col-md-6 my-2">
                                        <label for="country">Country:</label>
                                        <input type="text" name="country"
                                            class="form-control" id="country" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="pass">Password:</label>
                                        <input type="password" name="password"
                                            class="form-control" id="pass" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <button type="submit"
                                                class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                                Add Client
                                            </button>
                                        </div>
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