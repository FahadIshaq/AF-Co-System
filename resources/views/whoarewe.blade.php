@extends('base')

@section('content')

<section class="banner d-flex" id="banner">  
    <div class="position-absolute w-100 banner-cover h-100 d-flex flex-column justify-content-between">
        <div class="imagem-1">
        </div>
        <div class="container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
            <div>
                <h5 class="text-secondary fw-bold">
                    -- About Us
                </h5>
                <h1 class="display-4 text-white fw-bold pb-3" id="slider-heading" data-aos="flip-left">
                    Know About <br>
                    AF-Co. System
                </h1>
            </div>
            <a href="#scroll">
                <button class="arrow-btn btn text-white border border-3 arrow-icon bg-transparent rounded-circle mt-5" data-aos="flip-down" >
                    <i class="fa-solid fa-angle-down fa-xs"></i>
                </button>
            </a>

        </div>
    </div>
</section>
<section class="banner-second d-flex justify-content-center align-items-center mb-5" id="scroll">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row over-svg">
        <div class="col-md-6">
            <h1 class="display-5 text-white fw-bold pb-3" id="slider-heading" data-aos="flip-up">
                We are Here!
            </h1>
        </div>
        <div class="col-md-7 mt-5">
            <div class="container-fluid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1662.5393019662708!2d73.124785!3d33.551334000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9605c0cbbeca12f6!2sPrime%20Partners%20-%20Tax%20Accountants%20%26%20Auditors!5e0!3m2!1sen!2sus!4v1657298002578!5m2!1sen!2sus" style="border:0; width:50vw; height:50vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
