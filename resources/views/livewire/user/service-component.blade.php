<div>
    <style>
        .service-item .service-icon {

    color: white;
}.blog-item {
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Ensures the footer is aligned at the bottom */
}

.blog-img {
    width: 100%;
    overflow: hidden; /* Keeps the image bounded within the div */
}

img.img-fluid {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Covers the div without distorting the image */
}

.p-4 p {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
    </style>
     @section('title',str_replace('-',' ',$name))
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{str_replace('-',' ',$name)}}</h1>

            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">ALL TYPES OF {{str_replace('-',' ',$name)}}</h5>
             </div>
             <div class="row">
                @foreach ($types as $type)
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                        <div class="blog-item bg-light rounded overflow-hidden" style="height: 500px; width: 100%;">
                            <div class="blog-img position-relative overflow-hidden" style="height: 300px;">
                                <img class="img-fluid" src="{{ asset('user/photos/' . $type->photo) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">{{$type->name_type}}</a>
                            </div>
                            <div class="p-4" style="height: 220px;">
                                <p>{{$type->small_desc}}</p>
                                <a class="btn btn-lg btn-primary rounded" href="{{str_replace('%20', '-',route('type_service_component',['name'=>$name,'name_type'=>$type->name_type]))}}">     <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Check if the current iteration number is divisible by 3 -->
                    @if ($loop->iteration % 3 == 0)
                        <div class="w-100">
                            <br></div> <!-- Bootstrap 4+ responsive utility class for full width -->
                    @endif
                @endforeach
            </div>



        </div>
    </div>



    <br>

    <livewire:user.items.choose-component />

</div>
