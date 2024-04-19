
<!DOCTYPE html>
<html lang="en" >
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <title>Dashboard Admin</title>
        <meta charset="utf-8"/>
        <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        "/>
        <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        "/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Metronic by Keenthemes" />
        <link rel="canonical" href="website-analytics.html"/>
        <link rel="shortcut icon" href="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/logos/favicon.ico"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

                    <!--begin::Vendor Stylesheets(used for this page only)-->
                            <link href="/assetsAdmin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="/assetsAdmin/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Vendor Stylesheets-->


                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="/assetsAdmin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="/assetsAdmin/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->

                    <!--begin::Google tag-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-37564768-1');
</script>
<!--end::Google tag-->
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  class="app-default" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}
</script>
<!--end::Theme mode setup on page load-->
                    <!--Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->


<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


<!--begin::Header-->
<div id="kt_app_header" class="app-header "

     data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false"  >

                        <!--begin::Header container-->
            <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">

	<!--begin::Sidebar mobile toggle-->
	<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
		<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
			<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span class="path2"></span></i>		</div>
	</div>
	<!--end::Sidebar mobile toggle-->


	<!--begin::Mobile logo-->
	<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
		<a href="https://preview.keenthemes.com/metronic8/demo1/index.html" class="d-lg-none">
			<img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/logos/default-small.svg" class="h-30px"/>
		</a>
	</div>
	<!--end::Mobile logo-->

<!--begin::Header wrapper-->
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

<!--begin::Menu wrapper-->
<div
    class="
        app-header-menu
        app-header-mobile-drawer
        align-items-stretch
    "

    data-kt-drawer="true"
	data-kt-drawer-name="app-header-menu"
	data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="250px"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_app_header_menu_toggle"

    data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
>
    <!--begin::Menu-->
    <div
        class="
            menu
            menu-rounded
            menu-column
            menu-lg-row
            my-5
            my-lg-0
            align-items-stretch
            fw-semibold
            px-2 px-lg-0
        "

        id="kt_app_header_menu"
        data-kt-menu="true"
    >
        <!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Dashboards</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px" ><!--begin:Dashboards menu-->
<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
    <!--begin:Row-->
    <div class="row">
        <!--begin:Col-->
        <div class="col-lg-8 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
            <!--begin:Row-->
            <div class="row">
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/index.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-element-11 text-primary fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Default</span>
                                    <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="ecommerce.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-basket text-danger fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                    <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="projects.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-abstract-44 text-info fs-1"><span class="path1"></span><span class="path2"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                    <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="online-courses.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-color-swatch text-success fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                    <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="marketing.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-chart-simple text-gray-900 fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="bidding.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-switch text-warning fs-1"><span class="path1"></span><span class="path2"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="pos.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-abstract-42 text-danger fs-1"><span class="path1"></span><span class="path2"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="call-center.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-call text-primary fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                                                                                                                                                                                                    </div>
            <!--end:Row-->

            <div class="separator separator-dashed mx-5 my-5"></div>

            <!--begin:Landing-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                <div class="d-flex flex-column me-5">
                    <div class="fs-6 fw-bold text-gray-800">
                        Landing Page Template
                    </div>
                    <div class="fs-7 fw-semibold text-muted">
                        Onpe page landing template with pricing & others
                    </div>
                </div>

                <a href="https://preview.keenthemes.com/metronic8/demo1/landing.html" class="btn btn-sm btn-primary fw-bold">
                    Explore
                </a>
            </div>
            <!--end:Landing-->
        </div>
        <!--end:Col-->

        <!--begin:Col-->
        <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
            <!--begin:Heading-->
            <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
            <!--end:Heading-->


                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="logistics.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Logistics                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="website-analytics.html" class="menu-link py-2 active">
                        <span class="menu-title">
                            Website Analytics                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="finance-performance.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Finance Performance                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="store-analytics.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Store Analytics                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="social.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Social                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="delivery.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Delivery                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="crypto.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Crypto                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="school.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            School                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="podcast.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Podcast                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                    </div>
        <!--end:Col-->
    </div>
    <!--end:Row-->
</div>
<!--end:Dashboards menu--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Pages</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0" ><!--begin:Pages menu-->
<div class="menu-active-bg px-4 px-lg-0">
    <!--begin:Tabs nav-->
    <div class="d-flex w-100 overflow-auto">
        <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                        <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">
                        General                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">
                        Account                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">
                        Authentication                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">
                        Utilities                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">
                        Widgets                    </a>
                </li>
                <!--end:Nav item-->
                    </ul>
    </div>
    <!--end:Tabs nav-->

    <!--begin:Tab content-->
    <div class="tab-content py-4 py-lg-8 px-lg-7">
        <!--begin:Tab pane-->
        <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-8">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu heading-->
                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                <!--end:Menu heading-->

                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/overview.html" class="menu-link ">
                            <span class="menu-title">Overview</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/projects.html" class="menu-link ">
                            <span class="menu-title">Projects</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/campaigns.html" class="menu-link ">
                            <span class="menu-title">Campaigns</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/documents.html" class="menu-link ">
                            <span class="menu-title">Documents</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/followers.html" class="menu-link ">
                            <span class="menu-title">Followers</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/activity.html" class="menu-link ">
                            <span class="menu-title">Activity</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/about.html" class="menu-link ">
                                <span class="menu-title">About</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/team.html" class="menu-link ">
                                <span class="menu-title">Our Team</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/contact.html" class="menu-link ">
                                <span class="menu-title">Contact Us</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/licenses.html" class="menu-link ">
                                <span class="menu-title">Licenses</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/sitemap.html" class="menu-link ">
                                <span class="menu-title">Sitemap</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/careers/list.html" class="menu-link ">
                                <span class="menu-title">Careers List</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/careers/apply.html" class="menu-link ">
                                <span class="menu-title">Careers Apply</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/classic.html" class="menu-link ">
                                <span class="menu-title">FAQ Classic</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/extended.html" class="menu-link ">
                                <span class="menu-title">FAQ Extended</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/blog/home.html" class="menu-link ">
                                <span class="menu-title">Blog Home</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/blog/post.html" class="menu-link ">
                                <span class="menu-title">Blog Post</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/pricing.html" class="menu-link ">
                                <span class="menu-title">Column Pricing</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/pricing/table.html" class="menu-link ">
                                <span class="menu-title">Table Pricing</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/social/feeds.html" class="menu-link ">
                                <span class="menu-title">Feeds</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/social/activity.html" class="menu-link ">
                                <span class="menu-title">Activty</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/social/followers.html" class="menu-link ">
                                <span class="menu-title">Followers</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/pages/social/settings.html" class="menu-link ">
                                <span class="menu-title">Settings</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-4">
        <img src="/assetsAdmin/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->
        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-600px" id="kt_app_header_menu_pages_account">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-5 mb-6 mb-lg-0">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-6">
                                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/account/overview.html" class="menu-link ">
                            <span class="menu-title">Overview</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html" class="menu-link ">
                            <span class="menu-title">Settings</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/account/security.html" class="menu-link ">
                            <span class="menu-title">Security</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/account/activity.html" class="menu-link ">
                            <span class="menu-title">Activity</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/account/billing.html" class="menu-link ">
                            <span class="menu-title">Billing</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                                                                            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-6">
                                                                                                                                                                            <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/account/statements.html" class="menu-link ">
                            <span class="menu-title">Statements</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/account/referrals.html" class="menu-link ">
                            <span class="menu-title">Referrals</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/account/api-keys.html" class="menu-link ">
                            <span class="menu-title">API Keys</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/account/logs.html" class="menu-link ">
                            <span class="menu-title">Logs</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-7">
        <img src="/assetsAdmin/media/stock/900x600/46.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_authentication">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->

        <!--begin:Menu section-->
        <div class="mb-0">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-in</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->

        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-0">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/extended/multi-steps-sign-up.html" class="menu-link ">
                        <span class="menu-title">Multi-Steps Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/welcome.html" class="menu-link ">
                        <span class="menu-title">Welcome Message</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/verify-email.html" class="menu-link ">
                        <span class="menu-title">Verify Email</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/coming-soon.html" class="menu-link ">
                        <span class="menu-title">Coming Soon</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/password-confirmation.html" class="menu-link ">
                        <span class="menu-title">Password Confirmation</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/account-deactivated.html" class="menu-link ">
                        <span class="menu-title">Account Deactivation</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-404.html" class="menu-link ">
                        <span class="menu-title">Error 404</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-500.html" class="menu-link ">
                        <span class="menu-title">Error 500</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-0">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/welcome-message.html" class="menu-link ">
                        <span class="menu-title">Welcome Message</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/subscription-confirmed.html" class="menu-link ">
                        <span class="menu-title">Subscription Confirmed</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/card-declined.html" class="menu-link ">
                        <span class="menu-title">Credit Card Declined</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-1.html" class="menu-link ">
                        <span class="menu-title">Promo 1</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-2.html" class="menu-link ">
                        <span class="menu-title">Promo 2</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-3.html" class="menu-link ">
                        <span class="menu-title">Promo 3</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_utilities">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-7">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General Modals</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/invite-friends.html" class="menu-link ">
                                <span class="menu-title">Invite Friends</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/view-users.html" class="menu-link ">
                                <span class="menu-title">View Users</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/select-users.html" class="menu-link ">
                                <span class="menu-title">Select Users</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/upgrade-plan.html" class="menu-link ">
                                <span class="menu-title">Upgrade Plan</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/share-earn.html" class="menu-link ">
                                <span class="menu-title">Share & Earn</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-target.html" class="menu-link ">
                                <span class="menu-title">New Target</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-card.html" class="menu-link ">
                                <span class="menu-title">New Card</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-address.html" class="menu-link ">
                                <span class="menu-title">New Address</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/create-api-key.html" class="menu-link ">
                                <span class="menu-title">Create API Key</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/bidding.html" class="menu-link ">
                                <span class="menu-title">Bidding</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced Modals</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-app.html" class="menu-link ">
                                <span class="menu-title">Create App</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-campaign.html" class="menu-link ">
                                <span class="menu-title">Create Campaign</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-account.html" class="menu-link ">
                                <span class="menu-title">Create Business Acc</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-project.html" class="menu-link ">
                                <span class="menu-title">Create Project</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                <span class="menu-title">Top Up Wallet</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/offer-a-deal.html" class="menu-link ">
                                <span class="menu-title">Offer a Deal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/two-factor-authentication.html" class="menu-link ">
                                <span class="menu-title">Two Factor Auth</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/horizontal.html" class="menu-link ">
                                <span class="menu-title">Horizontal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/vertical.html" class="menu-link ">
                                <span class="menu-title">Vertical</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/search/users.html" class="menu-link ">
                                <span class="menu-title">Users</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/search/select-location.html" class="menu-link ">
                                <span class="menu-title">Select Location</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/horizontal.html" class="menu-link ">
                                <span class="menu-title">Horizontal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/vertical.html" class="menu-link ">
                                <span class="menu-title">Vertical</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/two-factor-authentication.html" class="menu-link ">
                                <span class="menu-title">Two Factor Auth</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/create-app.html" class="menu-link ">
                                <span class="menu-title">Create App</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/create-campaign.html" class="menu-link ">
                                <span class="menu-title">Create Campaign</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/create-account.html" class="menu-link ">
                                <span class="menu-title">Create Account</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/create-project.html" class="menu-link ">
                                <span class="menu-title">Create Project</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                <span class="menu-title">Top Up Wallet</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/offer-a-deal.html" class="menu-link ">
                                <span class="menu-title">Offer a Deal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-5 pe-lg-5">
        <img src="/assetsAdmin/media/stock/600x600/img-84.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-500px" id="kt_app_header_menu_pages_widgets">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-4 mb-6 mb-lg-0">
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/widgets/lists.html" class="menu-link ">
                    <span class="menu-title">Lists</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/widgets/statistics.html" class="menu-link ">
                    <span class="menu-title">Statistics</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/widgets/charts.html" class="menu-link ">
                    <span class="menu-title">Charts</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/widgets/mixed.html" class="menu-link ">
                    <span class="menu-title">Mixed</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/widgets/tables.html" class="menu-link ">
                    <span class="menu-title">Tables</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/widgets/feeds.html" class="menu-link ">
                    <span class="menu-title">Feeds</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-8">
        <img src="/assetsAdmin/media/stock/900x600/44.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->
    </div>
    <!--end:Tab content-->
