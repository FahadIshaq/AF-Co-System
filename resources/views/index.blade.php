@extends('base')

@section('content')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
#knowus:hover {
    background: #128061;
    text-decoration: none;
}
#knowus:active {
    background: black;
    text-decoration: none;
}

#team:hover {
    background: #128061;
    text-decoration: none;
}

#team:active {
    background: black;
    text-decoration: none;
}
#next:hover {
    background: #128061;
    text-decoration: none;
}
#clickhere:hover {
    background: #128061;
    text-decoration: none;
}
#banner{
    background-image: url("img/background.jpeg");
}

</style>

<script>
AOS.init({
	duration: 1200,
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.js" integrity="sha512-E378bwaeZf1nwXeJGIwTB58A5gPt5jFU3u6aTGja4ZdRFJeo/N/REKnBgNZOZlH6JdnOPO98vg2AnSGaNfCMFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="main">
<section class="banner d-flex" id="banner">  
        <div class="banner-content container d-flex flex-column flex-md-row justify-content-md-between align-items-center text-center text-md-start">
            
        <div>
                <h1 class="heading fw-bold pb-3 text-dark text-dark" id="afco">
                     AF-Co. <br>
                    Vehicle Registration Portal
                </h1>
                <div class="d-flex align-items-center">
                    <p class="banner-para fs-3 fw-bold lh-sm d-none d-md-inline-block text-dark">
                        We are the Leading online portal <br>
                        solution provider in Pakistan.
                    </p>
                    <button type="button" class="btn btn-primary mx-3" id="signup_btn"><a href="/whoarewe" id="signup">Let's Go</a></button>
                </div>
            </div>
        </div>
    
    </div>

</section>  
<section class="banner-second d-flex justify-content-center align-items-center mt-md-0">
    <div class="container row over-svg">
        <div class="col-md-4">
            <h5 class="text-secondary fw-bold" data-aos="fade-up">
                --About AF-Co.
            </h5>
            <h1 class="heading text-white fw-bold lh-base text-break" id="slider-heading" data-aos="fade-up">
                The Quickest and Simplest Way to get NTN & File Your Vehicle
            </h1>
            <p class="text-white pt-5 d-none d-md-block" data-aos="fade-right">
                Click Know Us to Know More About us &nbsp;<i class="fa-solid fa-arrow-right-long fa-lg"></i>
            </p>
        </div>
        <div class="offset-md-2 col-md-5" data-aos="flip-left">
            <div>
                <p class="text-white fs-3 d-md-inline text-break" id="slider-subheading" >
                    What's Included? <br> Complete Support by Our Expert support in Filing Your Registration in Return.
                    And we've made the process extremely simple you're going to love it.
                </p>
                <div class="row mt-5 mx-1">
                    <div id="knowus" class="btn contact-btn2 border border-secondary text-white rounded-pill me-2" data-aos="fade-up">
                        <a href="/whoarewe">
                            <p class="fs-5" >
                                Know Us
                            </p> 
                        </a>
                    </div>
                    <div id="team"class="btn btn-lg contact-btn2  border border-secondary text-white rounded-pill" data-aos="fade-up">
                        <a href="/contact">
                            <p >
                                Team
                            </p>
                        </a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
<section class="banner-white d-flex justify-content-center align-items-center mt-md-0">
    <div class="container row">
        <div class="col-md-4">
            <h5 class="text-secondary fw-bold text-dark"  data-aos="fade-up">
                -- Benefits of AF-Co.
            </h5>
            <h1 class="heading fw-bold lh-base text-break text-white" id="slider-heading"  data-aos="fade-up">
                Why register the vehicle from here?
            </h1>
            <p class="pt-5 d-none d-md-block"  data-aos="fade-up">
                Read this to learn more &nbsp;<i class="fa-solid fa-arrow-right-long fa-lg"></i>
            </p>
        </div>
        <div class="offset-md-1 col-md-7">
            <div class="row"  data-aos="fade-left">
                <div class="col-2 icon-img">
                    <img src="../svg/icon1.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-9 col-md-10 text-white">
                    <h4 class="fw-bold text-dark">Vehicle Tax Savings</h4>
                    <p>
                    The Tax Savings Calculator helps to calculate how much amount in tax would be saved if a person switches from a conventional Vehicle to an EV.
                </div>
            </div>
            <div class="row"  data-aos="fade-right">
                <div class="col-2">
                    <img class="icon-img" src="../svg/icon2.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-9 col-md-10 text-white">
                    <h4 class="fw-bold text-dark">Lower the Rate of Taxes</h4>
                    <p>
                        Non-Filers are subject to higher rate of taxes on various transactions e.g. withholding tax is applicable on cash withdrawals and banking transfers exceeding Rs. 50,000.
                    </p>
                </div>
            </div>
            <div class="row"  data-aos="fade-left">
                <div class="col-2">
                    <img class="icon-img" src="../svg/icon3.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-9 col-md-10 text-white">
                    <h4 class="fw-bold text-dark">Avoid Penalties</h4>
                    <p>
                        Be a responsible citizen and avoid penalties and / or prosecutions from the FBR for not filing return. Penalties result in a higher amount to be paid to FBR. Avoid it by filing tax on time.
                    </p>
                </div>
            </div>
            <div class="row"  data-aos="fade-right">
                <div class="col-2">
                    <img class="icon-img" src="../svg/icon4.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-9 col-md-10 text-white">
                    <h4 class="fw-bold text-dark">Compliance Check</h4>
                    <p>
                        Many government-related organizations and banks now check your FBR tax filer status before acceding to your requests, like registration of company, purchase of property and loan processing etc.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="banner-third">
    <div class="container py-3 px-4 w-75 d-flex justify-content-between flex-column">
        <h5 class="text-secondary fw-bold mt-5 py-5"  data-aos="fade-up">
            -- Simple Way to Register!!!
        </h5>
        <h1 class="fw-bold text-white" data-aos="zoom-in-down">Register <br> with us now</h1>
        <p class="text-white pb-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
            It is an easy way to file your vehicle tax. Click to continue.
        </p>
        <div class="btn contact-btn2 border border-secondary text-white rounded-pill me-2" data-aos="fade-up" id="clickhere">
            @auth
            <a href="/registration/incometax">
                <p class="fs-5">
                    Click Here
                </p> 
            </a>
            @else
            <a href="/login">
                <p class="fs-5" >
                    Click Here
                </p> 
            </a>
           
            @endauth
        </div>
        
    </div>
    
    @if (session()->has('success'))
        <div id="alert" class="position-fixed bottom-0 end-0 me-5 alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
</section>

@endsection

</div>



