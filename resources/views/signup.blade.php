<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.csslinks')
    <title>Sign up</title>
</head>

<body>
    @include('Template.navbar')
    <section class="py-4">
        <div class="mycontainer">
            <h1 class="display-5 font-bold text-center">Sign Up</h1>
            <form action="{{route('createuser')}}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-12 my-2 d-none">
                        <label for="role" class="font-medium fs-5">Role:</label>
                        <input type="number" value="1" readonly name="role" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3" id="role">
                    </div>
                    <div class="col-12 my-2">
                        <label for="fname" class="font-medium fs-5">Full Name:</label>
                        <input type="text" name="fname" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3" id="fname">
                    </div>
                    <div class="col-12 my-2">
                        <label for="email" class="font-medium fs-5">Email:</label>
                        <input type="email" name="email" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3"
                            id="email">
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="phone" class="font-medium fs-5">Phone Number:</label>
                        <input type="tel" name="phone" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3" id="phone">
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="uname" class="font-medium fs-5">Username:</label>
                        <input type="text" name="username" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3" id="uname">
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="pass" class="font-medium fs-5">Password:</label>
                        <input type="password" name="password" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3"
                            id="pass">
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="cpass" class="font-medium fs-5">Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3"
                            id="cpass">
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="city" class="font-medium fs-5">City:</label>
                        <input type="text" name="city" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3"
                        id="city">
                    </div>

                    <div class="col-md-6 my-2">
                        <label for="country" class="font-medium fs-5">Country:</label>
                        <input type="text" name="country" class="border border-1 rounded-3 focus-none mt-2 w-100 py-3 px-3"
                        id="country">
                    </div>

                    <div class="mt-5 col-6 col-sm-5 col-md-4 col-xl-3">
                        <button type="submit"
                            class="green-bg font-bold fs-5 w-100 px-3 py-3 text-white border-0 rounded-4">Sign
                            Up</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @include('Template.footer')
    @include('Template.jslinks')
</body>


</html>