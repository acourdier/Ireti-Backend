<div class="leftmain bg-white">
    <div>
        <div class="logo">
            <a href="dashboard.html">
                <img src="/img/logo.svg" alt="logo" class="w-100">
            </a>
        </div>
        <div class="lists">
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}" class="text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-iten-center ms-2 ">
                            <img src="/img/grid.svg" alt="" class="sicon">
                            <p class="mb-0 ">Dashboard</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.products')}}" class="text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="/img/box.svg" alt="" class="sicon">
                            Products
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.investment')}}" class="text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="/img/grow.svg" alt="" class="sicon">
                            Investment
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.profile')}}" class="text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="/img/user.svg" alt="" class="sicon">
                            Profile
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.bank')}}" class="text-decoration-none d-block lnk text-black active">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="/img/bankg.svg" alt="" class="sicon">
                            Bank Account
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.beneficiaries')}}" class="text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="/img/money.svg" alt="" class="sicon">
                            Beneficiaries
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="lgout">
        <a href="{{route('login')}}" class="text-decoration-none d-block lnk text-black">
            <div class="log">
                <img src="/img/logout.svg" alt="logout" class="sicon">
                Logout
            </div>
        </a>
    </div>
</div>