<div>

    <style>
.p-4 p {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.testimonial-item.bg-light.my-4 {
    height: 350px !important;
}
    </style>
@section('title', "web development - Smart Home In Dubai")
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
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
        </div>
        <div class="row g-5">
            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        {!! $service->icon !!}

                    </div>
                    <h4 class="mb-3">{{$service->name_service}}</h4>
                    <p class="m-0">{{$service->small_desc}}</p>

                    <a class="btn btn-lg btn-primary rounded" href="{{ route('service_component', ['name' => urlencode(trim(str_replace(" ",'-',$service->name_service)))]) }}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>


@foreach ($services as $service)
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">{{$service->name_service}}</h5>
        </div>
        <div class="row">
            @foreach ($service->types->shuffle()->take(3) as $type)  <!-- Take only three types -->
                <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-light rounded overflow-hidden" style="height: 500px;">
                        <div class="blog-img position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid" src="{{ asset('user/photos/' . $type->photo) }}" alt="{{$type->desc_1}}" style="width: 100%; height: 100%; object-fit: cover;">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">{{$type->name_type}}</a>
                        </div>
                        <div class="p-4" style="height: 220px;">
                            <p>{{$type->small_desc}}</p>
                            <a class="btn btn-lg btn-primary rounded" href="{{str_replace('%20', '-', route('type_service_component', ['name'=>$service->name_service, 'name_type'=>$type->name_type]))}}">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach
            @if($service->types->count() > 3)
            <div class="col-12 text-center mt-4">
                <a class="btn btn-primary" href="{{route('service_component', ['name' => $service->name_service])}}">View All Types</a>
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
            <h1 class="mb-0">What Our Clients Say About Our  Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                        <h4 class="text-primary mb-1">John Varghese</h4>

                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Excellent, working with MPTS TECH was great.
                    Thanks to his knowledge and determination our website looks great and functions well.

                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <div class="ps-4">
                    <h4 class="text-primary mb-1">Steve Haron</h4>

                </div>
            </div>

                <div class="pt-4 pb-5 px-5">
                    MPTS TECH Company offers low cost web design in Dubai when we purchase pre-built websites. In fact, their price is less than that of a freelance web designer in Dubai.
                    The team really offers affordable and budget web design service for small businesses in UAE as a 500 AED website design company in UAE.
                </div>
            </div>

                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <div class="ps-4">
                            <h4 class="text-primary mb-1">Nancy George</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Everyone in UAE approach as an affordable web design company or budget web design agency and claim as a 700 AED MPTS TECH company.
                        In reality, we ended up with paying more till we met this web design agency that offered low price web design in Dubai.
                    </div>
                </div>

            </div>


        </div>
    </div>

<!-- Testimonial End -->

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Best In Industry</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Award Winning</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{asset('user/img/feature.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Professional Staff</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Team End -->




 <!-- Vendor Start -->

<!-- Vendor End
    <!-- Vendor End -->
</div>
