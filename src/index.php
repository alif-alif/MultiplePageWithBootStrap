  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="css/uikit.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/navbar-fixed.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link rel="stylesheet" href="css/styletwo.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
  <title>aLiF</title>
  </head>
  <body>
    
  <?php

      session_start ();

      require_once ("connect.php");
  ?>

  <!--navigation-->
  <nav class="navbar navbar-dark  navbar-expand-md" uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
    <div class="container">
      <a href="index.php" class="navbar-brand">aLiF</a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarNav" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item active">
            <a  class="nav-link" href="index.php">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About US</a>
          </li class="nav-item">

          <li class="nav-item">
            <a  class="nav-link"href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a data-toggle="modal" data-target="#new_sign_in_optim" class="login_click nav-link"
             href="#" data-gi-label-expanded="true" data-gi-action="Login"
            data-button-name="Login">Log In</a>
          </li>
          <li class="nav-item">
            <a data-toggle="modal" data-target="#new_sign_up_optim" class="signup_click signup-vd giTrackElementHeader nav-link "
             href="javascript:void(0);" data-gi-label-expanded="true" data-gi-action="Signup" data-gi-label="default"
             data-gi-category="Header_v2" data-button-name="Signup" data-button-location="First fold navigation">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!--Modal Contact sing_in_option-->

<div class="modal model-body  center_pop_video modal fade " role="dialog" style="display: none;" id= "new_sign_in_optim">
  <div class="login-box container">
    <div class="login-logo modal-dialog center_open_pop">
        <a href="savedatacore_login.php"class="text-light"><b>Login</b>FRoM</a>
      </div>
      
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body rounded login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="modal-body">
            <form action="savedatacore_login.php" method="post">
              <div class="input-group mb-3">
                <input type="email" name = "email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fa fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group  mb-3">
                <input type="password"  name ="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fa fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <div class="icheck-warning">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      SaveMe
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" name="login" class="btn btn-primary btn-inline">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

          </div>
      
            <div class="social-auth-links text-center mb-3">
              <p>- OR -</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger ">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
              </a>
            </div>
            <!-- /.social-auth-links -->
      
            <p class="mb-1">
              <a href="http://localhost/mobileProject/src/f_password.php">I forgot my password</a>
            </p>
            <p class="mb-0">
              <a href="http://localhost/mobileProject/src" class="text-center">Register a new membership</a>
            </p>
          </div>
          <!-- /.login-card-body -->
      </div>
  </div>
      <!-- /.login-box -->

</div>

<!--Sign UP-->
<div class="modal model-body  center_pop_video modal fade " role="dialog" style="display: none;" id= "new_sign_up_optim">
  <div class="login-box container">
    <div class="login-logo modal-dialog center_open_pop">
        <a href="savedatacore_login.php" class="text-light"><b>Registration</b>FRoM</a>
      </div>
      
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body rounded register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="savedatacore_main.php" method="post">
              <div class="input-group mb-3">
                <input type="text" name="fullname" class="form-control" placeholder="Full name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="retypepassword" class="form-control" placeholder="Retype password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                      I agree to the <a href="#">terms</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit"  class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <div class="social-auth-links text-center">
              <p>- OR -</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i>
                Sign up using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                Sign up using Google+
              </a>
            </div>

        <a href="http://localhost/mobileProject/src/" class="text-center">I already have a membership</a>
      </div>
          <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
    

