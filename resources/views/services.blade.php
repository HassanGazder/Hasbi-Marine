@extends('layouts.template')


@section('content')
<style>
    .service-item {
        height: 100%; 
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border-radius: 8px;
    }

    .service-image {
        height: 250px;
        width: 100%;
        object-fit: cover;
        border-radius: 8px;
    }

    .service-content {
        flex: 1;
        padding: 16px;
    }

    .service-description {
        word-wrap: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        max-height: 72px; /* Adjust to fit 3 lines */
        line-height: 1.5rem;
    }

    .btn-slide {
        margin-top: auto;
        align-self: center;
    }
</style>


</style>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>

        @if ($services->isEmpty())
            <!-- No Services Message -->
            <div class="text-center text-muted">
                <p>No services available at the moment. Please check back later.</p>
            </div>
        @else
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid w-100" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" style="height: 250px; object-fit: cover;">
                            </div>
                            <h4 class="mb-3">{{ $service->name }}</h4>
                            <p class="service-description">{{ Str::limit($service->description, 100, '...') }}</p>
                            <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
        </div>
    </div>
</div>

<!-- Service End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">Testimonial</h6>
            <h1 class="mb-0">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('img/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('img/testimonial-4.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection