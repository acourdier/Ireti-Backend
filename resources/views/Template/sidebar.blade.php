<div class="leftmain bg-white">
    <div>
        <div class="logo">
            <a href="dashboard.html">
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
                    <a href="{{ route('admin.orders') }}"
                        class="{{ request()->routeIs('admin.orders') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ request()->routeIs('admin.orders') ? asset('img/ordersg.svg') : asset('img/orders.svg') }}"
                                alt="" class="sicon">
                            My Orders
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clients') }}"
                        class="{{ request()->routeIs('admin.clients') ? 'active' : '' }} text-decoration-none d-block lnk text-black">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ request()->routeIs('admin.clients') ? asset('img/clientsg.svg') : asset('img/clients.svg') }}"
                                alt="" class="sicon">
                            My Clients
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.payments') }}"
                        class="{{ request()->routeIs('admin.payments') ? 'active' : '' }} text-decoration-none d-block lnk text-black ">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ request()->routeIs('admin.payments') ? asset('img/paymentg.svg') : asset('img/payment.svg') }}"
                                alt="" class="sicon">
                            Payments
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="lgout">
        <a href="{{ route('login') }}" class="text-decoration-none d-block lnk text-black">
            <div class="log">
                <img src="{{ asset('img/logout.svg') }}" alt="logout" class="sicon">
                Logout
            </div>
        </a>
    </div>
</div>
