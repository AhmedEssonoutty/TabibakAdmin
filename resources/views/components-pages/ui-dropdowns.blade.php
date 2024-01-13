@extends('components-layouts.master')
@section('title')
    Dropdowns
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Dropdowns" pagetitle="Base UI" />

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Single Button Dropdown</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>btn</code> class at to create a dropdown
                        toggle with &lt;button&gt; element.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown link
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup" style="height: 310px;">
<code>&lt;!-- Single Button Dropdown --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
    &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        Dropdown button 
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code>

    <code>&lt;div class=&quot;dropdown&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        Dropdown link 
    &lt;/a&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Dropdown Color Variant</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>btn-</code> class with below mentioned variation to color dropdown
                        toggle.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Primary</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Success</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Light</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Info</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Secondary</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Warning</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Danger</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Dark</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                    </div>
                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup" style="height: 310px;"><code>&lt;!-- Dropdown Variant --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Primary&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

    <code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Success&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

    <code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Light&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

    <code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Info&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

    <code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Secondary&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

    <code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Warning&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

    <code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Danger&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

    <code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dark&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- /btn-group --&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Split Button Dropdown</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>dropdown-toggle-split</code> to create split button dropdowns as a
                        single button dropdown. </p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <button type="button" class="btn btn-light">Light</button>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <div class="btn-group">
                            <button type="button" class="btn btn-dark">Dark</button>
                            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                    </div>
                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup" style="height: 310px;">
<code>&lt;!-- Split Button Dropdown --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Light&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- /btn-group --&gt;</code>


<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- /btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- /btn-group --&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Dropdown Sizing</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>btn-lg</code> class to create a large size dropdown button and
                        <code>btn-sm</code> to create a small size dropdown button.
                    </p>
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <!-- Large button groups (default and split) -->
                        <div class="btn-group">
                            <button class="btn btn-primary btn-lg dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Large button
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-light btn-lg" type="button">
                                Large split button
                            </button>
                            <button type="button" class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <!-- Small button groups (default and split) -->
                        <div class="btn-group">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Small button
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-light btn-sm" type="button">
                                Small split button
                            </button>
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup" style="height: 310px;">
<code>&lt;!-- Dropdown Sizing --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button class=&quot;btn btn-primary btn-lg dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
        Large button
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button class=&quot;btn btn-light btn-lg&quot; type=&quot;button&quot;&gt;
        Large split button
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-light dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button class=&quot;btn btn-primary btn-sm dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
        Small button
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button class=&quot;btn btn-light btn-sm&quot; type=&quot;button&quot;&gt;
        Small split button
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Dark Dropdowns</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>dropdown-menu-dark</code> class onto an existing dropdown-menu to
                        create dropdown items dark.</p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item active" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup"><code>&lt;!-- Dark Dropdowns --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
    &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton2&quot; data-bs-toggle=&quot;dropdown&quot;
        aria-expanded=&quot;false&quot;&gt;
        Dropdown button
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu dropdown-menu-dark&quot; aria-labelledby=&quot;dropdownMenuButton2&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item active&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class=&quot;dropdown-divider&quot;&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Alignment options</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Dropdown demo with various <code>dropdown alignment</code> options.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Right-aligned menu
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-display="static" aria-expanded="false">
                                Left-aligned, right-aligned lg
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-display="static" aria-expanded="false">
                                Right-aligned, left-aligned lg
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group dropstart">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropstart
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropend
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropup
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                    </div>

                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup" style="height: 310px;"><code>&lt;!-- Alignment options --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        Dropdown
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        Right-aligned menu
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-display=&quot;static&quot;
        aria-expanded=&quot;false&quot;&gt;
        Left-aligned, right-aligned lg
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu dropdown-menu-lg-end&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-display=&quot;static&quot;
        aria-expanded=&quot;false&quot;&gt;
        Right-aligned, left-aligned lg
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu dropdown-menu-end dropdown-menu-lg-start&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group dropstart&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        Dropstart
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group dropend&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        Dropend
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group dropup&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        Dropup
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Dropdown Options</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>data-bs-offset</code> or
                        <code>data-bs-reference</code> to change the position of the dropdown.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <div class="dropdown me-1">
                            <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                Offset
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">Reference</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-reference="parent">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>

                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup" style="height: 310px;">
