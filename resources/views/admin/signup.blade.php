<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  </head>
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
    .colour{
      color: black !important;

    }
    .af{
      color:white;
      background: #128061;
    }
    #login{
      color: white;
      text-decoration: none;
      margin-top: 5px;

    }
    #login:hover{
      color: #128061;
      text-decoration: underline white;
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
    
 
</div>

</nav>


    <main class="form-signin d-flex justify-content-center align-items-center text-center" style="height: 100vh !important">
        <form method="POST" class="colour">
            @csrf
          <h1 class="fw-bold text-white"  data-aos="fade-up">
            AF-Tax Registration Panel
          </h1>

          <h1 class="h3 mb-3 fw-normal text-white" data-aos="fade-down">Provide details to create an account</h1>
      
          <div class="form-floating mb-3" data-aos="fade-right">
            <input name="name" type="name" class="form-control" id="floatingName" placeholder="name@example.com">
            <label for="floatingName">Name</label>
          </div>
          <div class="form-floating mb-3" data-aos="fade-left">
            <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
            <label for="floatingEmail">Email address</label>
          </div>
          <div class="form-floating mb-3" data-aos="fade-right">
            <input name="phone" type="phone" class="form-control" id="floatingEmail" placeholder="0333xxxxxxx">
            <label for="floatingPhone">Phone</label>
          </div>
          <div class="form-floating mb-3" data-aos="fade-left">
            <input name="cnic" type="cnic" class="form-control" id="floatingCnic" placeholder="37405xxxxxxxx">
            <label for="floatingCnic">CNIC</label>
          </div>
          <div class="form-floating mb-2" data-aos="fade-right">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <p class="text-white" data-aos="zoom-in">This is an admin account creator the user will have admin privileges</p>
  
          <button class="w-100 btn btn-lg" id="button" type="submit" >Sign in</button>
         
          
          <a class="mt-3 d-block" href="/admin/login" class="login" id="login">Log in</a>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
       <script>
        AOS.init({
            duration:1000,
        });
    </script>



  </body>
</html>