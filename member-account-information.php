<?php
session_start();
include 'engine.php';
?>
<!DOCTYPE html>
<html lang="en" >
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8"/>
        
        <title>COP Nsema Assemblies | Profile</title>
        <meta name="description" content="Latest updates and statistic charts"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src="jquery.min.js"></script>
        <script src="main.js"></script>

      
        <script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Fonts -->

                    <!--begin::Page Vendors Styles(used by this page) -->
                            <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
        
        
        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href="assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
                    <link href="assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

        <link rel="shortcut icon" href="assets/media/logos/cop-kad-pentlogo.jpeg" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >

                   <!-- begin::Page loader -->
	
<!-- end::Page Loader -->        
    	<!-- begin:: Page -->
	<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
	<div class="kt-header-mobile__logo">
		<a href="index.html">
			<img alt="Logo" src="assets/media/logos/logo-2-sm.png"/>
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">
		
		<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
		<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
	</div>
</div>
<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
				<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed "  data-ktheader-minimize="on" >
	<div class="kt-header__top">
		<div class="kt-container">
			<!-- begin:: Brand -->
<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
	<div class="kt-header__brand-logo">
		
	</div> 
	<div class="kt-header__brand-nav">
		<div class="dropdown">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				The Church Of Pentecost - Nsema Assemblies
			</button>
		</div>
	</div>
</div>
<!-- end:: Brand -->			<!-- begin:: Header Topbar -->
<div class="kt-header__topbar">
	<!--begin: Search -->
	<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown kt-hidden-desktop" id="kt_quick_search_toggle">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
			<span class="kt-header__topbar-icon">
				<!--<i class="flaticon2-search-1"></i>-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>			</span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
			<div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
    <form method="get" class="kt-quick-search__form">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
            <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
            <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
       	</div>
    </form>
    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
    </div>
</div>		</div>
	</div>
	<!--end: Search -->

	<!--begin: Quick actions -->

	<!--end: Quick actions -->	

	<!--begin: Quick panel -->
	<div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="left">
		<div class="kt-header__topbar-wrapper">
			<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
				<!--<i class="flaticon2-cube-1"></i>-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
    </g>
</svg>			</span>
		</div>
	</div>
	
	
	<!--begin: User bar -->
	<div class="kt-header__topbar-item kt-header__topbar-item--user">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px" aria-expanded="false">
			<span class="kt-header__topbar-welcome">Hi,</span>
			<span class="kt-header__topbar-username"><!--put the name of the user here--><?php echo GetUserInfo('fname')?></span>
			<!--put the picture of the user here--><img class="" alt="Pic" src="assets/media/users/300_21.jpg">

			<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
		    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden-">S</span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
			<!--begin: Head -->
    <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/media/misc/bg-1.jpg)">
        <div class="kt-user-card__avatar">
            <!--use the image of the user here--><img class="" alt="Pic" src="assets/media/users/300_25.jpg" />
            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
           
        </div>
        <div class="kt-user-card__name">
           <!--the name of the user should be shown here--> <?php echo GetUserInfo('fname').' '.GetUserInfo('lname') ?>
        </div>
        <div class="kt-user-card__badge">
            <span class="btn btn-success btn-sm btn-bold btn-font-md"><!--the number of messages of the user here-->23 messages</span>
        </div>
    </div>
<!--end: Head -->





<div class="kt-notification">
    <a href="custom/apps/user/profile-1/member-overview.html" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-calendar-3 kt-font-success"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                My Profile
            </div>
          
        </div>
    </a>
    <a href="member-messages.html" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-mail kt-font-warning"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                My Messages
            </div>
            <div class="kt-notification__item-time">
                Inbox and tasks
            </div>
        </div>
    </a>
  
    <div class="kt-notification__custom kt-space-between">
        <!--end login session of the user-->
        <a href="../../../../index.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
    </div>
</div>
<!--end: Navigation -->		</div>
	</div>






	<!--end: User bar -->		
</div>
<!-- end:: Header Topbar -->		</div>
	</div>
	<div class="kt-header__bottom">
		<div class="kt-container">
			<!-- begin: Header Menu -->
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

