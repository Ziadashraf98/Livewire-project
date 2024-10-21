<div class="row g-4">
    @foreach ($services as $service)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item d-flex flex-column text-center rounded">
            <div class="service-icon flex-shrink-0">
                <i class="{{$service->icon}} fa-2x"></i>
            </div>
            <h5 class="mb-3">{{$service->name}}</h5>
            <p class="m-0">{{$service->description}}</p>
            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
    @endforeach
</div>