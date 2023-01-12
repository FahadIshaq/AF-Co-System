@extends('base')

@section('content')
<style>
#submit{
    background-color: #128061;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 10px;
    width: 100%;
}
#slider-heading{
    color: #128061;
}

#back{
    background-image: url("../img/bg.jpg");
    background-size: cover;
}



</style>
<section class="default-banner" id="banner">
    <div class="position-absolute w-100 banner-cover h-100 d-flex flex-column justify-content-between" id="back">
        <div class="imagem-1">
        </div>
        <div class="container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
            <div>
                <h5 class="text-white fw-bold" data-aos="fade-up">
                    -- Register Here
                </h5>
                <h1 class="heading fw-bold pb-3" id="slider-heading" data-aos="flip-right">
                    Sign Up <br>
                    To Continue
                </h1>
            </div>
            <button
                class="arrow-btn btn text-white border border-3 arrow-icon bg-transparent rounded-circle mt-5 d-none d-md-block" data-aos="fade-up">
                <i class="fa-solid fa-angle-down fa-xs"></i>
            </button>
        </div>
      
    </div>
</section>
<section class="contact-banner d-flex justify-content-center align-items-center">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
        <div class="col-md-12 text-center">
            <h1 class="display-7 text-white fw-bold pb-3" id="slider-heading" data-aos="flip-down">
                Sign Up to your account.
            </h1>
        </div>

 <main class="form-signin d-flex justify-content-center align-items-center text-center" style="height: 100vh !important">
 <div class="col-md-7 mt-5">

 <form name="myForm" onsubmit="return validateForm()" method="post">
    @csrf
    <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
        <label class="contact-label fs-5 fw-bold" for="name">Name</label>
        <input type="text" class="contact-input" id="name" name="name" placeholde="Enter Full Name" required>
    </div>
    <div id = "nameerror"> </div>
    <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
        <label class="contact-label fs-5 fw-bold" for="email">Email</label>
        <input type="email" class="contact-input" id="email" name="email" required>
    </div>
    <div id = "emailerror"> </div>
    <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
        <label class="contact-label fs-5 fw-bold" for="number">Phone Number</label>
        <input type="tel" class="contact-input" id="number" name="number" required>
    </div>
    <div id = "phoneerror"> </div>
    <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
        <label class="contact-label fs-5 fw-bold" for="cnic">CNIC</label>
        <input type="text" class="contact-input" id="cnic" name="cnic" pattern="[0-9]{13s}" required>
    </div>
    <div id = "cnicerror"> </div>
    <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
        <label class="contact-label fs-5 fw-bold" for="password">Password</label>
        <input type="password" class="contact-input" id="password" name="password" required>
    </div>
    <div id = "passworderror"> </div>
    <div class="d-flex justify-content-end">
        <input class="btn contact-btn text-white rounded-pill fw-bold fs-5" type="submit" name="submit" id="submit" value="Sign Up" id="submit" onsubmit = "return validateForm()">
    </div>  
</form>
</div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
       <script>
        AOS.init({
            duration:1000,
        });
			function validateForm() {
				var name =
					document.forms.myForm.name.value;
				var email =
					document.forms.myForm.email.value;
				var phone =
					document.forms.myForm.number.value;
				var password =
					document.forms.myForm.password.value;
                var nameerr=document.getElementById("nameerror");
				var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; //Javascript reGex for Email Validation.
				var regPhone=/^\d{11}$/;									 // Javascript reGex for Phone Number validation.
				var regName = /\d+$/g;	
                var passwd=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
							 // Javascript reGex for Name validation

				if (name == "" || regName.test(name)) {
                    document.getElementById("name").style.border = "2px solid red";
                    return false;
					name.focus();
					
				}

				
				if (email == "" || !regEmail.test(email)) {
					document.getElementById("email").style.border = "2px solid red";
					return false;
                    email.focus();
				}
				
				if (password == "" !regPass.test(passwd)) {
					document.getElementById("password").style.border = "2px solid red";
					return false;
                    password.focus();
					
				}

				if(password.length <6){
					document.getElementById("cnic").style.border = "2px solid red";
					return false;
                    password.focus();
					

				}
				if (phone == "" || !regPhone.test(phone)) {
					document.getElementById("number").style.border = "2px solid red";
					return false;
                    phone.focus();
					
				}
                if (password=="" || password.length <6) {
                    document.getElementById("password").style.border = "2px solid red";
                    return false;
                    password.focus();
                }
                return true;
				
			}

    </script>

<!--         
        <div class="col-md-7 mt-5">

            <form method="POST">
                @csrf
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="name">Name</label>
                    <input type="text" class="contact-input" id="name" name="name" required>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="email">Email</label>
                    <input type="email" class="contact-input" id="email" name="email" required>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="number">Phone Number</label>
                    <input type="tel" class="contact-input" id="number" name="number" required>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="cnic">CNIC</label>
                    <input type="text" class="contact-input" id="cnic" name="cnic" pattern="[0-9]{13}" required>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="password">Password</label>
                    <input type="password" class="contact-input" id="password" name="password" required>
                </div>
                <div class="d-flex justify-content-end">
                    <input class="btn contact-btn text-white rounded-pill fw-bold fs-5" type="submit" name="submit" id="submit" value="Sign Up" id="submit">
                </div>  
            </form>
        </div>
       -->
</section>
@endsection