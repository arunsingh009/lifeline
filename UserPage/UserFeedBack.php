<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../css/lightningDeal.css">

    <title>Feedback Form</title>
</head>

<body>

    <div class="main-container  feedback-form">

        <div class="view">
            <img src="../footer/pics/feedback.jpg">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1 class="text-center mt-5 font-weight-bold">Feedback</h1>
                    <hr class="bg-white">
                    <h6 class="text-center">Please write your feedback below:</h6>

                    <form class="feedback">
                        <h3 class="mt-4">How do you rate your overall experience?</h3>

                        <div class="panel-container ratings-container">
                            <div class="rating">
                                <img src="../footer/pics/f1.svg" />
                                <small>Unhappy</small>
                            </div>
                            <div class="rating">
                                <img src="../footer/pics/f2.svg" />
                                <small>Neutral</small>
                            </div>
                            <div class="rating active">
                                <img src="../footer/pics/f3.svg" />
                                <small>Satisfied</small>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <label class="col-md-4">Full Name*<br> <input type="text" id="text" required="" placeholder="Aakanksha Vedi"></label>
                                <label class="col-md-4">Email*<br> <input type="text" id="text" required="" placeholder="aakanksha@gmail.com"></label>
                            </div>

                            <div class="row">
                                <label class="col-md-4">Age*<br> <input type="number" id="text" required="" placeholder="25"></label>
                                <label class="col-md-4 label-txt">Phone*<br> <input type="number" id="text" required="" placeholder="+92123456789"></label>
                            </div>

                            <div class="row">
                                <label class="col-md-8 label-txt">Message*<br> <textarea id="message" required="" placeholder="Write yor message here" cols="48" rows="5"></textarea></label>
                            </div>

                            <div class="row">
                                <button class="btn btn-primary submit-btn" id="send">Submit</button>
                            </div>
                        </div>
                    </form>

                    <div class="done hide">
                        <i class="bi bi-suit-heart-fill icon-heart"></i>
                        <strong>Thank you!</strong>
                        <p>We'll use your feedback to improve our customer support performance.</p>
                        <button class="contact-btn" id="doneBtn">Done</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--  ADD Footer Page -->
    <?php
    include('./userfooter.php');
    ?>

    <script>
        const ratingsEl = document.querySelectorAll(".rating");
        const sendBtn = document.querySelector("#send");
        const done = document.querySelector(".done");
        const feedback = document.querySelector(".feedback");
        const doneBtn = document.querySelector("#doneBtn");

        ratingsEl.forEach((el) => {
            el.addEventListener("click", () => {
                ratingsEl.forEach((innerEl) => {
                    innerEl.classList.remove("active");
                });
                el.classList.add("active");
            });
        });

        sendBtn.addEventListener('click', (e) => {
            e.preventDefault();
            done.classList.remove("hide");
            feedback.classList.add("hide");
        });

        doneBtn.addEventListener('click', () => {
            feedback.classList.remove("hide");
            done.classList.add("hide");
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


    <script>
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

</body>

</html>