<code>&lt;!-- Dropdown Options --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; id=&quot;dropdownMenuOffset&quot;
        data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; data-bs-offset=&quot;10,20&quot;&gt;
        Offset
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuOffset&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Reference&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle dropdown-toggle-split&quot; id=&quot;dropdownMenuReference&quot;
        data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; data-bs-reference=&quot;parent&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuReference&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class=&quot;dropdown-divider&quot;&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Auto Close Behavior</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">By default, the dropdown menu is closed when clicking inside or outside the
                        dropdown menu. You can use the <code>autoClose</code> option to change this behavior of the
                        dropdown.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="btn-group">
                            <button class="btn btn-light dropdown-toggle" type="button" id="defaultDropdown"
                                data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                Default dropdown
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-light dropdown-toggle" type="button"
                                id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside"
                                aria-expanded="false">
                                Clickable outside
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuClickableInside"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Clickable inside
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuClickable"
                                data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                Manual close
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup" style="height: 310px;"><code>&lt;!-- Default dropdown --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button class=&quot;btn btn-light dropdown-toggle&quot; type=&quot;button&quot; id=&quot;defaultDropdown&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
        Default dropdown
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;defaultDropdown&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Clickable outside dropdown --&gt;
    &lt;div class=&quot;btn-group&quot;&gt;
    &lt;button class=&quot;btn btn-light dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuClickableOutside&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;inside&quot; aria-expanded=&quot;false&quot;&gt;
        Clickable outside
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuClickableOutside&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Clickable inside dropdown --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button class=&quot;btn btn-light dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuClickableInside&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;outside&quot; aria-expanded=&quot;false&quot;&gt;
        Clickable inside
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuClickableInside&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Clickable inside dropdown --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button class=&quot;btn btn-light dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuClickable&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;false&quot; aria-expanded=&quot;false&quot;&gt;
        Manual close
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuClickable&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Menu item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Dropdown Menu Item Color</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Example of dropdown menu and dropdown item color.</p>
                    <div class="row">
                        <div class="col-xxl-3">
                            <div>
                                <h6 class="font-size-13 mb-3">Dropdown Menu Success link example
                                </h6>
                                <div class="clearfix">
                                    <div class="dropdown-menu d-inline-block position-relative dropdownmenu-success"
                                        style="z-index: 1;">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item active" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-9">
                            <div class="mt-lg-0 mt-3">
                                <h6 class="font-size-13 mb-0">Dropdown Menu link Color example</h6>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="mt-3">
                                                <p class="font-size-13 mb-2">Dropdown menu Primary link</p>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
                                                    <div class="dropdown-menu dropdownmenu-primary">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- btn-group -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="mt-3">
                                                <p class="font-size-13 mb-2">Dropdown menu Secondary link</p>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">Secondary</button>
                                                    <div class="dropdown-menu dropdownmenu-secondary">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- btn-group -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="mt-3">
                                                <p class="font-size-13 mb-2">Dropdown menu Success link</p>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">Success</button>
                                                    <div class="dropdown-menu dropdownmenu-success">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- btn-group -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="mt-3">
                                                <p class="font-size-13 mb-2">Dropdown menu Warning link</p>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
                                                    <div class="dropdown-menu dropdownmenu-warning">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- btn-group -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="mt-3">
                                                <p class="font-size-13 mb-2">Dropdown menu Info link</p>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">Info</button>
                                                    <div class="dropdown-menu dropdownmenu-info">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- btn-group -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="mt-3">
                                                <p class="font-size-13 mb-2">Dropdown menu Danger link</p>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">Danger</button>
                                                    <div class="dropdown-menu dropdownmenu-danger">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- btn-group -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->

                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup" style="height: 310px;">
