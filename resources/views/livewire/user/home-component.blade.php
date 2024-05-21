<div>
    <style>
        .testimonial-item.bg-light.my-4 {
            height: 350px !important;
        }
        .section-title.text-center.position-relative.pb-3.mb-5.mx-auto {
            max-width: 100% !important;
        }
        span.best {
            color: black;
        }
        .card-link {
            display: block;
            color: inherit; /* Maintains the text color */
            text-decoration: none; /* Removes underline */
        }
        h2 {
            color: #06a3da;
        }
        p {
            text-align: justify;
        }
    </style>

    @section('title', "Web Design")
    <livewire:user.items.slider-component />

    <!-- Navbar & Carousel End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Facts Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">The Best <span class="best">Software Company</span> in Dubai</h1>
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            </div>
            <div class="row g-5">
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <a class="card-link" href="{{ route('service_component', ['name' => $service->name_service]) }}">
                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                {!! $service->icon !!}
                            </div>
                            <h4 class="mb-3">{{ $service->name_service }}</h4>
                            <p class="m-0">{{ $service->small_desc }}</p>
                            <div class="btn btn-lg btn-primary rounded">
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Facts End -->

    @foreach ($services as $service)
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ $service->name_service }}</h5>
            </div>
            <div class="row">
                @foreach ($service->types->shuffle()->take(3) as $type)
                <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                    <a href="{{ route('type_service_component', ['name' => $service->name_service, 'name_type' => $type->name_type]) }}">
                        <div class="blog-item bg-light rounded overflow-hidden" style="height: 500px;">
                            <div class="blog-img position-relative overflow-hidden" style="height: 300px;">
                                <img class="img-fluid" src="{{ asset('user/photos/' . $type->photo) }}" alt="{{ $type->desc_1 }}" style="width: 100%; height: 100%; object-fit: cover;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">{{ $type->name_type }}</a>
                            </div>
                            <div class="p-4" style="height: 220px;">
                                <p>{{ $type->desc_3 }}</p>
                                <a class="btn btn-lg btn-primary rounded" href="{{ route('type_service_component', ['name' => $service->name_service, 'name_type' => $type->name_type]) }}">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @if ($service->types->count() > 3)
                <div class="col-12 text-center mt-4">
                    <a class="btn btn-primary" href="{{ route('service_component', ['name' => $service->name_service]) }}">View All Types</a>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach

    <livewire:user.items.smart-home-component />
    <livewire:user.items.horizontalslider-component />

    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h2 class="mb-0">What Our Clients Say About Our Services</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">John Varghese</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Excellent, working with MPTS Tech was great. Thanks to their knowledge and determination, our website looks great and functions well.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Steve Haron</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        MPTS Tech offers low-cost web design in Dubai. Their prices are even lower than those of freelance web designers in Dubai. The team provides affordable and budget-friendly web design services for small businesses in the UAE.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Nancy George</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        We approached MPTS Tech as an affordable web design company in Dubai. Their services are reasonably priced and of high quality, making them a great choice for budget-conscious businesses in the UAE.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Why Choose Us Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h2 class="mb-0">We Are Here to Grow Your Business Exponentially</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Best In Industry</h4>
                            <p class="mb-0">Our expertise and innovative solutions set us apart as the best in the industry.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Award Winning</h4>
                            <p class="mb-0">We have received numerous awards for our exceptional services and solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('user/img/feature.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Professional Staff</h4>
                            <p class="mb-0">Our team of professionals is dedicated to delivering top-notch services to our clients.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">We provide round-the-clock support to ensure your business operations run smoothly.</p>
                        </div>
                    </div>
                </div>
            </div>
            <livewire:user.items.seo-pargraph />
        </div>
    </div>
    <!-- Why Choose Us End -->

</div>
