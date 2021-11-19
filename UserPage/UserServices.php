<?PHP
// session_start();
// $_SESSION["servicesname"] = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- tag line -->
    <div id="tagline">
        <h4>Service on Demand</h4>
        <h6>Our Services : <span id="changing-text"></span></h6>
    </div>

    <!-- Search Section  -->
    <div class="service-searching">
        <div class="service-all-input">
            <div class="search-input">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" placeholder="Search Your City" id="search-location">
                <span class="material-icons">expand_more</span>
            </div>

        </div>
        <div class="service-all-input">
            <div class="services-input">
                <span class="material-icons"> search </span>
                <input type="text" placeholder="Search for a service" id="search-services">
            </div>
        </div>
    </div>


    <!-- ServicesSection  -->



    <div class="avaialble-service-section">
        <div class="avaialble-service-section-inside-header">
            <h3>Available Services</h3>
            <div class="avaialble-service-section-inside-header-all">
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-1">
                        <img src="../available services image/electric.png" alt="">
                        <p>Electrician</p>
                        <?php
                        $_SESSION["servicesname"] = " Electrician ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-2">
                        <img src="../available services image//carpentar.png" alt="">
                        <p>Carpanter</p>
                        <?php
                        $_SESSION["servicesname"] = " Carpanter ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-3">
                        <img src="../available services image/plumber.png" alt="">
                        <p>Plumber</p>
                        <?php
                        $_SESSION["servicesname"] = " Plumber ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-4">
                        <img src="../available services image/baby.png" alt="">
                        <p>BabySitting</p>
                        <?php
                        $_SESSION["servicesname"] = " BabySitting ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-5">
                        <img src="../available services image/security.png" alt="">
                        <p>Security</p>
                        <?php
                        $_SESSION["servicesname"] = " Security ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-6">
                        <img src="../available services image/homecare.png" alt="">
                        <p>HomeCare</p>
                        <?php
                        $_SESSION["servicesname"] = " HomeCare ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-7">
                        <img src="../available services image/paint.png" alt="">
                        <p>Painter</p>
                        <?php
                        $_SESSION["servicesname"] = " Painter ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-8">
                        <img src="../available services image/mechanic.png" alt="">
                        <p>Mechanic</p>
                        <?php
                        $_SESSION["servicesname"] = " Mechanic ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-9">
                        <img src="../available services image/laundry.png" alt="">
                        <p>Laundry</p>
                        <?php
                        $_SESSION["servicesname"] = " Laundry ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-10 card-toogle">
                        <img src="../available services image/Construction-PNG.png" alt="">
                        <p>Constructon</p>
                        <?php
                        $_SESSION["servicesname"] = " Constructon ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-11 card-toogle">
                        <img src="../available services image/cook.png" alt="">
                        <p>Cook</p>
                        <?php
                        $_SESSION["servicesname"] = " Cook ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-12 card-toogle">
                        <img src="../available services image/tech.png" alt="">
                        <p>Technician</p>
                        <?php
                        $_SESSION["servicesname"] = " Technician ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-13 card-toogle">
                        <img src="../available services image/finance-png-20988.png" alt="">
                        <p>Financial</p>
                        <?php
                        $_SESSION["servicesname"] = " Financial ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-14 card-toogle">
                        <img src="../available services image/interior.png" alt="">
                        <p>Interior Designer</p>
                        <?php
                        $_SESSION["servicesname"] = " Interior Designer ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-15 card-toogle">
                        <img src="../available services image/event.png" alt="">
                        <p>Event Planner</p>
                        <?php
                        $_SESSION["servicesname"] = " Event Planner ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-16 card-toogle">
                        <img src="../available services image/home service.png" alt="">
                        <p>House Services</p>
                        <?php
                        $_SESSION["servicesname"] = " House Services ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-17 card-toogle">
                        <img src="../available services image/home cleaner.png" alt="">
                        <p>Home Cleaner</p>
                        <?php
                        $_SESSION["servicesname"] = " Home Cleaner ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-18 card-toogle">
                        <img src="../available services image/legal1.png" alt="">
                        <p>Legal Services</p>
                        <?php
                        $_SESSION["servicesname"] = " Legal Services ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-19 card-toogle">
                        <img src="../available services image/repairman.png" alt="">
                        <p>Repair Man</p>
                        <?php
                        $_SESSION["servicesname"] = " Repair Man ";
                        ?>
                    </div>
                </a>
                <a href="./UserServicesForm.php">
                    <div class="services-card services-card-20 card-toogle">
                        <img src="../available services image/tour.png" alt="">
                        <p>Tour</p>
                        <?php
                        $_SESSION["servicesname"] = " Tour ";
                        ?>
                    </div>
                </a>
            </div>
        </div>
        <button class="btn-third less">View less</button>
        <button class="btn-third more">View More</button>
    </div>
</body>

</html>