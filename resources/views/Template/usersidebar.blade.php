<div class="leftmain bg-white">
    <div>
        <div class="logo">
            <a href="{{route('admin.dashboard')}}">
                <img src="{{asset('img/logo.svg')}}" alt="logo" class="w-100">
            </a>
        </div>
        <div class="lists">
            <ul>
                <li>
                    <a href="{{route('user.dashboard')}}"
                        class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-iten-center ms-2 ">
                            <img src="{{ request()->routeIs('user.dashboard') ? asset('img/gridg.svg') : asset('img/grid.svg') }}"
                                alt="" class="sicon">
                            <p class="mb-0 ">Dashboard</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.products')}}"
                        class="{{ request()->routeIs('user.products') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('user.products') ? asset('img/boxg.svg') : asset('img/box.svg') }}"
                                alt="" class="sicon">
                            Products
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.investment')}}"
                        class="{{ request()->routeIs('user.investment' ,'user.makeinvestment') ? 'active' : '' }} text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('user.investment' ,'user.makeinvestment') ? asset('img/growg.svg') : asset('img/grow.svg') }}"
                                alt="" class="sicon">
                            Investment
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.profile')}}"
                        class="{{ request()->routeIs('user.profile') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('user.profile') ? asset('img/userg.svg') : asset('img/user.svg') }}"
                                alt="" class="sicon">
                            Profile
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.bank')}}"
                        class="{{ request()->routeIs('user.bank') ? 'active' : '' }} text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('user.bank') ? asset('img/bankg.svg') : asset('img/bank.svg') }}"
                                alt="" class="sicon">
                            Bank Account
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.beneficiaries')}}"
                        class="{{ request()->routeIs('user.beneficiaries') ? 'active' : '' }} text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('user.beneficiaries') ? asset('img/moneyg.svg') : asset('img/money.svg') }}"
                                alt="" class="sicon">
                            Beneficiaries
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="lgout">
        <a hhref="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
            class="text-decoration-none d-block lnk text-black">
            <div class="log">
                <img src="{{asset('img/logout.svg')}}" alt="logout" class="sicon">
                Logout
            </div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>