</div>
<!--end:Pages menu--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Apps</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Projects</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >My Projects</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/project.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Project</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/targets.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Targets</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/budget.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Budget</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/users.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/files.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/activity.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Activity</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-handcart fs-2"></i></span><span  class="menu-title" >eCommerce</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Catalog</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/products.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Products</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/categories.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Categories</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/add-product.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/edit-product.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/add-category.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Category</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/edit-category.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Category</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion menu-sub-indention" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sales</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/listing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Orders Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/details.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Order Details</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/add-order.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Order</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/edit-order.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Order</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion menu-sub-indention" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/customers/listing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/customers/details.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers Details</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion menu-sub-indention" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reports</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Products Viewed</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/sales.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sales</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/returns.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Returns</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/customer-orders.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Orders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/shipping.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Shipping</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-chart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Support Center</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/overview.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tickets</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/tickets/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Ticket List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/tickets/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Ticket View</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/tutorials/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/tutorials/post.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials Post</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/faq.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >FAQ</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/licenses.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Licenses</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Contact Us</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-shield-tick fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >User Management</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/users/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/users/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View User</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Roles</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/roles/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Roles List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/roles/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Roles</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/permissions.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Permissions</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-phone fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Contacts</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/getting-started.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/add-contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/edit-contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/view-contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Contact</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-basket fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span  class="menu-title" >Subscriptions</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/getting-started.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Subscription List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/add.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Subscription</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Subscription</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-briefcase fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Customers</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/getting-started.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Details</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Invoice Management</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Profile</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/view/invoice-1.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 1</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/view/invoice-2.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 2</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/view/invoice-3.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 3</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/create.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Invoice</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-file-added fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >File Manager</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/folders.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Folders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/files.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/blank.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Blank Directory</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Inbox</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/listing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Messages</span><span  class="menu-badge" ><span class="badge badge-light-success">3</span></span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/compose.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Compose</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/reply.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View & Reply</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span  class="menu-title" >Chat</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/private.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Private Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/group.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Group Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/drawer.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Drawer Chat</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/calendar.html"  ><span  class="menu-icon" ><i class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i></span><span  class="menu-title" >Calendar</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Layouts</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-900px w-xxl-950px" ><!--begin:Dashboards menu-->
<div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6" data-kt-menu-dismiss="true">
    <!--begin:Row-->
    <div class="row">
        <!--begin:Col-->
        <div class="col-lg-7">
            <!--begin:Row-->
            <div class="row">
                <!--begin:Col-->
                <div class="col-lg-4 mb-3">
                    <!--begin:Heading-->
                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">Layouts</h4>
                    <!--end:Heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/layouts/light-sidebar.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Light Sidebar</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/layouts/dark-sidebar.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Dark Sidebar</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/layouts/light-header.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Light Header</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/layouts/dark-header.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Dark Header</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Col-->

                <!--begin:Col-->
                <div class="col-lg-4 mb-3">
                    <!--begin:Heading-->
                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">Toolbars</h4>
                    <!--end:Heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/toolbars/classic.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Classic</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/toolbars/saas.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">SaaS</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/toolbars/accounting.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Accounting</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/toolbars/extended.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Extended</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/toolbars/reports.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Reports</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Col-->

                <!--begin:Col-->
                <div class="col-lg-4 mb-3">
                    <!--begin:Heading-->
                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">Asides</h4>
                    <!--end:Heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-1.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Filters</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-2.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Segments</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-3.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Shipment History</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-4.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Courier Activity</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-5.html" class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                <span class="menu-title">Calendar</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Col-->
            </div>
            <!--end:Row-->

            <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"></div>

            <!--begin:Layout Builder-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mb-5 mb-lg-0 mx-lg-5">
                <div class="d-flex flex-column me-5">
                    <div class="fs-6 fw-bold text-gray-800">
                        Layout Builder
                    </div>
                    <div class="fs-7 fw-semibold text-muted">
                        Customize, preview and export
                    </div>
                </div>

                <a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html" class="btn btn-sm btn-primary fw-bold">
                    Try Builder
                </a>
            </div>
            <!--end:Layout Builder-->
        </div>
        <!--end:Col-->

        <!--begin:Col-->
        <div class="col-lg-5 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center">
            <img src="/assetsAdmin/media/stock/900x600/45.jpg" class="rounded mw-100" alt=""/>
        </div>
        <!--end:Col-->
    </div>
    <!--end:Row-->
</div>
<!--end:Dashboards menu--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Help</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"  ><span  class="menu-icon" ><i class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Components</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"  ><span  class="menu-icon" ><i class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Documentation</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank"  ><span  class="menu-icon" ><i class="ki-duotone ki-code fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span  class="menu-title" >Changelog v8.2.5</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->    </div>
    <!--end::Menu-->
</div>
<!--end::Menu wrapper-->


<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <!--begin::Search-->
    <div class="app-navbar-item align-items-stretch ms-1 ms-md-4">

<!--begin::Search-->
<div
    id="kt_header_search"
    class="header-search d-flex align-items-stretch"

    data-kt-search-keypress="true"
    data-kt-search-min-length="2"
    data-kt-search-enter="enter"
    data-kt-search-layout="menu"

    data-kt-menu-trigger="auto"
    data-kt-menu-overflow="false"
    data-kt-menu-permanent="true"
    data-kt-menu-placement="bottom-end"

       >

    <!--begin::Search toggle-->
    <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px">
                            <i class="ki-duotone ki-magnifier fs-2"><span class="path1"></span><span class="path2"></span></i>                    </div>
    </div>
    <!--end::Search toggle-->

    <!--begin::Menu-->
    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
        <!--begin::Wrapper-->
        <div data-kt-search-element="wrapper">
            <!--begin::Form-->
<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
    <!--begin::Icon-->
    <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"><span class="path1"></span><span class="path2"></span></i>    <!--end::Icon-->

    <!--begin::Input-->
    <input type="text" class="search-input  form-control form-control-flush ps-10" name="search" value="" placeholder="Search." data-kt-search-element="input"/>
    <!--end::Input-->

    <!--begin::Spinner-->
    <span class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
        <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
    </span>
    <!--end::Spinner-->

    <!--begin::Reset-->
    <span class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i>    </span>
    <!--end::Reset-->

    <!--begin::Toolbar-->
    <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
        <!--begin::Preferences toggle-->
        <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
            <i class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span class="path2"></span></i>        </div>
        <!--end::Preferences toggle-->

        <!--begin::Advanced search toggle-->
        <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
            <i class="ki-duotone ki-down fs-2"></i>        </div>
        <!--end::Advanced search toggle-->
    </div>
    <!--end::Toolbar-->
</form>
<!--end::Form-->

<!--begin::Separator-->
<div class="separator border-gray-200 mb-6"></div>
<!--end::Separator-->
            <!--begin::Recently viewed-->
<div data-kt-search-element="results" class="d-none">
    <!--begin::Items-->
    <div class="scroll-y mh-200px mh-lg-350px">
                    <!--begin::Category title-->
            <h3 class="fs-5 text-muted m-0  pb-5" data-kt-search-element="category-title">
                Users            </h3>
            <!--end::Category title-->




                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/assetsAdmin/media/avatars/300-6.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Karina Clark</span>
                            <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/assetsAdmin/media/avatars/300-2.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                            <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/assetsAdmin/media/avatars/300-9.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Ana Clark</span>
                            <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/assetsAdmin/media/avatars/300-14.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                            <span class="fs-7 fw-semibold text-muted">Art Director</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/assetsAdmin/media/avatars/300-11.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                            <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                                <!--begin::Category title-->
            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                Customers            </h3>
            <!--end::Category title-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/volicity-9.svg" alt=""/>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Company Rbranding</span>
                            <span class="fs-7 fw-semibold text-muted">UI Design</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/tvit.svg" alt=""/>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Company Re-branding</span>
                            <span class="fs-7 fw-semibold text-muted">Web Development</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/misc/infography.svg" alt=""/>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Business Analytics App</span>
                            <span class="fs-7 fw-semibold text-muted">Administration</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/leaf.svg" alt=""/>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/tower.svg" alt=""/>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Tower Group Website</span>
                            <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->

                                                <!--begin::Category title-->
            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                Projects            </h3>
            <!--end::Category title-->


                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-notepad fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-frame fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->



                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->


                                        </div>
    <!--end::Items-->
</div>
<!--end::Recently viewed-->
            <!--begin::Recently viewed-->
<div class="mb-5" data-kt-search-element="main">
    <!--begin::Heading-->
    <div class="d-flex flex-stack fw-semibold mb-4">
        <!--begin::Label-->
        <span class="text-muted fs-6 me-2">Recently Searched:</span>
        <!--end::Label-->

            </div>
    <!--end::Heading-->

    <!--begin::Items-->
    <div class="scroll-y mh-200px mh-lg-325px">
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-laptop fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                    <span class="fs-7 text-muted fw-semibold">#45789</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                    <span class="fs-7 text-muted fw-semibold">#84050</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                    <span class="fs-7 text-muted fw-semibold">#67945</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-sms fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-bank fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                    <span class="fs-7 text-muted fw-semibold">#45690</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                    <span class="fs-7 text-muted fw-semibold">#24005</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
            </div>
    <!--end::Items-->
</div>
<!--end::Recently viewed-->
            <!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center d-none">
    <!--begin::Icon-->
    <div class="pt-10 pb-10">
        <i class="ki-duotone ki-search-list fs-4x opacity-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>    </div>
    <!--end::Icon-->

    <!--begin::Message-->
    <div class="pb-15 fw-semibold">
        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
        <div class="text-muted fs-7">Please try again with a different query</div>
    </div>
    <!--end::Message-->
</div>
<!--end::Empty-->        </div>
        <!--end::Wrapper-->

        <!--begin::Preferences-->
<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
    <!--begin::Heading-->
    <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="mb-5">
        <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <!--begin::Radio group-->
        <div class="nav-group nav-group-fluid">
            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    All
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="type" value="users" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Users
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="type" value="orders" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Orders
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="type" value="projects" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Projects
                </span>
            </label>
            <!--end::Option-->
        </div>
        <!--end::Radio group-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <!--begin::Radio group-->
        <div class="nav-group nav-group-fluid">
            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    Has attachment
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="attachment" value="any" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Any
                </span>
            </label>
            <!--end::Option-->
        </div>
        <!--end::Radio group-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
            <option value="next">Within the next</option>
            <option value="last">Within the last</option>
            <option value="between">Between</option>
            <option value="on">On</option>
        </select>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row mb-8">
        <!--begin::Col-->
        <div class="col-6">
            <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-6">
            <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                <option value="days">Days</option>
                <option value="weeks">Weeks</option>
                <option value="months">Months</option>
                <option value="years">Years</option>
            </select>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="d-flex justify-content-end">
        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>

        <a href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
    </div>
    <!--end::Actions-->
</form>
<!--end::Preferences-->
        <!--begin::Preferences-->
<form data-kt-search-element="preferences" class="pt-1 d-none">
    <!--begin::Heading-->
    <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="pb-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Projects
            </span>

            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Targets
            </span>
            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Affiliate Programs
            </span>
            <input class="form-check-input" type="checkbox" value="1" />
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Referrals
            </span>
            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Users
            </span>
            <input class="form-check-input" type="checkbox" value="1" />
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="d-flex justify-content-end pt-7">
        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
        <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Preferences-->    </div>
    <!--end::Menu-->
</div>
<!--end::Search-->    </div>
    <!--end::Search-->

    <!--begin::Activities-->
    <div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Drawer toggle-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" id="kt_activities_toggle">
            <i class="ki-duotone ki-messages fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>        </div>
        <!--end::Drawer toggle-->
    </div>
    <!--end::Activities-->

    <!--begin::Notifications-->
    <div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
            <i class="ki-duotone ki-notification-status fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>        </div>

<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
	<!--begin::Heading-->
    <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('/assetsAdmin/media/misc/menu-header-bg.jpg')">
        <!--begin::Title-->
        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
            Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
        </h3>
        <!--end::Title-->

        <!--begin::Tabs-->
        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
            </li>
        </ul>
        <!--end::Tabs-->
    </div>
	<!--end::Heading-->

    <!--begin::Tab content-->
    <div class="tab-content">
        <!--begin::Tab panel-->
        <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
            <!--begin::Items-->
            <div class="scroll-y mh-325px my-5 px-8">
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                    <i class="ki-duotone ki-abstract-28 fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                <div class="text-gray-500 fs-7">Phase 1 development</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">1 hr</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-danger">
                                    <i class="ki-duotone ki-information fs-2 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                <div class="text-gray-500 fs-7">Confidential staff documents</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">
                                    <i class="ki-duotone ki-briefcase fs-2 text-warning"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                <div class="text-gray-500 fs-7">Corporeate staff profiles</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-abstract-12 fs-2 text-success"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                <div class="text-gray-500 fs-7">New frontend admin theme</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                    <i class="ki-duotone ki-colors-square fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                <div class="text-gray-500 fs-7">Product launch status update</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-info">
                                    <i class="ki-duotone ki-picture
 fs-2 text-info"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner assetsAdmin</a>
                                <div class="text-gray-500 fs-7">Collection of banner images</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">
                                    <i class="ki-duotone ki-color-swatch fs-2 text-warning"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon assetsAdmin</a>
                                <div class="text-gray-500 fs-7">Collection of SVG icons</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">20 March</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->

            </div>
            <!--end::Items-->

            <!--begin::View more-->
			<div class="py-3 text-center border-top">
                <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                    View All
                    <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span class="path2"></span></i>                </a>
			</div>
			<!--end::View more-->
        </div>
        <!--end::Tab panel-->

        <!--begin::Tab panel-->
        <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column px-9">
                <!--begin::Section-->
                <div class="pt-10 pb-0">
                    <!--begin::Title-->
                    <h3 class="text-gray-900 text-center fw-bold">
                        Get Pro Access
                    </h3>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="text-center text-gray-600 fw-semibold pt-1">
                        Outlines keep you honest. They stoping you from amazing poorly about drive
                    </div>
                    <!--end::Text-->

                    <!--begin::Action-->
                    <div class="text-center mt-5 mb-9">
                        <a href="#" class="btn btn-sm btn-primary px-6"  data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan" >Upgrade</a>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Section-->

                <!--begin::Illustration-->
                <div class="text-center px-4">
                    <img class="mw-100 mh-200px" alt="image" src="/assetsAdmin/media/illustrations/sketchy-1/1.png"/>
                </div>
                <!--end::Illustration-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Tab panel-->

        <!--begin::Tab panel-->
        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
            <!--begin::Items-->
            <div class="scroll-y mh-325px my-5 px-8">
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Just now</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">1 week</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Mar 5</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">May 15</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Apr 3</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Jun 30</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Jul 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Sep 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Dec 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->

            </div>
            <!--end::Items-->

            <!--begin::View more-->
			<div class="py-3 text-center border-top">
                <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                    View All
                    <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span class="path2"></span></i>                </a>
			</div>
			<!--end::View more-->
        </div>
        <!--end::Tab panel-->
    </div>
    <!--end::Tab content-->
</div>
<!--end::Menu-->        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->

    <!--begin::Chat-->
    <div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative" id="kt_drawer_chat_toggle">
            <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->

    <!--begin::My apps links-->
    <div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>        </div>

<!--begin::My apps-->
<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">My Apps</div>
            <!--end::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-setting-3 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                </button>

