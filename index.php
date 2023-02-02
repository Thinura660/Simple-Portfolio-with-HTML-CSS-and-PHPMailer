<?php  include "contact.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <title>Thinura Dinujaya</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="script.js"></script>

</head>

<body>

  <div class="preloader">
      <span>{</span>
      <span>}</span>
  </div>
<script>

window.addEventListener("load", function (){
    const preloader = document.querySelector(".preloader");
    preloader.className += " hidden";                  
});

</script>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #0275d8 !important;">
        <a class="navbar-brand" href="#">Thinura Dinujaya</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#work">Work</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="b-example-divider"></div>
    <div id="home">
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Hi</h1>
                    <h1 class="display-5 fw-bold lh-1 mb-3">I'm <span class="text-primary">Thinura</span></h1>
                    <h1 class="display-5 fw-bold lh-1 mb-3">And I am a</h1>
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-primary">Web Developer</h1>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3" style="color: white;">
                        <button style="color: white;" href="#contact" type="button" class="contact-btn btn btn-primary btn-lg px-4 me-md-2 fw-bold">    
                        <a style="color: white; text-decoration: none;" href = "#contact">      
                        <i style="color: white;" class="bi bi-envelope-fill"></i> Contact</button>
                    </a>

                    </div>
                    <a class="social" href="instagram.com/thinura_premawardana">
                        <i class="bi bi-instagram"></i>
                    </a>
                    &nbsp&nbsp&nbsp
                    <a href="https://github.com/Thinura660" class="social">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
                <div class="col-lg-5 offset-lg-0 p-0 overflow-hidden">
                    <img class="rounded-circle" src="images/me2.png" alt="" width="450px">
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="b-example-divider"></div>

    <div id="about">
        <br><br><br>
        <h1 class="text-center section_title text-primary">About</h1>

        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-5 offset-lg-0 p-0 overflow-hidden">
                    <img class="" src="images/me3.jpg" alt="" width="500px">
                </div>
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h2 class="display-9 fw-bold lh-1 mb-3">I'm Thinura</h2>
                    <p class="lead">Hi, my name is Thinura. I am currently a student and I am studying in Nalanda
                        College. I
                        am a big fan of artificial intelligence and web development.</p>

                    <a class="social" href="mailto:thinuradinujaya26@gmail.com">
                        <i class="bi bi-envelope"></i>
                    </a>
                    &nbsp&nbsp&nbsp
                    <a class="social" target="_blank" href="https://www.instagram.com/thinura_premawardana">
                        <i class="bi bi-instagram"></i>
                    </a>
                    &nbsp&nbsp&nbsp
                    <a href="https://github.com/Thinura660" class="social">
                        <i class="bi bi-github"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <br>

    <div class="b-example-divider"></div>

        <div id="work">
        <br><br><br>
        <h1 class="text-center section_title text-primary">My Works</h1>

        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://i.postimg.cc/50zHdp3v/image.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">PHP Portfolio</h5>
    </div>
    <div class="card-footer">
      <small class="text-muted"><button class="btn btn-primary"><a style="color: white" href="https://www.thinuradinujaya.tech/">View</a></button></small>
    </div>
  </div>
  
  <div class="card">
    <img class="card-img-top" src="https://i.postimg.cc/MHc98CL5/image.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">PHP Blog System</h5>
    </div>
    <div class="card-footer">
      <small class="text-muted"><button class="btn btn-primary"><a style="color: white" href="http://thinu-tech-demo.rf.gd/" target="_blank" >View</a></button></small>
    </div>
  </div>
</div>
			</div>
		</div>

            </div>
        </div>
    </div>

    <br>

    <div class="b-example-divider"></div>

    <div id="contact">
        <br><br><br>
        <h1 class="text-center section_title text-primary">Contact</h1>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">

        <?php

            if (isset($_GET["message"]) && $_GET["message"] == 'success') {
                echo
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Your message sent successfully!
                </div>';
            } else if (isset($_GET["message"]) && $_GET["message"] == 'failed') {

                echo
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Something went wrong!
                    </div>';

            }

        ?>
        



        <br>

            <div class="row align-items-center g-lg-5 py-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">

                    <div class="col-lg-7 text-center text-lg-start">
                        <h1 class="display-4 fw-bold lh-1 mb-3">We'd love to hear from you</h1>
                        <p class="col-lg-10 fs-4">
                            Need to get in touch with us? Either fill out the form with your inquiry or send an email to
                            thinuradinujaya26@gmail.com
                        </p>
                    </div>
                    <div class="col-md-10 mx-auto col-lg-5">
                        <form method="post" id="login-form" class="p-4 p-md-5 border rounded-3 bg-light login-form">
                        
                            <div class="form-floating mb-3">
                                <input required type="text" name="name" class="form-control" id="name floatingInput"
                                    placeholder="John Doe">
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="email" name="email" class="form-control" id="email floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="text" name="subject" class="form-control" id="subject floatingPassword"
                                    placeholder="Subject">
                                <label for="floatingPassword">Subject</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea required class="form-control" name="body" id="body floatingBody" cols="30"
                                    rows="20"></textarea>
                                <label for="floatingBody">Message</label>
                            </div>
                            <input  class="w-100 btn btn-lg btn-primary" name="submit" id="submit" type="submit" value="Submit">
                            <hr class="my-4">
                            <small class="text-muted">We will contact you after you submit the form</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <br>

    <div class="b-example-divider"></div>


    <footer>
        <div class="text-center p-3" style="background-color: #0275d8;">
            <p class="text-white"> © 2022
                Created by Thinura Premawardana
            </p>
            <a style="color: white;" class="social" href="mailto:thinuradinujaya26@gmail.com">
                <i class="bi bi-envelope"></i>
            </a>
            &nbsp&nbsp&nbsp
            <a style="color: white;" class="social" target="_blank"
                href="https://www.instagram.com/thinura_premawardana">
                <i class="bi bi-instagram"></i>
            </a>
            &nbsp&nbsp&nbsp
            <a style="color: white;" href="https://github.com/Thinura660" class="social">
                <i class="bi bi-github"></i>
            </a>
        </div>
    </footer>

<style>

.preloader {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  color: #fff;
  background-color: #4684ee;
  font-family: Consolas, Menlo, Monaco, monospace;
  font-weight: bold;
  font-size: 30vh;
  z-index: 1099;
}

.preloader span {
  display: inline-block;
  opacity: 0.8;
  animation: pulse 0.4s alternate infinite ease-in-out;
}
.preloader span:nth-child(odd) {
  animation-delay: 0.4s;
  z-index: 1100;
}

@keyframes pulse {
  to {
    transform: scale(0.8);
    opacity: 0.5;
  }
}

.preloader.hidden {
  animation: fadeOut 1s;
  animation-fill-mode: forwards;
}

@keyframes fadeOut {
  100% {
    opacity: 0;
    visibility: hidden;
  }
}

</style>

</body>

</html>