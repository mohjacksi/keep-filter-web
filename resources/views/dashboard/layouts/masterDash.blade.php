<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title> لوحه التحكم | @yield('title')</title>
    <meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->

    <link href="{{ asset('dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('dashboard/assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('dashboard/assets/css/themes/layout/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/themes/layout/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/themes/layout/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/themes/layout/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link href="{{ asset('dashboard/assets/media/logos/favicon.ico') }}" rel="stylesheet" type="text/css" />
    <style>@import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap');body{font-family: 'Tajawal', sans-serif;}</style>
    @yield('css')
    
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="{{route('dashboard')}}">
            <img alt="Logo" src="{{ asset('frontArea/images/logo.png') }}" height="50px" width="75" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <a href="{{route('dashboard')}}" class="brand-logo">
                        <img alt="Logo" src="{{ asset('frontArea/images/logo.png') }}" height="50px" width="70px" style="margin:auto" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                    <!--begin::Menu Container-->
                    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                        <!--begin::Menu Nav-->
                        <ul class="menu-nav">

                            

                            {{-- general area Start --}}
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<i class="fas fa-asterisk"></i>
											<!--end::Svg Icon-->
										</span>
                                    <span class="menu-text">{{-- {{auth()->user()->name}} --}}  Auth Username Here</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item menu-item-parent" aria-haspopup="true">

                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="{{-- {{route('welcome')}} --}}" target="_blank" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
                                                <span class="menu-text">##</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- general area --}}

                            {{-- Users area Start --}}
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<i class="fa fa-users"></i>
											<!--end::Svg Icon-->
										</span>
                                    <span class="menu-text">المستخدمين</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item menu-item-parent" aria-haspopup="true">

                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="{{route('users.index')}}" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
                                                <span class="menu-text">عرض المستخدمين</span>
                                            </a>
                                        </li>

                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="{{route('admin.index')}}" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
                                                <span class="menu-text">عرض المشرفين</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            {{-- Users area --}}

                            {{-- Products area Start --}}
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<i class="fab fa-product-hunt"></i>
											<!--end::Svg Icon-->
										</span>
                                    <span class="menu-text">المنتجات</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item menu-item-parent" aria-haspopup="true">

                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="{{route('products.index')}}" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
                                                <span class="menu-text">عرض المنتجات</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- Products area --}}
                            
                            {{-- Categories Start --}}
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<i class="fas fa-layer-group"></i>
											<!--end::Svg Icon-->
										</span>
                                    <span class="menu-text">الاقسام</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item menu-item-parent" aria-haspopup="true">

                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="{{route('car_category.index')}}" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
                                                <span class="menu-text">السيارات</span>
                                            </a>
                                        </li>

                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="{{route('type_category.index')}}" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
                                                <span class="menu-text">نوع المنتج</span>
                                            </a>
                                        </li>

                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="{{route('filter_category.index')}}" class="menu-link menu-toggle">
                                                <i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
                                                <span class="menu-text">اقسام الفلاتر</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            {{-- Categories End --}}
                        </ul>
                        <!--end::Menu Nav-->
                    </div>
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper" style="padding-top: 5px;" >
                <!--begin::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Dashboard-->
                                @yield('content')
                            <!--end::Dashboard-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2021©</span>
                            <a href="#" target="_blank" class="text-dark-75 text-hover-primary">{{config('app.name')}}</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Nav-->
                        <div class="nav nav-dark">
                            <a href="#" target="_blank" class="nav-link pl-0 pr-5">quick link</a>
                            {{-- <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a> --}}
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
   
    
  
 

    <!--end::Demo Panel-->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ URL::asset('dashboard/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ URL::asset('dashboard/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ URL::asset('dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ URL::asset('dashboard/assets/js/pages/widgets.js') }}"></script>
    <!--end::Page Scripts-->
    @yield('js')
    

</body>
<!--end::Body-->

</html>