<!-- end: Header Menu -->		</div>
	</div>
</div>
<!-- end:: Header -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
					<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
													<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
			
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
                    <button class="kt-subheader__mobile-toggle" id="kt_subheader_mobile_toggle"><span></span></button>
        
        <h3 class="kt-subheader__title">Profile 1</h3>
        
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
        
        <span class="kt-subheader__desc"><?php echo GetUserInfo('cop')?></span>
        
      
    </div>
    
</div>
<!-- end:: Content Head -->		
	<!-- begin:: Content -->
	<div class="kt-content kt-grid__item kt-grid__item--fluid">
		<!--Begin::App-->
<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
    <!--Begin:: App Aside Mobile Toggle-->
    <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
        <i class="la la-close"></i>
    </button>
    <!--End:: App Aside Mobile Toggle-->

    <!--Begin:: App Aside-->
    <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
        <!--begin:: Widgets/Applications/User/Profile1-->
<div class="kt-portlet kt-portlet--height-fluid-">
    <div class="kt-portlet__head  kt-portlet__head--noborder">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
           
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                <!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-link"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->			</div>
        </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit-y">
        <!--begin::Widget -->
        <div class="kt-widget kt-widget--user-profile-1">
            <div class="kt-widget__head">
                <div class="kt-widget__media">
                    <img src="assets/media/users/100_1.jpg" alt="image">
                </div>
                <div class="kt-widget__content">
                    <div class="kt-widget__section">
                        <a href="#" class="kt-widget__username">
                            <?php echo GetUserInfo('fname').' '.GetUserInfo('lname') ?> 
                            <i class="flaticon2-correct kt-font-success"></i>                       
                        </a>
                        <span class="kt-widget__subtitle">
                           <?php echo GetUserInfo('Occupation') ?>              
                        </span>
                    </div>

                   
                </div>
            </div>
            <div class="kt-widget__body">
                <div class="kt-widget__content">
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">Email:</span>
                        <a href="#" class="kt-widget__data"><?php echo GetUserInfo('email') ?></a>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">Phone:</span>
                        <a href="#" class="kt-widget__data"><?php echo GetUserInfo('contactphone') ?></a>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">Residence:</span>
                        <span class="kt-widget__data"><?php echo GetUserInfo('residence') ?></span>
                    </div>
                </div>
                <div class="kt-widget__items">
                    <a href="member-overview.html" class="kt-widget__item ">
                        <span class="kt-widget__section">
                            <span class="kt-widget__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Bound" points="0 0 24 0 24 24 0 24"/>
        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"/>
        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"/>
    </g>
</svg>                            </span>
                            <span  class="kt-widget__desc">
                                Profile Overview                                                    
                            </span>
                        </span>                        
                    </a>
                    <a  href="member-personal-information.html" class="kt-widget__item ">
                        <span class="kt-widget__section">
                            <span class="kt-widget__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>                            </span>
                            <span class="kt-widget__desc">
                                Personal Information                                                      
                            </span>
                        </span>    
                    </a>
                    <a href="member-account-information.html" class="kt-widget__item kt-widget__item--active">
                        <span class="kt-widget__section">
                            <span class="kt-widget__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
        <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000"/>
    </g>
</svg>                            </span>
                            <span class="kt-widget__desc">
                                Account Information                                                       
                            </span>
                        </spandiv>    
                    </a>
                    <a href="member-change-password.php?id=<?php echo $_SESSION['id'];?>" class="kt-widget__item ">
                        <span class="kt-widget__section">
                            <span class="kt-widget__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"/>
        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3"/>
        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3"/>
    </g>
</svg>                            </span>
                            <span  class="kt-widget__desc">
                                Change Password Credentials                                                      
                            </span>
                        </span> 
                        <span class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--rounded kt-badge--bolder">5</span>                                         
                    </a>
                </div>
            </div>
        </div>
        <!--end::Widget -->
    </div>
