<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Edit Client</title>
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
                            <h4>Edit Client</h4>
                            <form action="{{route('admin.saveclient')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 my-2 d-none">
                                        <label for="role">Role:</label>
                                        <input type="number" value="1" readonly name="role"
                                            class="form-control" id="role">
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="fname">Full Name:</label>
                                        <input type="text" name="fname" value="{{$user['fname']}}"
                                            class="form-control" id="fname" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="uname">Username:</label>
                                        <input type="text" name="username" value="{{$user['username']}}"
                                            class="form-control" id="uname" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" value="{{$user['email']}}"
                                            class="form-control" id="email" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="phone">Phone Number:</label>
                                        <input type="tel" name="phone" class="form-control" value="{{$user['phone']}}"
                                            id="phone" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="city">City:</label>
                                        <input type="text" name="city" class="form-control" value="{{$user['city']}}"
                                            id="city" required>
                                    </div>
                
                                    <div class="col-md-6 my-2">
                                        <label for="country">Country:</label>
                                        <input type="text" name="country" value="{{$user['country']}}"
                                            class="form-control" id="country" required>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="status">Status:</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{ $user['status'] == 1 ? 'selected' : '' }}>Pending</option>
                                            <option value="2" {{ $user['status'] == 2 ? 'selected' : '' }}>Approved</option>
                                            <option value="3" {{ $user['status'] == 3 ? 'selected' : '' }}>Rejected</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6 my-2">
                                        <label for="pass">Password:</label>
                                        <input type="password" name="password" value="{{$user['password']}}"
                                            class="form-control" id="pass" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-3">
                                            <button type="submit"
                                                class=" px-4 py-2 border-0 rounded-3 green text-white font-semi">
                                                Update Client
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