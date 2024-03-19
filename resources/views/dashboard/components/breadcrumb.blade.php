@if (isset($attributes))
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0" style="direction:{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <li>
                            <a href="{{$attributes['route'] ?? '#'}}" class="text-dark">{{ $attributes['pagetitle'] }}</a>
                        </li>
                        <span class="px-2">></span>
                        <li class="breadcrumb-item active">{{ $attributes['title'] }}</li>
                    </ol>
                </div>
                <h4 class="mb-sm-0">{{ $attributes['title'] }}</h4>
            </div>
        </div>
        @include('dashboard.partials.__alerts')
    </div>
    <!-- end page title -->
@endif
