<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="#" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="26">
            </span>
        </a>
        <a href="#" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="24">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="24">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">{{ __('t-menu') }}</span></li>
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" @class(['nav-link', 'menu-link', 'active' => request()->routeIs('dashboard')])>
                        <i class="bi bi-speedometer2"></i>
                        <span data-key="t-dashboard">{{ __('t-dashboard') }}</span>
                        <span class="badge badge-pill badge-soft-danger" data-key="t-hot">{{ __('t-hot') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('overview')}}" @class(['nav-link', 'menu-link', 'active' => request()->routeIs('overview')])>
                        <i class="bi bi-book"></i>
                        <span data-key="t-dashboard">{{ __('t-overview') }}</span>
                    </a>
                </li>

                @if(auth()->user()->can('read-role') || auth()->user()->can('view-all-role'))
                <li class="nav-item">
                    <a href="{{route('roles.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('roles.index', 'roles.create', 'roles.edit')])>
                        <i class="bi bi-sign-stop"></i>
                        <span data-key="t-dashboard">{{ __('messages.roles') }}</span>
                    </a>
                </li>
                @endif

                @if(auth()->user()->can('read-user') || auth()->user()->can('view-all-user'))
                <li class="nav-item">
                    <a href="{{route('users.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('users.index', 'users.create', 'users.edit')])>
                        <i class="bi bi-person"></i>
                        <span data-key="t-dashboard">{{ __('messages.users') }}</span>
                    </a>
                </li>
                @endif

                @if(auth()->user()->can('read-academic-degree') || auth()->user()->can('view-all-academic-degree'))
                <li class="nav-item">
                    <a href="{{route('academic-degrees.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('academic-degrees.index', 'academic-degrees.create',
                     'academic-degrees.edit')])>
                        <i class="bi bi-book"></i>
                        <span data-key="t-dashboard">{{ __('messages.academic_degrees') }}</span>
                    </a>
                </li>
                @endif

                @if(auth()->user()->can('read-medical-speciality') || auth()->user()->can('view-all-medical-speciality'))
                    <li class="nav-item">
                        <a href="{{route('medical-specialities.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('medical-specialities.index', 'medical-specialities.create',
                     'medical-specialities.edit')])>
                            <i class="bi bi-journal-medical"></i>
                            <span data-key="t-dashboard">{{ __('messages.medical_specialities') }}</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->can('read-vendor-service') || auth()->user()->can('view-all-vendor-service'))
                    <li class="nav-item">
                        <a href="{{route('vendor-services.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('vendor-services.index', 'vendor-services.create',
                     'vendor-services.edit')])>
                            <i class="bi bi-box-seam-fill"></i>
                            <span data-key="t-dashboard">{{ __('messages.vendor_services') }}</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->can('read-patient') || auth()->user()->can('view-all-patient'))
                    <li class="nav-item">
                        <a href="{{route('patients.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('patients.index', 'patients.create',
                     'patients.edit')])>
                            <i class="bi bi-person-circle"></i>
                            <span data-key="t-dashboard">{{ __('messages.patients') }}</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->can('read-doctor') || auth()->user()->can('view-all-doctor'))
                    <li class="nav-item">
                        <a href="{{route('doctors.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('doctors.index', 'doctors.create',
                     'doctors.edit')])>
                            <i class="bi bi-journal-plus"></i>
                            <span data-key="t-dashboard">{{ __('messages.doctors') }}</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->can('read-vendor') || auth()->user()->can('view-all-vendor'))
                    <li class="nav-item">
                        <a href="{{route('vendors.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('vendors.index', 'vendors.create',
                     'vendors.edit')])>
                            <i class="bi bi-shop"></i>
                            <span data-key="t-dashboard">{{ __('messages.vendors') }}</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->can('read-article') || auth()->user()->can('view-all-article'))
                    <li class="nav-item">
                        <a href="{{route('articles.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('articles.index', 'articles.create', 'articles.edit')])>
                            <i class="bi bi-postcard"></i>
                            <span data-key="t-dashboard">{{ __('messages.articles') }}</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->can('read-faq') || auth()->user()->can('view-all-faq'))
                    <li class="nav-item">
                        <a href="{{route('faqs.index')}}" @class(['nav-link', 'menu-link',
                    'active' => request()->routeIs('faqs.index', 'faqs.create', 'faqs.edit')])>
                            <i class="bi bi-question-octagon"></i>
                            <span data-key="t-dashboard">{{ __('messages.faqs') }}</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
