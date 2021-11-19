<nav class="navbar navbar-expand-lg" data-aos="fade-down" data-aos-duration="1200">
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
            <li class="div"> <a href="../exploreEmployees/Search-by-Filter/explore.html">Explore Employee</a> </li>
            <li class="div"> <a href="./service/serviceprovide.html">Reigster As Service Provider</a> </li>
        </ul>
        <div class="mx-2">
            <button class="btn btn1" data-toggle="modal" data-target="#loginModal"><i class="bi bi-box-arrow-in-right"></i> Sign in</button>
            <button class="btn btn1" data-toggle="modal" data-target="#signupModal"><i class="bi bi-person-plus-fill"></i> Sign UP</button>
        </div>
</nav>


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
                <form id="loginform" method="POST">
                    <div class="form-group">
                        <label for="">Email or mobile Phone number</label>
                        <input type="email" class="form-control" id="lemail">
                        <samp id="le"></samp>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="lpassword">
                    </div>
                    <div class="text">
                        <p style="margin-bottom: 0; padding-right: 20px;">By continuing, you agree to Lifeline's <a href="#">Terms of Use </a></p>
                        <p style="margin-bottom: 0; padding-right:221px;"> and <a href="">Privacy Policy</a>.</p>
                    </div>
                    <div class="form-group">
                        <button id="loginbutton" type="submit" class="btn btn2">Continue</button>
                    </div>
                    <div id="lmb"> </div>
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
                <form id="singupform" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="name" class="form-control" id="sname" aria-describedby="emailHelp" placeholder="">
                        <samp id="sn"></samp>
                    </div>
                    <div class="form-group">
                        <label for="name">Mobile Number</label>
                        <input type="text" class="form-control" id="smobile" placeholder="">
                        <samp id="sm"></samp>
                    </div>
                    <div class="form-group">
                        <label for="name">Email </label>
                        <input type="email" class="form-control" id="semail" placeholder="">
                        <samp id="se"></samp>
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="form-control" id="spassword" placeholder="At least 8 Characters">
                        <samp id="sp"></samp>
                    </div>


                    <button type="submit" id="singupbutton" class="btn btn2 ">Continue</button>

                    <div id="sbm"></div>
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
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Email or Phone">
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
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter OTP">
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
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="New password">
                    </div><br>
                    <div class="form-group">
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="confirm password">
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
<!--  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<script src="./php/js/jquery.js"></script>
<script src="./php/js/popper.min.js"></script>
<script src="./php/js/javascript.js"></script>
<script src="./php/js/LoginSinup.js"></script>