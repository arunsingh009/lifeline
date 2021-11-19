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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/feature.css">
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/covid.css">
    <link rel="stylesheet" href="./footer/footer.css">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
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
    <?php
    // Add Nab Bar 
    include('./IndexPage/Navbar.php');
    // Services Section ADD 
    include('./IndexPage/ServicesSection.php');
    // caraousel
    include('./IndexPage/caraousel.php');
    //      featureedEmployee 
    include('./IndexPage/featureedEmployee.php');
    //  covid 
    include('./IndexPage/covid.php');
    // review
    include('./IndexPage/review.php');
    // ADD Footer File  :
    include('./IndexPage/Footer.php');
    ?>

    <script src="./js/index.js"></script>
    <script src="./js/employeeFeaturs.js"></script>
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

    <!-- Template Main JS File -->
    <script src="./js/servicessearching.js"></script>
    <script src="./js/servicesavalable.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./php/js/jquery.js"></script>
    <script src="./php/js/popper.min.js"></script>
    <script src="./php/js/javascript.js"></script>

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