</div>
<!--end:: Widgets/Applications/User/Profile1-->

     </div>
    <!--End:: App Aside-->

    <!--Begin:: App Content-->
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Account Information <small>change your account settings</small></h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon2-console"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">Export Tools</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">Print</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">Copy</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">Excel</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="fsub" class="kt-form kt-form--label-right">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Account:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Accounts Number</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
                                                <input name="accnum" class="form-control"  type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                <input name="email" type="text" class="form-control" value="" placeholder="" aria-describedby="basic-addon1">
                                            </div>
                                            <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Language</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <select name="language" class="form-control">
                                                <option>Select Language...</option>
                                                <option value="id">Bahasa Indonesia - Indonesian</option>
                                                <option value="msa">Bahasa Melayu - Malay</option>
                                                <option value="ca">Català - Catalan</option>
                                                <option value="cs">Čeština - Czech</option>
                                                <option value="da">Dansk - Danish</option>
                                                <option value="de">Deutsch - German</option>
                                                <option value="en" selected="">English</option>
                                                <option value="en-gb">English UK - British English</option>
                                                <option value="es">Español - Spanish</option>
                                                <option value="eu">Euskara - Basque (beta)</option>
                                                <option value="fil">Filipino</option>
                                                <option value="fr">Français - French</option>
                                                <option value="ga">Gaeilge - Irish (beta)</option>
                                                <option value="gl">Galego - Galician (beta)</option>
                                                <option value="hr">Hrvatski - Croatian</option>
                                                <option value="it">Italiano - Italian</option>
                                                <option value="hu">Magyar - Hungarian</option>
                                                <option value="nl">Nederlands - Dutch</option>
                                                <option value="no">Norsk - Norwegian</option>
                                                <option value="pl">Polski - Polish</option>
                                                <option value="pt">Português - Portuguese</option>
                                                <option value="ro">Română - Romanian</option>
                                                <option value="sk">Slovenčina - Slovak</option>
                                                <option value="fi">Suomi - Finnish</option>
                                                <option value="sv">Svenska - Swedish</option>
                                                <option value="vi">Tiếng Việt - Vietnamese</option>
                                                <option value="tr">Türkçe - Turkish</option>
                                                <option value="el">Ελληνικά - Greek</option>
                                                <option value="bg">Български език - Bulgarian</option>
                                                <option value="ru">Русский - Russian</option>
                                                <option value="sr">Српски - Serbian</option>
                                                <option value="uk">Українська мова - Ukrainian</option>
                                                <option value="he">עִבְרִית - Hebrew</option>
                                                <option value="ur">اردو - Urdu (beta)</option>
                                                <option value="ar">العربية - Arabic</option>
                                                <option value="fa">فارسی - Persian</option>
                                                <option value="mr">मराठी - Marathi</option>
                                                <option value="hi">हिन्दी - Hindi</option>
                                                <option value="bn">বাংলা - Bangla</option>
                                                <option value="gu">ગુજરાતી - Gujarati</option>
                                                <option value="ta">தமிழ் - Tamil</option>
                                                <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                <option value="th">ภาษาไทย - Thai</option>
                                                <option value="ko">한국어 - Korean</option>
                                                <option value="ja">日本語 - Japanese</option>
                                                <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                                <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Time Zone</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <select name="timezone" class="form-control">
                                                <option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                                <option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                                <option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                                <option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                                <option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                                <option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                                <option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                                <option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                                <option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                                <option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                                <option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                                <option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                <option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                                <option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
                                                <option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                                <option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                                <option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                                <option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                                <option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                                <option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                                <option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                                <option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                                <option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                                <option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                                <option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                                <option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                                <option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                                <option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                                <option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                                <option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                                <option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                                <option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                                <option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                                <option data-offset="0" value="Azores">(GMT) Azores</option>
                                                <option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                                <option data-offset="0" value="UTC">(GMT) UTC</option>
                                                <option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                                <option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                                <option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                                <option data-offset="3600" value="London">(GMT+01:00) London</option>
                                                <option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                                <option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                                <option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                                <option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                                <option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                                <option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                                <option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                                <option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                                <option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                                <option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                                <option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                                <option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                                <option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                                <option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                                <option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                                <option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                                <option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                                <option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                                <option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                                <option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                                <option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                                <option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                                <option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                                <option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                                <option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                                <option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                                <option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                                <option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                                <option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                                <option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                                <option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                                <option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                                <option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                                <option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                                <option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                                <option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                                <option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                                <option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                                <option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                                <option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                                <option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                                <option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                                <option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                                <option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                                <option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                                <option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                                <option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                                <option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                                <option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                                <option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                                <option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                <option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                                <option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                                <option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                                <option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                                <option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                                <option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                                <option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                                <option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                                <option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                                <option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                                <option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                                <option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                                <option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                                <option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                                <option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                                <option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                                <option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                                <option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                                <option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                <option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                                <option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                                <option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                                <option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                <option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                                <option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                                <option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                                <option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                                <option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                                <option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                                <option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                                <option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                                <option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                                <option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                                <option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                                <option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                                <option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                                <option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                                <option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                                <option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                                <option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                                <option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                                <option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                                <option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                                <option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                                <option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                                <option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                                <option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                                <option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                                <option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                                <option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                                <option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                                <option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                            </select>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Security:</h3>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-checkbox-single">
                                                <label class="kt-checkbox">
                                                    <input type="checkbox"> Require personal information to reset your password.
                                                    <span></span>
                                                </label>
                                            </div>
                                            <span class="form-text text-muted">
										For extra security, this requires you to confirm your email or phone number when you reset your password.
										<a href="#" class="kt-link">Learn more</a>.
									</span>
                                        </div>
                                    </div>
                                    <div class="form-group row kt-margin-t-10 kt-margin-b-10">
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-6">

                                            <button id="deact" type="button" class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Deactivate your account ?</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-3 col-xl-3">
                                    </div>
                                    <div class="col-lg-9 col-xl-9">
                                        <button id="update1" type="" class="btn btn-success">Submit</button>&nbsp;
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End:: App Content-->
</div>
<!--End::App--> 	</div>
	<!-- end:: Content -->
