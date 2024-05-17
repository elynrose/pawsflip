<section class="menu menu1 agencym4_menu1 cid-u1EnoGfbwX" once="menu" id="menu1-5">

	

<nav class="navbar navbar-dropdown beta-menu align-items-center navbar-fixed-top navbar-toggleable-sm" style="background:#000!important;">
    
    <div class="menu-bottom order-0 order-lg-1">
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="/assets/images/logo-342x349.png" alt="ReVamp" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a href="index.html" class="brand-link mbr-white text-white text-primary display-5">{{ $sitename ?? '' }}</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent, #topLine" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown js-float-line" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link mbr-white text-white display-4" href="{{ route('frontend.pets.index') }}"><span class="mbri-smile-face mbr-iconfont mbr-iconfont-btn"></span>&nbsp;My Pets<br></a>
                </li><li class="nav-item"><a class="nav-link link mbr-white text-white display-4" href="{{ route('frontend.service-requests.index') }}"><span class="mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Requests</a></li><li class="nav-item"><a class="nav-link link mbr-white text-white display-4" href="{{ route('frontend.bookings.index') }}"><span class="mdi-notification-event-note mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Bookings</a></li><li class="nav-item"><a class="nav-link link mbr-white text-white display-4" href="index.html#features10-2"><span class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Members<br></a></li><li class="nav-item"><a class="nav-link link mbr-white text-white display-4" href="{{ route('frontend.credits.index') }}"><span class="mbrib-star mbr-iconfont mbr-iconfont-btn"></span>&nbsp;30</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link link mbr-white dropdown-toggle text-white display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Username</a><div class="dropdown-menu"><a class="mbr-white dropdown-item text-white display-4" href="{{ route('frontend.profile.index') }}"><span class="mobi-mbri mobi-mbri-user mbr-iconfont mbr-iconfont-btn"></span>Profile</a><a class="mbr-white dropdown-item text-white display-4" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="mobi-mbri mobi-mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Logout</a></div>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="{{ route('register') }}"><span class="mobi-mbri mobi-mbri-hearth mbr-iconfont mbr-iconfont-btn"></span>Join<br></a></div>
        </div>
    </div>
</nav>
</section>
