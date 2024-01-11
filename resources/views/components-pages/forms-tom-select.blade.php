@extends('components-layouts.master')
@section('title')
    Tom Select
@endsection
@section('css')
    <!-- add extra css -->
    <link href="{{ URL::asset('assets/libs/tom-select/tom-select.bootstrap5.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Tom Select" pagetitle="Forms" />

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-lg-0">Custom Option and Item HTML</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">This example provides a simple demonstration of how to override the default
                        templates for options and items along with proper use of the <code>escape()</code> method.</p>
                    <div>
                        <select id="select-links" multiple placeholder="Pick some links..."></select>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-markup" style="height: 250px;"><code>&lt;select id=&quot;select-links&quot; multiple placeholder=&quot;Pick some links...&quot;&gt;&lt;/select&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">Javascript Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-js" style="height: 250px;"><code>new TomSelect('#select-links', {
    valueField: 'id',
    searchField: 'title',
    options: [
    { id: 1, title: 'DIY', url: 'https://diy.org' },
    { id: 2, title: 'Google', url: 'http://google.com' },
    { id: 3, title: 'Yahoo', url: 'http://yahoo.com' },
    ],
    render: {
    option: function (data, escape) {
        return '<div>' +
            '<span class="title">' + escape(data.title) + '</span>' +
            '<span class="url">' + escape(data.url) + '</span>' +
            '</div>';
        },
        item: function (data, escape) {
            return '<div title="' + escape(data.url) + '">' + escape(data.title) + '</div>';
        }
    }
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-lg-0">Email Contacts</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">An example showing how you might go about creating contact selector like those
                        used in Email apps.</p>
                    <div>
                        <select id="select-to" class="contacts" placeholder="Pick some people..."></select>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-markup" style="height: 250px;"><code>&lt;select id=&quot;select-to&quot; class=&quot;contacts&quot; placeholder=&quot;Pick some people...&quot;&gt;&lt;/select&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">Javascript Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-js" style="height: 250px;"><code>var REGEX_EMAIL = '([a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@' +
    '(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)';

var formatName = function (item) {
    return ((item.first || '') + ' ' + (item.last || '')).trim();
};