</div>											</div>
				</div>

				<!-- begin:: Footer -->
<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
			<div class="kt-footer__top">
			<div class="kt-container">
				<div class="row">
					<div class="col-lg-4">
						<div  class="kt-footer__section">
							<h3 class="kt-footer__title">About</h3>
							<div class="kt-footer__content">
                                    This application  is developed for the Church of Pentecost
                                    Kwadaso Agric District. The three Assemblies:
                                    Emmanuel, Glory and Hope Assemblies
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div  class="kt-footer__section">
							<h3 class="kt-footer__title">Quick Links</h3>
							<div class="kt-footer__content">
								<div class="kt-footer__nav">
                                        <div class="kt-footer__nav-section">
                                                <a href="index.html">News feed</a>
                                                <a href="publications.html">Publications</a>
                                                <a href="https://www.thecophq.org">The Church of Pentecost</a>
                                            </div>
									 
								</div>	
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div  class="kt-footer__section">
							<h3 class="kt-footer__title">Get In Touch</h3>
							<div class="kt-footer__content">
								<form action="#" class="kt-footer__subscribe">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Enter Your Email">
										<div class="input-group-append">
											<button class="btn btn-brand" type="button">Join</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>				
				</div>				
			</div>	
		</div> 	 
		<div class="kt-footer__bottom">
		<div class="kt-container">
			<div class="kt-footer__wrapper">
				<div class="kt-footer__logo">
					<a href="../../../../index.html">
						<img alt="Logo" src="assets/media/logos/logo-2-sm.png">
					</a>		 			 
					<div class="kt-footer__copyright">
						2019&nbsp;&copy;&nbsp;  
						<a href="http://epawebsgh" target="_blank">Epaweb Solutions - Ghana</a>
					</div>
				</div>				 
				<div class="kt-footer__menu">
                    <a href="http://epawebsgh.com/request" target="_blank">Request</a>
					<a href="http://epawebsgh.com/about-us" target="_blank">About Us</a>
					<a href="http://epawebsgh.com/" target="_blank">Epawebs Solutions</a>
				</div>	
			</div>
		</div>	
	</div> 
</div>
<!-- end:: Footer -->			</div>
		</div>
	</div>
	
