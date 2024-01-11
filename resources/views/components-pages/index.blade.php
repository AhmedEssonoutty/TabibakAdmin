@extends('components-layouts.master')
@section('title')
    Overview
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <div class="row justify-content-between align-items-center mt-5">
        <div class="col-lg-5">
            <div class="me-5">
                <div class="mb-2">
                    <span class="badge badge-soft-secondary">Welcome To Toner</span>
                </div>
                <h1 class="display-6 lh-base fw-medium">Components for <span class="text-primary">Fast & Beautiful</span>
                    Admin Template.</h1>
                <p class="lead text-muted mb-4 pb-1">Build whatever you want without a single line of CSS/SASS code by just
                    using our low-level utility classes and base components.</p>
                <div class="d-flex align-items-center gap-4 text-center">
                    <div>
                        <h4><span class="counter-value" data-target="35"></span>+</h4>
                        <p class="text-muted mb-0">Components</p>
                    </div>
                    <div>
                        <h4><span class="counter-value" data-target="20"></span>+</h4>
                        <p class="text-muted mb-0">Plugins</p>
                    </div>
                    <div>
                        <h4><span class="counter-value" data-target="5"></span>k</h4>
                        <p class="text-muted mb-0">Icons</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <img src="{{ URL::asset('assets/images/overview.png') }}" alt="" class="img-fluid" />
        </div>
    </div>

    <div class="row mt-5 pt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-uppercase mb-0">Bootstrap UI</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Alerts</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Provide contextual feedback messages
                                        for typical user actions with the handful of available and flexible alert messages.
                                    </p>
                                    <a href="ui-alerts">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Badges</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Documentation and examples for
                                        badges, our small count and labeling component.</p>
                                    <a href="ui-badges">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Buttons</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Use Bootstrap’s custom button styles
                                        for actions in forms, dialogs, and more with support for multiple sizes, states, and
                                        more.</p>
                                    <a href="ui-buttons">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Colors</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Convey meaning through color with a
                                        handful of color utility classes. Includes support for styling links with hover
                                        states, too.</p>
                                    <a href="ui-colors">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Cards</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Bootstrap’s cards provide a flexible
                                        and extensible content container with multiple variants and options.</p>
                                    <a href="ui-cards">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Carousel</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A slideshow component for cycling
                                        through elements—images or slides of text—like a carousel.</p>
                                    <a href="ui-carousel">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Dropdowns</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">oggle contextual overlays for
                                        displaying lists of links and more with the Bootstrap dropdown plugin.</p>
                                    <a href="ui-dropdowns">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Grid</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Use our powerful mobile-first flexbox
                                        grid to build layouts of all shapes and sizes thanks to a twelve column system, six
                                        default responsive tiers, Sass variables and mixins, and dozens of predefined
                                        classes.</p>
                                    <a href="ui-grid">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Images</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Documentation and examples for opting
                                        images into responsive behavior (so they never become wider than their parent) and
                                        add lightweight styles to them—all via classes.</p>
                                    <a href="ui-images">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Tabs</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Documentation and examples for how to
                                        use Bootstrap’s included navigation components.</p>
                                    <a href="ui-tabs">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Accordion & Collapse</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Build vertically collapsing
                                        accordions in combination with our Collapse JavaScript plugin.</p>
                                    <a href="ui-accordions">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Modals</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Use Bootstrap’s JavaScript modal
                                        plugin to add dialogs to your site for lightboxes, user notifications, or completely
                                        custom content.</p>
                                    <a href="ui-modals">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Offcanvas</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Build hidden sidebars into your
                                        project for navigation, shopping carts, and more with a few classes and our
                                        JavaScript plugin.</p>
                                    <a href="ui-offcanvas">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Placeholders</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Use loading placeholders for your
                                        components or pages to indicate something may still be loading.</p>
                                    <a href="ui-placeholders">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Progress</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Documentation and examples for using
                                        Bootstrap custom progress bars featuring support for stacked bars, animated
                                        backgrounds, and text labels.</p>
                                    <a href="ui-progress">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Notifications</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Push notifications to your visitors
                                        with a toast, a lightweight and easily customizable alert message.</p>
                                    <a href="ui-notifications">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Media object</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Quickly manage the layout,
                                        alignment, and sizing of grid columns, navigation, components, and more with a full
                                        suite of responsive flexbox utilities. For more complex implementations, custom CSS
                                        may be necessary.</p>
                                    <a href="ui-media">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Embed Video</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Use generated pseudo elements to
                                        make an element maintain the aspect ratio of your choosing. Perfect for responsively
                                        handling video or slideshow embeds based on the width of the parent.</p>
                                    <a href="ui-embed-video">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Typography</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Documentation and examples for
                                        Bootstrap typography, including global settings, headings, body text, lists, and
                                        more.</p>
                                    <a href="ui-typography">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Lists</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">List groups are a flexible and
                                        powerful component for displaying a series of content. Modify and extend them to
                                        support just about any content within.</p>
                                    <a href="ui-lists">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">General</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Different examples of
                                        Popovers,Tooltips,Breadcrumb,Pagination and spinners are given for multipurpose
                                        usage.</p>
                                    <a href="ui-general">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Utilities</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">For faster mobile-friendly and
                                        responsive development, Bootstrap includes dozens of utility classes for showing,
                                        hiding, aligning, and spacing content.</p>
                                    <a href="ui-utilities">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-uppercase mb-0">Advance UI</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Sweet Alerts</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A beautiful, responsive,
                                        customizable and accessible (WAI-ARIA) replacement for JavaScript's popup boxes.</p>
                                    <a href="advance-ui-sweetalerts">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Nestable List</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A nestable list consists of the list
                                        itself, its items and the nestable panel.Sortable is a JavaScript library for
                                        reorderable drag-and-drop lists.</p>
                                    <a href="advance-ui-nestable">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Scrollbar</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">The scrollbar plugin provides a nice
                                        scrollbar for BetterScroll.</p>
                                    <a href="advance-ui-scrollbar">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Swiper Slider</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Swiper is the most modern free
                                        mobile touch slider with hardware accelerated transitions and amazing native
                                        behavior. It is intended to be used in mobile websites, mobile web apps, and mobile
                                        native/hybrid apps.</p>
                                    <a href="advance-ui-swiper">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Ratings</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Rating(Rater js) is the best star
                                        rater for the browser. No dependencies. Unlimited number of stars.</p>
                                    <a href="advance-ui-ratings">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Highlight</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Prism is a lightweight, extensible
                                        syntax highlighter, built with modern web standards in mind. It’s used in millions
                                        of websites, including some of those you visit daily.</p>
                                    <a href="advance-ui-highlight">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">ScrollSpy</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Automatically update Bootstrap
                                        navigation or list group components based on scroll position to indicate which link
                                        is currently active in the viewport.</p>
                                    <a href="advance-ui-scrollspy">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-uppercase mb-0">Custom UI <span
                            class="badge badge-pill bg-danger ms-1 align-bottom">Custom</span></h5>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Ribbons</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Ribbons are used to generate
                                        beautiful date ribbons for your posts & articles, animated with CSS3 transitions and
                                        transforms.</p>
                                    <a href="ui-ribbons">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Profile</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Different types of customised user
                                        profile examples are given for demonstration which you can directly use.</p>
                                    <a href="ui-profile">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Counter</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">An animated counter is used to
                                        display the counts in an animation starting from 0 and ending at a specific number.
                                        This is generally used by many websites to make a web page more attractive.</p>
                                    <a href="ui-counter">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-uppercase mb-0">Forms</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Basic Elements</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Form input spin is used to increase
                                        and decrease the number.Various example are shown belows.</p>
                                    <a href="forms-elements">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Form Select</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Choices.js is a vanilla JavaScript
                                        plugin that converts the normal select or input into customizable select inputs with
                                        multi-select and autocomplete support.</p>
                                    <a href="forms-select">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Checkboxs & Radios</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Checkboxes and radio buttons are
                                        elements for making selections. Checkboxes allow the user to choose items from a
                                        fixed number of alternatives, while radio buttons allow the user to choose exactly
                                        one item from a list of several predefined alternatives.</p>
                                    <a href="forms-checkboxs-radios">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Pickers</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">flatpickr is a lightweight and
                                        powerful datetime picker. and Colorpickr: Flat, simple, multi-themed, responsive and
                                        hackable Color-Picker library.</p>
                                    <a href="forms-pickers">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Input Masks</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Cleave.js javaScript library for
                                        formatting input text content when you are typing.</p>
                                    <a href="forms-masks">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Advanced</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A different types of form input
                                        selection methods are given to select element as per your requirements.</p>
                                    <a href="forms-advanced">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Validation</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">JavaScript provides a way to
                                        validate form's data on the client's computer before sending it to the web server.
                                        Form validation generally performs two functions. Basic Validation − First of all,
                                        the form must be checked to make sure all the mandatory fields are filled in.</p>
                                    <a href="forms-validation">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Wizard</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">The wizard is a component used for
                                        multiple layers of user input elements in the web application.</p>
                                    <a href="forms-wizard">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Editors</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Editor is a set of ready-to-use rich
                                        text editors created with a powerful framework. Made with real-time collaborative
                                        editing in mind.</p>
                                    <a href="forms-editors">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">File Uploads</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">File upload that can upload anything
                                        you throw at it, optimizes images for faster uploads, and offers a great,
                                        accessible, silky smooth user experience.</p>
                                    <a href="forms-file-uploads">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Form Layouts</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Web form layout is the way in which
                                        all aspects of your form are arranged and where the form is placed on a given web
                                        page.</p>
                                    <a href="forms-layouts">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Tom Select</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Tom Select is a dynamic, framework
                                        agnostic, and lightweight (~16kb gzipped) UI control. With autocomplete and
                                        native-feeling keyboard navigation, it's useful for tagging, contact lists, country
                                        selectors, and so on.</p>
                                    <a href="forms-tom-select">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-uppercase mb-0">Apexcharts</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Line</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A Line Chart, or a Line Graph, is a
                                        basic type of charts that depicts trends and behaviors over time.</p>
                                    <a href="charts-apex-line">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Area</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">With their mountain-like appearance,
                                        Area Charts are used to represent quantitative variations.</p>
                                    <a href="charts-apex-area">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Column</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A Column Chart is a vertical
                                        graphical representation of different data categories. It visualizes measured values
                                        in rectangular columns or bars plotted along two axes. </p>
                                    <a href="charts-apex-column">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Bar</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Bar Charts (also Bar Graphs) are
                                        among the most common types of charts used for displaying comparisons between
                                        several categories of data and variations of different values. </p>
                                    <a href="charts-apex-bar">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Mixed</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">*Material Design Icons' growing icon
                                        collection allows designers and developers targeting various platforms to download
                                        icons in the format, color and size they need for any project.</p>
                                    <a href="charts-apex-mixed">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Timeline</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">*Material Design Icons' growing icon
                                        collection allows designers and developers targeting various platforms to download
                                        icons in the format, color and size they need for any project.</p>
                                    <a href="charts-apex-timeline">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Candlstick</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A Candlestick Chart (or Candle
                                        Chart) is a type of financial chart that describes the price changes of a security,
                                        derivative, or currency.</p>
                                    <a href="charts-apex-candlestick">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Boxplot</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A Boxplot chart is a visual
                                        representation displaying a given statistical data set based on a five-number
                                        summary: the minimum, the first quartile (25th percent), the median (second
                                        quartile), the third quartile (75th percent), and the maximum.</p>
                                    <a href="charts-apex-boxplot">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Bubble</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">An extension of a scatterplot, a
                                        bubble chart is commonly used to visualize relationships between three or more
                                        numeric variables.</p>
                                    <a href="charts-apex-bubble">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Scatter</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A scatter chart, also called a
                                        scatter plot, is a chart that shows the relationship between two variables. They are
                                        an incredibly powerful chart type, allowing viewers to immediately understand a
                                        relationship or trend, which would be impossible to see in almost any other form.
                                    </p>
                                    <a href="charts-apex-scatter">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Heatmap</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A Heat map chart provides a
                                        graphical summary of information by representing a set of data through variations in
                                        colors.</p>
                                    <a href="charts-apex-heatmap">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Treemap</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A Treemap chart (or Treemap graph)
                                        is a data visualization method that displays hierarchical (tree-structured) data as
                                        a set of nested figures – rectangles.</p>
                                    <a href="charts-apex-treemap">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Pie</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Pie Charts and Donut Charts are
                                        instrumental visualization tools useful in expressing data and information in terms
                                        of percentages, ratios.</p>
                                    <a href="charts-apex-pie">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Radialbar</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A Radial Bar Chart, or Circular
                                        Gauge, is a typical Bar Chart plotted on a polar coordinate system (instead of a
                                        Cartesian plane). It indicates values on a circular numeric scale in terms of
                                        percentage with longer bars indicating larger values.</p>
                                    <a href="charts-apex-radialbar">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Radar</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">The radar chart, also known as
                                        spider chart or web chart is equivalent to a parallel coordinates plot in polar
                                        coordinates.</p>
                                    <a href="charts-apex-radar">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Polar Area</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">A polar chart has a radial y-axis
                                        and a tangential x-axis. Polar coordinate system can be used for bar, line, area,
                                        combination, scatter, and bubble charts.</p>
                                    <a href="charts-apex-polar">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">DESIGN & GRAPHICS</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Bootstrap Icon</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Free, high quality, open source icon
                                        library with over 1,600 icons. Include them anyway you like—SVGs, SVG sprite, or web
                                        fonts. Use them with or without Bootstrap in any project.</p>
                                    <a href="icons-bootstrap">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Remix Icon</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Remix Icon is a set of open-source
                                        neutral-style system symbols elaborately crafted for designers and developers. All
                                        of the icons are free for both personal and commercial use.</p>
                                    <a href="icons-remix">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Boxicons</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Simple Open Source icons carefully
                                        crafted for designers & developers</p>
                                    <a href="icons-boxicons">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Material Design Icon</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Material Design Icons' growing icon
                                        collection allows designers and developers targeting various platforms to download
                                        icons in the format, color and size they need for any project.</p>
                                    <a href="icons-materialdesign">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Phosphor Icon</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Phosphor is a flexible icon family
                                        for interfaces, diagrams, presentations — whatever, really.</p>
                                    <a href="icons-phosphor">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-uppercase mb-0">Tables</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Basic Table</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">The HTML tables are used to present
                                        data in grid manner like row and columns. Using Bootstrap you can greatly improve
                                        the appearance of table in a quick and easy way.You can create tables with basic
                                        styling that has horizontal dividers and small cell padding (8px by default), by
                                        just adding the Bootstrap's class .table to the element.</p>
                                    <a href="tables-basic">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Grid Js</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Grid.js is a Free and open-source
                                        JavaScript table plugin. It works with most JavaScript frameworks.</p>
                                    <a href="tables-gridjs">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">List Js</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">List js is a library for adding
                                        search, sort, filters and flexibility to tables, lists and various HTML elements.
                                    </p>
                                    <a href="tables-listjs">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Datatables</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">DataTables is a plug-in for the
                                        jQuery Javascript library. It is a highly flexible tool, built upon the foundations
                                        of progressive enhancement, that adds all of these advanced features to any HTML
                                        table.</p>
                                    <a href="tables-datatables">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-uppercase mb-0">Maps</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Google</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Google maps library allows you to
                                        use the potential of Google Maps in a simple way. No more extensive documentation or
                                        large amount of code.</p>
                                    <a href="maps-google">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Vector</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Vector js is a lightweight
                                        Javascript library for creating interactive maps and pretty data visualization.</p>
                                    <a href="maps-vector">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h6 class="fs-15">Leaflet</h6>
                                    <p class="text-muted mb-3 text-truncate-two-lines">Leaflet js is an open-source
                                        JavaScript library for mobile-friendly interactive maps.</p>
                                    <a href="maps-leaflet">Read More <i
                                            class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
