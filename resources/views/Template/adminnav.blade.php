<div class="rightnav d-flex justify-content-between align-items-center">
    <div class="d-flex flex-wrap justify-content-between align-items-center w-100 mx-3">
        <div class="d-flex ms-3 justify-content-start align-items-center h-100">
            <p class="mb-0 font-semi">Welcome Back</p>
            <p class="mb-0 ms-3 small d-none d-lg-block">Hi {{ Auth::user()->fname }}</p>
        </div>
        <div class="d-flex me-3 justify-content-end align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <div
                    class="border d-none d-sm-flex justify-content-between align-items-center border-1 rounded-pill p-2 me-2 me-lg-3">
                    <i class="fa-solid text-secondary fa-magnifying-glass me-2"></i>
                    <input type="text" placeholder="Search everything" class="border-0 focus-none">
                </div>
                <a href="{{route('admin.notifications')}}" class="me-3 text-decoration-none text-black me-md-2 me-lg-3">
                    <i class="fa-regular fa-bell fs-5"></i>
                </a>
                <div class="d-md-none ">
                    <i class="fa-solid fa-bars toggler fs-4 pointer"></i>
                </div>
            </div>
            <div class="d-none d-md-flex justify-content-between align-items-center">
                <div>
                    <p class="mb-0 fw-bold small">{{ Auth::user()->fname }} </p>
                    <p class="mb-0 small">Admin</p>
                </div>
            </div>
        </div>
    </div>
</div>