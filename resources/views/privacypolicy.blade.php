@extends('base')

@section('content')
<div class="container-fluid">
        <div class="row">
        <div id="slideshow" class="col-12 carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2"></button>
            </div>

            <!-- Carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/jp-valery-3ReknLCBfeU-unsplash.jpg"
                        class="d-block w-100" />
                    
                </div>
                <div class="carousel-item">
                    <img src="img/paul-hanaoka-D-qq7W751vs-unsplash.jpg"
                        class="d-block w-100" />
                  
                </div>
                <div class="carousel-item">
                    <img src="img/chris-bair-UJZ08eAW2Ng-unsplash.jpg"
                        class="d-block w-100" />
                    
                </div>
            </div>

            <!-- Left and right controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

</div>
        </div>
        <div class="container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
            <div>
                <h5 class="text-secondary fw-bold" data-aos="fade-up">
                    -- Our Privacy Policy
                </h5>
                <h1 class="heading text-white fw-bold pb-3" id="slider-heading" data-aos="fade-down">
                    Read Our <br>
                    Privacy Policy
                </h1>
            </div>
            <a href="#scroll">
                <button class="arrow-btn btn text-white border border-3 arrow-icon bg-transparent rounded-circle mt-5">
                    <i class="fa-solid fa-angle-down fa-xs"></i>
                </button>
            </a>
            

        </div>
    
    </div>
</section>
<section class="banner-second pt-5 d-flex justify-content-center flex-column align-items-center mb-5" id="scroll">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row over-svg">
        <div class="col-md-6">
            <h1 class="display-5 text-white fw-bold pb-3" id="slider-heading" data-aos="zoom-out-right">
                Our Privacy Policy
            </h1>
        </div>
        <div class="col-md-7 mt-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <p class="text-white fs-6 fw-dark lh-sm d-md-inline" id="slider-subheading">
                Thank you for visiting the AF-Co.'s website, an official United States Government System, and reviewing our privacy policy. Our privacy policy explains how we handle the personally identifiable information (PII) that you provide to us when you visit us online to browse, obtain information, or conduct a transaction. PII includes information that is personal in nature and which might be used to identify you. The IRS uses this website to provide information about IRS services and programs. This website includes specific applications which provide more services or enable us to respond to specific questions from website visitors.
                We won't collect personal information about you just because you visit this Internet site. Some applications on this website provide you with the opportunity to order forms, ask questions requiring a response, sign up for electronic newsletters, participate in focus groups and customer surveys, or learn the status of filed returns or anticipated payments. Using these services is voluntary and may require that you provide additional personal information to us. Providing the requested information implies your consent for us to use this data in order to respond to your specific request.
            </p>
        </div>
    </div>
</section>
@endsection