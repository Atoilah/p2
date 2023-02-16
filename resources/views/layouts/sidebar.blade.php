<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="/images/logo.png" srcset="/images/logo2x.png 2x" alt="logo" />
                <img class="logo-dark logo-img" src="/images/logo-dark.png" srcset="/images/logo-dark2x.png 2x"
                    alt="logo-dark" />
                <img class="logo-small logo-img logo-img-small" src="/images/logo-small.png"
                    srcset="/images/logo-small2x.png 2x" alt="logo-small" />
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div>

    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    @guest
                        <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Tamu</h6>
                        </li>
                        <!-- .nk-menu-item -->
                        <li class="nk-menu-item">
                            <a href="{{ route('asu') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                <span class="nk-menu-text">Dasboard</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ route('tKamar') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                <span class="nk-menu-text">Kamar</span>
                            </a>
                        </li>
                        <!-- .nk-menu-item -->
                        <li class="nk-menu-item">
                            <a href="{{ route('tFasilitas') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                                <span class="nk-menu-text">Fasilitas</span>
                            </a>
                        </li>
                    @else
                        @if (Auth::user()->role == 1)
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">
                                    Admin
                                </h6>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('adminkamar.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon fas fa-bed"></em></span>
                                    <span class="nk-menu-text">Kamar</span><span class="nk-menu-badge">HOT</span>
                                </a>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('fasilitas-kamar.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                                    <span class="nk-menu-text">Fasilitas Kamar</span><span class="nk-menu-badge">HOT</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('fasilitas-hotel.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                                    <span class="nk-menu-text">Fasilitas Hotel</span><span class="nk-menu-badge">HOT</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('user.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">User</span><span class="nk-menu-badge">HOT</span>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->role == 2)
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Resepsionis</h6>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-cart-fill"></em></span>
                                    <span class="nk-menu-text">Default</span>
                                </a>
                            </li>
                        @endif
                    @endguest
                </ul>
                <!-- .nk-menu -->
            </div>
            <!-- .nk-sidebar-menu -->
        </div>
        <!-- .nk-sidebar-content -->
    </div>
</div>
