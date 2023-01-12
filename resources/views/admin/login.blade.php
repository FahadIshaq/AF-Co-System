
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="/img/favicon.ico">


<style>
    body{
        background: black;
        color: white;
   }
   #button{
       background: #128061;
       color: white;
       border: none;
       border-radius: 5px;
       padding: 10px;
       font-size: 20px;
       font-weight: bold;
   }
   #button:hover{
        background: white;
       text-decoration: none;
       color: black;
   }
   #create{
        color: white;
        text-decoration: none;
   }
    #create:hover{
          color: #128061;
          text-decoration: underline white; 
          
    }
    #signup{
      color: white;
      text-decoration: none;
      
    }
    #home{
      background-color: #128061;
      border: #128061;

    }

</style>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
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
    <button type="button" class="btn btn-white mx-4" id="home"><a href="/" id="signup">Home</a></button>
    
</div>

</nav> 
  </header>
    <main class="form-signin d-flex justify-content-center align-items-center text-center" style="height: 100vh !important">
        <form method="POST">
            @csrf
          <h1 class="fw-bold" data-aos="zoom-out-down" data-aos="fade-down">
            AF-Co. Admin Login
          </h1>
      
          <div class="form-floating" data-aos="zoom-out">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" data-aos="fade-up">Email address</label>
          </div>
          <div class="form-floating my-2" data-aos="zoom-out">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          @if (session()->has('error'))
            <div id="alert" class="alert alert-primary" role="alert">
                {{ session('error') }}
            </div>
          @endif
          <button class="w-100 btn btn-lg" id="button" type="submit" data-aos="fade-left" data-aos-duration="3000">Sign in</button>
        
        </form>
    </main>
    <footer>
        <div class="container mb-5">
            <div class="text-center text-white" style="background-color: transparent">
                <div class="container">
                    <section class="mt-5">
                        <div class="row text-center d-flex justify-content-center pt-5" data-aos="flip-up">
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold" >
                                    <a href="/whoarewe" class="text-white" id="who" >Who Are we</a>
                                </h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="/services" class="text-white" id="who">What can we do for you</a>
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
                                    AF-Co. <br> Complete Support by Our Tax Expert support in Filing Your Tax Return.
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


  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        setTimeout(() => {
          const alert = document.getElementById('alert');
          alert.style.display = 'none';
        }, 5000);

        AOS.init({
            duration:1000,
        });
    </script>
</body>
</html>