<code>&lt;!-- Dropdown Menu Item Color --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Primary&lt;/button&gt;
&lt;div class=&quot;dropdown-menu dropdownmenu-primary&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;&lt;!-- btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Secondary&lt;/button&gt;
&lt;div class=&quot;dropdown-menu dropdownmenu-secondary&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;&lt;!-- btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Success&lt;/button&gt;
&lt;div class=&quot;dropdown-menu dropdownmenu-success&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;&lt;!-- btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Warning&lt;/button&gt;
&lt;div class=&quot;dropdown-menu dropdownmenu-warning&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;&lt;!-- btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Info&lt;/button&gt;
&lt;div class=&quot;dropdown-menu dropdownmenu-info&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;&lt;!-- btn-group --&gt;</code>

<code>&lt;div class=&quot;btn-group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Danger&lt;/button&gt;
&lt;div class=&quot;dropdown-menu dropdownmenu-danger&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;&lt;!-- btn-group --&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
        <!--end col-->
    </div>
    <!--end row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Menu Content</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Example of dropdown menu containing
                        <code>Headers, Text and Forms</code> content.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <!-- Header -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Header
                            </button>
                            <div class="dropdown-menu">
                                <div class="dropdown-header noti-title">
                                    <h5 class="font-size-13 text-muted text-truncate mb-0">Welcome Jessie!</h5>
                                </div>
                                <!-- item-->
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Text
                            </button>
                            <div class="dropdown-menu dropdown-menu-md p-3">
                                <p>
                                    Some example text that's free-flowing within the dropdown menu.
                                </p>
                                <p class="mb-0">
                                    And this is more example text.
                                </p>
                            </div>
                        </div>

                        <!-- Forms -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Forms
                            </button>
                            <div class="dropdown-menu dropdown-menu-md p-4">
                                <form>
                                    <div class="mb-2">
                                        <label class="form-label" for="exampleDropdownFormEmail">Email address</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail"
                                            placeholder="email@example.com">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="exampleDropdownFormPassword">Password</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword"
                                            placeholder="Password">
                                    </div>
                                    <div class="mb-2">
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="rememberdropdownCheck">
                                            <label class="form-check-label" for="rememberdropdownCheck">Remember
                                                me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end card-body -->
                <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                    <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                </div>
                <div class="card-body">
                    <pre class="language-markup" style="height: 310px;"><code>&lt;!-- Menu Content --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
        Header 
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
        &lt;div class=&quot;dropdown-header noti-title&quot;&gt;
            &lt;h5 class=&quot;font-size-13 text-muted text-truncate mn-0&quot;&gt;Welcome Jessie!&lt;/h5&gt;
        &lt;/div&gt;
        &lt;!-- item--&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- text Content --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
        Text 
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu dropdown-menu-md p-3&quot;&gt;
        &lt;p&gt;
            Some example text that's free-flowing within the dropdown menu.
        &lt;/p&gt;
        &lt;p class=&quot;mb-0&quot;&gt;
            And this is more example text.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;!-- Forms Content --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
        Forms 
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu dropdown-menu-md p-4&quot;&gt;
        &lt;form&gt;
            &lt;div class=&quot;mb-2&quot;&gt;
                &lt;label class=&quot;form-label&quot; for=&quot;exampleDropdownFormEmail&quot;&gt;Email address&lt;/label&gt;
                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormEmail&quot; placeholder=&quot;email@example.com&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;mb-2&quot;&gt;
                &lt;label class=&quot;form-label&quot; for=&quot;exampleDropdownFormPassword&quot;&gt;Password&lt;/label&gt;
                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormPassword&quot; placeholder=&quot;Password&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;mb-2&quot;&gt;
                &lt;div class=&quot;form-check custom-checkbox&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;rememberdropdownCheck&quot;&gt;
                    &lt;label class=&quot;form-check-label&quot; for=&quot;rememberdropdownCheck&quot;&gt;Remember me&lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
        &lt;/form&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div><!-- end card -->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

@endsection

@section('scripts')
    <!-- prismjs plugin -->
    <script src="{{ URL::asset('assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