<!-- end:: Page -->

            <!-- begin::Quick Panel -->
<div id="kt_quick_panel" class="kt-quick-panel">
    <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>

    <div class="kt-quick-panel__nav">
        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
            </li>
        </ul>
    </div>

    <div class="kt-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-line-chart kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been received
                            </div>
                            <div class="kt-notification__item-time">
                                2 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-box-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-chart2 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Application has been approved
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-image-file kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New file has been uploaded
                            </div>
                            <div class="kt-notification__item-time">
                                5 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-bar-chart kt-font-info"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New user feedback received
                            </div>
                            <div class="kt-notification__item-time">
                                8 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                System reboot has been successfully completed
                            </div>
                            <div class="kt-notification__item-time">
                                12 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-favourite kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been placed
                            </div>
                            <div class="kt-notification__item-time">
                                15 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item kt-notification__item--read">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-safe kt-font-primary"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Company meeting canceled
                            </div>
                            <div class="kt-notification__item-time">
                                19 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-psd kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New report has been received
                            </div>
                            <div class="kt-notification__item-time">
                                23 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-download-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Finance report has been generated
                            </div>
                            <div class="kt-notification__item-time">
                                25 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-security kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer comment recieved
                            </div>
                            <div class="kt-notification__item-time">
                                2 days ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                                3 days ago
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                <div class="kt-notification-v2">
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-bell kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                5 new user generated report
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>	
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-box kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                2 new items submited
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                by Grog John
                            </div>
                        </div>	
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-psd kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                79 PSD files generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>	
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-supermarket kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                $2900 worth producucts sold
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Total 234 items
                            </div>
                        </div>	
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-paper-plane-1 kt-font-success"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>	
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-information kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                Database server is down
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                10 mins ago
                            </div>
                        </div>	
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-mail-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                System report has been generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>	
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-hangouts-logo kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>	
                    </a>
                </div>
            </div>
            <div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
                <form class="kt-form">
                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>

                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Notifications:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--success kt-switch--sm">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Case Tracking:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--success kt-switch--sm">
								<label>
									<input type="checkbox"  name="quick_panel_notifications_2">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Support Portal:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--success kt-switch--sm">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>

                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>

                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>

                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Generate Reports:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--danger">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Report Export:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--danger">
								<label>
									<input type="checkbox"  name="quick_panel_notifications_3">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Allow Data Collection:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--danger">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>

                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>

                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>

                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Member singup:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--brand">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--brand">
								<label>
									<input type="checkbox"  name="quick_panel_notifications_5">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Enable Customer Portal:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--brand">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Panel -->    
    <!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->
    <!-- begin::Sticky Toolbar -->
<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
	<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip"  title="Check out more demos" data-placement="right">
		<a href="#" class=""><i class="flaticon2-drop"></i></a>
	</li>
	<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
        		<a href="../../../../builder.html" ><i class="flaticon2-gear"></i></a>
	</li>
	<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
		<a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
	</li>

	<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
		<a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
	</li>
</ul>
<!-- end::Sticky Toolbar -->
	<!-- begin::Demo Panel -->

<div id="kt_demo_panel" class="kt-demo-panel">
	<div class="kt-demo-panel__head">
		<h3 class="kt-demo-panel__title">
			Select A Demo
			<!--<small>5</small>-->
		</h3>
		<a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
	</div>
	<div class="kt-demo-panel__body">
        <div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Default
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo1.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo1/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo1/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item kt-demo-panel__item--active">
                    <div class="kt-demo-panel__item-title">
                        Demo 2
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo2.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="../../../../rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 3
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo3.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo3/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo3/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 4
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo4.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo4/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo4/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 5
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo5.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo5/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo5/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 6
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo6.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo6/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo6/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 7
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo7.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo7/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo7/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 8
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo8.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo8/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo8/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 9
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo9.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo9/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo9/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 10
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo10.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo10/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo10/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 11
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo11.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo11/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo11/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 12
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo12.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="https://keenthemes.com/metronic/preview/demo12/custom/apps/user/profile-1/account-information.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                            <a href="https://keenthemes.com/metronic/preview/demo12/rtl/custom/apps/user/profile-1/account-information.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 13
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo13.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                            
                        </div>
                    </div>                    
                </div><div class="kt-demo-panel__item ">
                    <div class="kt-demo-panel__item-title">
                        Demo 14
                    </div>
                    <div class="kt-demo-panel__item-preview">
                        <img src="assets/media/demos/preview/demo14.jpg" alt=""/>
                        <div class="kt-demo-panel__item-preview-overlay">
                            <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>
                            
                        </div>
                    </div>                    
                </div>
		<a href="https://1.envato.market/EA4JP" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
			Buy Metronic Now!
		</a>
	</div>