<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
    <!--begin::Heading-->
    <div class="menu-item px-3">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
            Payments
        </div>
    </div>
    <!--end::Heading-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Create Invoice
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link flex-stack px-3">
            Create Payment

            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                <i class="ki-duotone ki-information fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Generate Bill
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Plans
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Billing
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Statements
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications"/>
                        <!--end::Input-->

                        <!--end::Label-->
                        <span class="form-check-label text-muted fs-6">
                            Recuring
                        </span>
                        <!--end::Label-->
                    </label>
                    <!--end::Switch-->
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1">
        <a href="#" class="menu-link px-3">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 3-->
                <!--end::Menu-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-5">
            <!--begin::Scroll-->
            <div class="mh-450px scroll-y me-n5 pe-5">
                <!--begin::Row-->
                <div class="row g-2">
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/amazon.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">AWS</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/angular-icon-1.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">AngularJS</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/atica.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Atica</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/beats-electronics.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Music</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/codeigniter.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Codeigniter</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/bootstrap-4.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Bootstrap</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/google-tag-manager.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">GTM</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/disqus.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Disqus</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/dribbble-icon-1.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Dribble</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/google-play-store.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Play Store</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/google-podcasts.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Podcasts</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/figma-1.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Figma</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/github.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Github</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/gitlab.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Gitlab</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/instagram-2-1.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Instagram</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col-4">
                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/pinterest-p.svg" class="w-25px h-25px mb-2" alt=""/>
                                <span class="fw-semibold">Pinterest</span>
                            </a>
                        </div>
                        <!--end::Col-->
                                    </div>
                <!--end::Row-->
            </div>
            <!--end::Scroll-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
<!--end::My apps-->        <!--end::Menu wrapper-->
    </div>
    <!--end::My apps links-->

    <!--begin::Theme mode-->
    <div class="app-navbar-item ms-1 ms-md-4">

<!--begin::Menu toggle-->
<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-night-day theme-light-show fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>    <i class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span class="path2"></span></i></a>
<!--begin::Menu toggle-->

<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>            </span>
            <span class="menu-title">
                Light
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
            <span class="menu-title">
                Dark
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </span>
            <span class="menu-title">
                System
            </span>
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->

    </div>
    <!--end::Theme mode-->

    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-35px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
            data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            <img src="/assetsAdmin/media/avatars/300-3.jpg" class="rounded-3" alt="user"/>
        </div>

<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="/assetsAdmin/media/avatars/300-3.jpg"/>
            </div>
            <!--end::Avatar-->

            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    Robert Fox                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                </div>

                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                    robert@kt.com                </a>
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="https://preview.keenthemes.com/metronic8/demo1/account/overview.html" class="menu-link px-5">
            My Profile
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/list.html" class="menu-link px-5">
            <span class="menu-text">My Projects</span>
            <span class="menu-badge">
                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title">My Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="https://preview.keenthemes.com/metronic8/demo1/account/referrals.html" class="menu-link px-5">
                    Referrals
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="https://preview.keenthemes.com/metronic8/demo1/account/billing.html" class="menu-link px-5">
                    Billing
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="https://preview.keenthemes.com/metronic8/demo1/account/statements.html" class="menu-link px-5">
                    Payments
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="https://preview.keenthemes.com/metronic8/demo1/account/statements.html" class="menu-link d-flex flex-stack px-5">
                    Statements

                    <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                        <i class="ki-duotone ki-information-5 fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </span>
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications"/>
                        <span class="form-check-label text-muted fs-7">
                            Notifications
                        </span>
                    </label>
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="https://preview.keenthemes.com/metronic8/demo1/account/statements.html" class="menu-link px-5">
            My Statements
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

            <!--begin::Menu item-->
        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
            <a href="#" class="menu-link px-5">
                <span class="menu-title position-relative">
                    Mode

                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                        <i class="ki-duotone ki-night-day theme-light-show fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>                        <i class="ki-duotone ki-moon theme-dark-show fs-2"><span class="path1"></span><span class="path2"></span></i>                    </span>
                </span>
            </a>

            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>            </span>
            <span class="menu-title">
                Light
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
            <span class="menu-title">
                Dark
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </span>
            <span class="menu-title">
                System
            </span>
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->

        </div>
        <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Language

                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    English <img class="w-15px h-15px rounded-1 ms-2" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/flags/united-states.svg" alt=""/>
                </span>
            </span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/flags/united-states.svg" alt=""/>
                    </span>
                    English
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/flags/spain.svg" alt=""/>
                    </span>
                    Spanish
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/flags/germany.svg" alt=""/>
                    </span>
                    German
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/flags/japan.svg" alt=""/>
                    </span>
                    Japanese
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/flags/france.svg" alt=""/>
                    </span>
                    French
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5 my-1">
        <a href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html" class="menu-link px-5">
            Account Settings
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">
            Sign Out
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->

        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->

    <!--begin::Header menu toggle-->
            <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span class="path2"></span></i>            </div>
        </div>
        <!--end::Header menu toggle-->

    <!--begin::Aside toggle-->
        <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
</div>
<!--end::Header wrapper-->            </div>
            <!--end::Header container-->
            </div>
<!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">






<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column "
     data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
     >


<!--begin::Logo-->
<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
    <!--begin::Logo image-->
    <a href="https://preview.keenthemes.com/metronic8/demo1/index.html">
                    <img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/logos/default-dark.svg" class="h-25px app-sidebar-logo-default"/>

        <img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/logos/default-small.svg" class="h-20px app-sidebar-logo-minimize"/>
    </a>
    <!--end::Logo image-->

            <!--begin::Sidebar toggle-->
        <!--begin::Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
        <div
            id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
            data-kt-toggle="true"
            data-kt-toggle-state="active"
            data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize"
            >

            <i class="ki-duotone ki-black-left-line fs-3 rotate-180"><span class="path1"></span><span class="path2"></span></i>        </div>
        <!--end::Sidebar toggle-->
    </div>
<!--end::Logo-->
<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
        <!--begin::Scroll wrapper-->
        <div
            id="kt_app_sidebar_menu_scroll"
            class="scroll-y my-5 mx-3"
            data-kt-scroll="true"
            data-kt-scroll-activate="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu"
            data-kt-scroll-offset="5px"
            data-kt-scroll-save-state="true"
        >
            <!--begin::Menu-->
            <div
                class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                id="#kt_app_sidebar_menu"
                data-kt-menu="true"
                data-kt-menu-expand="false"
            >
                <!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item here show menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span  class="menu-title" >Dashboards</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/index.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Default</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="ecommerce.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >eCommerce</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="projects.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Projects</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="online-courses.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Online Courses</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="marketing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Marketing</span></a><!--end:Menu link--></div><!--end:Menu item--><div class="menu-inner flex-column collapse show" id="kt_app_sidebar_menu_dashboards_collapse"><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="bidding.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Bidding</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="pos.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >POS System</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="call-center.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Call Center</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="logistics.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Logistics</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link active"  href="website-analytics.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Website Analytics</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="finance-performance.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Finance Performance</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="store-analytics.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Store Analytics</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="social.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Social</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="delivery.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Delivery</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="crypto.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Crypto</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="school.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >School</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="podcast.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Podcast</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/landing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Landing</span></a><!--end:Menu link--></div><!--end:Menu item--></div>
            <div class="menu-item">
                <div class="menu-content">
                    <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible active" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show 12 More">
                        <span data-kt-toggle-text-target="true">Show Less</span> <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0"><span class="path1"></span><span class="path2"></span></i><i class="ki-duotone ki-plus-square toggle-off fs-2 me-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </a>
                </div>
            </div>
        </div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item pt-5" ><!--begin:Menu content--><div  class="menu-content" ><span class="menu-heading fw-bold text-uppercase fs-7">Pages</span></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-address-book fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span  class="menu-title" >User Profile</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/overview.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/projects.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Projects</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/campaigns.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Campaigns</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/documents.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Documents</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/followers.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Followers</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/activity.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Activity</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-element-plus fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></span><span  class="menu-title" >Account</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/account/overview.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/account/security.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Security</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/account/activity.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Activity</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/account/billing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Billing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/account/statements.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Statements</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/account/referrals.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Referrals</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/account/api-keys.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >API Keys</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/account/logs.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Logs</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-user fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Authentication</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Corporate Layout</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/sign-in.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sign-in</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/sign-up.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sign-up</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/two-factor.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Two-Factor</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/reset-password.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reset Password</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/new-password.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >New Password</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Overlay Layout</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-in.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sign-in</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-up.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sign-up</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/two-factor.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Two-Factor</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/reset-password.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reset Password</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/new-password.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >New Password</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Creative Layout</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-in.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sign-in</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-up.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sign-up</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/two-factor.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Two-Factor</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/reset-password.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reset Password</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/new-password.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >New Password</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Fancy Layout</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/sign-in.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sign-in</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/sign-up.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sign-up</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/two-factor.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Two-Factor</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/reset-password.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reset Password</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/new-password.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >New Password</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Email Templates</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/welcome-message.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Welcome Message</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/reset-password.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reset Password</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/subscription-confirmed.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Subscription Confirmed</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/card-declined.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Credit Card Declined</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-1.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Promo 1</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-2.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Promo 2</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-3.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Promo 3</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/extended/multi-steps-sign-up.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Multi-steps Sign-up</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/welcome.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Welcome Message</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/verify-email.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Verify Email</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/coming-soon.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Coming Soon</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/password-confirmation.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Password Confirmation</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/account-deactivated.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Account Deactivation</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-404.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Error 404</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-500.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Error 500</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-file fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Corporate</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/about.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >About</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/team.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Our Team</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Contact Us</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/licenses.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Licenses</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/sitemap.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sitemap</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-abstract-39 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Social</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/social/feeds.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Feeds</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/social/activity.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Activty</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/social/followers.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Followers</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/social/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-bank fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Blog</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/blog/home.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Blog Home</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/blog/post.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Blog Post</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-chart-pie-3 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span  class="menu-title" >FAQ</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/classic.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >FAQ Classic</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/extended.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >FAQ Extended</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-bucket fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span  class="menu-title" >Pricing</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/pricing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Column Pricing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/pricing/table.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Table Pricing</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-call fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></i></span><span  class="menu-title" >Careers</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/careers/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Careers List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/pages/careers/apply.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Careers Apply</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-color-swatch fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span></i></span><span  class="menu-title" >Utilities</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Modals</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >General</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/invite-friends.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invite Friends</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/view-users.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Users</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/select-users.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Select Users</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/upgrade-plan.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Upgrade Plan</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/share-earn.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Share & Earn</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Forms</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-target.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >New Target</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-card.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >New Card</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-address.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >New Address</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/create-api-key.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create API Key</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/bidding.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Bidding</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Wizards</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-app.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create App</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-campaign.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Campaign</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-account.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Business Acc</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-project.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Project</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/top-up-wallet.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Top Up Wallet</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/offer-a-deal.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Offer a Deal</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/two-factor-authentication.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Two Factor Auth</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Search</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/search/users.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/search/select-location.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Select Location</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Search</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/horizontal.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Horizontal</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/vertical.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Vertical</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/users.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/select-location.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Location</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Wizards</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/horizontal.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Horizontal</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/vertical.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Vertical</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/two-factor-authentication.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Two Factor Auth</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/create-app.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create App</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/create-campaign.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Campaign</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/create-account.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Account</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/create-project.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Project</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/top-up-wallet.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Top Up Wallet</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/offer-a-deal.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Offer a Deal</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-element-7 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Widgets</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/widgets/lists.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Lists</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/widgets/statistics.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Statistics</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/widgets/charts.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Charts</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/widgets/mixed.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Mixed</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/widgets/tables.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tables</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/widgets/feeds.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Feeds</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item pt-5" ><!--begin:Menu content--><div  class="menu-content" ><span class="menu-heading fw-bold text-uppercase fs-7">Apps</span></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-abstract-41 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Projects</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >My Projects</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/project.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Project</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/targets.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Targets</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/budget.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Budget</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/users.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/files.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/activity.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Activity</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-basket fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span  class="menu-title" >eCommerce</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Catalog</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/products.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Products</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/categories.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Categories</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/add-product.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/edit-product.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/add-category.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Category</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/edit-category.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Category</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sales</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/listing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Orders Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/details.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Order Details</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/add-order.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Order</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/edit-order.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Order</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/customers/listing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/customers/details.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Details</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reports</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Products Viewed</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/sales.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sales</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/returns.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Returns</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/customer-orders.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Orders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/reports/shipping.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Shipping</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-abstract-25 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Contacts</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/getting-started.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/add-contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/edit-contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/view-contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Contact</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-chart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Support Center</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/overview.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion mb-1" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tickets</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/tickets/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tickets List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/tickets/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Ticket</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion mb-1" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/tutorials/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/tutorials/post.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorial Post</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/faq.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >FAQ</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/licenses.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Licenses</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Contact Us</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >User Management</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion mb-1" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/users/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/users/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View User</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Roles</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/roles/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Roles List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/roles/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Role</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/permissions.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Permissions</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-abstract-38 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Customers</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/getting-started.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Details</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-map fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span  class="menu-title" >Subscription</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/getting-started.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Subscription List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/add.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Subscription</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Subscription</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Invoice Manager</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Invoices</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-active-bg" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/view/invoice-1.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 1</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/view/invoice-2.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 2</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/view/invoice-3.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 3</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/create.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Invoice</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-switch fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >File Manager</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/folders.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Folders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/files.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/blank.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Blank Directory</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Inbox</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/listing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Messages</span><span  class="menu-badge" ><span class="badge badge-success">3</span></span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/compose.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Compose</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/reply.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View & Reply</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span  class="menu-title" >Chat</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/private.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Private Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/group.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Group Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/drawer.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Drawer Chat</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/apps/calendar.html"  ><span  class="menu-icon" ><i class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i></span><span  class="menu-title" >Calendar</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item pt-5" ><!--begin:Menu content--><div  class="menu-content" ><span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-element-7 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Layout Options</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/layouts/light-sidebar.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Light Sidebar</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/layouts/dark-sidebar.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Dark Sidebar</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/layouts/light-header.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Light Header</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/layouts/dark-header.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Dark Header</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-text-align-center fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span  class="menu-title" >Toolbars</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/toolbars/classic.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Classic</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/toolbars/saas.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >SaaS</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/toolbars/accounting.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Accounting</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/toolbars/extended.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Extended</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/toolbars/reports.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reports</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-duotone ki-menu fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span  class="menu-title" >Asides</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-1.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Filters</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-2.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Segments</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-3.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Shipment History</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-4.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Courier Activity</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/asides/aside-5.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Calendar</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"  ><span  class="menu-icon" ><i class="ki-duotone ki-abstract-13 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Layout Builder</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item pt-5" ><!--begin:Menu content--><div  class="menu-content" ><span class="menu-heading fw-bold text-uppercase fs-7">Help</span></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank"  ><span  class="menu-icon" ><i class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Components</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs" target="_blank"  ><span  class="menu-icon" ><i class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span  class="menu-title" >Documentation</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank"  ><span  class="menu-icon" ><i class="ki-duotone ki-code fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span  class="menu-title" >Changelog v8.2.5</span></a><!--end:Menu link--></div><!--end:Menu item-->            </div>
            <!--end::Menu-->
        </div>
        <!--end::Scroll wrapper-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
