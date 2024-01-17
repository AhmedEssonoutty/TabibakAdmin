@extends('layouts.master')
@section('title')
    Reviews & Ratings
@endsection
@section('Reviews & Ratings')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Reviews & Ratings" pagetitle="Reviews & Ratings" />

    <div class="row" data-masonry='{"percentPosition": true }'>
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-10.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Scott Barber</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">Really don't regret buying it. great job done the design is simply
                        fabulous love your job.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Daniel Owen</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">High theme quality. Very good support, they spent almost an hour
                        remotely to fix a problem. I hope this theme will have a long term support.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Patrick Kelly</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">Very good support and also code works brilliantly and well documented
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Victoria Le</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">Thank you for supporting CakePHP 4, we have purchased the template
                        because of this support, please push forward more integration</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Daniel Mejia</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">Gracias por las correciones que hiceron para esta version 1.4. Ahora
                        definitivamente la calificacion debe ser de 5 estrellas. Excelente trabajo muchachos!</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Nicole Davis</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">We have used your other templates as well and seems it's amazing with
                        the design and code quality. Wish you best for the future updates. Keep updated you will be #1 in
                        near future.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Jessica Thomas</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">This is an incredible framework worth so much in the right hands!
                        Nowhere else are you going to get so much flexibility and great code for a few dollars. Highly
                        recommend purchasing today! Like right now!</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Elizabeth Padilla</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">Good design & good support. Go for it.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Alexis Davidson</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">great product. look forward to the vue and react versions</p>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-9.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Stephen Bird</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">Awesome template with virtually every UI/UX feature functionality
                        required by a front end developer</p>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Kristina Hooper</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">Sin duda la mejor plantilla, fabuloso código y muy excelente diseño, y
                        un excelente soporte que brindan, los recomiendo !!.</p>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt="" class="avatar-sm rounded">
                    <h5 class="mb-2 mt-3">Jacques Leon</h5>
                    <div class="text-warning mb-3">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <p class="mb-0 text-muted fs-15">Works like a component library, a crazy amount of design elements
                        already built and given.</p>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('scripts')
    <!-- Masonry plugin -->
    <script src="{{ URL::asset('assets/libs/masonry-layout/masonry.pkgd.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
