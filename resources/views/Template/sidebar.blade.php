<div class="leftmain bg-white">
    <div>
        <div class="logo">
            <a href="{{route('admin.dashboard')}}">
                <img src="{{ asset('img/logo.svg') }}" alt="logo" class="w-100">
            </a>
        </div>
        <div class="lists">
            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                        class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-items-center ms-2 ">
                            <img src="{{ request()->routeIs('admin.dashboard') ? asset('img/gridg.svg') : asset('img/grid.svg') }}"
                                alt="" class="sicon">
                            <p class="mb-0 ">Dashboard</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.currency') }}"
                        class="{{ request()->routeIs('admin.currency' ,'admin.addCurrency','admin.editCurrency') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ request()->routeIs('admin.currency','admin.addCurrency','admin.editCurrency') ? asset('img/currencyg.svg') : asset('img/currency.svg') }}"
                                alt="" class="sicon">
                            Currencies
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.underlaying') }}"
                        class="{{ request()->routeIs('admin.underlaying','admin.addCommodity','admin.editCommodity') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ request()->routeIs('admin.underlaying','admin.addCommodity','admin.editCommodity') ? asset('img/inventoryg.svg') : asset('img/inventory.svg') }}"
                                alt="" class="sicon">
                            Underlaying
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.orders') }}"
                        class="{{ request()->routeIs('admin.orders') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ request()->routeIs('admin.orders') ? asset('img/boxg.svg') : asset('img/box.svg') }}"
                                alt="" class="sicon">
                            My Orders
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.investment')}}"
                        class="{{ request()->routeIs('admin.investment' ,'admin.makeinvestment') ? 'active' : '' }} text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-iten-center ms-2">
                            <img src="{{ request()->routeIs('admin.investment' ,'admin.makeinvestment') ? asset('img/growg.svg') : asset('img/grow.svg') }}"
                                alt="" class="sicon">
                            Investment
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clients') }}"
                        class="{{ request()->routeIs('admin.clients') ? 'active' : '' }} text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ request()->routeIs('admin.clients') ? asset('img/userg.svg') : asset('img/user.svg') }}"
                                alt="" class="sicon">
                            My Clients
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.payments') }}"
                        class="{{ request()->routeIs('admin.payments','admin.addpayment','admin.editpayment') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ request()->routeIs('admin.payments','admin.addpayment','admin.editpayment') ? asset('img/bankg.svg') : asset('img/bank.svg') }}"
                                alt="" class="sicon">
                            Payments
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="lgout">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
            class="text-decoration-none pointer d-block lnk text-black">
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