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
    <div class="fs-3 lh-sm mb-5">
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
    </div>
    <!-- <button type="button" class="btn btn-primary mx-0" id="signup_btn"><a href="/registration/signup" id="signup">Sign up</a></button>
    <button type="button" class="btn btn-primary mx-5" id="signin_btn" href="/login" id="signin"><a href="/login">Sign in</a></button> -->

</div>

</nav>


</header>
</body>
</html>
