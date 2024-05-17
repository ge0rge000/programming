<div>
    <style>
        .blog-item {
            width: 100%;
            height: auto; /* Allow height to adjust based on content */
            display: flex;
            flex-direction: column;
            margin-bottom: 20px; /* Add margin between items */
        }

        .blog-img {
            flex: 1 1 auto;
            height: 200px;
            overflow: hidden;
        }

        .blog-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .p-4 {
            padding: 16px;
        }

        .text-truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (max-width: 768px) {
            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .blog-img {
                height: 150px;
            }
        }

        @media (max-width: 480px) {
            .blog-img {
                height: 120px;
            }

            .p-4 {
                padding: 12px;
            }
        }
    </style>
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Blogs</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Blogs</a>
            </div>
        </div>
    </div>
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


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($blogs as $blog)
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{asset('user/photos/'.$blog->photo)}}" alt="">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>{{$blog->created_at}}</small>
                                    </div>
                                    <h4 class="mb-3">{{$blog->question}}</h4>
                                    <p class="text-truncate">{{$blog->answer}}</p>
                                    <a class="text-uppercase" href="{{route("id_blog",['id_blog'=>$blog->id])}}">
                                                  Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg m-0">
                                    {{ $blogs->links('pagination::bootstrap-4') }}
                                </ul>
                            </nav>
                        </div>
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
                    <!-- Tags End -->

                    <!-- Plain Text Start -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Plain Text</h3>
                        </div>
                        <div class="bg-light text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                    <!-- Plain Text End -->
                </div>
                    </div>
                </div>
                <!-- Blog list End -->

                <!-- Sidebar Start -->

                <!-- Sidebar End -->
            </div>
        </div>
    </div>
</div>
