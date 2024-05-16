      <!-- BEGIN: Navbar-->
      <!-- Navbar -->
      <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">

          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="ti ti-menu-2 ti-sm"></i>
              </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

              <!-- Search -->
              {{-- <div class="navbar-nav align-items-center">
                  <div class="nav-item navbar-search-wrapper mb-0">
                      <a class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                          href="javascript:void(0);">
                          <i class="ti ti-search ti-md me-2"></i>
                          <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                      </a>
                  </div>
              </div> --}}
              <!-- /Search -->
              <ul class="navbar-nav flex-row align-items-center ms-auto">



                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                      <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                          data-bs-toggle="dropdown">
                          <div class="avatar avatar-online">
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                  <path fill="currentColor"
                                      d="M12 11.385q-1.237 0-2.119-.882T9 8.385t.881-2.12T12 5.386t2.119.88t.881 2.12t-.881 2.118t-2.119.882m-7 7.23V16.97q0-.619.36-1.158t.97-.838q1.416-.679 2.833-1.018t2.837-.34t2.837.34t2.832 1.018q.61.298.97.838T19 16.969v1.646z" />
                              </svg>
                          </div>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                              <a class="dropdown-item" href="../pages/profile-user.html">
                                  <div class="d-flex">
                                      <div class="flex-shrink-0 me-3">
                                          <div class="avatar avatar-online">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                  viewBox="0 0 24 24">
                                                  <path fill="currentColor"
                                                      d="M12 11.385q-1.237 0-2.119-.882T9 8.385t.881-2.12T12 5.386t2.119.88t.881 2.12t-.881 2.118t-2.119.882m-7 7.23V16.97q0-.619.36-1.158t.97-.838q1.416-.679 2.833-1.018t2.837-.34t2.837.34t2.832 1.018q.61.298.97.838T19 16.969v1.646z" />
                                              </svg>
                                          </div>
                                      </div>
                                      <div class="flex-grow-1">
                                          <span class="fw-medium d-block">
                                              {{ auth()->user()->name }}
                                          </span>
                                          <small class="text-muted">User</small>
                                      </div>
                                  </div>
                              </a>
                          </li>

                          <li>
                              <div class="dropdown-divider"></div>
                          </li>
                          <li>
                              <a class="dropdown-item" href="#"
                                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                  <i class='ti ti-login me-2'></i>
                                  <span class="align-middle">Keluar</span>
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                  @csrf
                              </form>

                          </li>
                      </ul>
                  </li>
                  <!--/ User -->
              </ul>
          </div>

          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper  d-none">
              <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
                  aria-label="Search...">
              <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
          </div>
      </nav>
