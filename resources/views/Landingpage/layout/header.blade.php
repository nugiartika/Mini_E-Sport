    <!-- header-section start -->
    <header class="header-section w-100">
        <div class="py-sm-6 py-3 mx-xxl-20 mx-md-15 mx-3">
            <div class="d-flex align-items-center justify-content-between gap-xxl-10 gap-lg-8 w-100">
                <nav
                    class="navbar-custom d-flex gap-lg-6 align-items-center flex-column flex-lg-row justify-content-start justify-content-lg-between w-100">
                    <div class="top-bar w-100 d-flex align-items-center gap-lg-0 gap-6">
                        <button class="navbar-toggle-btn d-block d-lg-none" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <a class="navbar-brand d-flex align-items-center gap-4" href="index.html">
                            <img class="" src="assets/img/humma-01.png" width="70px" height="50px"
                                alt="favicon">
                        </a>
                    </div>
                    {{-- <div class="navbar-toggle-item w-100 position-lg-relative">
                        <ul class="custom-nav gap-lg-7 gap-3 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                            <li class="menu-link">
                                <a href="tournaments.html">Tournaments</a>
                            </li>
                            <li class="menu-link">
                                <a href="game.html">Game</a>
                            </li>
                            <li class="menu-link">
                                <a href="game.html">Team</a>
                            </li>

                        </ul>
                    </div> --}}
                </nav>
                <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">

                    <ul class="custom-nav gap-lg-7 gap-3 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                        <li class="menu-link">
                            <a href="{{ route('userTournament') }}">Tournaments</a>
                        </li>
                        <li class="menu-link">
                            <a href="{{ route('userGame') }}">Game</a>
                        </li>
                        <li class="menu-link">
                            <a href="game.html">Team</a>
                        </li>
                        <li class="menu-link">
                            <a href="{{ route('login') }}"
                                class="btn-half-border position-relative d-inline-block py-2 px-6 bgp-1 rounded-pill ">Masuk</a>
                        </li>
                        </li>
                    </ul>

                    <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                        @if (auth()->check())
                            <div class="header-profile pointer">
                                <div class="profile-wrapper d-flex align-items-center gap-3">
                                    <div class="img-area overflow-hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 36 36">
                                            <path fill="currentColor"
                                                d="M30.61 24.52a17.16 17.16 0 0 0-25.22 0a1.51 1.51 0 0 0-.39 1v6A1.5 1.5 0 0 0 6.5 33h23a1.5 1.5 0 0 0 1.5-1.5v-6a1.51 1.51 0 0 0-.39-.98"
                                                class="clr-i-solid clr-i-solid-path-1" />
                                            <circle cx="18" cy="10" r="7" fill="currentColor"
                                                class="clr-i-solid clr-i-solid-path-2" />
                                            <path fill="none" d="M0 0h36v36H0z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="user-name d-none d-xxl-block text-nowrap">{{ auth()->user()->name }}</span>
                                    <i class="ti ti-chevron-down d-none d-xxl-block"></i>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </header>
    <!-- header-section end -->
