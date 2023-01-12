<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        AF-Co.
    </title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
        <!-- Font-Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <!-- AOS animations -->
   
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- External Stylesheet -->
   
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
</head>


<style>

#who:hover{
    text-decoration: underline #128061;
}
.name{
    color: #128061;
    font-size: 20px;
    font-weight: bold;
    text-decoration: underline;

}
.site:hover{
    color: #128061;
    text-decoration: underline;
}
#signup_btn,#signin_btn{
    background-color: #128061;
    border: #128061;

}
#signup_btn:hover{
    background-color: black;
    border: #128061;

}

#signin_btn:hover{
    background-color: black;
    border: #128061;
}
#abt{
    font-weight:bold;
}
#abt:hover{
    text-decoration:underline #128061;
}

.here{

}
</style>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">

  <a class="fw-bold fs-1 text-danger text-decoration-none logo-name" href="/">
  <img class="banner-svg2" src="/img/logo.png" alt="" width="100px">
                    </a>
    
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="/whoarewe" id="abt"> About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services" id="abt">Services</a>
      </li>
      <li class="nav-item">
        
        <a class="nav-link" href="/privacypolicy" id="abt">Privacy Policy</a>
      </li>
      
    </ul>
    @guest
    <button type="button" class="btn btn-primary mx-0" id="signup_btn"><a href="/registration/signup" id="signup">Sign up</a></button>
    <button type="button" class="btn btn-primary mx-5" id="signin_btn" href="/login" id="signin"><a href="/login">Sign in</a></button>
    @endguest

</div>

</nav>

@auth
<!-- @extend('incometax') -->
<!-- @extend('authuser') -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        AF-Co.
    </title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
        <!-- Font-Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <!-- AOS animations -->
   
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- External Stylesheet -->
   
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
</head>


<style>

#who:hover{
    text-decoration: underline #128061;
}
.name{
    color: #128061;
    font-size: 20px;
    font-weight: bold;
    text-decoration: underline;

}
.site:hover{
    color: #128061;
    text-decoration: underline;
}
#signup_btn,#signin_btn{
    background-color: #128061;
    border: #128061;

}
#signup_btn:hover{
    background-color: black;
    border: #128061;

}

#signin_btn:hover{
    background-color: black;
    border: #128061;
}
#abt{
    font-weight:bold;
}
#abt:hover{
    text-decoration:underline #128061;
}

.here{

}
</style>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">

  <a class="fw-bold fs-1 text-danger text-decoration-none logo-name" href="/">
  <img class="banner-svg2" src="/img/logo.png" alt="" width="100px">
                    </a>
    
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="/whoarewe" id="abt"> About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services" id="abt">Services</a>
      </li>
      <li class="nav-item">
        
        <a class="nav-link" href="/privacypolicy" id="abt">Privacy Policy</a>
      </li>
      
    </ul>
    <form action="/logout" method="post">
    @csrf
    <button class="btn btn-primary mx-0" type="submit" id="signup_btn">Logout</button>

    <button type="button" class="btn btn-primary mx-2" id="signup_btn"><a href="/profile/profile" id="signup">Profile</a></button>
     <!-- </div> -->
    </form>
    
    <!-- <a href="/services">
    Register Vehicle
    </a>
</div>
    </div> -->
    <!-- <button type="button" class="btn btn-primary mx-0" id="signup_btn"><a href="/registration/signup" id="signup">Sign up</a></button>
    <button type="button" class="btn btn-primary mx-5" id="signin_btn" href="/login" id="signin"><a href="/login">Sign in</a></button> -->

</div>

</nav>


</header>
</body>
</html>

<!-- <div class="fs-3 lh-sm mb-5">
    Welcome, {{ auth()->user()->name }}
    </div>
    <form action="/logout" method="post">
    @csrf
    <div class="d-flex justify-content-center">
    <button class="btn btn-lg contact-btn text-white rounded-pill mt-1" type="submit">Logout</button>
    </div>
    </form>
    <div class="d-flex justify-content-center">
    <div class="btn btn-lg contact-btn text-white rounded-pill mt-5">
    <a href="/services">
    Register Vehicle
    </a>
</div>
    </div> -->
    @else
  

    @endauth
    </div>
    </div>
    </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container mb-5">
            <div class="text-center text-white" style="background-color: transparent">
                <div class="container">
                    <section class="mt-5">
                        <div class="row text-center d-flex justify-content-center pt-5" data-aos="flip-up">
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold" >
                                    <a href="/whoarewe" class="text-white" id="who" >About AF-Co.</a>
                                </h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="/services" class="text-white" id="who">AF-Co. Services</a>
                                </h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="/registration/signup" class="text-white" id="who">Register now</a>
                                </h6>
                            </div>
                           
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="/privacypolicy" class="text-white" id="who">Privacy Policy</a>
                                </h6>
                            </div>
                        </div>
                    </section>
                    <hr class="my-5" />
                    <section class="mb-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                                <p>
                                    AF-Co. <br> Complete Support by Our Expert support in Filing Your registration Return.
                                    <br> And we've made the process extremely simple you're going to love it
                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="text-center mb-5">
                        <a href="https://www.facebook.com/" class="text-white me-4">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.twitter.com/" class="text-white me-4">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.google.com/" class="text-white me-4">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="text-white me-4">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="text-white me-4">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.github.com/" class="text-white me-4">
                            <i class="fab fa-github"></i>
                        </a>
                    </section>
                </div>

                <div class="text-center p-3" style="background-color: transparent">
                    © 2023 Copyright:
                    <a class="site" href="#top">AF-Co.com</a>
                    <br>
                    <a class="designed">Designed and Developed By <a class="name">Fahad</a> and <a class="name">Ahmad</a></a>
                </div>
                
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration:1000,
        });
    </script>
    @yield('scripts')
</body>

</html>