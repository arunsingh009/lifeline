<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>LifeLine Services | Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./footer/footer.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/lightningDeal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- for navbar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <!-- user profile css file -->
    <link rel="stylesheet" href="./css/userprofile.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- for social and font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_SESSION['userid'])) {
        echo ' <nav class="navbar navbar-expand-lg" data-aos="fade-down" data-aos-duration="1200">
       <img class="logo-nav" src="./images/logo.jpg">
       <div class="nav-animtion">
           <a class="navbar-brand" href="./UserPage/userpage.php">LifeLine</a>
       </div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon fas fa-bars">
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="nab">
               <li class="div"> <a href="./UserPage/userpage.php">Home <span class="sr-only">(current)</span></a> </li>
               <li class="div"> <a href="./lightningDeal.php">Lightning Deal</a> </li>
               <li class="div"> <a href="./UserPage/explore.php">Explore Employee</a> </li>
           </ul>
           <div class="mx-2">
               <div class="btn-group" role="group">
                   <button class="btn profile-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="bi bi-person-circle" style="font-size: 40px;"></i>
                   </button>
                   <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                       <a class="dropdown-item" href="./UserPage/userinfo.php">My Settings</a>
                       <hr>
                       <a class="dropdown-item" href="./php/logout.php">Logout</a>
                   </div>
               </div>
           </div>
   </nav>
   ';
    } else {
        echo '<nav class="navbar navbar-expand-lg" data-aos="fade-down" data-aos-duration="1200">
        <img class="logo-nav" src="./images/logo.jpg">
        <div class="nav-animtion">
            <a class="navbar-brand" href="./index.php">LifeLine</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fas fa-bars">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nab">
                <li class="div"> <a href="./index.php">Home <span class="sr-only">(current)</span></a> </li>
                <li class="div"> <a href="./lightningDeal.php">Lightning Deal</a> </li>
                <li class="div"> <a href="#explore">Explore Employee</a> </li>
                <li class="div"> <a href="./service/serviceprovide.html">Reigster As Service Provider</a> </li>
            </ul>
            <div class="mx-2">
                <button class="btn btn1" data-toggle="modal" data-target="#loginModal"><i class="bi bi-box-arrow-in-right"></i> Sign in</button>
                <button class="btn btn1" data-toggle="modal" data-target="#signupModal"><i class="bi bi-person-plus-fill"></i> Sign UP</button>
            </div>
    </nav>';
    }
    ?>

    <!-- nav starts from here  -->
    <!-- login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="loginModalLabel">Sign in</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email or mobile Phone number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="text">
                            <p style="margin-bottom: 0; padding-right: 20px;">By continuing, you agree to Lifeline's <a href="#">Terms of Use </a></p>
                            <p style="margin-bottom: 0; padding-right:221px;"> and <a href="">Privacy Policy</a>.</p>
                        </div>
                        <button type="submit" class="btn btn2">Continue</button>
                    </form>
                    <div class="text">
                        <p style="text-align: center; margin-bottom: 0; padding-left: 50px;">Or</p>
                        <i class="bi bi-facebook" style="color: blue; cursor: pointer; margin-right: 15px;"><a href="">Sign in with Facebook</a></i>
                        <i class="bi bi-google" style="color: red; cursor: pointer;"><a href="">Sign in with Google </a></i>
                        <p><a href="" data-toggle="modal" data-target="#forgetModal" data-dismiss="modal">Forget Password?</a></p>
                    </div>
                    <hr>
                    <div class="sign">
                        New to Lifeline ? <a href="" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">Sign up<i class="bi bi-caret-right-fill" style="font-size: 16px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SignUp Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="signupModalLabel">Create Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="email" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobile" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">Email (optional)</label>
                            <input type="tel" class="form-control" id="mobile" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" class="form-control" id="" placeholder="At least 8 Characters">
                        </div>
                        <div class="alert-password">
                            <i class="bi bi-info-lg" style="color: blue;"></i> Passwords must be at least 8 characters.
                        </div>
                        <div class="text">
                            <p style="margin-bottom: 0;">We will send you a OTP to verify your phone.</p>
                            <p style="margin-bottom: 0;">Message and Data rates may apply.</p>
                        </div>
                        <button type="submit" class="btn btn2 ">Continue</button>
                    </form>
                    <div class="sign">
                        Already Have Account ? <a href="" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Sign in<i class="bi bi-caret-right-fill" style="font-size: 16px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="forgetModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form>

                        <div class="text" style="margin-bottom: 5px;">
                            <p style="padding-right: 10px;margin-bottom:0;">Enter the email address or mobile phone number associated with your account.</p>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email or Phone">
                        </div>
                        <button type="submit" data-toggle="modal" data-target="#otpform" data-dismiss="modal" class="btn btn2">Send OTP</button>
                    </form>
                    <hr>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="otpform" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form>

                        <div class="text" style="margin-bottom: 5px;">
                            <p style="padding-right: 10px;margin-bottom:0;">To continue, complete this verification step. We've sent an OTP to the email . Please enter it below to complete verification..</p>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter OTP">
                        </div>
                        <button type="submit" data-toggle="modal" data-target="#changepassword" data-dismiss="modal" class="btn btn2">Continue</button>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="changepassword" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form>

                        <div class="text" style="margin-bottom: 5px;">
                            <h2>Create new password
                            </h2>
                            <p style="padding-right: 10px;margin-bottom:0;">We'll ask for this password whenever you sign in.
                            </p>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New password">
                        </div><br>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="confirm password">
                        </div>
                        <button type="submit" class="btn btn2">Save Changes and Sign</button>
                    </form>
                    <hr>
                    <div class="sign">
                        <a href="" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">Create New Account<i class="bi bi-caret-right-fill" style="font-size: 16px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form>
                        <div class="lock">
                            <img src="./images/error.png" alt="">
                        </div>
                        <div class="text" style="margin-bottom: 5px;">
                            You need to sign In First
                            <div class="links4">

                                <div class="signn">
                                    <label for="link1">New Here</label>
                                    <a href="" data-toggle="modal" data-target="#signupModal" data-dismiss="modal" id="link1">Create New Account<i class="bi bi-caret-right-fill" style="font-size: 16px;"></i></a>
                                </div>
                                <div class="signn">
                                    <label for="link2">Already have Account</label>
                                    <a href="" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" id="link2">Sign In<i class="bi bi-caret-right-fill" style="font-size: 16px;"></i></a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!--navbar needs here-->
    <!--special offer starts here -->
    <div class="offer" data-aos="fade-up" data-aos-duration="2200">
        <h2> Special Offer </h2>
    </div>


    <div class="slideshow-container" data-aos="fade-up" data-aos-duration="2200">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <a href="service/electrician.html"><img src="images/electrician1200.jpg"></a>
            <div class="text">hello</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <a href="service/painter.html"><img src="images/painter1200.jpg"></a>
            <div class="text">text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <a href="service/plumber.html"><img src="images/plumber1200.jpg"></a>
            <div class="text">message</div>
        </div>

    </div>
    <!-- spcial offer ends here -->
    <!--deal of the day heading -->
    <div class="dayheading" data-aos="fade-up" data-aos-duration="2200">
        <div class="day">
            <h2> Deal of the Day</h2>
        </div>
        <div class="day">
            <div class="time">
                <p id="demo"></p>
            </div>
        </div>

        <div class="day">
            <div class="but">
                <a href="#moreday"><button class="button1" id="but1" onclick="toggle_day('moreday');">show more</button></a>
            </div>
        </div>

    </div>
    <!--sdeal of the day heading ends -->
    <!--hover cards -->
    <div class="row" data-aos="fade-up" data-aos-duration="2200">
        <div class="column">
            <a href="service/cleaner.html">
                <div class="card2">
                    <img src="images/cleaner.png" />
                    <h2><a href="">Cleaner</a></h2>
                    <p>50% Offer<br>& good service</p>
                </div>
            </a>
        </div>
        <div class="column">
            <a href="service/electrician.html">
                <div class="card2">
                    <img src="images/electrican.png">
                    <h2>Electrician
            </a>
            </h2>
            <p>750 RS <br>Total home electric work</p>
        </div>
        </a>
    </div>
    <div class="column">
        <a href="service/technician.html">
            <div class="card2">
                <img src="images/technician.png">
                <h2>Technician
        </a>
        </h2>
        <p>30% <br>discount on techician work</p>
    </div>
    </a>
    </div>
    <div class="column">
        <a href="service/mechanic.html">
            <div class="card2">
                <img src="images/mechanic.png">
                <h2>Mechanic
        </a>
        </h2>
        <p>50% bumper offer <br>on mechanical work</p>
    </div>
    </a>
    </div>

    </div>
    <div id="moreday" data-aos="fade-up" data-aos-duration="2200">
        <div class="row">
            <div class="column">
                <a href="service/cleaner.html">
                    <div class="card2">
                        <img src="images/cleaner.png" />
                        <h2><a href="">Cleaner</a></h2>
                        <p>50% Offer<br>& good service</p>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="service/electrician.html">
                    <div class="card2">
                        <img src="images/electrican.png">
                        <h2>Electrician
                </a>
                </h2>
                <p>750 RS <br>Total home electric work</p>
            </div>
            </a>
        </div>
        <div class="column">
            <a href="service/technician.html">
                <div class="card2">
                    <img src="images/technician.png">
                    <h2>Technician
            </a>
            </h2>
            <p>30% <br>discount on techician work</p>
        </div>
        </a>
    </div>
    <div class="column">
        <a href="service/mechanic.html">
            <div class="card2">
                <img src="images/mechanic.png">
                <h2>Mechanic
        </a>
        </h2>
        <p>50% bumper offer <br>on mechanical work</p>
    </div>
    </a>
    </div>
    </div>
    </div>



    <!-- hover cards ends here-->
    <div class="weekoffer" data-aos="fade-up" data-aos-duration="2200">
        <div class="week">
            <h2> Deal of the Week </h2>
        </div>
        <div class="week">
            <a href="#moreweek"><button class="button1" id="but2" onclick="toggle_week('moreweek');">show more</button></a>
        </div>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="2200">
        <div class="column">
            <a href="service/caretaker.html">
                <div class="card2">
                    <img src="images/childcare.png" width="100%">
                    <h3>Baby Sitter</h3>
                    <p>30% offer on</p>
                    <p>baby sitting Service</p>
                </div>
            </a>
        </div>



        <div class="column">
            <a href="service/cleaner.html">
                <div class="card2">
                    <img src="images/housecleaning.jpg" width="100%">
                    <h3>House cleaning</h3>
                    <p>30% offer on house cleaning service</p>
                </div>
            </a>
        </div>



        <div class="column">
            <a href="service/plumber.html">
                <div class="card2">
                    <img src="images/plumber.jpg" width="100%">
                    <h3>Plumbing services</h3>
                    <p>20% discount this week</p>
                </div>
            </a>
        </div>



        <div class="column">
            <a href="service/laundry.html">
                <div class="card2">
                    <img src="images/laundry.jpg" width="100%">
                    <h3>Laundry</h3>
                    <p>20% offer on</p>
                    <p>laundry</p>
                </div>
            </a>
        </div>
    </div>
    <div id="moreweek" data-aos="fade-up" data-aos-duration="2200">
        <div class="row">
            <div class="column">
                <a href="service/caretaker.html">
                    <div class="card2">
                        <img src="images/childcare.png" width="100%">
                        <h3>Baby Sitter</h3>
                        <p>30% offer on</p>
                        <p>baby sitting Service</p>
                    </div>
                </a>
            </div>



            <div class="column">
                <a href="service/cleaner.html">
                    <div class="card2">
                        <img src="images/housecleaning.jpg" width="100%">
                        <h3>House cleaning</h3>
                        <p>30% offer on house cleaning service</p>
                    </div>
                </a>
            </div>



            <div class="column">
                <a href="service/plumber.html">
                    <div class="card2">
                        <img src="images/plumber.jpg" width="100%">
                        <h3>Plumbing services</h3>
                        <p>20% discount this week</p>
                    </div>
                </a>
            </div>



            <div class="column">
                <a href="service/laundry.html">
                    <div class="card2">
                        <img src="images/laundry.jpg" width="100%">
                        <h3>Laundry</h3>
                        <p>20% offer on</p>
                        <p>laundry</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="monthoffer" data-aos="fade-up" data-aos-duration="2200">
        <div class="month">
            <h2> Deal of the month</h2>
        </div>
        <div class="week">
            <a href="#moremonth"><button class="button1" id="but3" onclick="toggle_month('moremonth');">show more</button></a>
        </div>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="2200">
        <div class="column">
            <a href="service/cleaner.html">
                <div class="card2">
                    <img src="images/cleaner.png" />
                    <h2>Cleaner</h2>
                    <p>50% Offer<br>& good service</p>
                </div>
            </a>
        </div>
        <div class="column">
            <a href="service/electrician.html">
                <div class="card2">
                    <img src="images/electrican.png">
                    <h2>Electrician
                    </h2>
                    <p>750 RS <br>Total home electric work</p>
                </div>
            </a>
        </div>
        <div class="column">
            <a href="service/technician.html">
                <div class="card2">
                    <img src="images/technician.png">
                    <h2>Technician
            </a>
            </h2>
            <p>30% <br>discount on techician work</p>
        </div>
        </a>
    </div>
    <div class="column">
        <a href="service/mechanic.html">
            <div class="card2">
                <img src="images/mechanic.png">
                <h2>Mechanic
        </a>
        </h2>
        <p>50% bumper offer <br>on mechanical work</p>
    </div>
    </a>
    </div>

    </div>
    <div id="moremonth" data-aos="fade-up" data-aos-duration="2200">
        <div class="row">
            <div class="column">
                <a href="service/cleaner.html">
                    <div class="card2">
                        <img src="images/cleaner.png" />
                        <h2><a href="">Cleaner</a></h2>
                        <p>50% Offer<br>& good service</p>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="service/electrician.html">
                    <div class="card2">
                        <img src="images/electrican.png">
                        <h2>Electrician
                </a>
                </h2>
                <p>750 RS <br>Total home electric work</p>
            </div>
            </a>
        </div>
        <div class="column">
            <a href="service/technician.html">
                <div class="card2">
                    <img src="images/technician.png">
                    <h2>Technician
            </a>
            </h2>
            <p>30% <br>discount on techician work</p>
        </div>
        </a>
    </div>
    <div class="column">
        <a href="service/mechanic.html">
            <div class="card2">
                <img src="images/mechanic.png">
                <h2>Mechanic
        </a>
        </h2>
        <p>50% bumper offer <br>on mechanical work</p>
    </div>
    </a>
    </div>
    </div>
    </div>

    <?php
    // userid
    if (isset($_SESSION['userid'])) {
        echo '
        <div class="footer ff" data-aos="fade-down" data-aos-duration="2000">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>Aak</span>anksha</h1>
                <hr>
                <p>AAKANKSHA is an MSME E-commerce platform registered under Indian government .It is a Consumer Service
                    company providing all the services at one place for wide range of customers from different
                    profession,age-groups,society </p>
                <hr>
                <div class="contact">
                    <span><i class="bi bi-house"></i> &nbsp; No. 115, Main Street, <br> Vijayanagar Banglore, <br> Inc
                        552 </span>
                    <hr>
                    <span> <i class="fa fa-envelope"></i> &nbsp; info@aakanksha.com</span>
                    <hr>
                    <span> <i class="fa fa-phone"></i> &nbsp; 123-456-789</span>
                    <hr>
                </div>
                <div class="socials">
                    <a href="https://twitter.com/AAKANKS57852311" target="_blank"> <i class="fab fa-twitter icon"></i>
                    </a>
                    <a href="https://www.facebook.com/AAKANKSHAcompany" target="_blank"> <i class="fab fa-facebook icon"></i> </a>
                    <a href="https://www.linkedin.com/company/aakankshaecommerce/?viewAsMember=true" target="_blank ">
                        <i class="fab fa-linkedin icon"></i> </a>
                    <a href="https://www.instagram.com/aakankshacompany/" target="_blank"> <i class="fab fa-instagram icon"></i> </a>
                    <a href="https://www.youtube.com/channel/UCQ79LZ_IrnxzkFL5MZxxOeg" target="_blank"> <i class="fab fa-youtube icon"></i> </a>
                </div>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <hr> <br>
                <ul>
                    <a href="./UserPage/userpage.php">
                        <li> <i class="bi bi-arrow-right-square-fill"></i> Home </li>
                    </a>
                    <hr>
                    <a href="#">
                        <li> <i class="bi bi-arrow-right-square-fill"></i> Shop </li>
                    </a>
                    <hr>
                    <a href="./footer/team.html">
                        <li> <i class="bi bi-arrow-right-square-fill"></i> Team</li>
                        <hr>
                        <a href="./footer/carousel-10/index.html">
                            <li> <i class="bi bi-arrow-right-square-fill"></i> Gallery</li>
                        </a>
                        <hr>
                        
                        <a href="./UserPage/UserFeedBack.php">
                            <li> <i class="bi bi-arrow-right-square-fill"></i> Feedback </li>
                        </a>
                        <hr>
                        <a href="#">
                            <li> <i class="bi bi-arrow-right-square-fill"></i> Help and Support</li>
                        </a>
                        <hr>
                        <a href="./footer/termsandcondition.html">
                            <li> <i class="bi bi-arrow-right-square-fill"></i> Terms and Conditions</li>
                        </a>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Email Newsletter</h2>
                <hr> <br>
                <p> Subscribe to our mailing list to get update </p> <br>
                <form action="#" method="post">
                    <input type="text" name="text" class="text-input contact-input" placeholder="Your full name...">
                    <br>
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address..."> <br>
                    <button type="submit" class="btn btn-big contact-btn"> Subscribe </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/g.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png"> <img src="https://img.icons8.com/color/36/000000/paypal.png"> <br>
            <i class="fa fa-copyright"></i> <strong> Aakanksha || 2021 </strong>
        </div>
    </div>
    <button class="goTop fas fa-arrow-up"></button>       
        ';
    } else {
        include('./IndexPage/Footer.php');
    }

    ?>


    <script src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/vendor/aos/aos.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="./assets/vendor/php-email-form/validate.js"></script>
    <script src="./assets/vendor/purecounter/purecounter.js"></script>
    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="./assets/js/main.js"></script>
    <script src="./js/lightningDeal.js"></script>
    <script src="./js/index.js"></script>
</body>
<script>
    window.addEventListener('load', () => {
        AOS.init({
            duration: 2200,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        })
    });
    AOS.init();

    $(document).ready(function() {
        $(window).scroll(function() {
            if (this.scrollY > 20) {
                $(".navbar").addClass("sticky");
                $(".goTop").show(2200);
            } else {
                $(".navbar").removeClass("sticky");
                $(".goTop").hide(2200);
            }
        });

        $(".goTop").click(function() {
            scroll(0, 0)
        });

    });
</script>
<script type="text/javascript">
    function toggle_day(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
        var x = document.getElementById("but1");
        if (x.innerHTML === "show more") {
            x.innerHTML = "show less";
        } else {
            x.innerHTML = "show more";
        }


        function toggle_month(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
            var x = document.getElementById("but3");
            if (x.innerHTML === "show more") {
                x.innerHTML = "show less";
            } else {
                x.innerHTML = "show more";
            }
        }


        function toggle_week(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
            var x = document.getElementById("but2");
            if (x.innerHTML === "show more") {
                x.innerHTML = "show less";
            } else {
                x.innerHTML = "show more";
            }
        }


    }
</script>

</html>