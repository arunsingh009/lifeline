<?php
session_start();
$id = $_SESSION["userid"];
//  ADD Connection File
include('../php/Connection.php');

$sql = "select * from sinup where id = '$id'";
$result = $conn->query($sql);
//
if ($result->num_rows > 0) {
  while ($rows = $result->fetch_assoc()) {
    $dname = $rows['name'];
    $dmobile = $rows['mobile'];
    $demail = $rows['email'];
    $dpassword = $rows['password'];
  }
} else {
?>
  <script>
    location.reload('./index.php');
  </script>
<?php
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>LifeLine Services | Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- for navbar -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- font type -->
  <!-- full userinfo body file index.css -->
  <!-- footer css file -->
  <link rel="stylesheet" href="../footer/footer.css">
  <!-- user profile css file -->
  <link rel="stylesheet" href="../css/userprofile.css">
  <!-- profile logo -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- for social and font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  <?php
  // Add navbar
  include('./userNavBar.php');
  ?>

  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-10 col-11 mx-auto">

        <nav aria-label="breadcrumb" class="mb-3">
          <ol class="breadcrumb  bg-commom">
            <li class="breadcrumb-item"><a href="userpage.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My Settings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile Information</li>
            <li class="breadcrumb-item d-none">My Booking</li>
            <li class="breadcrumb-item d-none">Manage Adresses</li>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <h5 style="color: red;  font-size: 30px; font-variant: small-caps;"><?php echo " <b>" . " WELCOME" . " : " . $_SESSION["username"] . "</b>" ?> </h5>


          </ol>
        </nav>
        <div class="row">
          <!-- right side navbar -->
          <div class="col-lg-3 col-md-4 d-md-block">
            <div class="card bg-common card-left bg-commom">
              <div class="card-body">
                <nav class="nav d-md-block d-none">
                  <a data-toggle='tab' class="nav-link active" aria-current="page" href="#profile">
                    <i class="fas fa-user mr-4"></i> Profile Information</a>
                  <a data-toggle='tab' class="nav-link" href="#booking">
                    <i class="fas fa-truck mr-4"></i> My Booking</a>
                  <a data-toggle='tab' class="nav-link" href="#manage">
                    <i class="fas fa-map-marker-alt mr-4"></i>Manage Adresses</a>
                </nav>
              </div>
            </div>
          </div>
          <!-- right side div starts -->
          <div class="col-lg-9 col-md-8">
            <div class="card">
              <div class="card-header border-bottom mb-3 d-md-none ">
                <ul class="nav nav-tabs card-header-tabs nav-fill">
                  <li class="nav-item">
                    <a data-toggle="tab" class="nav-link active" aria-current="page" href="#profile"> <i class="fas fa-user mr-1"></i></a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" class="nav-link" href="#booking"><i class="fas fa-truck mr-1"></i> </a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" class="nav-link" href="#manage"> <i class="fas fa-map-marker-alt mr-1"></i></a>
                  </li>

                </ul>
              </div>
              <!-- actual data which is live start -->
              <div class="card-body tab-content border-0 ">
                <!-- //actual profile data -->
                <div class="tab-pane active" id="profile">
                  <h6>YOUR PROFILE INFORMATION</h6>

                  <hr>
                  <form id="userform" method="POST">
                    <div class="mb-3">
                      <div class="profile-pic">
                        <label class="-label" for="file">
                          <span class="glyphicon glyphicon-camera"></span>
                          <span>Profile Image</span>
                        </label>
                        <input id="file" type="file" onchange="loadFile(event)" />
                        <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png" id="output" width="200" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Full Name </label>
                      <input type="text" class="form-control fullname-user" id="pname" placeholder="Fullname" value="<?php echo $dname; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
                      <input type="text" class="form-control number-user" id="pmobile" placeholder="Enter Mobile Number" value="<?php echo $dmobile; ?> " maxlength="10">
                      <samp id="pm"></samp>
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Email</label>
                      <input type="email" class="form-control email-user" id="pemail" placeholder="Enter Email" value="<?php echo $demail; ?>">
                      <samp id="pe"></samp>
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Password </label>
                      <input type="password" class="form-control email-user" id="ppassword" placeholder=" Enter Password" value="<?php echo $dpassword; ?>">
                      <samp id="pp"></samp>
                    </div>

                    <div class="d-flex justify-content-around">

                      <div class="first-control ">
                        <label for="exampleFormControlInput1" class="form-label">Gender </label><br>
                        <select name="gender" id="gender-user">
                          <option value="0" selected disabled>Select A Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <!--  -->
                      <button id="pbutton" type="button" class="btn btn-success">Edit </button>
                      <!--  -->
                      <div class="second-control">
                        <label for="exampleFormControlInput1" class="form-label">Date Of Birth</label><br>
                        <input type="date" id="dateofbirth-user" value="">
                      </div>
                    </div>
                    <div id="pbm"></div>
                    <!-- <div class="edit-save">
                      <a class="edit-button">Edit</a>
                      <a class="save-button">Save</a>
                    </div> -->



                  </form>
                </div>
                <!-- //actual account data -->
                <div class="tab-pane " id="booking">
                  <h6>My Booking</h6>
                  <hr>
                  <form>
                    <div class="right-side-middle-header">
                      <div class="booking-ongoing"> <a data-toggle="tab" href="#ongoing" class="active" aria-current="page">On Going</a></div>
                      <div class="booking-history"> <a data-toggle="tab" href="#history">Histroy</a></div>
                    </div>
                    <div class="tab-content right-side-bottom-header">

                      <div class="tab-pane right-side-ongoing active" id="ongoing">

                        <div class="right-side-bottom-image">
                          <img src="https://dweyg64kwaplt.cloudfront.net/assets/711987334d61c574b13ebb08ff7f0c71.png" alt="">
                        </div>
                        <p>No Bookings yet !</p>
                        <div class="right-service-booking-button">
                          <a href="userpage.html">Book A Service</a>
                        </div>
                      </div>
                      <div class="tab-pane right-side-pending" id="history">
                        <div class="right-side-bottom-image">
                          <img src="https://dweyg64kwaplt.cloudfront.net/assets/711987334d61c574b13ebb08ff7f0c71.png" alt="">
                        </div>
                        <p>No History yet !</p>
                        <div class="right-service-booking-button">
                          <a href="userpage.html">Book A Service</a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- //actual security data -->
                <div class="tab-pane " id="manage">
                  <h6>Manage Adresses</h6>
                  <hr>
                  <form id="UserFormAddress" method="POST">
                    <div class="address-part">
                      <div class="addres-left">
                        <div class="col-sm-7 text-center">
                          <table class="table">
                            <thead>
                              <tr>

                                <th scope="col">Country</th>
                                <th scope="col">State </th>
                                <th scope="col">City </th>
                                <th scope="col">Address </th>
                                <th scope="col">Pincode No </th>
                                <th scope="col">Home No</th>
                              </tr>
                            </thead>
                            <tbody id="tbody"></tbody>

                          </table>
                          <div id="msg"></div>
                        </div>
                      </div>
                      <div class="addres-right">
                        <span>
                          <i class="material-icons plusicons" data-toggle="modal" data-target="#modaladdressForm">add</i>
                          <span>Add Address</span>
                        </span>
                      </div>
                    </div>
                    <div class="modal fade" id="modaladdressForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content w-200">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">ADD ADDRESS
                            </h4>
                          </div>
                          <div class="modal-body">
                            <div class="md-form mb-3">
                              <div class="row">
                                <div class="col-sm-4">
                                  <h5>Country</h5>
                                  <select name="country" class="countries form-control" id="countryId">
                                    <option value="">Select Country</option>
                                  </select>

                                </div>
                                <div class="col-sm-4">
                                  <h5>State</h5>
                                  <select name="state" class="states form-control" id="stateId">
                                    <option value="">Select State</option>
                                  </select>
                                </div>
                                <div class="col-sm-4">
                                  <h5>City</h5>
                                  <select name="city" class="cities form-control" id="cityId">
                                    <option value="">Select City</option>
                                  </select>
                                </div>
                              </div>

                              <div class="mb-3 mt-3">
                                <label class="form-label">Enter Full Address :</label>
                                <input type="text" class="form-control" id="UserAddress" required>
                              </div>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Enter PinCode Number :</label>
                              <input type="text" class="form-control" id="UserPinCode">
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Enter Home No</label>
                            <input type="text" class="form-control" id="UserHome">
                          </div>

                          <div class="d-grid gap-2 mt-3">
                            <button id="UserButton" class="btn btn-primary" type="submit">Save Address </button>
                          </div>

                          <div id="userm"></div>
                        </div>
                      </div>
                    </div>
                </div>
                </form>
              </div>
              <!-- //actual notification data -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- footer
    <div class="footer ff" >
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>Aak</span>anksha</h1>
                <hr>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos recusandae, enim facere eligendi sit, fugiat earum est aspernatur dolorum quia nulla voluptas placeat quod atque, aliquid porro sint autem spike. </p>
                <hr>
                <div class="contact">
                    <span><i class="bi bi-house"></i> &nbsp; No. 115, Main Street, <br> Vijayanagar Banglore, <br> Inc 552 </span>
                    <hr>
                    <span> <i class="fa fa-envelope"></i> &nbsp; info@aakanksha.com</span>
                    <hr>
                    <span> <i class="fa fa-phone"></i> &nbsp; 123-456-789</span>
                    <hr>
                </div>
                <div class="socials">
                    <a href="https://twitter.com/AAKANKS57852311" target="_blank"> <i class="fab fa-twitter"></i> </a>
                    <a href="https://www.facebook.com/AAKANKSHAcompany" target="_blank"> <i class="fab fa-facebook"></i> </a>
                    <a href="https://www.linkedin.com/company/aakankshaecommerce/?viewAsMember=true" target="_blank"> <i class="fab fa-linkedin"></i> </a>
                    <a href="https://www.instagram.com/aakankshacompany/" target="_blank"> <i class="fab fa-instagram"></i> </a>
                    <a href="https://www.youtube.com/channel/UCQ79LZ_IrnxzkFL5MZxxOeg" target="_blank"> <i class="fab fa-youtube"></i> </a>
                </div>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <hr> <br>
                <ul>
                    <a href="index.html">
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
                        <a href="./footer/feedback.html">
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
                    <input type="text" name="text" class="text-input contact-input" placeholder="Your full name..."> <br>
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address..."> <br>
                    <button type="submit" class="btn btn-big contact-btn"> Subscribe </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/g.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png">            <img src="https://img.icons8.com/color/36/000000/paypal.png"> <br>
            <i class="fa fa-copyright"></i> <strong> Aakanksha || 2021  </strong>
        </div>
    </div>
    <button class="goTop fas fa-arrow-up"></button> -->

  <!-- <script src="index.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
</body>
<script src="../js/userinfo.js"></script>
<!--  Data Base file : -->
<script src="../php/js/jquery.js"></script>
<script src="../php/js/popper.min.js"></script>
<script src="../php/js/javascript.js"></script>
<script src="../php/js/UserProfile.js"></script>
<script src="../php/js/UserCountryStateCity.js"></script>
<script src="../php/js/UserAddress.js"></script>

<script>
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
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
        $(".goTop").show(1000);
      } else {
        $(".navbar").removeClass("sticky");
        $(".goTop").hide(1000);
      }
    });

    $(".goTop").click(function() {
      scroll(0, 0)
    });
  });
</script>

</html>