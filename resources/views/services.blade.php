@extends('base')

@section('content')
<section class="default-banner" id="banner">
    <div class="position-absolute w-100 banner-cover h-100 d-flex flex-column justify-content-between">
        <div class="imagem-1">
        </div>
        <div class="container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
            <div>
                <h5 class="text-secondary fw-bold"  data-aos="flip-down">
                    -- Our Services
                </h5>
                <h1 class="heading text-white fw-bold pb-3" id="slider-heading"  data-aos="flip-down">
                    Check out our <br>
                    Tax Tools
                </h1>
            </div>
            <a href="#scroll">
                <button class="arrow-btn btn text-white border border-3 arrow-icon bg-transparent rounded-circle mt-5"  data-aos="flip-up">
                    <i class="fa-solid fa-angle-down fa-xs"></i>
                </button>
            </a>
            

        </div>
    </div>
</section>
<section class="banner-second pt-5 d-flex justify-content-center flex-column align-items-center mb-5" id="scroll">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row over-svg">
        <div class="col-md-6">
            <h1 class="display-5 text-white fw-bold pb-3" id="slider-heading"  data-aos="fade-down">
                What our clients value most is our experience in the online services
            </h1>
        </div>
        <div class="col-md-7 mt-5">
            <p class="high-z-index text-white fs-3 fw-dark lh-sm d-md-inline" id="slider-subheading" data-aos="fade-right">
                AF-Co. is a joint initiative of team of leading professionals and technology enthusiasts. The
                initiative aims to simplify vehicle tax return filing process for individuals.
            </p>
        </div>
    </div>
</section>
<section class="banner-white d-flex justify-content-center align-items-center mt-md-0">
    <div class="container row">
        <div class="col-md-4">
            <h5 class="text-secondary fw-bold text-white"  data-aos="fade-up">
                -- Services of AF-Co.
            </h5>
            <h1 class="heading fw-bold lh-base text-break" id="slider-heading"  data-aos="fade-up">
                Why choose us? Look at our services and decide for yourself.
            </h1>
            <p class="pt-5 d-none d-md-block"  data-aos="fade-up">
                Read this to learn more &nbsp;<i class="fa-solid fa-arrow-right-long fa-lg"></i>
            </p>
        </div>
        <div class="offset-md-1 col-md-7">
            <div class="row"  data-aos="fade-up">
                <div class="col-2 icon-img">
                    <img src="../svg/icon1.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-7 col-md-8 text-white">
                    <h4 class="fw-bold text-dark"> <a href="/registration/incometax" class="text-dark" id="login_here" >Vehicle Tax Filing</a></h4>
                    <p>
                        Providing agile and unique strategies to meet growth challenges.
                    </p>
                </div>
            </div>
            <div class="row"  data-aos="fade-up">
                <div class="col-2 icon-img">
                    <img src="../svg/icon1.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-7 col-md-8 text-white">
                    <h4 class="fw-bold text-dark"> <a href="/registration/incometax" class="text-dark" id="login_here">Vehcile Registration</a></h4>
                    <p>
                        The easiest way to file tax on your sale products.
                    </p>
                </div>
            </div>
            <div class="row"  data-aos="fade-up">
                <div class="col-2 icon-img">
                    <img src="../svg/icon1.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-7 col-md-8 text-white">
                    <h4 class="fw-bold text-dark"><a href="/registration/incometax" class="text-dark" id="login_here">Online Register</a></h4>
                    <p>
                        Providing agile and unique strategies to meet growth challenges.
                    </p>
                </div>
            </div>
            <div class="row"  data-aos="fade-up">
                <div class="col-2 icon-img">
                    <img src="../svg/icon1.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-7 col-md-8 text-white" >
                    <h4 class="fw-bold text-dark"><a href="/registration/incometax" class="text-dark" id="login_here">Intellectual Property</a></h4>
                    <p>
                        Trademark Registration , Trademark Objection , Trademark Opposition and Trademark Removal.
                    </p>
                </div>
               
            </div>
        </div>
    </div>
</section>
@endsection