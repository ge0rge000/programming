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


.bg-primary {
    background-color: #ffffff !important;
}
img.img-fluid {
    width: 63%;
    height: 100%;
    object-fit: contain;
}

p.banner {
    text-align: justify;
    margin: 44px;
}
h1.banner {
    font-size: 43px;
    line-height: 1.3;
    font-weight: 600;
    background: -webkit-gradient(linear, left top, right top, from(#ed184f), color-stop(39.06%, #e117f1), color-stop(77.6%, #0084ff), to(#00c6e9));
    background: linear-gradient(90deg, #ed184f, #e117f1 39.06%, #0084ff 77.6%, #00c6e9);
    background: var(--Gradient-1, linear-gradient(90deg, #ed184f, #e117f1 39.06%, #0084ff 77.6%, #00c6e9));
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: sans-serif;
}a.position-absolute.top-0.start-0.bg-primary.text-white.rounded-end.mt-5.py-2.px-4 {
    color: #06a3da !important;
    font-weight: bold;
}
    </style>
     @section('title',str_replace('-',' ',$name))
     <br>
     <br>
     <br>
     <div class="container-fluid bg-primary ">
        <div class="row py-5">
            <div class="col-lg-6 col-12 pt-lg-12 text-center">
                <h1 class="banner">Get Excellent {{ str_replace('-', ' ', $name) }} Services By MPTS TECH</h1>
                <p class="banner">
                    {{$service->desc_1}}
                </p>
            </div>
            <div class="col-lg-6 col-12 pt-lg-12 text-center">
                <img src="{{ asset('user/photos/'.$service->desc_3) }}" class="img-fluid" alt="website design company">
                <h1 class="display-4 text-white animated zoomIn"></h1>
            </div>
        </div>
    </div>

    <div class="container-fluid  wow fadeInUp" data-wow-delay="0.1s">
        <div class="container ">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">ALL TYPES OF {{str_replace('-',' ',$name)}}</h5>
             </div>
             <div class="row">
                @foreach ($types as $type)
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                        <a href="{{str_replace('%20', '-', route('type_service_component', ['name'=>$type->Service->name_service, 'name_type'=>$type->name_type]))}}">

                        <div class="blog-item bg-light rounded overflow-hidden" style="height: 500px; width: 100%;">
                            <div class="blog-img position-relative overflow-hidden" style="height: 300px;">
                                <img class="img-fluid" src="{{ asset('user/photos/' . $type->photo) }}" alt="{{$type->desc_1}}" style="width: 100%; height: 100%; object-fit: cover;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">{{$type->name_type}}</a>
                            </div>
                            <div class="p-4" style="height: 220px;">
                                <p>{{$type->desc_3}}</p>
                                <a class="btn btn-lg btn-primary rounded" href="{{str_replace('%20', '-',route('type_service_component',['name'=>$name,'name_type'=>$type->name_type]))}}">     <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </a>
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