new TomSelect('#select-to', {
    persist: false,
    maxItems: null,
    valueField: 'email',
    labelField: 'name',
    searchField: ['first', 'last', 'email'],
    sortField: [
        { field: 'first', direction: 'asc' },
        { field: 'last', direction: 'asc' }
    ],
    options: [
        { email: 'nikola@tesla.com', first: 'Nikola', last: 'Tesla' },
        { email: 'brian@thirdroute.com', first: 'Brian', last: 'Reavis' },
        { email: 'someone@gmail.com' },
        { email: 'example@gmail.com' },
    ],
    render: {
        item: function (item, escape) {
            var name = formatName(item);
            return '<div>' +
                (name ? '<span class="name">' + escape(name) + '</span>' : '') +
                (item.email ? '<span class="email">' + escape(item.email) + '</span>' : '') +
                '</div>';
        },
        option: function (item, escape) {
            var name = formatName(item);
            var label = name || item.email;
            var caption = name ? item.email : null;
            return '<div>' +
                '<span class="label">' + escape(label) + '</span>' +
                (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                '</div>';
        }
    },
    createFilter: function (input) {
        var regexpA = new RegExp('^' + REGEX_EMAIL + '$', 'i');
        var regexpB = new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i');
        return regexpA.test(input) || regexpB.test(input);
    },
    create: function (input) {
        if ((new RegExp('^' + REGEX_EMAIL + '$', 'i')).test(input)) {
            return { email: input };
        }
        var match = input.match(new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i'));
        if (match) {
            var name = match[1].trim();
            var pos_space = name.indexOf(' ');
            var first = name.substring(0, pos_space);
            var last = name.substring(pos_space + 1);

            return {
                email: match[2],
                first: first,
                last: last
            };
        }
        alert('Invalid email address.');
        return false;
    }
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-lg-0">Browser Defaults Validation</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">Browsers will prevent users from submitting this form unless the <code>&lt;select
                            required&gt;</code> field has a value. Your browser may display a message along the lines of
                        "Please fill out this field" when trying to submit the form.</p>
                    <div>
                        <form>
                            <select id="select-person" placeholder="Select a person..." required>
                                <option value="">Select a person...</option>
                                <option value="4">Thomas Edison</option>
                                <option value="1">Nikola</option>
                                <option value="3">Nikola Tesla</option>
                                <option value="5">Arnold Schwarzenegger</option>
                            </select>
                            <div class="py-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-markup" style="height: 250px;"><code>&lt;form&gt;
    &lt;select id=&quot;select-person&quot; placeholder=&quot;Select a person...&quot; required&gt;
        &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class=&quot;py-3&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">Javascript Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-js" style="height: 250px;"><code>// Browser Defaults
new TomSelect('#select-person', {
    create: true,
    sortField: {
        field: 'text',
        direction: 'asc'
    }
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-lg-0">Bootstrap Validation</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">With a few changes, you can enhance your communication with features provided by
                        frameworks like Bootstrap.</p>
                    <div>
                        <form id="bootstrap-form" novalidate>
                            <select class="form-select" id="select-bootstrap" required placeholder="Select a person..."
                                name="beast">
                                <option value="">Select a person...</option>
                                <option value="4">Thomas Edison</option>
                                <option value="1">Nikola</option>
                                <option value="3">Nikola Tesla</option>
                                <option value="5">Arnold Schwarzenegger</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a person
                            </div>
                            <div class="py-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-markup" style="height: 250px;"><code>&lt;form id=&quot;bootstrap-form&quot; novalidate&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;select-bootstrap&quot; required placeholder=&quot;Select a person...&quot; name=&quot;beast&quot;&gt;
        &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;  
    &lt;/select&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;
        Please select a person
    &lt;/div&gt;
    &lt;div class=&quot;py-3&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">Javascript Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-js" style="height: 250px;"><code>//bootstrap validation
var my_select = new TomSelect('#select-bootstrap');

// Example starter JavaScript for disabling form submissions if there are invalid fields
var form = document.getElementById('bootstrap-form')
form.addEventListener('submit', function (event) {

    // add was-validated to display custom colors
    form.classList.add('was-validated')

    if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
    }

}, false)</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-lg-0">Pattern Attribute</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">With a few changes, you can enhance your communication with features provided by
                        frameworks like Bootstrap.</p>
                    <div>
                        <form>
                            <input id="pattern" required pattern="[a-z]+">
                            <div class="py-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-markup" style="height: 250px;"><code>&lt;form id=&quot;bootstrap-form&quot; novalidate&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;select-bootstrap&quot; required placeholder=&quot;Select a person...&quot; name=&quot;beast&quot;&gt;
        &lt;option value=&quot;&quot;&gt;Select a person...&lt;/option&gt;
        &lt;option value=&quot;4&quot;&gt;Thomas Edison&lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;Nikola&lt;/option&gt;
        &lt;option value=&quot;3&quot;&gt;Nikola Tesla&lt;/option&gt;
        &lt;option value=&quot;5&quot;&gt;Arnold Schwarzenegger&lt;/option&gt;  
    &lt;/select&gt;
    &lt;div class=&quot;invalid-feedback&quot;&gt;
        Please select a person
    &lt;/div&gt;
    &lt;div class=&quot;py-3&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">Javascript Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-js" style="height: 250px;"><code>//bootstrap validation
var my_select = new TomSelect('#select-bootstrap');

// Example starter JavaScript for disabling form submissions if there are invalid fields
var form = document.getElementById('bootstrap-form')
form.addEventListener('submit', function (event) {

    // add was-validated to display custom colors
    form.classList.add('was-validated')

    if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
    }

}, false)</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-lg-0">Data-* Attributes</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">Images can be added to option and item elements with custom render templates and
                        data-* attributes</p>
                    <div>
                        <select class="data-attr">
                            <option value="chrome"
                                data-src="https://cdn1.iconfinder.com/data/icons/logotypes/32/chrome-32.png">Google Chrome
                            </option>
                            <option value="ffox"
                                data-src="https://cdn0.iconfinder.com/data/icons/flat-round-system/512/firefox-32.png">
                                Mozilla Firefox</option>
                            <option value="ie"
                                data-src="https://cdn0.iconfinder.com/data/icons/flat-round-system/512/internet_explorer-32.png">
                                Internet Explorer</option>
                        </select>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-markup" style="height: 250px;"><code>&lt;select id=&quot;data-attr&quot;&gt;
    &lt;option value=&quot;chrome&quot; data-src=&quot;https://cdn1.iconfinder.com/data/icons/logotypes/32/chrome-32.png&quot;&gt;Google Chrome&lt;/option&gt;
    &lt;option value=&quot;ffox&quot; data-src=&quot;https://cdn0.iconfinder.com/data/icons/flat-round-system/512/firefox-32.png&quot;&gt;Mozilla Firefox&lt;/option&gt;
    &lt;option value=&quot;ie&quot; data-src=&quot;https://cdn0.iconfinder.com/data/icons/flat-round-system/512/internet_explorer-32.png&quot;&gt;Internet Explorer&lt;/option&gt;
&lt;/select&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">Javascript Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-js" style="height: 250px;"><code>new TomSelect('#data-attr',{
    render: {
        option: function (data, escape) {
            return `&lt;div&gt;&lt;img class=&quot;me-2&quot; src=&quot;${data.src}&quot;&gt;${data.text}&lt;/div&gt;`;
        },
        item: function (item, escape) {
            return `&lt;div&gt;&lt;img class=&quot;me-2&quot; src=&quot;${item.src}&quot;&gt;${item.text}&lt;/div&gt;`;
        }
    }
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-lg-0">Flag Lists</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <p class="text-muted">*Images can be added to option and item elements with custom render templates and
                        data-* attributes</p>
                    <div>
                        <select class="data-flag">
                            <option value="Ascension Island" data-src="{{ URL::asset('assets/images/flags/ac.svg') }}">Ascension Island
                            </option>
                            <option value="Andorra" data-src="{{ URL::asset('assets/images/flags/ad.svg') }}">Andorra</option>
                            <option value="United Arab Emirates" data-src="{{ URL::asset('assets/images/flags/ae.svg') }}">United Arab
                                Emirates</option>
                            <option value="Afghanistan" data-src="{{ URL::asset('assets/images/flags/af.svg') }}">Afghanistan</option>
                            <option value="Antigua and Barbuda" data-src="{{ URL::asset('assets/images/flags/ag.svg') }}">Antigua and Barbuda
                            </option>
                            <option value="Anguilla" data-src="{{ URL::asset('assets/images/flags/ai.svg') }}">Anguilla</option>
                            <option value="Armenia" data-src="{{ URL::asset('assets/images/flags/am.svg') }}">Armenia</option>
                            <option value="Angola" data-src="{{ URL::asset('assets/images/flags/ao.svg') }}">Angola</option>
                            <option value="Antarctica" data-src="{{ URL::asset('assets/images/flags/aq.svg') }}">Antarctica</option>
                            <option value="Argentina" data-src="{{ URL::asset('assets/images/flags/ar.svg') }}">Argentina</option>
                            <option value="American Samoa" data-src="{{ URL::asset('assets/images/flags/as.svg') }}">American Samoa</option>
                            <option value="Austria" data-src="{{ URL::asset('assets/images/flags/at.svg') }}">Austria</option>
                            <option value="Australia" data-src="{{ URL::asset('assets/images/flags/au.svg') }}">Australia</option>
                        </select>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">HTML Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-markup" style="height: 250px;"><code>&lt;select id=&quot;data-flag&quot;&gt;
    &lt;option value=&quot;Ascension Island&quot; data-src=&quot;assets/images/flags/ac.svg&quot;&gt;Ascension Island&lt;/option&gt;
    &lt;option value=&quot;Andorra&quot; data-src=&quot;assets/images/flags/ad.svg&quot;&gt;Andorra&lt;/option&gt;
    &lt;option value=&quot;United Arab Emirates&quot; data-src=&quot;assets/images/flags/ae.svg&quot;&gt;United Arab Emirates&lt;/option&gt;
    &lt;option value=&quot;Afghanistan&quot; data-src=&quot;assets/images/flags/af.svg&quot;&gt;Afghanistan&lt;/option&gt;
&lt;/select&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body bg-light border-bottom border-top bg-opacity-25">
                            <h5 class="fs-12 text-muted mb-0">Javascript Preview</h5>
                        </div>
                        <div class="card-body">
                            <pre class="language-js" style="height: 250px;"><code>new TomSelect('.data-flag', {
    render: {
        option: function (data, escape) {
            return `&lt;div&gt;&lt;img class=&quot;me-2 avatar-xxs rounded&quot; src=&quot;${data.src}&quot;&gt;${data.text}&lt;/div&gt;`;
        },
        item: function (item, escape) {
            return `&lt;div&gt;&lt;img class=&quot;me-2 avatar-xxs rounded&quot; src=&quot;${item.src}&quot;&gt;${item.text}&lt;/div&gt;`;
        }
    }
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@section('scripts')
    <!-- prismjs plugin -->
    <script src="{{ URL::asset('assets/libs/prismjs/prism.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/tom-select/tom-select.complete.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/tom-select/remove_button.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/tom-select.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