</div>
<!-- end::Demo Panel -->	
	

<!--Begin:: Chat-->
<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="kt-chat">
                <div class="kt-portlet kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">Jason Muller</a>
                                    <span class="kt-chat__status">
                                        <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
                                    </span>
                                </div>                                
                            </div>
                            <div class="kt-chat__right">   
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-more-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">
                                                Messaging
                                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-group"></i>
                                                    <span class="kt-nav__link-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                    <span class="kt-nav__link-text">Contacts</span>
                                                    <span class="kt-nav__link-badge">
                                                        <span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                    <span class="kt-nav__link-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                    <span class="kt-nav__link-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                    <span class="kt-nav__link-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__foot">
                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                                
                                <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                    <i class="flaticon2-cross"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
                            <div class="kt-chat__messages kt-chat__messages kt-chat__messages--modal">
                                <div class="kt-chat__message kt-bg-light-success">
                                    <div class="kt-chat__user">
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                            <img src="assets/media/users/100_12.jpg" alt="image">   
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>                                    
                                    <div class="kt-chat__text">
                                        How likely are you to recommend our company<br> to your friends and family?
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-bg-light-brand">
                                    <div class="kt-chat__user">                                
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>                                
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                            <img src="assets/media/users/300_21.jpg" alt="image">   
                                        </span>
                                    </div>                                   
                                    <div class="kt-chat__text">
                                        Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-bg-light-success">
                                    <div class="kt-chat__user">
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                            <img src="assets/media/users/100_12.jpg" alt="image">   
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>                               
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Ok, Understood!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-bg-light-brand">
                                    <div class="kt-chat__user">                                
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>                                
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                            <img src="assets/media/users/300_21.jpg" alt="image">   
                                        </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-bg-light-success">
                                    <div class="kt-chat__user">
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                            <img src="assets/media/users/100_12.jpg" alt="image">   
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>                                    
                                    <div class="kt-chat__text">
                                        You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-bg-light-brand">
                                    <div class="kt-chat__user">                                
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>                                
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                            <img src="assets/media/users/300_21.jpg" alt="image">   
                                        </span>
                                    </div>
                                  
                                    <div class="kt-chat__text">
                                        You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-bg-light-success">
                                    <div class="kt-chat__user">
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                            <img src="assets/media/users/100_12.jpg" alt="image">   
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>                               
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>                                  
                                    <div class="kt-chat__text">
                                        Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-bg-light-brand">
                                    <div class="kt-chat__user">                                
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>                                
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm"> 
                                            <img src="assets/media/users/300_21.jpg" alt="image">   
                                        </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-chat__input">
                            <div class="kt-chat__editor">
                                <textarea placeholder="Type here..." style="height: 50px"></textarea>
                            </div>
                            <div class="kt-chat__toolbar">
                                <div class="kt_chat__tools">
                                    <a href="#"><i class="flaticon2-link"></i></a>
                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                    <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                </div>                           
                                <div class="kt_chat__actions">
                                    <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--ENd:: Chat-->
        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#374afb","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    	<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   <script src="assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
		    	   <script src="assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
				<!--end::Global Theme Bundle -->

         

                    
            <!--begin::Page Scripts(used by this page) -->
                            <script src="assets/js/demo2/pages/dashboard.js" type="text/javascript"></script>
                            <script src="assets/js/demo2/pages/custom/apps/user/profile.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/demo2/custom/apps/user/profile-1/account-information.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 May 2019 08:29:26 GMT -->
</html>