</div>



  <!--Slider-->

  <section  id="showcase" class="bg-dark">
    <div id="mycarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-slide-to="0" data-target="#mycarousel" class="active"></li>
        <li data-slide-to="1" data-target="#mycarousel" ></li>
        <li data-slide-to="2" data-target="#mycarousel" ></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-img-1 active">
          <div class="container">
            <div class="carousel-caption mb-3 pb-3 mb-sm-5 pb-sm-5 text-left">
              <h2 class="display-4 text-light">Heading One</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis at esse, voluptatibus tenetur ab obcaecati. Voluptatem expedita fugit minima sapiente!</p>
            </div>

            <div class="carousel-caption mb-3 pb-3 mb-sm-5 pb-sm-5">
              <a data-toggle="modal" data-target="#new_register_optim" class="signup_click signup-vd giTrackElementHeader btn btn-danger text-light" href="javascript:void(0);" data-gi-label-expanded="true"
               data-gi-action="Signup" data-gi-label="default" data-gi-category="Header_v2" data-button-name="Signup" 
               data-button-location="First fold navigation">Fetures Register</a>
            </div>
            <!--Register-->
              <div class="modal model-body  center_pop_video modal fade " role="dialog" style="display: none;" id= "new_register_optim">
                <div class="login-box container">
                  <div class="login-logo modal-dialog center_open_pop">
                    <a href="savedatacore_login.php" class="text-light"><b>Specification</b>FRoM</a>
                  </div>
                  <!-- /.form-->
                  <div class="card">
                    <div class="card-body rounded register-card-body">
                    <p class="login-box-msg text-info font-weight-bold">Insert the Smartphone specifications </p>
        
                    <form action="savedatacore.php" method="post">
                      <div class="input-group mb-3">
                        <input type="text" name="Mobile-name" class="form-control" placeholder="Mobile name">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-mobile-alt"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" name="Processor" class="form-control" placeholder="Processor">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-microchip"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" name="brands" class="form-control" placeholder="Manufacturers and brands">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-industry"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" name="GPU" class="form-control" placeholder="GPU">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-microchip"></span>
                          </div>
                        </div>
                      </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Memory" class="form-control" placeholder="Memory">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-sd-card"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="MicroSD" class="form-control" placeholder="MicroSD cards">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-memory"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Display" class="form-control" placeholder="Display">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-tv"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Battery" class="form-control" placeholder="Battery">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-battery-full"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Camera" class="form-control" placeholder="Camera">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-camera"></span>
                            </div>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-8">
                          <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                              I agree to the <a href="#">terms</a>
                            </label>
                          </div>
                        </div>
                        <!-- /.col -->
                          <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                          </div>
                        <!-- /.col -->
                    </div>
                  </form>
                  
                </div>
                <!-- /.form-box -->
              </div><!-- /.card -->
            </div>
          
        
          </div>
    
          <!--end-->

        </div>
      </div>
        <div class="carousel-item carousel-img-2">
          <div class="container">
            <div class="carousel-caption mb-5 pb-5 text-right">
              <h2 class="display-4">Heading Two</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis at esse, voluptatibus tenetur ab obcaecati. Voluptatem expedita fugit minima sapiente!</p>
            
            </div>
            <div class="carousel-caption mb-3 pb-3 mb-sm-5 pb-sm-5">
              <a data-toggle="modal" data-target="#new_register_optim2" class="signup_click signup-vd giTrackElementHeader btn btn-danger text-light" href="javascript:void(0);" data-gi-label-expanded="true"
               data-gi-action="Signup" data-gi-label="default" data-gi-category="Header_v2" data-button-name="Signup" 
               data-button-location="First fold navigation">Fetures Register</a>
            </div>
            <!--Register-->
              <div class="modal model-body  center_pop_video modal fade " role="dialog" style="display: none;" id= "new_register_optim2">
                <div class="login-box container">
                  <div class="login-logo modal-dialog center_open_pop">
                    <a href="savedatacore_login.php" class="text-light"><b>Specification</b>FRoM</a>
                  </div>
                  <!-- /.form-->
                  <div class="card">
                    <div class="card-body rounded register-card-body">
                    <p class="login-box-msg text-info font-weight-bold">Insert the Smartphone specifications </p>
        
                    <form action="savedatacore.php" method="post">
                      <div class="input-group mb-3">
                        <input type="text" name="Mobile-name" class="form-control" placeholder="Mobile name">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-mobile-alt"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" name="Processor" class="form-control" placeholder="Processor">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-microchip"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" name="brands" class="form-control" placeholder="Manufacturers and brands">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-industry"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" name="GPU" class="form-control" placeholder="GPU">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-microchip"></span>
                          </div>
                        </div>
                      </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Memory" class="form-control" placeholder="Memory">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-sd-card"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="MicroSD" class="form-control" placeholder="MicroSD cards">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-memory"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Display" class="form-control" placeholder="Display">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-tv"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Battery" class="form-control" placeholder="Battery">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-battery-full"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Camera" class="form-control" placeholder="Camera">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-camera"></span>
                            </div>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-8">
                          <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                              I agree to the <a href="#">terms</a>
                            </label>
                          </div>
                        </div>
                        <!-- /.col -->
                          <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                          </div>
                        <!-- /.col -->
                    </div>
                  </form>
                  
                </div>
                <!-- /.form-box -->
              </div><!-- /.card -->
            </div>
          
        
          </div>
    
          <!--end-->

        </div>
      </div>
        <div class="carousel-item carousel-img-3">
          <div class="container">
            <div class="carousel-caption mb-5 pb-5 text-left">
              <h2 class="display-4">Heading Three</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis at esse, voluptatibus tenetur ab obcaecati. Voluptatem expedita fugit minima sapiente!</p>
              
            </div>
            <div class="carousel-caption mb-3 pb-3 mb-sm-5 pb-sm-5">
              <a data-toggle="modal" data-target="#new_register_optim3" class="signup_click signup-vd giTrackElementHeader btn btn-danger text-light" href="javascript:void(0);" data-gi-label-expanded="true"
               data-gi-action="Signup" data-gi-label="default" data-gi-category="Header_v2" data-button-name="Signup" 
               data-button-location="First fold navigation">Fetures Register</a>
            </div>
            <!--Register-->
              <div class="modal model-body  center_pop_video modal fade " role="dialog" style="display: none;" id= "new_register_optim3">
                <div class="login-box container">
                  <div class="login-logo modal-dialog center_open_pop">
                    <a href="savedatacore_login.php" class="text-light"><b>Specification</b>FRoM</a>
                  </div>
                  <!-- /.form-->
                  <div class="card">
                    <div class="card-body rounded register-card-body">
                    <p class="login-box-msg text-info font-weight-bold">Insert the Smartphone specifications </p>
        
                    <form action="savedatacore.php" method="post">
                      <div class="input-group mb-3">
                        <input type="text" name="Mobile-name" class="form-control" placeholder="Mobile name">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-mobile-alt"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" name="Processor" class="form-control" placeholder="Processor">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-microchip"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" name="brands" class="form-control" placeholder="Manufacturers and brands">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-industry"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" name="GPU" class="form-control" placeholder="GPU">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-microchip"></span>
                          </div>
                        </div>
                      </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Memory" class="form-control" placeholder="Memory">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-sd-card"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="MicroSD" class="form-control" placeholder="MicroSD cards">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-memory"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Display" class="form-control" placeholder="Display">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-tv"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Battery" class="form-control" placeholder="Battery">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-battery-full"></span>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" name="Camera" class="form-control" placeholder="Camera">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-camera"></span>
                            </div>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-8">
                          <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                              I agree to the <a href="#">terms</a>
                            </label>
                          </div>
                        </div>
                        <!-- /.col -->
                          <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                          </div>
                        <!-- /.col -->
                    </div>
                  </form>
                  
                </div>
                <!-- /.form-box -->
              </div><!-- /.card -->
            </div>
          
        
          </div>
    
          <!--end-->
          </div>
        </div>
      </div>
        <a href="#mycarousel" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#mycarousel" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </section>

    <!--2nd section-->
    <section id="icon" class="my-2 py-5 text-center">
      <div class="contain">
        <div class="row">
          <div  class="col-md-4 my-2">
            <i class="fa fa-gears"></i>
            <h3 class="my-2">Turning Gears</h2>
            <p class="lead mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque voluptate molestias, eos fugiat sunt similique?</p>
          </div>
          <div  class="col-md-4 my-2">
            <i class="fa fa-cloud"></i>
            <h3 class="my-2">Sending Data</h2>
            <p class="lead mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque voluptate molestias, eos fugiat sunt similique?</p>
          </div>
          <div  class="col-md-4  my-2">
            <i class="fa fa-cart-plus"></i>
            <h3 class="my-2">Making Money</h2>
            <p class="lead mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque voluptate molestias, eos fugiat sunt similique?</p>
          </div>
        </div>
      </div>
    </section>

    <!--3nrd Section-->

    <section id="getready"class="py-y text-light text-center text-light">
      <div class="dark-overlay">
        <div class="container">
          <div class="row">
            <div class="col mt-5 pt-5 mt-sm-3">
              <h3>Are You Ready To Get Started?</h3>
              <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero ducimus, quos cumque incidunt necessitatibus alias?</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--- info-->

    <section id="info" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 aligen-self-center mt-sm-3 mt-3 md-0">
            <h3>Lorem Ipsum Dolor Sit</h3>
            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos dolorem placeat expedita repellat at a iure, repellendus perferendis 
              hic ad perspiciatis minus dolorum odio itaque nulla nobis. Quidem, reiciendis minima!
            </p>
              <a href="#" class="btn btn-outline-dark">Read More</a>
          </div>
          <div class="col-md-6">
            <img src="img/s7.jpg" alt="a" class="img-fluid rounded">
            
          </div>
        </div>
      </div>
    </section>

    <!---video-->

    <section id="-video" class="text-center text-light">
      <div class="container">
        <div class="dark-overlay">
          <div class="row">
            <div class="col mt-5 pt-4">
              <div uk-lightbox>
                <a class="text-light" href="https://youtu.be/9P738fZqSlA">
                  <i class="fa fa-play"></i>
                </a>
              </div>
              <h2>All video</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!--Photo Gallery-->
  <section id="gallery" class="py-5" uk-lightbox>
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Photo Gallery</h2>
          <p class="lead">Check your Photo</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div>
            <a href="img/p1.jpg"">
              <img src="img/p1.jpg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/p2.jpg">
              <img src="img/p2.jpg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/p3.jpg">
              <img src="img/p3.jpg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="row pt-0 pt-md-4">
        <div class="col-md-4">
          <div>
            <a href="img/p4.jpg">
              <img src="img/p4.jpg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/s4.jpg">
              <img src="img/s4.jpg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/p6.jpg">
              <img src="img/p6.jpg"img-fluid" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!--NewsLatter-->
  <section id="newslatter" class="py-5 bg-info text-light text-center dark-overlay" >
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Signup For Our Newsletter</h2>
          <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Consectetur, sapiente. Id et sed quasi eaque omnis? Fugiat facere maiores magnam!
          </p>

         
          <form action="news_letter.php" method="POST" class="form-inline justify-content-center">
              
            <label class="sr-only" for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" class="form-control m-2">
            <label  class="sr-only"for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email"class="form-control m-2">
            <input type="submit" id="submit" name="subscribe" class="btn btn-primary m-2" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--fotter-->

  <section id="copyright" class="text-center py-3 text-light">
    <div class="container">
      <div class="col">
        <p class="lead mb-0">Copyright 2020 &copy; aLiF</p>
      </div>
    </div>
  </section>


  
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/adminlte.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
  
  <script src="js/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
   <?PHP

   if (isset($_SESSION['status']) && $_SESSION['status']!='')
   {
     ?>
     <script>
       swal ({
         title: "<?php echo $_SESSION['status']; ?>",
        // text:
         icon:"<?php echo $_SESSION['status_code']; ?>", 
         button:"ok.Done!",
       });
     </script>
     <?php 
     
     unset($_SESSION ['status']);
      
   }
               
      ?>
</body>
</html>