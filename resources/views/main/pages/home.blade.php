@extends('layouts.main.app')

@section('content')
    {{-- Section 1 --}}
    <section class="mt-5 bg-primary">
        <div id="template-mo-zay-hero-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#template-mo-zay-hero-carousel" data-slide-to="0" class="active" aria-current="true"></li>
                <li data-target="#template-mo-zay-hero-carousel" data-slide-to="1"></li>
                <li data-target="#template-mo-zay-hero-carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner p-5" style="
                height: 65vh;
                background-image: url('{{ asset('img/main/section-1/dog.png') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                margin-top: -80px;
            ">
                <div class="carousel-item active carousel-item-start" id="carousel-item-1">
                    <div class="container d-flex justify-content-center align-items-center" style="height: 100%; margin-top: 210px;">
                        <div class="text-align-center align-self-center text-center">
                            <h1 class="display-3 text-capitalize text-white">Your Pet's Wellness, Our Priority</h1>
                            <p class="text-white">Welcome to Central Bark Veterinary Clinic, where trust and comfort are priorities.</p>
                            <a class="btn btn-success" href="/about">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item carousel-item-next carousel-item-start" id="carousel-item-2">
                    <div class="container d-flex justify-content-center align-items-center" style="height: 100%; margin-top: 210px;">
                        <div class="text-align-center align-self-center text-center">
                            <h1 class="display-3 text-capitalize text-white">Nurturing Health, Pawsitively</h1>
                            <p class="text-white">Trust us to nurture their health with a positive touch, ensuring a lifetime of love and vitality.</p>
                            <a class="btn btn-success" href="/about">Read more</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" id="carousel-item-3">
                    <div class="container d-flex justify-content-center align-items-center" style="height: 100%; margin-top: 210px;">
                        <div class="text-align-center align-self-center text-center">
                            <h1 class="display-3 text-capitalize text-white">Your Partner in Pet Wellbeing</h1>
                            <p class="text-white">Together, let's ensure their wellbeing and create unforgettable memories filled with wagging tails and purring contentment.</p>
                            <a class="btn btn-success" href="/about">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </section>
    {{-- End Section 1 --}}

    {{-- Section 2 --}}
    <section class="py-2 py-md-5">
        <div class="container">
            <div class="row text-center pt-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="d-md-block text-primary font-weight-normal">Our Services <i class="fas fa-clipboard-list ml-1"></i></h1>
                    <p>We offer a comprehensive range of veterinary services designed to keep your pets healthy and thriving.</p>
                </div>
            </div>

            <div class="row mt-3">
                @foreach ($services as $service)
                    <div class="col-md-4 col-lg-4 d-flex services align-self-stretch">
                        <div class="card w-100 card-shadow-none hoverable rounded">
                            <div class="card-body d-flex flex-column text-center text-small p-0">
                                <img class="img-fluid d-block mx-auto" src="{{ asset('img/service/paw.png') }}" width="100" alt="service">
                            </div>
                            <div class="card-footer border-0 pt-1 pb-2 text-center">
                                <h3 class="font-weight-bold">
                                    <a href="{{ route('customer.services.schedules.index', $service) }}">{{ $service->name }}</a>
                                </h3>
                                <h4 class="font-weight-normal text-muted" data-toggle="tooltip" data-placement="right" title="{{ $service->description }}">
                                    {{ textTruncate($service->description, '100') }}
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <center>
            <hr class="w-75">
        </center>
    </section>
    {{-- End Section 2 --}}

    {{-- About Us Section --}}
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 m-auto">
                    <h1 class="d-md-block text-primary font-weight-normal">About Us <i class="fas fa-paw ml-1"></i></h1>
                    <p class="gradient-text">
                        “Our shop was founded in Tungkop, Minglanilla, Cebu and has been a beloved
                        part of the community. With our commitment to providing exceptional services
                        for pets and their owners, we have expanded to include a branch in Tungkop,
                        Minglanilla, Cebu, ensuring that even more furry friends and their families
                        have access to top-quality care.
                    </p>
                    <p"gradient-text">
                        At Central Bark Clinic, we understand the special bond between pets and their
                        owners. That's why we strive carefully selected to meet the unique needs of every
                        pet. Our knowledgeable and friendly staff are here to assist you in finding the
                        perfect items for your furry companions. Whether you're a seasoned pet parent or
                        a first-time pet owner, we're dedicated to providing you with the support and
                        resources you need to give your pets the happy, healthy lives they deserve.
                        Visit us at either of our convenient locations in Tungkop, Minglanilla, Cebu and
                        let us be your trusted partner in pet care.
                    </p>
                </div>
            </div>
        </div>
        <center>
            <hr class="w-75">
        </center>
    </section>
    {{-- End About Us Section --}}

    {{-- Team of Amazing Experts Section --}}
    <section class="py-2 py-md-0">
        <div class="container">
            <div class="row text-center pt-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="d-md-block text-primary font-weight-normal"> Team of Amazing Experts <i class="fas fa-users ml-1"></i></h1>
                    <p> At Central Bark Veterinary Clinic, our dedicated team of experienced professionals ensures that your furry companions receive the best possible care. Each expert brings unique skills to our practice, all focused on the well-being of your pets.</p>
                </div>
            </div>

            <div class="row mt-2 justify-content-center">
                <div class="col-md-4 text-center">
                    <h3 class="font-weight-bold">Jeniphyr M. Largo</h3>
                    <img style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);" src="{{ asset('img/team/t1.jpg') }}" alt="Expert 1">
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="font-weight-bold">Sin Causing</h3>
                    <img style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);" src="{{ asset('img/team/t2.jpg') }}" alt="Expert 2">
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="font-weight-bold">Camly Galingan</h3>
                    <img style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);" src="{{ asset('img/team/t3.jpg') }}" alt="Expert 3">
                </div>
            </div>
        </div>
        <center>
            <hr class="w-75">
        </center>
    </section>
    {{-- End Team of Amazing Experts Section --}}



    {{-- Section 4 --}}
    <section>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.3076704675145!2d123.7827799!3d10.236750899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a977b93e3881bf%3A0x80da9a87587027e7!2sCentral%20Bark%20Veterinary%20Clinic!5e0!3m2!1sen!2sph!4v1728094211173!5m2!1sen!2sph"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    {{-- End Section 4 --}}
@endsection
