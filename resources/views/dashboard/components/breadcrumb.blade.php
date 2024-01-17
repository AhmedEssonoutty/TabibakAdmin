@if (isset($attributes))
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ $attributes['title'] }}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{$attributes['route'] ?? '#'}}">{{ $attributes['pagetitle'] }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ $attributes['title'] }}</li>
                    </ol>
                </div>
            </div>
        </div>
        @include('dashboard.partials.__alerts')
    </div>
    <!-- end page title -->
@endif
