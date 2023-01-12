@extends('base')

@section('content')
<section class="default-banner" id="banner">
    <div class="position-absolute w-100 banner-cover h-100 d-flex flex-column justify-content-between">
        <div class="container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
            <div>
                <h5 class="text-secondary fw-bold">
                    -- Register Vehicle
                </h5>
                <h1 class="heading text-white fw-bold pb-3" id="slider-heading">
                    Fill out <br>
                    The IT Form
                </h1>
            </div>
            <button
                class="arrow-btn btn text-white border border-3 arrow-icon bg-transparent rounded-circle mt-5 d-none d-md-block">
                <i class="fa-solid fa-angle-down fa-xs"></i>
            </button>
            

        </div>
      
    </div>
</section>
<section class="contact-banner d-flex justify-content-center align-items-center" id="scroll">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
        <div class="col-md-6">
            <h1 class="display-6 text-white fw-bold pb-3" id="slider-heading">
                Fill out the Details to get <br> Registered Here
            </h1>
        </div>
        <div class="col-md-10 mt-5">
            <form method="POST" onsubmit="return validateForm();">
                @csrf   
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="name">Name</label>
                    <input type="text" class="contact-input" id="name" name="name" value={{$name}} onkeyup="validate(this)" required>
                    <div class="error ps-5" id="nameErr" style="color: red"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="email">Email</label>
                    <input type="text" class="contact-input" id="email" name="email" value={{$email}} onkeyup="validate(this)" required>
                    <div class="error ps-5" id="emailErr" style="color: red"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="phone">Phone</label>
                    <input type="text" class="contact-input" id="phone" name="phone" value={{$phone}} onkeypress="validate(this)" required>
                    <div class="error ps-5" id="phoneErr" style="color: red"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="cnic">CNIC</label>
                    <input type="text" class="contact-input" id="cnic" name="cnic" value={{$cnic}} onkeyup="validate(this)" required>
                    <div class="error ps-5" id="cnicErr" style="color: red"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="nationality">Vehicle Engine Number</label>
                    <input type="text" class="contact-input" id="nationality" name="nationality" onkeyup="validate(this)" required>
                    <div class="error ps-5" id="nationalityErr" style="color: red"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="tax_year">Vehicle Model</label>
                    <input type="text" class="contact-input" id="tax_year" name="tax_year" onkeyup="validate(this)" required>
                    <div class="error ps-5" id="tax_year" style="color: red"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="address">Address</label>
                    <input type="text" class="contact-input" id="address" name="address" onkeyup="validate(this)" required>
                    <div class="error" id="addressErr" style="color: red"></div>
                </div>

                <button class="btn btn-lg contact-btn text-white rounded-pill mt-5" type="submit">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function validate(field){
        const patterns = {
            name: new RegExp("^[a-zA-Z0-9]{5,20}$"),
            cnic: new RegExp("^[0-9]{13}$"),
            email: new RegExp("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/"),
            phone: new RegExp("^[0-9]{9,15}$"),
            nationality: new RegExp("^[a-zA-Z]{3}-[0-9]{4}-[0-9]{4}$"),
            Model: new RegExp("^[a-zA-Z0-9\s]+$"),
            
        };
        if (patterns[field.name].test(field.value)){
            
            document.getElementById(field.name+'Err').innerHTML = "";
            document.getElementById(field.name+'Err').style.borderColor = "blue";
        }
        else{
            document.getElementById(field.name+'Err').innerHTML = "Invalid ";
            document.getElementById(field.name+'Err').style.borderColor = "Red";
        }
    }
    function selectedIncome(field){
       
         field.id == "business"
            document.getElementById("business_inputs").classList.remove('d-none');
            // document.getElementById("job_inputs").classList.add('d-none');
    }
</script>
@endsection