<!--begin::Footer-->
<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
    <a
        href="https://preview.keenthemes.com/html/metronic/docs"
        class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
        data-bs-toggle="tooltip"
        data-bs-trigger="hover"
        data-bs-dismiss-="click"
        title="200+ in-house components and 3rd-party plugins">

        <span class="btn-label">
            Docs & Components
        </span>

        <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span class="path2"></span></i>    </a>
</div>
<!--end::Footer-->    </div>
<!--end::Sidebar-->


            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 "

         >

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
        Website Analytics
            </h1>
    <!--end::Title-->


        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo1/index.html" class="text-muted text-hover-primary">
                                Home                            </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    Dashboards                                            </li>
                                <!--end::Item-->

                    </ul>
        <!--end::Breadcrumb-->
    </div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">

            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm fw-bold btn-secondary d-flex align-items-center px-4">
            <!--begin::Display range-->
            <div class="text-gray-600 fw-bold">
                Loading date range.
            </div>
            <!--end::Display range-->

            <i class="ki-duotone ki-calendar-8 fs-2 ms-2 me-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
        </div>
        <!--end::Daterangepicker-->

    <!--begin::Secondary button-->
        <!--end::Secondary button-->

    <!--begin::Primary button-->
            <a href="#" class="btn btn-sm fw-bold btn-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
            Add Target        </a>
        <!--end::Primary button-->
</div>
<!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >


        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Row-->
<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xxl-4 mb-5 mb-xl-10">
        <!--begin::Chart widget 27-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">
        <!--begin::Statistics-->
        <div class="m-0">
            <!--begin::Heading-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Title-->
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">35,568</span>
                <!--end::Title-->

                <!--begin::Label-->
                <span class="badge badge-light-danger fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>
                    8.02%
                </span>
                <!--end::Label-->
            </div>
            <!--end::Heading-->

            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-500">Organic Sessions</span>
            <!--end::Description-->
        </div>
        <!--end::Statistics-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            </button>


<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->

            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-0 pb-1">
        <div id="kt_charts_widget_27" class="min-h-auto"></div>
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 27-->


     </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xxl-4 mb-5 mb-xl-10">
        <!--begin::Chart widget 28-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">
        <!--begin::Statistics-->
        <div class="m-0">
            <!--begin::Heading-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Title-->
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
                <!--end::Title-->

                <!--begin::Label-->
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                    2.2%
                </span>
                <!--end::Label-->
            </div>
            <!--end::Heading-->

            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-500">Domain External Links</span>
            <!--end::Description-->
        </div>
        <!--end::Statistics-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            </button>


<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->

            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
        <!--begin::Chart-->
        <div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 28-->


     </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xxl-4 mb-5 mb-xl-10">

<!--begin::List widget 9-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">

            <!--begin::Statistics-->
            <div class="m-0">
                <!--begin::Heading-->
                <div class="d-flex align-items-center mb-2">
                    <!--begin::Title-->
                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
                    <!--end::Title-->

                                            <!--begin::Label-->
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                            2.2%
                        </span>
                        <!--end::Label-->

                </div>
                <!--end::Heading-->

                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-500">Visits by Social Networks</span>
                <!--end::Description-->
            </div>
            <!--end::Statistics-->

            <!--begin::Toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                </button>


<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->

                <!--end::Menu-->
            </div>
            <!--end::Toolbar-->

    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body card-body d-flex justify-content-between flex-column pt-3">

            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->
                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/dribbble-icon-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                        <!--end::Desc-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">579</span>

                        <!--end::Number-->

                        <!--begin::Info-->
                        <div class="m-0">
                                                            <!--begin::Label-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                    2.6%
                                </span>
                                <!--end::Label-->

                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->


                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->
                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/linkedin-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked In</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                        <!--end::Desc-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>

                        <!--end::Number-->

                        <!--begin::Info-->
                        <div class="m-0">
                                                            <!--begin::Label-->
                                <span class="badge badge-light-danger fs-base">
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                    0.4%
                                </span>
                                <!--end::Label-->

                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->


                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->
                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/slack-icon.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                        <!--end::Desc-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">794</span>

                        <!--end::Number-->

                        <!--begin::Info-->
                        <div class="m-0">
                                                            <!--begin::Label-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                    0.2%
                                </span>
                                <!--end::Label-->

                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->


                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->
                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/youtube-3.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                        <!--end::Desc-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">978</span>

                        <!--end::Number-->

                        <!--begin::Info-->
                        <div class="m-0">
                                                            <!--begin::Label-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                    4.1%
                                </span>
                                <!--end::Label-->

                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->


                <!--begin::Separator-->
                <div class="separator separator-dashed my-3"></div>
                <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Flag-->
                <img src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/instagram-2-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                <!--end::Flag-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                        <!--end::Desc-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-4 me-3">1,458</span>

                        <!--end::Number-->

                        <!--begin::Info-->
                        <div class="m-0">
                                                            <!--begin::Label-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                    8.3%
                                </span>
                                <!--end::Label-->

                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->


                        </div>
    <!--end::Body-->
</div>
<!--end::List widget 9-->


                                 </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-6 mb-5 mb-xl-10">

<!--begin::Table widget 9-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-5">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Top Referral Sources</span>

            <span class="text-gray-500 pt-1 fw-semibold fs-6">Counted in Millions</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-light">PDF Report</a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
	<div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold border-0 text-gray-500">
                        <th class="min-w-150px" colspan="2">CAMPAIGN</th>
                        <th class="min-w-150px text-end pe-0" colspan="2">SESSIONS</th>
                        <th class="text-end min-w-150px" colspan="2">CONVERSION RATE</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Google</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6 me-1">1,256</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-935</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6 me-3">23.63%</span>

                                    <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-9.35%</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Facebook</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6 me-1">446</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-576</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6 me-3">12.45%</span>

                                    <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-57.02%</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Bol.com</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6 me-1">67</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+24</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6 me-3">73.63%</span>

                                    <span class="text-success min-w-60px d-block text-end fw-bold fs-6">+28.73%</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Dutchnews.nl</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6 me-1">2,136</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1,229</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6 me-3">3.67%</span>

                                    <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-12.29%</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Stackoverflow</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6 me-1">945</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-634</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6 me-3">25.03%</span>

                                    <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-9.35%</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Themeforest</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6 me-1">237</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">106</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6 me-3">36.52%</span>

                                    <span class="text-success min-w-60px d-block text-end fw-bold fs-6">+3.06%</span>
                                </div>
                            </td>
                        </tr>
                                    </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
	</div>
	<!--end::Body-->
</div>
<!--end::Table Widget 9-->    </div>
    <!--end::Col-->

     <!--begin::Col-->
     <div class="col-xl-6 mb-5 mb-xl-10">

<!--begin::Table widget 10-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-5">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Top Performing Pages</span>

            <span class="text-gray-500 pt-1 fw-semibold fs-6">Counted in Millions</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-light">PDF Report</a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
	<div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold border-0 text-gray-500">
                        <th class="min-w-200px" colspan="2">LANDING PAGE</th>
                        <th class="min-w-100px text-end pe-0" colspan="2">CLICKS</th>
                        <th class="text-end min-w-100px" colspan="2">AVG. POSITION</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Index</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6">1,256</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-935</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6">2.63</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1.35</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Products</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6">446</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-576</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6">1.45</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">0.32</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">devs.keenthemes.com</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6">67</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+24</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6">7.63</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+8.73</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">studio.keenthemes.com</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6">2,136</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1,229</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6">3.67</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-2.29</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">graphics.keenthemes.com</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6">945</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-634</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6">5.03</span>

                                    <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-0.35</span>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td class="" colspan="2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Licenses</a>
                            </td>

                            <td class="pe-0" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-800 fw-bold fs-6">237</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">106</span>
                                </div>
                            </td>

                            <td class="" colspan="2">
                                <div class="d-flex justify-content-end">
                                    <span class="text-gray-900 fw-bold fs-6">3.52</span>

                                    <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+3.06</span>
                                </div>
                            </td>
                        </tr>
                                    </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
	</div>
	<!--end::Body-->
</div>
<!--end::Table Widget 10-->    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-6 mb-5 mb-xl-10">
        <!--begin::Chart widget 15-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-900">Author Sales</span>

			<span class="text-gray-500 pt-2 fw-semibold fs-6">Statistics by Countries</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
                            <div class="card-toolbar">
                    <a href="#" class="btn btn-sm btn-light">PDF Report</a>
                </div>


            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Remove
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Mute
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->

            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-5">
        <!--begin::Chart container-->
        <div id="kt_charts_widget_15_chart" class="min-h-auto ps-4 pe-6 mb-3 h-300px"></div>
        <!--end::Chart container-->
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 15-->
    </div>
    <!--end::Col-->

     <!--begin::Col-->
     <div class="col-xl-6 mb-5 mb-xl-10">

<!--begin::Table widget 11-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-5">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">Top Queries by Clicks</span>

            <span class="text-gray-500 pt-2 fw-semibold fs-6">Counted in Millions</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-light">PDF Report</a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex justify-content-between flex-column py-3">
        <!--begin::Block-->
        <div class="m-0"></div>
        <!--end::Block-->

        <!--begin::Table container-->
        <div class="table-responsive mb-n2">
            <!--begin::Table-->
            <table class="table table-row-dashed gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold border-0 text-gray-500">
                        <th class="min-w-300px">KEYWORD</th>
                        <th class="min-w-100px">CLICKS</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Buy phone online</a>
                            </td>
                            <td class="d-flex align-items-center border-0">
                                <span class="fw-bold text-gray-800 fs-6 me-3">263</span>

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 166px" aria-valuenow="166" aria-valuemin="0" aria-valuemax="166px"></div>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Top 10 Earbuds</a>
                            </td>
                            <td class="d-flex align-items-center border-0">
                                <span class="fw-bold text-gray-800 fs-6 me-3">238</span>

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 158px" aria-valuenow="158" aria-valuemin="0" aria-valuemax="158px"></div>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Cyber Monday</a>
                            </td>
                            <td class="d-flex align-items-center border-0">
                                <span class="fw-bold text-gray-800 fs-6 me-3">189</span>

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 129px" aria-valuenow="129" aria-valuemin="0" aria-valuemax="129px"></div>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">OLED TV in Amsterdam</a>
                            </td>
                            <td class="d-flex align-items-center border-0">
                                <span class="fw-bold text-gray-800 fs-6 me-3">263</span>

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 112px" aria-valuenow="112" aria-valuemin="0" aria-valuemax="112px"></div>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Macbook M1</a>
                            </td>
                            <td class="d-flex align-items-center border-0">
                                <span class="fw-bold text-gray-800 fs-6 me-3">263</span>

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 107px" aria-valuenow="107" aria-valuemin="0" aria-valuemax="107px"></div>
                                </div>
                            </td>
                        </tr>
                                            <tr>
                            <td>
                                <a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Best noise cancelation headsets</a>
                            </td>
                            <td class="d-flex align-items-center border-0">
                                <span class="fw-bold text-gray-800 fs-6 me-3">263</span>

                                <div class="progress rounded-start-0">
                                    <div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 74px" aria-valuenow="74" aria-valuemin="0" aria-valuemax="74px"></div>
                                </div>
                            </td>
                        </tr>
                                    </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Body-->
</div>
<!--end::Table Widget 11-->





    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-10">
        <!--begin::Chart widget 29-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">
        <!--begin::Statistics-->
        <div class="m-0">
            <!--begin::Heading-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Title-->
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">7,9</span>
                <!--end::Title-->

                <!--begin::Label-->
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                    2.2%
                </span>
                <!--end::Label-->
            </div>
            <!--end::Heading-->

            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-500">Avarage Position</span>
            <!--end::Description-->
        </div>
        <!--end::Statistics-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            </button>


<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->

            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex align-items-end p-0">
        <!--begin::Chart-->
        <div id="kt_charts_widget_29" class="h-300px w-100 min-h-auto ps-7 pe-0 mb-5"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 29-->


     </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-8 mb-5 mb-xl-10">

<!--begin::Chart widget 24-->
<div class="card card-flush overflow-hidden h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-5">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">Human Resources</span>
            <span class="text-gray-500 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-end"
                data-kt-menu-overflow="true">

                <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            </button>

<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->

            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Chart-->
        <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"></div>
        <!--end::Chart-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Chart widget 24-->

     </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-0">

<!--begin::List widget 12-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Visits by Source</span>
			<span class="text-gray-500 mt-1 fw-semibold fs-6">29.4k visitors</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            </button>


