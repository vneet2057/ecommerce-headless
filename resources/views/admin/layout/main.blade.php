<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="admin/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('admin/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('admin/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('admin/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('admin/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('admin/vendor/js/helpers.js')}}"></script>
    <script src="{{asset('admin/js/config.js')}}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/admin/dashboard" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                                    <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                                    <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                                    <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g id="Path-3" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                </g>
                                                <g id="Path-4" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="/admin/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pages</span>
                    </li>
                    <li class="menu-item">
                        <a href="/admin/categories" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Categories</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/admin/brands" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Brands</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/admin/products" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Products</div>
                        </a>
                    </li>

                    <!-- <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Attributes</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">Account</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Notifications">Notifications</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-connections.html" class="menu-link">
                    <div data-i18n="Connections">Connections</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="auth-login-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Login</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-register-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Register</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Forgot Password</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Misc</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Error</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                  </a>
                </li>
              </ul>
            </li> -->
                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Sales</span></li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Sales</div>
                        </a>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="User interface">User interface</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="ui-accordion.html" class="menu-link">
                                    <div data-i18n="Accordion">Accordion</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-alerts.html" class="menu-link">
                                    <div data-i18n="Alerts">Alerts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-badges.html" class="menu-link">
                                    <div data-i18n="Badges">Badges</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-buttons.html" class="menu-link">
                                    <div data-i18n="Buttons">Buttons</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-carousel.html" class="menu-link">
                                    <div data-i18n="Carousel">Carousel</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-collapse.html" class="menu-link">
                                    <div data-i18n="Collapse">Collapse</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-dropdowns.html" class="menu-link">
                                    <div data-i18n="Dropdowns">Dropdowns</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-footer.html" class="menu-link">
                                    <div data-i18n="Footer">Footer</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-list-groups.html" class="menu-link">
                                    <div data-i18n="List Groups">List groups</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-modals.html" class="menu-link">
                                    <div data-i18n="Modals">Modals</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-navbar.html" class="menu-link">
                                    <div data-i18n="Navbar">Navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-offcanvas.html" class="menu-link">
                                    <div data-i18n="Offcanvas">Offcanvas</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                                    <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-progress.html" class="menu-link">
                                    <div data-i18n="Progress">Progress</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-spinners.html" class="menu-link">
                                    <div data-i18n="Spinners">Spinners</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tabs-pills.html" class="menu-link">
                                    <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-toasts.html" class="menu-link">
                                    <div data-i18n="Toasts">Toasts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tooltips-popovers.html" class="menu-link">
                                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-typography.html" class="menu-link">
                                    <div data-i18n="Typography">Typography</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Extended components -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <div data-i18n="Extended UI">Extended UI</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                                    <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-text-divider.html" class="menu-link">
                                    <div data-i18n="Text Divider">Text Divider</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="icons-boxicons.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-crown"></i>
                            <div data-i18n="Boxicons">Boxicons</div>
                        </a>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Purchase</span></li>
                    <!-- Forms -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Elements">Form Elements</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="forms-basic-inputs.html" class="menu-link">
                                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-input-groups.html" class="menu-link">
                                    <div data-i18n="Input groups">Input groups</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">Form Layouts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="form-layouts-vertical.html" class="menu-link">
                                    <div data-i18n="Vertical Form">Vertical Form</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="form-layouts-horizontal.html" class="menu-link">
                                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Marketing -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Marketing</span></li>
                    <li class="menu-item">
                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
                            <svg class="menu-icon tf-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(105, 122, 141, 1);transform: ;msFilter:;">
                                <path d="M18 8.31c-.36-.41-.73-.82-1.12-1.21l-.29-.27.14-.12a3.15 3.15 0 0 0 .9-3.49A3.91 3.91 0 0 0 14 1v2a2 2 0 0 1 1.76 1c.17.4 0 .84-.47 1.31-.07.08-.15.13-.22.2-3-2.41-6.29-3.77-7.9-2.16a2.16 2.16 0 0 0-.41.59v.1l-.18.53-4.41 13.1A3.28 3.28 0 0 0 5.28 22a3.21 3.21 0 0 0 1-.17L20 17.28a1 1 0 0 0 .43-.31l.21-.18c1.43-1.44.51-4.21-1.41-6.9A6.63 6.63 0 0 1 23 9V7a8.44 8.44 0 0 0-5 1.31zM5.7 19.93a1.29 1.29 0 0 1-1.63-1.63l1.36-4.1a10.7 10.7 0 0 0 4.29 4.39zm7-2.33a8.87 8.87 0 0 1-6.3-6.29l1-3 .06.09c.11.22.25.45.39.68s.16.29.26.44.33.48.51.73.19.28.3.42.43.55.66.82l.29.35c.34.39.7.77 1.08 1.16s.68.64 1 1l.33.28.78.63.37.28c.28.2.55.4.83.58l.31.2c.36.22.72.43 1.07.61h.05zm6.51-2.23h-.06c-.69.38-3.56-.57-6.79-3.81-.34-.34-.66-.67-.95-1l-.29-.35-.53-.64-.29-.4c-.13-.19-.27-.37-.39-.55l-.26-.42-.29-.47c-.08-.14-.14-.27-.21-.4s-.15-.26-.21-.4a3.31 3.31 0 0 1-.14-.36c-.05-.13-.11-.26-.15-.38S8.6 6 8.57 5.88s-.05-.22-.07-.32a2.26 2.26 0 0 1 0-.26 1 1 0 0 1 0-.24l.11-.31c.36-.36 2.23 0 4.73 1.9A4.13 4.13 0 0 1 12 7v2a6.45 6.45 0 0 0 3-.94l.48.46c.42.42.81.85 1.18 1.28a5.32 5.32 0 0 0-.6 3.4l2-.39a3.57 3.57 0 0 1 0-1.12 11.3 11.3 0 0 1 .81 1.45c.56 1.32.52 2.06.34 2.23z"></path>
                            </svg>
                            <div data-i18n="Support">Cupons</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
                            <svg class="menu-icon tf-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(105, 122, 141, 1);transform: ;msFilter:;">
                                <path d="M18 8.31c-.36-.41-.73-.82-1.12-1.21l-.29-.27.14-.12a3.15 3.15 0 0 0 .9-3.49A3.91 3.91 0 0 0 14 1v2a2 2 0 0 1 1.76 1c.17.4 0 .84-.47 1.31-.07.08-.15.13-.22.2-3-2.41-6.29-3.77-7.9-2.16a2.16 2.16 0 0 0-.41.59v.1l-.18.53-4.41 13.1A3.28 3.28 0 0 0 5.28 22a3.21 3.21 0 0 0 1-.17L20 17.28a1 1 0 0 0 .43-.31l.21-.18c1.43-1.44.51-4.21-1.41-6.9A6.63 6.63 0 0 1 23 9V7a8.44 8.44 0 0 0-5 1.31zM5.7 19.93a1.29 1.29 0 0 1-1.63-1.63l1.36-4.1a10.7 10.7 0 0 0 4.29 4.39zm7-2.33a8.87 8.87 0 0 1-6.3-6.29l1-3 .06.09c.11.22.25.45.39.68s.16.29.26.44.33.48.51.73.19.28.3.42.43.55.66.82l.29.35c.34.39.7.77 1.08 1.16s.68.64 1 1l.33.28.78.63.37.28c.28.2.55.4.83.58l.31.2c.36.22.72.43 1.07.61h.05zm6.51-2.23h-.06c-.69.38-3.56-.57-6.79-3.81-.34-.34-.66-.67-.95-1l-.29-.35-.53-.64-.29-.4c-.13-.19-.27-.37-.39-.55l-.26-.42-.29-.47c-.08-.14-.14-.27-.21-.4s-.15-.26-.21-.4a3.31 3.31 0 0 1-.14-.36c-.05-.13-.11-.26-.15-.38S8.6 6 8.57 5.88s-.05-.22-.07-.32a2.26 2.26 0 0 1 0-.26 1 1 0 0 1 0-.24l.11-.31c.36-.36 2.23 0 4.73 1.9A4.13 4.13 0 0 1 12 7v2a6.45 6.45 0 0 0 3-.94l.48.46c.42.42.81.85 1.18 1.28a5.32 5.32 0 0 0-.6 3.4l2-.39a3.57 3.57 0 0 1 0-1.12 11.3 11.3 0 0 1 .81 1.45c.56 1.32.52 2.06.34 2.23z"></path>
                            </svg>
                            <div data-i18n="Support">Banner Ads</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
                            <svg class="menu-icon tf-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(105, 122, 141, 1);transform: ;msFilter:;">
                                <path d="M18 8.31c-.36-.41-.73-.82-1.12-1.21l-.29-.27.14-.12a3.15 3.15 0 0 0 .9-3.49A3.91 3.91 0 0 0 14 1v2a2 2 0 0 1 1.76 1c.17.4 0 .84-.47 1.31-.07.08-.15.13-.22.2-3-2.41-6.29-3.77-7.9-2.16a2.16 2.16 0 0 0-.41.59v.1l-.18.53-4.41 13.1A3.28 3.28 0 0 0 5.28 22a3.21 3.21 0 0 0 1-.17L20 17.28a1 1 0 0 0 .43-.31l.21-.18c1.43-1.44.51-4.21-1.41-6.9A6.63 6.63 0 0 1 23 9V7a8.44 8.44 0 0 0-5 1.31zM5.7 19.93a1.29 1.29 0 0 1-1.63-1.63l1.36-4.1a10.7 10.7 0 0 0 4.29 4.39zm7-2.33a8.87 8.87 0 0 1-6.3-6.29l1-3 .06.09c.11.22.25.45.39.68s.16.29.26.44.33.48.51.73.19.28.3.42.43.55.66.82l.29.35c.34.39.7.77 1.08 1.16s.68.64 1 1l.33.28.78.63.37.28c.28.2.55.4.83.58l.31.2c.36.22.72.43 1.07.61h.05zm6.51-2.23h-.06c-.69.38-3.56-.57-6.79-3.81-.34-.34-.66-.67-.95-1l-.29-.35-.53-.64-.29-.4c-.13-.19-.27-.37-.39-.55l-.26-.42-.29-.47c-.08-.14-.14-.27-.21-.4s-.15-.26-.21-.4a3.31 3.31 0 0 1-.14-.36c-.05-.13-.11-.26-.15-.38S8.6 6 8.57 5.88s-.05-.22-.07-.32a2.26 2.26 0 0 1 0-.26 1 1 0 0 1 0-.24l.11-.31c.36-.36 2.23 0 4.73 1.9A4.13 4.13 0 0 1 12 7v2a6.45 6.45 0 0 0 3-.94l.48.46c.42.42.81.85 1.18 1.28a5.32 5.32 0 0 0-.6 3.4l2-.39a3.57 3.57 0 0 1 0-1.12 11.3 11.3 0 0 1 .81 1.45c.56 1.32.52 2.06.34 2.23z"></path>
                            </svg>
                            <div data-i18n="Support">Popup Ads</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
                            <svg class="menu-icon tf-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(105, 122, 141, 1);transform: ;msFilter:;">
                                <path d="M18 8.31c-.36-.41-.73-.82-1.12-1.21l-.29-.27.14-.12a3.15 3.15 0 0 0 .9-3.49A3.91 3.91 0 0 0 14 1v2a2 2 0 0 1 1.76 1c.17.4 0 .84-.47 1.31-.07.08-.15.13-.22.2-3-2.41-6.29-3.77-7.9-2.16a2.16 2.16 0 0 0-.41.59v.1l-.18.53-4.41 13.1A3.28 3.28 0 0 0 5.28 22a3.21 3.21 0 0 0 1-.17L20 17.28a1 1 0 0 0 .43-.31l.21-.18c1.43-1.44.51-4.21-1.41-6.9A6.63 6.63 0 0 1 23 9V7a8.44 8.44 0 0 0-5 1.31zM5.7 19.93a1.29 1.29 0 0 1-1.63-1.63l1.36-4.1a10.7 10.7 0 0 0 4.29 4.39zm7-2.33a8.87 8.87 0 0 1-6.3-6.29l1-3 .06.09c.11.22.25.45.39.68s.16.29.26.44.33.48.51.73.19.28.3.42.43.55.66.82l.29.35c.34.39.7.77 1.08 1.16s.68.64 1 1l.33.28.78.63.37.28c.28.2.55.4.83.58l.31.2c.36.22.72.43 1.07.61h.05zm6.51-2.23h-.06c-.69.38-3.56-.57-6.79-3.81-.34-.34-.66-.67-.95-1l-.29-.35-.53-.64-.29-.4c-.13-.19-.27-.37-.39-.55l-.26-.42-.29-.47c-.08-.14-.14-.27-.21-.4s-.15-.26-.21-.4a3.31 3.31 0 0 1-.14-.36c-.05-.13-.11-.26-.15-.38S8.6 6 8.57 5.88s-.05-.22-.07-.32a2.26 2.26 0 0 1 0-.26 1 1 0 0 1 0-.24l.11-.31c.36-.36 2.23 0 4.73 1.9A4.13 4.13 0 0 1 12 7v2a6.45 6.45 0 0 0 3-.94l.48.46c.42.42.81.85 1.18 1.28a5.32 5.32 0 0 0-.6 3.4l2-.39a3.57 3.57 0 0 1 0-1.12 11.3 11.3 0 0 1 .81 1.45c.56 1.32.52 2.06.34 2.23z"></path>
                            </svg>
                            <div data-i18n="Support">Product Ads</div>
                        </a>
                    </li>

                    <!-- marketing ends -->


                    <!-- Misc -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Need Help</span></li>
                    <li class="menu-item">
                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div data-i18n="Support">Support</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cog"></i>
                            <div data-i18n="Tables">Settings</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Documentation">Documentation</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button btn btn-danger btn-sm" href="/admin/pos">POS</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{asset('admin/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{asset('admin/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    @yield('content')

                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://hunchhadigital.com" target="_blank" class="footer-link fw-bolder">Hunchha Digital</a>
                            </div>
                            <div>

                                <!-- <a href="https://hunchhadigital.com" target="_blank" class="footer-link me-4">Support</a> -->
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- help chat -->
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "102163025659942");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v16.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- help chat ends -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('admin/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('admin/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('admin/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('admin/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('admin/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('admin/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js')}}"></script>
</body>

</html>