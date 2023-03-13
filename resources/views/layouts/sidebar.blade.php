@guest
@else
@if (Auth::user()->role == 'admin')
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="{{ route('awal') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="/images/logo.png" srcset="/images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="/images/logo-dark.png" srcset="/images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Kamar</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('adminkamar.index')}}" class="nk-menu-link"><span class="nk-menu-text">Semua Kamar</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/hotel/room-type.html" class="nk-menu-link"><span class="nk-menu-text">Tipe Kamar</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-reports"></em></span>
                            <span class="nk-menu-text">Fasilitas</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('fasilitas-kamar.index')}}" class="nk-menu-link"><span class="nk-menu-text">Kamar</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('fasilitas-hotel.index')}}" class="nk-menu-link"><span class="nk-menu-text">Fasilitas</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('user.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Customers</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
@endif
@if (Auth::user()->role == 'resepsionis')
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="{{ route('awal') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="/images/logo.png" srcset="/images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="/images/logo-dark.png" srcset="/images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
        <div class="nk-sidebar-element nk-sidebar-body">
            <div class="nk-sidebar-content">
                <div class="nk-sidebar-menu" data-simplebar>
                    <ul class="nk-menu">
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking-fill"></em></span>
                                <span class="nk-menu-text">Bookings</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="html/hotel/bookings.html" class="nk-menu-link"><span class="nk-menu-text">All Bookings</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/hotel/booking-add.html" class="nk-menu-link"><span class="nk-menu-text">Add Booking</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/hotel/booking-edit.html" class="nk-menu-link"><span class="nk-menu-text">Edit Booking</span></a>
                                </li>
                            </ul>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                                <span class="nk-menu-text">Room</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="html/hotel/room-list.html" class="nk-menu-link"><span class="nk-menu-text">All Rooms</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/hotel/room-type.html" class="nk-menu-link"><span class="nk-menu-text">Room Types</span></a>
                                </li>
                            </ul>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-reports"></em></span>
                                <span class="nk-menu-text">Reports</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="html/hotel/report-stocks.html" class="nk-menu-link"><span class="nk-menu-text">Stocks</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/hotel/report-expenses.html" class="nk-menu-link"><span class="nk-menu-text">Expenses</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/hotel/report-booking.html" class="nk-menu-link"><span class="nk-menu-text">Booking</span></a>
                                </li>
                            </ul>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                <span class="nk-menu-text">Payment</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="html/hotel/payment-methods.html" class="nk-menu-link"><span class="nk-menu-text">Payment Methods</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/hotel/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invocie List</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/hotel/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invocie Details</span></a>
                                </li>
                            </ul>
                        </li><!-- .nk-menu-item -->
                    </ul><!-- .nk-menu -->
                </div><!-- .nk-sidebar-menu -->
            </div><!-- .nk-sidebar-content -->
        </div><!-- .nk-sidebar-element -->
</div>
@endif
@if (Auth::user()->role == 'user')
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="{{ route('aku') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="/images/logo.png" srcset="/images/logo2x.png " alt="logo">
                <img class="logo-dark logo-img" src="/images/logo-dark.png" srcset="/images/logo-dark2x.png " alt="logo-dark">
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('aku') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('dataKamar') }}" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Kamar</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/hotel/room-list.html" class="nk-menu-link"><span class="nk-menu-text">Semua Kamar</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/hotel/room-type.html" class="nk-menu-link"><span class="nk-menu-text">Tipe Kamar</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking-fill"></em></span>
                            <span class="nk-menu-text">Bookings</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/hotel/bookings.html" class="nk-menu-link"><span class="nk-menu-text">All Bookings</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/hotel/booking-add.html" class="nk-menu-link"><span class="nk-menu-text">Add Booking</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            <span class="nk-menu-text">Pembayaran</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/hotel/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invocie List</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
@endif
@endguest
