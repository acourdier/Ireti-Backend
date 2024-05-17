<div class="leftmain bg-white">
    <div>
        <div class="logo">
            <a href="dashboard.html">
                <img src="{{asset('img/logo.svg')}}" alt="logo" class="w-100">
            </a>
        </div>
        <div class="lists">
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-iten-center ms-2 ">
                            <img src="{{ request()->routeIs('admin.dashboard') ? asset('img/grid.svg') : asset('img/gridg.svg') }}" alt="" class="sicon">
                            <p class="mb-0 ">Dashboard</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.products')}}" class="{{ request()->routeIs('admin.products') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('admin.products') ? asset('img/box.svg') : asset('img/boxg.svg') }}" alt="" class="sicon">
                            Products
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.investment')}}" class="{{ request()->routeIs('admin.investment') ? 'active' : '' }} text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('admin.investment') ? asset('img/grow.svg') : asset('img/growg.svg') }}" alt="" class="sicon">
                            Investment
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.profile')}}" class="{{ request()->routeIs('admin.profile') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('admin.profile') ? asset('img/user.svg') : asset('img/userg.svg') }}" alt="" class="sicon">
                            Profile
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.bank')}}" class="{{ request()->routeIs('admin.bank') ? 'active' : '' }} text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('admin.bank') ? asset('img/bank.svg') : asset('img/bankg.svg') }}" alt="" class="sicon">
                            Bank Account
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.beneficiaries')}}" class="{{ request()->routeIs('admin.beneficiaries') ? 'active' : '' }} text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('admin.beneficiaries') ? asset('img/money.svg') : asset('img/moneyg.svg') }}" alt="" class="sicon">
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
                <img src="{{asset('img/logout.svg')}}" alt="logout" class="sicon">
                Logout
            </div>
        </a>
    </div>
</div>