<!--begin::Menu 2-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mb-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Ticket
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Customer
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <!--begin::Menu item-->
        <a href="#" class="menu-link px-3">
            <span class="menu-title">New Group</span>
            <span class="menu-arrow"></span>
        </a>
        <!--end::Menu item-->

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Admin Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Staff Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    Member Group
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            New Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator mt-3 opacity-75"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content px-3 py-3">
            <a class="btn btn-primary  btn-sm px-4" href="#">
                Generate Reports
            </a>
        </div>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 2-->

            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex align-items-end">
        <!--begin::Wrapper-->
        <div class="w-100">


                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">
                            <i class="ki-duotone ki-rocket fs-3 text-gray-600"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Direct Source</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-4 me-3">1,067</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                                                            <!--begin::label-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>

                                    2.6%
                                </span>
                                <!--end::label-->

                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->



                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">
                            <i class="ki-duotone ki-tiktok fs-3 text-gray-600"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social Networks</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All Social Channels </span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-4 me-3">24,588</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                                                            <!--begin::label-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>

                                    4.1%
                                </span>
                                <!--end::label-->

                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->



                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">
                            <i class="ki-duotone ki-sms fs-3 text-gray-600"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email Newsletter</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp Campaigns</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                                                            <!--begin::label-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>

                                    0.2%
                                </span>
                                <!--end::label-->

                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->



                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">
                            <i class="ki-duotone ki-icon fs-3 text-gray-600"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact Radius visits</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-4 me-3">6,578</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                                                            <!--begin::label-->
                                <span class="badge badge-light-danger fs-base">
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>

                                    0.4%
                                </span>
                                <!--end::label-->

                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->



                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">
                            <i class="ki-duotone ki-abstract-25 fs-3 text-gray-600"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-4 me-3">79,458</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                                                            <!--begin::label-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>

                                    8.3%
                                </span>
                                <!--end::label-->

                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->



                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px me-5">
                        <span class="symbol-label">
                            <i class="ki-duotone ki-abstract-39 fs-3 text-gray-600"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Container-->
                    <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                        <!--begin::Content-->
                        <div class="me-5">
                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Rising Networks</a>
                            <!--end::Title-->

                            <!--begin::Desc-->
                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                            <!--end::Desc-->
                        </div>
                        <!--end::Content-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Number-->
                            <span class="text-gray-800 fw-bold fs-4 me-3">18,047</span>
                            <!--end::Number-->

                            <!--begin::Info-->
                                                            <!--begin::label-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>

                                    1.9%
                                </span>
                                <!--end::label-->

                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Item-->




                    </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Body-->
</div>
<!--end::List widget 12-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-0">
        <!--begin::Chart widget 31-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-7 mb-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Warephase stats</span>
			<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex align-items-end pt-0">
        <!--begin::Chart-->
        <div id="kt_charts_widget_31_chart" class="w-100 h-300px"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 31-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-0">
        <!--begin::Chart widget 30-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-7 mb-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Stats by Department</span>
			<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex justify-content-between flex-column">
        <!--begin::Items-->
        <div class="d-flex flex-wrap d-grid gap-5 mb-10">
            <!--begin::Item-->
            <div class="border-end-dashed border-end border-gray-300 pe-xxl-7 me-xxl-5">
                <!--begin::Statistics-->
                <div class="d-flex mb-2">
                    <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
                </div>
                <!--end::Statistics-->

                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-500">Actual for April</span>
                <!--end::Description-->
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="m-0">
                <!--begin::Statistics-->
                <div class="d-flex align-items-center mb-2">
                    <!--begin::Currency-->
                    <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
                    <!--end::Currency-->

                    <!--begin::Value-->
                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
                    <!--end::Value-->

                    <!--begin::Label-->
                    <span class="badge badge-light-success fs-base">
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                        4.5%
                    </span>
                    <!--end::Label-->
                </div>
                <!--end::Statistics-->

                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-500">GAP</span>
                <!--end::Description-->
            </div>
            <!--end::Item-->
        </div>
        <!--end::Items-->

        <!--begin::Chart container-->
        <div id="kt_charts_widget_30_chart" class="w-100 h-200px"></div>
        <!--end::Chart container-->
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 30-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->



        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->

                                    </div>
                <!--end::Content wrapper-->


<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer " >
            <!--begin::Footer container-->
        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
            <!--begin::Copyright-->
<div class="text-gray-900 order-2 order-md-1">
    <span class="text-muted fw-semibold me-1">2024&copy;</span>
    <a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
</div>
<!--end::Copyright-->

<!--begin::Menu-->
<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
    <li class="menu-item"><a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">About</a></li>

    <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank" class="menu-link px-2">Support</a></li>

    <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
</ul>
<!--end::Menu-->        </div>
        <!--end::Footer container-->
    </div>
<!--end::Footer-->                            </div>
            <!--end:::Main-->


                    </div>
        <!--end::Wrapper-->


            </div>
    <!--end::Page-->
</div>
<!--end::App-->


    <!--begin::App layout builder-->
<div
	id="kt_app_layout_builder"
	class="bg-body"

	data-kt-drawer="true"
	data-kt-drawer-name="app-settings"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'300px', 'lg': '380px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_app_layout_builder_toggle"
	data-kt-drawer-close="#kt_app_layout_builder_close">

	<!--begin::Card-->
	<div class="card border-0 shadow-none rounded-0 w-100">
		<!--begin::Card header-->
<div
    class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
    id="kt_app_layout_builder_header"
    style="background-image:url('/assetsAdmin/media/misc/layout/customizer-header-bg.jpg')">

    <!--begin::Card title-->
    <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
        Metronic Builder

        <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
            Get your product deeply customized
        </small>
    </h3>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
        <button
			type="button"
			class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1"
			id="kt_app_layout_builder_close"
		>
            <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span class="path2"></span></i>        </button>
    </div>
    <!--end::Card toolbar-->
</div>
<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body position-relative" id="kt_app_layout_builder_body">
			<!--begin::Content-->
			<div id="kt_app_settings_content"
				class="position-relative scroll-y me-n5 pe-5"

				data-kt-scroll="true"
				data-kt-scroll-height="auto"
				data-kt-scroll-wrappers="#kt_app_layout_builder_body"
				data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
				data-kt-scroll-offset="5px">

				<!--begin::Form-->
				<form class="form" method="POST" id="kt_app_layout_builder_form" action="https://preview.keenthemes.com/metronic8/demo1/index.php">
    				<input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]"/>

<!--begin::Card body-->
<div class="card-body p-0">

<!--begin::Form group-->
<div class="form-group">
	<!--begin::Heading-->
	<div class="mb-6">
		<h4 class="fw-bold text-gray-900">Theme Mode</h4>
		<div class="fw-semibold text-muted fs-7 d-block lh-1">
			Enjoy Dark & Light modes.

			<a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/dark-mode" target="_blank">See docs</a>
		</div>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="row " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">
					<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success">
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="/assetsAdmin/media/preview/demos/demo1/light-ltr.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="light" name="theme_mode" id="kt_layout_builder_theme_mode_light"/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Light						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->
					<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success">
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="/assetsAdmin/media/preview/demos/demo1/dark-ltr.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="dark" name="theme_mode" id="kt_layout_builder_theme_mode_dark"/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Dark						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->

	</div>
	<!--end::Options-->
</div>
<!--end::Form group-->
					<div class="separator separator-dashed my-5"></div>

						<!--begin::Form group-->
<div class="form-group d-flex flex-stack">
	<!--begin::Heading-->
	<div class="d-flex flex-column">
		<h4 class="fw-bold text-gray-900">RTL Mode</h4>
		<div class="fs-7 fw-semibold text-muted">
			Change Language Direction.

			<a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/rtl" target="_blank">See docs</a>
		</div>
	</div>
	<!--end::Heading-->

	<!--begin::Option-->
	<div class="d-flex justify-content-end">
		<!--begin::Check-->
		<div class="form-check form-check-custom form-check-solid form-check-success form-switch">
			<input type="hidden" value="false" name="layout-builder[layout][app][general][rtl]"/>

			<input
				class="form-check-input w-45px h-30px"
				type="checkbox"
				value="true"
				name="layout-builder[layout][app][general][rtl]"
							/>
		</div>
		<!--end::Check-->
	</div>
	<!--end::Option-->
</div>
<!--end::Form group-->
					<div class="separator separator-dashed my-5"></div>


<!--begin::Form group-->
<div class="form-group ">
	<!--begin::Heading-->
	<div class="d-flex flex-column mb-4">
		<h4 class="fw-bold text-gray-900">Width Mode</h4>
		<div class="fs-7 fw-semibold text-muted">Page width options</div>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="d-flex gap-7">
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input
					class="form-check-input" type="radio"
					checked

					value="default"
					id="kt_layout_builder_page_width_default"
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_default">
					Default				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input
					class="form-check-input" type="radio"


					value="fluid"
					id="kt_layout_builder_page_width_fluid"
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fluid">
					Fluid				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input
					class="form-check-input" type="radio"


					value="fixed"
					id="kt_layout_builder_page_width_fixed"
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fixed">
					Fixed				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
			</div>
	<!--end::Options-->
</div>
<!--end::Form group-->
					<div class="separator separator-dashed my-5"></div>


<!--begin::Form group-->
<div class="form-group ">
	<!--begin::Heading-->
	<div class="d-flex flex-column mb-4">
		<h4 class="fw-bold text-gray-900">KeenIcons Style</h4>

		<div>
			<span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
			<a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/icons/keenicons" target="_blank">Learn more</a>
		</div>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="d-flex flex-stack gap-3 " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">

			<!--begin::Option-->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover active">
				<!--begin::Image-->
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><span class="path1"></span><span class="path2"></span></i>
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>
				</div>
				<!--end::Image-->

				<!--begin::Check-->
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input
						class="form-check-input"
						type="radio"
						value="duotone"
						checked
						name="layout-builder[layout][app][general][icons]"/>
				</div>
				<!--end::Check-->
			</label>
			<!--end::Option-->

			<!--begin::Option-->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover ">
				<!--begin::Image-->
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>
				</div>
				<!--end::Image-->

				<!--begin::Check-->
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input
						class="form-check-input"
						type="radio"
						value="outline"

						name="layout-builder[layout][app][general][icons]"/>
				</div>
				<!--end::Check-->
			</label>
			<!--end::Option-->

			<!--begin::Option-->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover ">
				<!--begin::Image-->
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>
				</div>
				<!--end::Image-->

				<!--begin::Check-->
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input
						class="form-check-input"
						type="radio"
						value="solid"

						name="layout-builder[layout][app][general][icons]"/>
				</div>
				<!--end::Check-->
			</label>
			<!--end::Option-->

	</div>
	<!--end::Options-->
</div>
<!--end::Form group-->
					<div class="separator separator-dashed my-5"></div>

						<!--begin::Form group-->
<div class="form-group">
	<!--begin::Heading-->
	<div class="mb-6">
		<h4 class="fw-bold text-gray-900">Layouts</h4>

		<span class="fw-semibold text-muted fs-7 lh-1">
			4 main layouts.
		</span>

		<a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html" class="fw-semibold text-primary">More layout options</a>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="row gy-3" data-kt-buttons="true" data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">
								<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success active  active"  >
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="/assetsAdmin/media/misc/layout/dark-sidebar.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
						<input
							class="form-check-input" type="radio"
							checked
							value="dark-sidebar"
							name="layout-builder[layout][app][general][layout]"
						/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Dark Sidebar						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->
								<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success   "  >
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="/assetsAdmin/media/misc/layout/light-sidebar.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
						<input
							class="form-check-input" type="radio"

							value="light-sidebar"
							name="layout-builder[layout][app][general][layout]"
						/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Light Sidebar						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->
								<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success   "  >
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="/assetsAdmin/media/misc/layout/dark-header.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
						<input
							class="form-check-input" type="radio"

							value="dark-header"
							name="layout-builder[layout][app][general][layout]"
						/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Dark Header						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->
								<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success   "  >
					<!--begin::Image-->
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="/assetsAdmin/media/misc/layout/light-header.png" class="form-check-rounded mw-100" alt=""/>
					</div>
					<!--end::Image-->

					<!--begin::Check-->
					<div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
						<input
							class="form-check-input" type="radio"

							value="light-header"
							name="layout-builder[layout][app][general][layout]"
						/>

						<!--begin::Label-->
						<div class="form-check-label text-gray-700">
							Light Header						</div>
						<!--end::Label-->
					</div>
					<!--end::Check-->
				</label>
				<!--end::Option-->
			</div>
			<!--end::Col-->

	</div>
	<!--end::Options-->
</div>
<!--end::Form group-->

	</div>
<!--end::Card body-->				</form>
				<!--end::Form-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Card body-->

		<!--begin::Card footer-->
<div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
    <button type="button" id="kt_app_layout_builder_preview" class="btn btn-primary flex-grow-1 fw-semibold">

<!--begin::Indicator label-->
<span class="indicator-label">
    Preview</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait.    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->    </button>

    <button type="button" id="kt_app_layout_builder_reset"  class="btn btn-light flex-grow-1 fw-semibold">

<!--begin::Indicator label-->
<span class="indicator-label">
    Reset</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait.    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->    </button>
</div>
<!--end::Card footer-->	</div>
	<!--end::Card-->
</div>
<!--end::App layout builder-->

<!--begin::App settings toggle-->
<button
  	id="kt_app_layout_builder_toggle"
    class="btn btn-dark app-layout-builder-toggle lh-1 py-4 "
    title="Metronic Builder"
    data-bs-custom-class="tooltip-inverse"
    data-bs-toggle="tooltip"
    data-bs-placement="left"
    data-bs-dismiss="click"
    data-bs-trigger="hover"
>
  	<i class="ki-duotone ki-setting-4 fs-4 me-1"></i> Customize
