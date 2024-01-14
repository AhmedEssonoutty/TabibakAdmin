<div class="top-tagbar">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4 col-9">
                <div class="fs-14 fw-medium">
                    <i class="bi bi-clock align-middle me-2"></i> <span id="current-time"></span>
                </div>
            </div>
            <div class="col-md-4 col-6 d-none d-xxl-block">
                <div class="d-flex align-items-center justify-content-center gap-3 fs-14 fw-medium">
                    <div>
                        <i class="bi bi-envelope align-middle me-2"></i> support@themesbrand.com
                    </div>
                    <div>
                        <i class="bi bi-globe align-middle me-2"></i> www.themesbrand.com
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-3">
                <div class="d-flex align-items-center justify-content-end gap-3 fs-14">
                    <a href="#!" class="text-reset fw-normal d-none d-lg-block">
                        Balance: <span class="fw-semibold">$8451.36</span>
                    </a>
                    <hr class="vr d-none d-lg-block">
                    <div class="dropdown topbar-head-dropdown topbar-tag-dropdown justify-content-end">
                        <button type="button" class="btn btn-icon btn-topbar text-reset rounded-circle fs-14 fw-medium"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @switch(Session::get('lang'))
                                @case('ru')
                                    <img src="{{ URL::asset('/assets/images/flags/russia.svg') }}" class="rounded-circle me-2"
                                        alt="Header Language" height="16">
                                    <span id="lang-name">русский</span>
                                @break

                                @case('it')
                                    <img src="{{ URL::asset('/assets/images/flags/italy.svg') }}" class="rounded-circle me-2"
                                        alt="Header Language" height="16">
                                    <span id="lang-name">Italiana</span>
                                @break

                                @case('sp')
                                    <img src="{{ URL::asset('/assets/images/flags/spain.svg') }}" class="rounded-circle me-2"
                                        alt="Header Language" height="16">
                                    <span id="lang-name">Española</span>
                                @break

                                @case('ch')
                                    <img src="{{ URL::asset('/assets/images/flags/china.svg') }}" class="rounded-circle me-2"
                                        alt="Header Language" height="16">
                                    <span id="lang-name">中国人</span>
                                @break

                                @case('fr')
                                    <img src="{{ URL::asset('/assets/images/flags/french.svg') }}" class="rounded-circle me-2"
                                        alt="Header Language" height="16">
                                    <span id="lang-name">français</span>
                                @break

                                @case('gr')
                                    <img src="{{ URL::asset('/assets/images/flags/germany.svg') }}" class="rounded-circle me-2"
                                        alt="Header Language" height="16">
                                    <span id="lang-name">Deutsche</span>
                                @break

                                @case('sa')
                                    <img src="{{ URL::asset('/assets/images/flags/sa.svg') }}" class="rounded-circle me-2"
                                        alt="Header Language" height="16">
                                    <span id="lang-name">عربى</span>
                                @break

                                @default
                                    <img src="{{ URL::asset('/assets/images/flags/us.svg') }}" class="rounded-circle me-2"
                                        alt="Header Language" height="16">
                                    <span id="lang-name">English</span>
                            @endswitch
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="{{ url('index/en') }}" class="dropdown-item notify-item language py-2"
                                data-lang="en" title="English">
                                <img src="{{ URL::asset('assets/images/flags/us.svg') }}" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">English</span>
                            </a>

                            <!-- item-->
                            <a href="{{ url('index/sp') }}" class="dropdown-item notify-item language" data-lang="sp"
                                title="Spanish">
                                <img src="{{ URL::asset('assets/images/flags/spain.svg') }}" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">Española</span>
                            </a>

                            <!-- item-->
                            <a href="{{ url('index/gr') }}" class="dropdown-item notify-item language" data-lang="gr"
                                title="German">
                                <img src="{{ URL::asset('assets/images/flags/germany.svg') }}" alt="user-image"
                                    class="me-2 rounded-circle" height="18"> <span
                                    class="align-middle">Deutsche</span>
                            </a>

                            <!-- item-->
                            <a href="{{ url('index/it') }}" class="dropdown-item notify-item language" data-lang="it"
                                title="Italian">
                                <img src="{{ URL::asset('assets/images/flags/italy.svg') }}" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">Italiana</span>
                            </a>

                            <!-- item-->
                            <a href="{{ url('index/ru') }}" class="dropdown-item notify-item language"
                                data-lang="ru" title="Russian">
                                <img src="{{ URL::asset('assets/images/flags/russia.svg') }}" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">русский</span>
                            </a>

                            <!-- item-->
                            <a href="{{ url('index/ch') }}" class="dropdown-item notify-item language"
                                data-lang="ch" title="Chinese">
                                <img src="{{ URL::asset('assets/images/flags/china.svg') }}" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">中国人</span>
                            </a>

                            <!-- item-->
                            <a href="{{ url('index/fr') }}" class="dropdown-item notify-item language"
                                data-lang="fr" title="French">
                                <img src="{{ URL::asset('assets/images/flags/french.svg') }}" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">français</span>
                            </a>
                            <!-- item-->
                            <a href="{{ url('index/sa') }}" class="dropdown-item notify-item language"
                                data-lang="ae" title="Arabic">
                                <img src="{{ URL::asset('assets/images/flags/sa.svg') }}" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">عربى</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
