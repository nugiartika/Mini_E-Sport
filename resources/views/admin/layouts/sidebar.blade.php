<!-- Di bagian <head> -->
    <style>
        /* .menu-item.active > .menu-link {
            background-color: #7367F0;
            color: #ffffff;
        }

        .menu-item:hover > .menu-link {
            background-color: #7367F0;
            color: #ffffff;
        } */
    </style>


    </style>

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

        <!-- ! Hide app brand if navbar-full -->
        <div class="app-brand demo">
            <a href="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <svg width="32" height="20" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                            fill="#7367F0" />
                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                            fill="#7367F0" />
                    </svg>
                </span>
                <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
        </div>


        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">

            {{-- dasbord admin --}}
            <li class="menu-item active open">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>Dashboards</div>

                </a>


                <ul class="menu-sub">





                    <li class="menu-item {{ request()->routeIs('admin.index') ? 'active':'' }}">
                        <a href="{{ route('admin.index') }}" class="menu-link">
                            <div>Dashboard</div>
                        </a>


                    </li>



                    <li class="menu-item {{ request()->routeIs('category.index') ? 'active':'' }}" >
                        <a href="{{ route('category.index') }}" class="menu-link">
                            <div>Category Game</div>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- end dashboard admin --}}


            {{-- User Diterima --}}
            <li class="menu-item active open">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div>Users</div>
                </a>


                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('listUser') ? 'active':'' }} ">
                        <a href="{{ route('listUser') }}" class="menu-link">
                            <div>List user</div>
                        </a>
                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>View</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item ">
                                <a href="../app/user/view/account.html" class="menu-link">
                                    <div>Account</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="../app/user/view/security.html" class="menu-link">
                                    <div>Security</div>
                                </a>
                            </li>



                            <li class="menu-item ">
                                <a href="../app/user/view/billing.html" class="menu-link">
                                    <div>Billing &amp; Plans</div>
                                </a>
                            </li>



                            <li class="menu-item ">
                                <a href="../app/user/view/notifications.html" class="menu-link">
                                    <div>Notifications</div>
                                </a>
                            </li>



                            <li class="menu-item ">
                                <a href="../app/user/view/connections.html" class="menu-link">
                                    <div>Connections</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>






            <li class="menu-item ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-building-factory-2"></i>
                    <div>eCommerce</div>
                </a>


                <ul class="menu-sub">



                    <li class="menu-item ">
                        <a href="../app/ecommerce/dashboard.html" class="menu-link">
                            <div>Dashboard</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Products</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item ">
                                <a href="../app/ecommerce/product/list.html" class="menu-link">
                                    <div>Product List</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="../app/ecommerce/product/add.html" class="menu-link">
                                    <div>Add Product</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="../app/ecommerce/product/category.html" class="menu-link">
                                    <div>Category List</div>
                                </a>


                            </li>
                        </ul>
                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Order</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item ">
                                <a href="../app/ecommerce/order/list.html" class="menu-link">
                                    <div>Order List</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="../app/ecommerce/order/details.html" class="menu-link">
                                    <div> Order Details</div>
                                </a>


                            </li>
                        </ul>
                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Customer</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item ">
                                <a href="../app/ecommerce/customer/all.html" class="menu-link">
                                    <div>All Customers</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <div>Customer Details</div>
                                </a>


                                <ul class="menu-sub">



                                    <li class="menu-item ">
                                        <a href="../app/ecommerce/customer/details/overview.html" class="menu-link">
                                            <div>Overview</div>
                                        </a>


                                    </li>



                                    <li class="menu-item ">
                                        <a href="../app/ecommerce/customer/details/security.html" class="menu-link">
                                            <div>Security</div>
                                        </a>


                                    </li>



                                    <li class="menu-item ">
                                        <a href="../app/ecommerce/customer/details/billing.html" class="menu-link">
                                            <div>Address &amp; Billing</div>
                                        </a>


                                    </li>



                                    <li class="menu-item ">
                                        <a href="../app/ecommerce/customer/details/notifications.html" class="menu-link">
                                            <div>Notifications</div>
                                        </a>


                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>



                    <li class="menu-item ">
                        <a href="../app/ecommerce/manage/reviews.html" class="menu-link">
                            <div>Manage Reviews</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="../app/ecommerce/referrals.html" class="menu-link">
                            <div>Referrals</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item ">
                                <a href="../app/ecommerce/settings/details.html" class="menu-link">
                                    <div>Store details</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="../app/ecommerce/settings/payments.html" class="menu-link">
                                    <div>Payments</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="../app/ecommerce/settings/checkout.html" class="menu-link">
                                    <div>Checkout</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="../app/ecommerce/settings/shipping.html" class="menu-link">
                                    <div>Shipping &amp; Delivery</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="../app/ecommerce/settings/locations.html" class="menu-link">
                                    <div>Locations</div>
                                </a>


                            </li>



                            <li class="menu-item ">
                                <a href="../app/ecommerce/settings/notifications.html" class="menu-link">
                                    <div>Notifications</div>
                                </a>


                            </li>
                        </ul>
                    </li>
                </ul>
            </li>








            <li class="menu-item ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-book"></i>
                    <div>Academy</div>
                </a>


                <ul class="menu-sub">



                    <li class="menu-item ">
                        <a href="../app/academy/dashboard.html" class="menu-link">
                            <div>Dashboard</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="../app/academy/course.html" class="menu-link">
                            <div>My Course</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="../app/academy/course-details.html" class="menu-link">
                            <div>Course Details</div>
                        </a>


                    </li>
                </ul>
            </li>








            <li class="menu-item ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-truck"></i>
                    <div>Logistics</div>
                </a>


                <ul class="menu-sub">



                    <li class="menu-item ">
                        <a href="../app/logistics/dashboard.html" class="menu-link">
                            <div>Dashboard</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="../app/logistics/fleet.html" class="menu-link">
                            <div>Fleet</div>
                        </a>


                    </li>
                </ul>
            </li>








            <li class="menu-item ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                    <div>Invoice</div>
                    <div class="badge bg-danger rounded-pill ms-auto">4</div>

                </a>


                <ul class="menu-sub">



                    <li class="menu-item ">
                        <a href="../app/invoice/list.html" class="menu-link">
                            <div>List</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="../app/invoice/preview.html" class="menu-link">
                            <div>Preview</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="../app/invoice/edit.html" class="menu-link">
                            <div>Edit</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="../app/invoice/add.html" class="menu-link">
                            <div>Add</div>
                        </a>


                    </li>
                </ul>
            </li>










        </ul>

    </aside>