</button>
<!--end::App settings toggle-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div
	id="kt_activities"
	class="bg-body"

	data-kt-drawer="true"
	data-kt-drawer-name="activities"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'300px', 'lg': '900px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_activities_toggle"
	data-kt-drawer-close="#kt_activities_close">

	<div class="card shadow-none border-0 rounded-0">
		<!--begin::Header-->
		<div class="card-header" id="kt_activities_header">
			<h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>

			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
					<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>				</button>
			</div>
		</div>
		<!--end::Header-->

		<!--begin::Body-->
		<div class="card-body position-relative" id="kt_activities_body">
			<!--begin::Content-->
			<div id="kt_activities_scroll"
				class="position-relative scroll-y me-n5 pe-5"

				data-kt-scroll="true"
				data-kt-scroll-height="auto"
				data-kt-scroll-wrappers="#kt_activities_body"
				data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
				data-kt-scroll-offset="5px">

				<!--begin::Timeline items-->
				<div class="timeline timeline-border-dashed">
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                    <img src="/assetsAdmin/media/avatars/300-14.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            <!--begin::Record-->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                <!--begin::Title-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                <!--end::Title-->

                <!--begin::Label-->
                <div class="min-w-175px pe-2">
                    <span class="badge badge-light text-muted">Application Design</span>
                </div>
                <!--end::Label-->

                <!--begin::Users-->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="/assetsAdmin/media/avatars/300-2.jpg" alt="img"/>
                    </div>
                    <!--end::User-->

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="/assetsAdmin/media/avatars/300-14.jpg" alt="img"/>
                    </div>
                    <!--end::User-->

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->

                <!--begin::Progress-->
                <div class="min-w-125px pe-2">
                    <span class="badge badge-light-primary">In Progress</span>
                </div>
                <!--end::Progress-->

                <!--begin::Action-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                <!--end::Action-->
            </div>
            <!--end::Record-->

            <!--begin::Record-->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                <!--begin::Title-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                <!--end::Title-->

                <!--begin::Label-->
                <div class="min-w-175px">
                    <span class="badge badge-light text-muted">CRM System Development</span>
                </div>
                <!--end::Label-->

                <!--begin::Users-->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="/assetsAdmin/media/avatars/300-20.jpg" alt="img"/>
                    </div>
                    <!--end::User-->

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->

                <!--begin::Progress-->
                <div class="min-w-125px">
                    <span class="badge badge-light-success">Completed</span>
                </div>
                <!--end::Progress-->

                <!--begin::Action-->
                <a href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                <!--end::Action-->
            </div>
            <!--end::Record-->
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon me-4">
        <i class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n2">
        <!--begin::Timeline heading-->
        <div class="overflow-auto pe-3">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                    <img src="/assetsAdmin/media/avatars/300-1.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="mb-5 pe-3">
            <!--begin::Title-->
            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                    <img src="/assetsAdmin/media/avatars/300-23.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                    <!--begin::Icon-->
                    <img alt="" class="w-30px me-3" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/files/pdf.svg"/>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--end::Desc-->

                        <!--begin::Number-->
                        <div class="text-gray-500">1.9mb</div>
                        <!--end::Number-->
                    </div>
                    <!--begin::Info-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                    <!--begin::Icon-->
                    <img alt="/metronic8/demo1/apps/projects/project.html" class="w-30px me-3" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/files/doc.svg"/>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--end::Desc-->

                        <!--begin::Number-->
                        <div class="text-gray-500">18kb</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center">
                    <!--begin::Icon-->
                    <img alt="/metronic8/demo1/apps/projects/project.html" class="w-30px me-3" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/files/css.svg"/>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--end::Desc-->

                        <!--begin::Number-->
                        <div class="text-gray-500">20mb</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Icon-->
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

        <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                    <img src="/assetsAdmin/media/avatars/300-14.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                    <img src="/assetsAdmin/media/avatars/300-2.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                <!--begin::Item-->
                <div class="overlay me-10">
                    <!--begin::Image-->
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="/assetsAdmin/media/stock/600x400/img-29.jpg"/>
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="overlay me-10">
                    <!--begin::Image-->
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="/assetsAdmin/media/stock/600x400/img-31.jpg"/>
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="overlay">
                    <!--begin::Image-->
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="/assetsAdmin/media/stock/600x400/img-40.jpg"/>
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                is assigned to you in Multi-platform Database Design project
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="overflow-auto pb-5">
                <!--begin::Wrapper-->
                <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                    <!--end::Info-->

                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                    <!--end::User-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                    <img src="/assetsAdmin/media/avatars/300-4.jpg" alt="img"/>
                </div>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">

<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
            <!--begin::Icon-->
        <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>

                                    <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                            </div>
            <!--end::Content-->

                    <!--begin::Action-->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"  >
                Proceed            </a>
            <!--end::Action-->
            </div>
    <!--end::Wrapper-->
</div>
<!--end::Notice-->

        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                is placed for Workshow Planning & Budget Estimation
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                <!--end::User-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->
</div>
<!--end::Timeline item--> 				</div>
				<!--end::Timeline items-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Body-->

		<!--begin::Footer-->
		<div class="card-footer py-5 text-center" id="kt_activities_footer">
			<a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
				View All Activities <i class="ki-duotone ki-arrow-right fs-3 text-primary"><span class="path1"></span><span class="path2"></span></i>			</a>
		</div>
		<!--end::Footer-->
	</div>
</div>
<!--end::Activities drawer-->

<!--begin::Chat drawer-->
<div
    id="kt_drawer_chat"

    class="bg-body"
    data-kt-drawer="true"
	data-kt-drawer-name="chat"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'300px', 'md': '500px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_drawer_chat_toggle"
	data-kt-drawer-close="#kt_drawer_chat_close">

    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                    </button>

<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
    <!--begin::Heading-->
    <div class="menu-item px-3">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
            Contacts
        </div>
    </div>
    <!--end::Heading-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
            Add Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link flex-stack px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
            Invite Contacts

            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Groups</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Create Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Invite Members
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Settings
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1">
        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 3-->
                </div>
                <!--end::Menu-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div
                class="scroll-y me-n5 pe-5"

                data-kt-element="messages"

                data-kt-scroll="true"
                data-kt-scroll-activate="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"
                data-kt-scroll-offset="0px">



    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/assetsAdmin/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">2 mins</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                How likely are you to recommend our company to your friends and family ?            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->

    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">5 mins</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/assetsAdmin/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->

    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/assetsAdmin/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">1 Hour</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Ok, Understood!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->

    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">2 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/assetsAdmin/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                You’ll receive notifications for all issues, pull requests!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->

    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/assetsAdmin/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">3 Hours</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com/">Keenthemes.com</a>            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->

    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">4 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/assetsAdmin/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Most purchased Business courses during this sale!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->

    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/assetsAdmin/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">5 Hours</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->

    <!--begin::Message(template for out)-->
    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">Just now</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/assetsAdmin/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for out)-->

    <!--begin::Message(template for in)-->
    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/assetsAdmin/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">Just now</span>
                    </div>
                    <!--end::Details-->

            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Right before vacation season we have the next Big Deal for you.            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">

            </textarea>
            <!--end::Input-->

            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-paper-clip fs-3"></i>                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-cloud-add fs-3"><span class="path1"></span><span class="path2"></span></i>                    </button>
                </div>
                <!--end::Actions-->

                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->

<!--begin::Chat drawer-->
<div
    id="kt_shopping_cart"

    class="bg-body"
    data-kt-drawer="true"
	data-kt-drawer-name="cart"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'300px', 'md': '500px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
	data-kt-drawer-close="#kt_drawer_shopping_cart_close">

    <!--begin::Messenger-->
    <div class="card card-flush w-100 rounded-0">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Title-->
            <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                            <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/assetsAdmin/media/stock/600x400/img-1.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                            <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/assetsAdmin/media/stock/600x400/img-3.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                            <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/assetsAdmin/media/stock/600x400/img-8.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/assetsAdmin/media/stock/600x400/img-26.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                            <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/assetsAdmin/media/stock/600x400/img-21.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                            <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/assetsAdmin/media/stock/600x400/img-34.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/assetsAdmin/media/stock/600x400/img-27.jpg" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->



        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer">
            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Total</span>
                <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Sub total</span>
                <span class="text-primary fw-bolder fs-5">$ 246.35</span>
            </div>
            <!--end::Item-->

            <!--end::Action-->
            <div class="d-flex justify-content-end mt-9">
                <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
		<!--begin::Engage-->
		<div class="app-engage " id="kt_app_engage">
							<!--begin::Prebuilts toggle-->
				<a href="#" data-bs-toggle="modal" data-bs-target="#kt_app_engage_prebuilts_modal" class="app-engage-btn hover-dark">
					<i class="ki-duotone ki-abstract-41 fs-1 pt-1 mb-2"><span class="path1"></span><span class="path2"></span></i>					Prebuilts
				</a>
				<!--end::Prebuilts toggle-->


							<!--begin::Get help-->
				<a href="https://devs.keenthemes.com/" target="_blank" class="app-engage-btn hover-primary">
					<i class="ki-duotone ki-like-shapes fs-1 pt-1 mb-2"><span class="path1"></span><span class="path2"></span></i>					Get Help
				</a>
				<!--end::Get help-->

							<!--begin::Prebuilts toggle-->
				<a href="https://1.envato.market/EA4JP" target="_blank" class="app-engage-btn hover-success">
					<i class="ki-duotone ki-basket fs-2 pt-1 mb-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>					Buy Now
				</a>
				<!--end::Prebuilts toggle-->

							<!--begin::Engage close-->
				<a href="#" id="kt_app_engage_toggle_off" class="app-engage-btn app-engage-btn-toggle-off text-hover-primary p-0">
					<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>				</a>
				<!--end::Engage close-->

				<!--begin::Engage close-->
				<a href="#" id="kt_app_engage_toggle_on" class="app-engage-btn app-engage-btn-toggle-on text-hover-primary p-0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-inverse" data-bs-dimiss="click" title="Explore Metronic">
					<i class="ki-duotone ki-question fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>				</a>
				<!--end::Engage close-->
					</div>
		<!--end::Engage-->

		<!--begin::Engage modals-->
					<!--begin::Modal - Sitemap-->
<div class="modal fade bg-dark bg-opacity-75" id="kt_app_engage_prebuilts_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-5 p-lg-10" id="kt_engage_prebuilts_modal_dialog">
        <!--begin::Modal content-->
        <div class="modal-content rounded-4">
            <!--begin::Modal header-->
            <div class="modal-header flex-stack border-0 px-10 pt-5 pb-0" id="kt_engage_prebuilts_header">
                <!--begin::View menu-->
<div id="kt_app_engage_prebuilts_view_menu" class="position-relative z-index-1">
	<!--begin::Toggle-->
	<button type="button" data-kt-element="selected" class="btn btn-flex px-0 rotate-" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, -1px">
		<!--begin::Title-->
		<span class="fs-6 fw-bold text-gray-600 me-2" data-kt-element="title">
			Image View
		</span>
		<!--end::Title-->

		<!--begin::Arrow-->
		<i class="ki-duotone ki-down fs-4 text-gray-600 rotate-180-"></i>		<!--end::Arrow-->
	</button>
	<!--end::Toggle-->

	<!--begin::Menu-->
	<div class="menu menu-sub menu-sub-dropdown menu-column menu-active-bg menu-state-primary menu-gray-600 menu-rounded w-150px py-3 px-3" data-kt-menu="true">
		<!--begin::Menu item-->
		<div class="menu-item">
			<!--begin::Menu link-->
			<a href="#" class="menu-link px-4 py-2 active" data-kt-mode="image">
				Image View
			</a>
			<!--end::Menu link-->
		</div>
		<!--end::Menu item-->

		<!--begin::Menu item-->
		<div class="menu-item">
			<!--begin::Menu link-->
			<a href="#" class="menu-link px-4 py-2" data-kt-mode="text">
				Text View
			</a>
			<!--end::Menu link-->
		</div>
		<!--end::Menu item-->
	</div>
	<!--end::Menu-->
</div>
<!--end::View menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross-square fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-5 px-15 mt-n5" id="kt_app_engage_prebuilts_body">
                <div class="container-fluid">

<style>
	.app-prebuilts-thumbnail {
		border: 1px solid var(--kt-body-bg);
		filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12));
	}
</style>

<!--begin::Image view-->
<div class="d-block" id="kt_app_engage_prebuilts_view_image">
	<!--begin::Tabs wrapper-->
	<div class="d-flex flex-center" id="kt_app_engage_prebuilts_view_image_tabs">
		<!--begin::Tabs-->
		<ul class="nav nav-tabs border-0 mb-5">
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_demos">

						Layouts					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						active"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_dashboards">

						Dashboards					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_pages">

						Pages					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_apps">

						Apps					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
					</ul>
		<!--end::Tabs-->
	</div>
	<!--end::Tabs wrapper-->

	<!--begin::Tab content-->
	<div class="tab-content">
								<div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_demos" role="tabpanel">
				<!--begin::Scroll wrapper-->
				<div
					class="hover-scroll-y pe-12 me-n12"
					data-kt-scroll="true"
					data-kt-scroll-height="auto"
					data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
					data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
					data-kt-scroll-offset="215px">

					<!--begin::Row-->
					<div class="row gy-10">


	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Metronic Original	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo1.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo2/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		SaaS App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo2.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo39/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing SaaS	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo39.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo31/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Marketing Automation	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo31.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo9/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sales Manager	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo9.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo38/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Email Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo38.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo30/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sales Tracking App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo30.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo6/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Time Reporting	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo6.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo60/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		CRM Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo60.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo8/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Analytics App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo8.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo62/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Scheduler	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo62.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo58/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Store Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo58.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo56/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Budgeting App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo56.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo34/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance Analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo34.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo27/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Databox Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo27.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo29/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Workspace	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo29.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo57/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing System	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo57.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo3/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Trend	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo3.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo36/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Digital Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo36.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo20/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		CRM Software	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo20.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo59/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Todo App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo59.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo55/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Backend Console	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo55.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo51/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Payroll App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo51.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo10/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Grid	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo10.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo61/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Property Portal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo61.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo52/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Site Builder	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo52.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo63/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Discussion Board	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo63.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo40/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		HR App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo40.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo23/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Member Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo23.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo64/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Voice Call App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo64.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo35/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Traffic Analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo35.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo33/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Social Campaings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo33.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo19/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Reports Panel	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo19.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo25/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Guiding App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo25.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo50/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Micro-SaaS App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo50.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo32/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Delivery Management	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo32.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo37/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Cloud Suite	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo37.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo42/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Calendar Workspace	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo42.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo5/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Support Forum	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo5.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo16/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Podcast App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo16.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo4/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Jobs Site	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo4.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo53/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Healthcare Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo53.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo7/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		HR Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo7.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo21/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Monochrome App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo21.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo24/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Helpdesk App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo24.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo28/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		eCommerce App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo28.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo44/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Recruit Automation	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo44.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo11/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance Planner	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo11.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo26/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Planable App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo26.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo22/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Media Publisher	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo22.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo41/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Business Intelligence	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo41.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo18/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Goal Tracking	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo18.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo54/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Workspace App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo54.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo15/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Crypto Planner	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo15.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo14/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Workplace	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo14.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo13/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Classic Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo13.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo12/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Data Analyzer	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo12.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo48/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Cloud ERP	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo48.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo17/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Events Scheduler	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo17.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo49/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		KPI Tracking	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo49.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo43/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Healthcare Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo43.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo45/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		OKR Tracking	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo45.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo47/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Campaign Automation	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo47.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">


