<!DOCTYPE html>
<html lang="en">

<head>
    @include('../Template.csslinks')
    <title>Profile</title>
</head>

<body>
    <div class="section">
        <div class="maindiv">
            @include('../Template.usersidebar')
            <div class="rightmain">
                @include('../Template.usernav')
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
                        <form action="{{route('user.updateprofile')}}" method="POST">
                            @csrf
                            <div class="row px-3 px-md-5">
                                <h4>Profile</h4>
                                <div class="col-12 my-2 d-none">
                                    <label for="role" class="font-medium fs-5">Role:</label>
                                    <input type="number" value="1" readonly name="role" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3" id="role">
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="fname">Full Name</label>
                                        <input type="text" name="fname" value="{{$profile['fname']}}" id="fname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" value="{{$profile['username']}}"  id="username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{$profile['email']}}" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" name="phone" value="{{$profile['phone']}}" id="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="city">City</label>
                                        <input type="text" name="city" value="{{$profile['city']}}" id="city" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="country">Country</label>
                                        <input type="text" name="country" value="{{$profile['country']}}" id="country" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" value="{{$profile['password']}}" id="password" class="form-control">
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