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
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/feature.css">
    <link rel="stylesheet" href="../css/feedback.css">
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/covid.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    body {

        background-image: linear-gradient(to bottom, #accbee 0%, #e7f0fd 100%);

    }
</style>

<body>
    <!-- Nav Bar  -->
    <nav class="navbar navbar-expand-lg" data-aos="fade-down" data-aos-duration="1200">
        <img class="logo-nav" src="../images/logo.jpg">
        <div class="nav-animtion">
            <a class="navbar-brand" href="./userpage.php">LifeLine</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fas fa-bars">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nab">
                <li class="div"> <a href="./userpage.php">Home <span class="sr-only">(current)</span></a> </li>
                <li class="div"> <a href="../lightningDeal.php">Lightning Deal</a> </li>
                <li class="div"> <a href="../exploreEmployees/Search-by-Filter/explore.html">Explore Employee</a> </li>
                <li class="div"> <a href="./userinfo.php">My Settings</a> </li>
                <li class="div"> <a class="btn btn-outline-warning" href="../php/logout.php">Logout</a> </li>
            </ul>
            <div class="mx-5">
                <!-- <div class="btn-group" role="group">
                    <button class="btn profile-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle" style="font-size: 40px;"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="./userinfo.php">My Settings</a>
                        <hr>
                        <a class="dropdown-item" href="../php/logout.php">Logout</a>
                    </div>
                </div> -->
                <!-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div> -->
            </div>
    </nav>
    <!-- END Nav Bar -->
    <?php
    // Add Services Section
    include('./UserServices.php');
    ?>

    <!-- caraousel starts from here -->
    <div class="container-fluid c4" id="deals">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/Lifeline.png" class="d-block w-100 crimg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5> -->
                        <!-- <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/Lifeline2.png" class="d-block w-100 crimg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5> -->
                        <!-- <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/Lifeline3.png" class="d-block w-100 crimg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5> -->
                        <!-- <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- caraousel Ends Here  -->
    </div>

    <!-- featureed Employee Sextion starts here  -->
    <section class="emloyee-section" data-aos="fade-down" data-aos-duration="2000">
        <h3>Feature Employee</h3>
        <span class="employee-card-line"></span>

        <div class="employee-card-featuree">
            <div class="card-in">
                <div class="card-image"></div>
                <div class="card-text">
                    <span class="date">Carpentar</span>
                    <h2>Rahul</h2>
                    <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span>
                </div>
            </div>
            <div class="card-in">
                <div class="card-image"></div>
                <div class="card-text">
                    <span class="date">Carpentar</span>
                    <h2>Rahul</h2>
                    <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span>
                </div>
            </div>
            <div class="card-in">
                <div class="card-image card2"></div>
                <div class="card-text card2">
                    <span class="date">Interior Designer</span>
                    <h2>Sanjay</h2>
                    <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span>
                </div>
            </div>
            <div class="card-in">
                <div class="card-image card3"></div>
                <div class="card-text card3">
                    <span class="date">Mechanic</span>
                    <h2>Rocky</h2>
                    <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star_half
                    </span>
                </div>
            </div>
            <div class="card-in">
                <div class="card-image card4"></div>
                <div class="card-text card3">
                    <span class="date">Electrician</span>
                    <h2>Naman</h2>
                    <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star
                    </span> <span class="material-icons">
                        star_half
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- featured section ends here  -->

    <!-- Security starts from here  -->
    <div class="covid-and-all">
        <h3 style="text-align:center;">We ensure Hygine and your Saftey</h1>
            <div class="inside-covid">
                <div class="covid-image-left">
                    <p class="covid-content-title">Hygine</p>
                    <ul class="covid-content" type="square">
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                    </ul>

                </div>
                <div class="covid-image-middle">
                    <img src="../images/covid.svg" alt="">
                </div>
                <div class="covid-image-right">
                    <p class="covid-content-title">Covid Norms</p>
                    <ul class="covid-content" type="square">
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, magni.</li>
                    </ul>

                </div>
            </div>
    </div>

    <!-- review  wala section begins here   -->
    <div class="review" data-aos="fade-down" data-aos-duration="2000">
        <h3>Customer Feedback</h3>
        <span class="review-card-line">How Satisfied Our Customer are </span>
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="../assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>ganesh yadav</h3>

                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> I placed a request for a carpenter. Within 2 hours the carpenter was here, fixed my door latch and a mirror that needed to be put up on the wall and was
                                        done. Felt like magic!
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="../assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Rahul sharma</h3>

                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> I placed a request for a carpenter. Within 2 hours the carpenter was here, fixed my door latch and a mirror that needed to be put up on the wall and was
                                        done. Felt like magic!
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="../assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>Rahul sharma</h3>

                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> I placed a request for a carpenter. Within 2 hours the carpenter was here, fixed my door latch and a mirror that needed to be put up on the wall and was
                                        done. Felt like magic!
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="../assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                    <h3>Rahul sharma</h3>

                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> I placed a request for a carpenter. Within 2 hours the carpenter was here, fixed my door latch and a mirror that needed to be put up on the wall and was
                                        done. Felt like magic!
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                    <h3>Rahul sharma</h3>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> I placed a request for a carpenter. Within 2 hours the carpenter was here, fixed my door latch and a mirror that needed to be put up on the wall and was
                                        done. Felt like magic!.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                </div>
            </div>
        </section>
        <div class="swiper-pagination"></div>
    </div>
    <!-- review ends here  -->


    <!-- footer -->
    <?php
    //
    include('./userfooter.php');
    ?>

    <script src="../js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../js/servicessearching.js"></script>
    <script src="../js/servicesavalable.js"></script>
    <script src="../assets/js/main.js"></script>

</body>
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

    $(document).ready(function() {
        $("#search-services").on("keyup", function() {
            var value = $("#search-services").val().toLowerCase();
            $(".more").hide();
            $(".services-card").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });


        $("#search-services").on("", function() {
            // (".services-card").show()
            (this).value = "";
            (".card-toogle").hide()
            // (".card-toogle").hide();
            (".more").hide();
        });
    });


    $(document).ready(function() {
        $(".more").click(function() {
            $(".more").hide();
            $(".less").show();
            $(".card-toogle").show();
        });

        $(".less").click(function() {
            $(".card-toogle").hide();
            $(".more").show();
            $(".less").hide();
        })
    });
</script>

</html>