<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo46/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Audit Board App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/demos/demo46.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->


					</div>
					<!--end::Row-->
				</div>
				<!--end::Scroll wrapper-->
			</div>
								<div class="pt-5 tab-pane fade show active" id="kt_app_engage_prebuilts_tab_dashboards" role="tabpanel">
				<!--begin::Scroll wrapper-->
				<div
					class="hover-scroll-y pe-12 me-n12"
					data-kt-scroll="true"
					data-kt-scroll-height="auto"
					data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
					data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
					data-kt-scroll-offset="215px">

					<!--begin::Row-->
					<div class="row gy-10">



	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/index.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Multipurpose	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/multipurpose-demo1.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="marketing.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/marketing.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="social.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Social	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/social.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="ecommerce.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/ecommerce.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="store-analytics.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Store-analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/store-analytics.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="logistics.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logistics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/logistics.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="delivery.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Delivery	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/delivery.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="online-courses.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Online-courses	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/online-courses.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="school.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		School	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/school.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="crypto.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Crypto	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/crypto.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="finance-performance.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance-performance	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/finance-performance.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="website-analytics.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Website-analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/website-analytics.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="bidding.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Bidding	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/bidding.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="podcast.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Podcast	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/podcast.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="projects.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/projects.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="call-center.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Call-center	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/call-center.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-md-4">

<!--begin::Preview-->
<a
	href="pos.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		POS	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/dashboards/pos.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

					</div>
					<!--end::Row-->
				</div>
				<!--end::Scroll wrapper-->
			</div>
											<div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_apps" role="tabpanel">
				<!--begin::Scroll wrapper-->
				<div
					class="hover-scroll-y pe-12 me-n12"
					data-kt-scroll="true"
					data-kt-scroll-height="auto"
					data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
					data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
					data-kt-scroll-offset="215px">

					<!--begin::Row-->
					<div class="row gy-10">


	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/list.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/projects.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/products.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/ecommerce.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/list.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Customers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/customers.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/list.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscriptions	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/subscriptions.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/users/list.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Management	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/user-management.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/create.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invoices	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/invoices.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/overview.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Support Center	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/support-center.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/private.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Chat	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/chat.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/calendar.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Calendar	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/calendar.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/folders.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		File Manager	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/file-manager.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/listing.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Inbox	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/inbox.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

	<!--begin::Col-->
	<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/getting-started.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contacts	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/apps/contacts.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->

					</div>
					<!--end::Row-->
				</div>
				<!--end::Scroll wrapper-->
			</div>

		<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages">

<!--begin::Tabs wrapper-->
<div class="d-flex flex-center mb-5">
	<div class="border-bottom">
		<!--begin::Tabs-->
		<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold m-0 p-0 gap-4">
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a
						class="nav-link text-muted text-active-primary pt-0 pb-4
						active"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_pages_authentication">

						Authentication					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a
						class="nav-link text-muted text-active-primary pt-0 pb-4
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_pages_general">

						General					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a
						class="nav-link text-muted text-active-primary pt-0 pb-4
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_pages_account">

						Account					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a
						class="nav-link text-muted text-active-primary pt-0 pb-4
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_pages_modals">

						Modals					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a
						class="nav-link text-muted text-active-primary pt-0 pb-4
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_pages_wizards">

						Wizards					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a
						class="nav-link text-muted text-active-primary pt-0 pb-4
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_pages_search">

						Search					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a
						class="nav-link text-muted text-active-primary pt-0 pb-4
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_pages_widgets">

						Widgets					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a
						class="nav-link text-muted text-active-primary pt-0 pb-4
						"
						data-bs-toggle="tab"
						href="#kt_app_engage_prebuilts_tab_pages_email-templates">

						Email Templates					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
					</ul>
		<!--end::Tabs-->
	</div>
</div>
<!--end::Tabs wrapper-->

<!--begin::Scroll wrapper-->
<div
	class="hover-scroll-y pe-12 me-n12"
	data-kt-scroll="true"
	data-kt-scroll-height="auto"
	data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image"
	data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
	data-kt-scroll-offset="250px">

	<!--begin::Tab content-->
	<div class="tab-content">
					<div class="tab-pane fade show active" id="kt_app_engage_prebuilts_tab_pages_authentication" role="tabpanel">


					<!--begin::Row-->
<div class="row g-10">

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/sign-in.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Corporate	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-corporate.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-in.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Creative	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-creative.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/sign-in.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Fancy	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-fancy.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-in.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overlay	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-overlay.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/extended/multi-steps-sign-up.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Multi-Step	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-multistep.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/two-factor.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Two-Factor	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-2factor.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/password-confirmation.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Password Changed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-passwordchanged.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/verify-email.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Verify Email	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-verifyemail.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/welcome.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-welcome.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/coming-soon.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Coming Soon	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-comingsoon.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/account-deactivated.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Account Deactivated	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-accountdeactivated.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-404.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		404 Page	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-404.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-500.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		505 Page	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/auth-500.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->
	</div>
<!--end::Row-->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_general" role="tabpanel">


											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active"
	data-bs-toggle="collapse"
	href="#kt_app_engage_prebuilts_tab_pages_general_user-profile">

	<span class="fw-bolder fs-2">
		User Profile	</span>

	<i class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
	<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span></i>
</a>
<!--end::Collapse toggle-->

<!--begin::Collapse content-->
<div class="show" id="kt_app_engage_prebuilts_tab_pages_general_user-profile">
	<!--begin::Row-->
	<div class="row g-10 pt-2 pb-5">

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/overview.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Profile Overview	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/projects.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/campaigns.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Campaigns	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/profile-campaigns.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/documents.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Documents	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/profile-documents.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/followers.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Followers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/profile-followers.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/activity.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Activity	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/profile-activity.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
	data-bs-toggle="collapse"
	href="#kt_app_engage_prebuilts_tab_pages_general_corporate">

	<span class="fw-bolder fs-2">
		Corporate	</span>

	<i class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
	<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span></i>
</a>
<!--end::Collapse toggle-->

<!--begin::Collapse content-->
<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_corporate">
	<!--begin::Row-->
	<div class="row g-10 pt-2 pb-5">

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/about.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		About Us	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/corporate-aboutus.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/contact.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contact Us	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/corporate-contactus.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/licenses.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		License	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/corporate-license.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/team.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Our Team	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/corporate-ourteam.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/sitemap.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sitemap	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/corporate-sitemap.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
	data-bs-toggle="collapse"
	href="#kt_app_engage_prebuilts_tab_pages_general_social">

	<span class="fw-bolder fs-2">
		Social	</span>

	<i class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
	<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span></i>
</a>
<!--end::Collapse toggle-->

<!--begin::Collapse content-->
<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_social">
	<!--begin::Row-->
	<div class="row g-10 pt-2 pb-5">

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/social/feeds.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Activity	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/social-activity.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/social/activity.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/social-feeds.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/social/followers.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Followers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/social-followers.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/social/settings.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/social-settings.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
	data-bs-toggle="collapse"
	href="#kt_app_engage_prebuilts_tab_pages_general_others">

	<span class="fw-bolder fs-2">
		Others	</span>

	<i class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
	<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span class="path1"></span><span class="path2"></span></i>
</a>
<!--end::Collapse toggle-->

<!--begin::Collapse content-->
<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_others">
	<!--begin::Row-->
	<div class="row g-10 pt-2 pb-5">

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/classic.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Classic	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/faq-classic.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/extended.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Extended	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/faq-extended.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/blog/home.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Home	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/blog-home.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/pages/blog/post.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Post	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/blog-post.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>


			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_account" role="tabpanel">


					<!--begin::Row-->
<div class="row g-10">

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/account/overview.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overview	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/account-overview.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/account-settings.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/account/billing.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/account/security.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Security	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/account-security.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/account/referrals.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Referrals	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/account-referrals.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/account/logs.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logs	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/account-logs.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/account/api-keys.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		API Keys	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/account-apikeys.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/account/statements.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statements	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/account-statements.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/account/billing.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->
	</div>
<!--end::Row-->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_modals" role="tabpanel">


					<!--begin::Row-->
<div class="row g-10">

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/view-users.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		View Friends	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-viewfriends.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/upgrade-plan.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Upgrade Plan	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-upgradeplan.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/top-up-wallet.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Topup Wallet	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-topupwallet.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/share-earn.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Share & Earn	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-shareandearn.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/select-users.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Select User	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-selectuser.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/bidding.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Place Bid	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-placeyourbid.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/offer-a-deal.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Offer Deal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-offeradeal.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-target.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Target	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-newtarget.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-card.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Card	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-newcard.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-address.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Address	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-newaddress.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/invite-friends.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invite Friend	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-invitefriend.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-project.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Project	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-createproject.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-campaign.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Campaign	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-createcampaign.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-account.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Business Account	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-createbusinessacc.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-app.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-createapp.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/create-api-key.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Api Key	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-createapikey.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/two-factor-authentication.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/modal-2factorauth.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->
	</div>
<!--end::Row-->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_wizards" role="tabpanel">


					<!--begin::Row-->
<div class="row g-10">

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/horizontal.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/wizard-2factorauth.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/horizontal.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Horizontal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/wizard-horizontal.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/vertical.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Vertical	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/wizard-vertical.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->
	</div>
<!--end::Row-->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_search" role="tabpanel">


					<!--begin::Row-->
<div class="row g-10">

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/users.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Users	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/search-users.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/horizontal.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Horizontal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/search-horizontal.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/vertical.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Vertical	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/search-vertical.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/select-location.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Location	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/search-location.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->
	</div>
<!--end::Row-->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_widgets" role="tabpanel">


					<!--begin::Row-->
<div class="row g-10">

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/widgets/charts.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Charts	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/widgets-charts.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/widgets/feeds.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/widgets-feeds.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/widgets/lists.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Lists	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/widgets-lists.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/widgets/mixed.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Mixed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/widgets-mixed.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/widgets/statistics.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statistics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/widgets-stats.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/widgets/tables.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Tables	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/widgets-tables.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->
	</div>
<!--end::Row-->

			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_email-templates" role="tabpanel">


					<!--begin::Row-->
<div class="row g-10">

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/welcome-message.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/email-welcome.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/subscription-confirmed.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscription Confirmed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/email-subscriptionconfirmed.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/reset-password.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Reset Password	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/email-resetpassword.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/card-declined.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Card Declined	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/email-creditcarddeclined.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-1.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 1	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/email-promo1.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-2.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 2	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/email-promo2.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->

		<!--begin::Col-->
		<div class="col-lg-4">

<!--begin::Preview-->
<a
	href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-3.html"
	data-kt-href="true"
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden"
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 3	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/assetsAdmin/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo1/assetsAdmin/media/preview/prebuilts/pages/email-promo3.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->
	</div>
<!--end::Row-->

			</div>
			</div>
	<!--end::Tab content-->
</div>
<!--end::Scroll wrapper-->		</div>
	</div>
	<!--end::Tab content-->
</div>
<!--end::Image view-->
<!--begin::Text view-->
<div class="pt-2 d-none" id="kt_app_engage_prebuilts_view_text">
	<!--begin::Heading-->
	<h1 class="fs-2x text-gray-900 fw-bolder text-center mb-4" id="kt_app_engage_prebuilts_view_text_heading">
		Sitemap
	</h1>
	<!--end::Heading-->

	<!--begin::Wrapper-->
	<div
		id="kt_app_engage_prebuilts_view_text_heading"
		class="hover-scroll-y pe-12 me-n12"
		data-kt-scroll="true"
		data-kt-scroll-height="auto"
		data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text"
		data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
		data-kt-scroll-offset="190px"
	>
								<!--begin::Section-->
			<div class="mb-10 mb-lg-17">

<!--begin::Title-->
<h3 class="text-gray-900 fw-bolder mb-7">
	Layouts
</h3>
<!--end::Title-->

<!--begin::Row-->
<div class="row">

					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">


			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/index.html">
				Metronic Original			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo2/index.html">
				SaaS App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo39/index.html">
				Billing SaaS			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo31/index.html">
				Marketing Automation			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo9/index.html">
				Sales Manager			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo38/index.html">
				Email Marketing			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo30/index.html">
				Sales Tracking App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo6/index.html">
				Time Reporting			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo60/index.html">
				CRM Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo8/index.html">
				Analytics App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo62/index.html">
				Project Scheduler			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo58/index.html">
				Store Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo56/index.html">
				Budgeting App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo34/index.html">
				Finance Analytics			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo27/index.html">
				Databox Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo29/index.html">
				Project Workspace			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->

					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">


			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo57/index.html">
				Billing System			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo3/index.html">
				New Trend			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo36/index.html">
				Digital Marketing			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo20/index.html">
				CRM Software			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo59/index.html">
				Todo App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo55/index.html">
				Backend Console			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo51/index.html">
				Payroll App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo10/index.html">
				Project Grid			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo61/index.html">
				Property Portal			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo52/index.html">
				Site Builder			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo63/index.html">
				Discussion Board			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo40/index.html">
				HR App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo23/index.html">
				Member Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo64/index.html">
				Voice Call App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo35/index.html">
				Traffic Analytics			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo33/index.html">
				Social Campaings			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->

					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">


			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo19/index.html">
				Reports Panel			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo25/index.html">
				User Guiding App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo50/index.html">
				Micro-SaaS App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo32/index.html">
				Delivery Management			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo37/index.html">
				Cloud Suite			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo42/index.html">
				Calendar Workspace			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo5/index.html">
				Support Forum			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo16/index.html">
				Podcast App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo4/index.html">
				Jobs Site			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo53/index.html">
				Healthcare Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo7/index.html">
				HR Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo21/index.html">
				Monochrome App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo24/index.html">
				Helpdesk App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo28/index.html">
				eCommerce App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo44/index.html">
				Recruit Automation			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo11/index.html">
				Finance Planner			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->

					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">


			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo26/index.html">
				Planable App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo22/index.html">
				Media Publisher			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo41/index.html">
				Business Intelligence			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo18/index.html">
				Goal Tracking			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo54/index.html">
				Workspace App			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo15/index.html">
				Crypto Planner			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo14/index.html">
				Project Workplace			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo13/index.html">
				Classic Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo12/index.html">
				Data Analyzer			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo48/index.html">
				Cloud ERP			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo17/index.html">
				Events Scheduler			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo49/index.html">
				KPI Tracking			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo43/index.html">
				Healthcare Dashboard			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo45/index.html">
				OKR Tracking			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo47/index.html">
				Campaign Automation			</a>




			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo46/index.html">
				Audit Board App			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
			</div>
