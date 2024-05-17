<div>
    <style>
        /* Custom styles for additional responsiveness */
        .blog-detail img {
            max-width: 100%;
            height: auto;
        }
        p {
    text-align: justify;
}
        @media (max-width: 768px) {
            .blog-detail h1 {
                font-size: 1.75rem;
            }

            .blog-detail p {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .blog-detail h1 {
                font-size: 1.5rem;
            }

            .blog-detail p {
                font-size: 0.875rem;
            }
        }
    </style>

    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8 blog-detail">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ asset('user/photos/' . $blog->photo) }}" alt="">
                    <h1 class="mb-4">{{ $blog->question }}</h1>
                    <p>{{ $blog->answer }}</p>
                </div>
            </div>
            <div class="col-lg-4">

                <!-- Category Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Categories</h3>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        @foreach ($services as $service )
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('service_component',['name'=>$service->name_service])}}"
                            ><i class="bi bi-arrow-right me-2"></i>{{$service->name_service}}</a>
                        @endforeach

                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Recent Post</h3>
                    </div>
                    @foreach ($blogs_recent as $blog_recent )
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('user/photos/'.$blog_recent->photo)}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="{{route("id_blog",['id_blog'=>$blog->id])}}"class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                           {{$blog_recent->question}}
                        </a>
                    </div>
                    @endforeach


                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Tag Cloud</h3>
                    </div>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-light m-1">Design</a>
                        <a href="" class="btn btn-light m-1">Development</a>
                        <a href="" class="btn btn-light m-1">Marketing</a>
                        <a href="" class="btn btn-light m-1">SEO</a>
                        <a href="" class="btn btn-light m-1">Writing</a>
                        <a href="" class="btn btn-light m-1">Consulting</a>
                        <a href="" class="btn btn-light m-1">Design</a>
                        <a href="" class="btn btn-light m-1">Development</a>
                        <a href="" class="btn btn-light m-1">Marketing</a>
                        <a href="" class="btn btn-light m-1">SEO</a>
                        <a href="" class="btn btn-light m-1">Writing</a>
                        <a href="" class="btn btn-light m-1">Consulting</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