<!--end::Row-->

			</div>
			<!--end::Section-->



								<!--begin::Section-->
			<div class="mb-10 mb-lg-17">

<!--begin::Title-->
<h3 class="text-gray-900 fw-bolder mb-7">
	Dashboards
</h3>
<!--end::Title-->

<!--begin::Row-->
<div class="row">

					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/index.html">
				Multipurpose			</a>




			<a class="fw-6 fw-semibold" href="marketing.html">
				Marketing Dashboard			</a>




			<a class="fw-6 fw-semibold" href="social.html">
				Social Dashboard			</a>




			<a class="fw-6 fw-semibold" href="ecommerce.html">
				eCommerce Dashboard			</a>




			<a class="fw-6 fw-semibold" href="store-analytics.html">
				Store Analytics			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->


					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="logistics.html">
				Logistics			</a>




			<a class="fw-6 fw-semibold" href="delivery.html">
				Delivery			</a>




			<a class="fw-6 fw-semibold" href="online-courses.html">
				Online Courses			</a>




			<a class="fw-6 fw-semibold" href="school.html">
				Hello Tyler			</a>




			<a class="fw-6 fw-semibold" href="crypto.html">
				My Balance: 37,045$			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->


					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="finance-performance.html">
				Finance Performance			</a>




			<a class="fw-6 fw-semibold" href="website-analytics.html">
				Website Analytics			</a>




			<a class="fw-6 fw-semibold" href="bidding.html">
				Bidding Dashboard			</a>




			<a class="fw-6 fw-semibold" href="podcast.html">
				Podcast Dashboard			</a>




			<a class="fw-6 fw-semibold" href="projects.html">
				Projects Dashboard			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->


					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="call-center.html">
				Call Center			</a>




			<a class="fw-6 fw-semibold" href="pos.html">
				POS System			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->

	</div>
<!--end::Row-->

			</div>
			<!--end::Section-->



								<!--begin::Section-->
			<div class="mb-10 mb-lg-17">

			</div>
			<!--end::Section-->


	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Authentication		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/sign-in.html">
						Corporate					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-in.html">
						Creative					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/fancy/sign-in.html">
						Fancy					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-in.html">
						Overlay					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/extended/multi-steps-sign-up.html">
						Multi-Step					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/corporate/two-factor.html">
						Two-Factor					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/password-confirmation.html">
						Password Changed					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/verify-email.html">
						Verify Email					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/welcome.html">
						Welcome					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/coming-soon.html">
						Coming Soon					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/account-deactivated.html">
						Account Deactivated					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-404.html">
						404 Page					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/general/error-500.html">
						505 Page					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Account		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/account/overview.html">
						Overview					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/account/settings.html">
						Settings					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/account/billing.html">
						Billing					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/account/security.html">
						Security					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/account/referrals.html">
						Referrals					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/account/logs.html">
						Logs					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/account/api-keys.html">
						API Keys					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/account/statements.html">
						Statements					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/account/billing.html">
						Billing					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Modals		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/view-users.html">
						View Friends					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/upgrade-plan.html">
						Upgrade Plan					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/top-up-wallet.html">
						Topup Wallet					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/share-earn.html">
						Share & Earn					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/select-users.html">
						Select User					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/bidding.html">
						Place Bid					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/offer-a-deal.html">
						Offer Deal					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-target.html">
						New Target					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-card.html">
						New Card					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/new-address.html">
						New Address					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/general/invite-friends.html">
						Invite Friend					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-project.html">
						Create Project					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-campaign.html">
						Create Campaign					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-account.html">
						Create Business Account					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/create-app.html">
						Create App					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/forms/create-api-key.html">
						Create Api Key					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/modals/wizards/two-factor-authentication.html">
						2 Factor Auth					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Wizards		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/horizontal.html">
						2 Factor Auth					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/horizontal.html">
						Horizontal					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/wizards/vertical.html">
						Vertical					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Search		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/users.html">
						Search Users					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/horizontal.html">
						Search Horizontal					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/vertical.html">
						Search Vertical					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/utilities/search/select-location.html">
						Search Location					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Widgets		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/widgets/charts.html">
						Charts					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/widgets/feeds.html">
						Feeds					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/widgets/lists.html">
						Lists					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/widgets/mixed.html">
						Mixed					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/widgets/statistics.html">
						Statistics					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/widgets/tables.html">
						Tables					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Email Templates		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/welcome-message.html">
						Welcome					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/subscription-confirmed.html">
						Subscription Confirmed					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/reset-password.html">
						Reset Password					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/card-declined.html">
						Card Declined					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-1.html">
						Promotion 1					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-2.html">
						Promotion 2					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/authentication/email/promo-3.html">
						Promotion 3					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - General - User Profile		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/overview.html">
						Profile Overview					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/projects.html">
						User Projects					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/campaigns.html">
						User Campaigns					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/documents.html">
						User Documents					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/followers.html">
						User Followers					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/activity.html">
						User Activity					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - General - Corporate		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/about.html">
						About Us					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/contact.html">
						Contact Us					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/licenses.html">
						License					</a>



					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/team.html">
						Our Team					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/sitemap.html">
						Sitemap					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - General - Social		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/social/feeds.html">
						Activity					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/social/activity.html">
						Feeds					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/social/followers.html">
						Followers					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/social/settings.html">
						Settings					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - General - Others		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/classic.html">
						FAQ Classic					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/faq/extended.html">
						FAQ Extended					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/blog/home.html">
						Blog Home					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->

									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">

					<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/pages/blog/post.html">
						Blog Post					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->



								<!--begin::Section-->
			<div class="">

<!--begin::Title-->
<h3 class="text-gray-900 fw-bolder mb-7">
	Apps
</h3>
<!--end::Title-->

<!--begin::Row-->
<div class="row">

					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/projects/list.html">
				Projects			</a>



			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/products.html">
				Ecommerce			</a>



			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/customers/list.html">
				Customers			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->

					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/subscriptions/list.html">
				Subscriptions			</a>



			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/users/list.html">
				User Management			</a>



			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/create.html">
				Invoices			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->

					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/support-center/overview.html">
				Support Center			</a>



			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/chat/private.html">
				Chat			</a>



			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/calendar.html">
				Calendar			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->

					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">

			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/file-manager/folders.html">
				File Manager			</a>



			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/inbox/listing.html">
				Inbox			</a>



			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/apps/contacts/getting-started.html">
				Contacts			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
			</div>
<!--end::Row-->

			</div>
			<!--end::Section-->



			</div>
	<!--end::Wrapper-->
</div>
<!--end::Text view--->                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Sitemap-->				<!--end::Engage modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i></div>
<!--end::Scrolltop-->

                    <!--begin::Modals-->

<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Upgrade a Plan</h1>

                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                    </div>
                </div>
                <!--end::Heading-->

                <!--begin::Plans-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">
                            Monthly
                        </button>
                        <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">
                            Annual
                        </button>
                    </div>
                    <!--end::Nav group-->

                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                                    39                                                </span>

                                                <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"  value="advanced"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">
                                                    339                                                </span>

                                                <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"  value="enterprise"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                                                                            <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                                    999                                                </span>

                                                <span class="fs-7 opacity-50">/
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"  value="custom"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                    </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size and grown company
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-cross-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                    </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and enterpise
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                    </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Users                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Project Integrations                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                            <!--begin::Item-->
                                                <div class="d-flex align-items-center ">
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Item-->
                                                                                    </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Plans-->

                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">

<!--begin::Indicator label-->
<span class="indicator-label">
    Upgrade Plan</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait.    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan--><!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_new_target_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Set First Target</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check <a href="#" class="fw-bold link-primary">Project Guidelines</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Target Title</span>


<span class="ms-1"  data-bs-toggle="tooltip" title="Specify a target name for future usage and reference" >
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>                        </label>
                        <!--end::Label-->

                        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title"/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Assign</label>

                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
                                <option value="">Select user.</option>
                                <option value="1">Karina Clark</option>
                                <option value="2">Robert Doe</option>
                                <option value="3">Niel Owen</option>
                                <option value="4">Olivia Wild</option>
                                <option value="5">Sean Bean</option>
                            </select>
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Due Date</label>

                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>                                <!--end::Icon-->

                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date"/>
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Target Details</label>

                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details">
                        </textarea>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tags</span>


<span class="ms-1"  data-bs-toggle="tooltip" title="Specify a target priorty" >
	<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>                        </label>
                        <!--end::Label-->

                        <input class="form-control form-control-solid" value="Important, Urgent" name="tags"/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-6 fw-semibold">Adding Users by Team Members</label>

                            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">Notifications</label>

                                <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked"/>

                                    <span class="form-check-label fw-semibold">
                                        Email
                                    </span>
                                </label>
                                <!--end::Checkbox-->

                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone"/>

                                    <span class="form-check-label fw-semibold">
                                        Phone
                                    </span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>

                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait. <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target--><!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>

                    <div class="text-muted fw-semibold fs-5">
                        Invite Collaborators To Your Project
                    </div>
                </div>
                <!--end::Content-->

                <!--begin::Search-->
                <div
                    id="kt_modal_users_search_handler"

                    data-kt-search-keypress="true"
                    data-kt-search-min-length="2"
                    data-kt-search-enter="enter"
                    data-kt-search-layout="inline">

                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden"/>
                        <!--end::Hidden input-->

                        <!--begin::Icon-->
                        <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i>                        <!--end::Icon-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email." data-kt-search-element="input"/>
                        <!--end::Input-->

                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                        <!--end::Spinner-->

                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i>                        </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->

                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
<div data-kt-search-element="suggestions">
    <!--begin::Heading-->
    <h3 class="fw-semibold mb-5">Recently searched:</h3>
    <!--end::Heading-->

    <!--begin::Users-->
    <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="/assetsAdmin/media/avatars/300-6.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                    <span class="badge badge-light">Art Director</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                            M                        </span>
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                    <span class="badge badge-light">Marketing Analytic</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="/assetsAdmin/media/avatars/300-1.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                    <span class="badge badge-light">Software Enginer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="/assetsAdmin/media/avatars/300-5.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                    <span class="badge badge-light">Web Developer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="/assetsAdmin/media/avatars/300-25.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                    <span class="badge badge-light">UI/UX Designer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
            </div>
    <!--end::Users-->
</div>
<!--end::Suggestions-->

<!--begin::Results(add d-none to below element to hide the users list by default)-->
<div data-kt-search-element="results" class="d-none">
    <!--begin::Users-->
    <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-6.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-1.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                        <div class="fw-semibold text-muted">max@kt.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-5.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-25.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                C                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                        <div class="fw-semibold text-muted">mik@pex.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-9.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                O                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                N                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-23.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                E                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-12.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                A                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                        <div class="fw-semibold text-muted">robert@benko.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-13.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                L                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-21.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->

                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                E                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->


            </div>
    <!--end::Users-->

    <!--begin::Actions-->
    <div class="d-flex flex-center mt-15">
        <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">
            Cancel
        </button>

        <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
            Add Selected Users
        </button>
    </div>
    <!--end::Actions-->
</div>
<!--end::Results-->
                        <!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center d-none">
    <!--begin::Message-->
    <div class="fw-semibold py-10">
        <div class="text-gray-600 fs-3 mb-2">No users found</div>

        <div class="text-muted fs-6">Try to search by username, full name or email.</div>
    </div>
    <!--end::Message-->

    <!--begin::Illustration-->
    <div class="text-center px-5">
        <img src="/assetsAdmin/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px"/>
    </div>
    <!--end::Illustration-->
</div>
<!--end::Empty-->                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check out
                        <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bold w-100 mb-8">
                    <img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/media/svg/brand-logos/google-icon.svg" class="h-20px me-3"/>
                    Invite Gmail Contacts
                </div>
                <!--end::Google Contacts Invite-->

                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->

                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">
                </textarea>
                <!--end::Textarea-->

                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                    <!--end::Heading-->

                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-6.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-1.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-5.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-25.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                C                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-9.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                O                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                N                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-23.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                E                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-12.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                A                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-13.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                                L                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-21.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/assetsAdmin/media/avatars/300-23.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                            </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->

                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->

                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked"/>

                        <span class="form-check-label fw-semibold text-muted">
                            Allowed
                        </span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->            <!--end::Modals-->

        <!--begin::Javascript-->
        <script>
            var hostUrl = "https://preview.keenthemes.com/metronic8/demo1/assetsAdmin/";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="/assetsAdmin/plugins/global/plugins.bundle.js"></script>
                            <script src="/assetsAdmin/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->

                    <!--begin::Vendors Javascript(used for this page only)-->
                            <script src="/assetsAdmin/plugins/custom/datatables/datatables.bundle.js"></script>
                            <script src="/assetsAdmin/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/index.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/xy.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/percent.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/radar.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/themes/Animated.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/map.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
                            <script src="////cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
                        <!--end::Vendors Javascript-->

                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="/assetsAdmin/js/widgets.bundle.js"></script>
                            <script src="/assetsAdmin/js/custom/widgets.js"></script>
                            <script src="/assetsAdmin/js/custom/apps/chat/chat.js"></script>
                            <script src="/assetsAdmin/js/custom/utilities/modals/upgrade-plan.js"></script>
                            <script src="/assetsAdmin/js/custom/utilities/modals/new-target.js"></script>
                            <script src="/assetsAdmin/js/custom/utilities/modals/users-search.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
    </body>
    <!--end::Body-->

</html>