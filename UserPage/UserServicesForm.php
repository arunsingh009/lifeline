<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="../css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="../css/services.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(to right, #55de4b, #00de96, #00d8d1, #00cdf5, #00befc, #68bdfa, #90bcf5, #acbced, #c5cbf1, #dadcf5, #eeedfa, #ffffff);
        }
    </style>
</head>

<body>


    <div class="page-content mt-5">
        <div class="form-v1-content">
            <div class="wizard-form">
                <form class="form-register" action="#" method="post">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <p class="step-icon"><span>01</span></p>
                            <span class="step-text">Services Details</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Fill the Details</h3>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Full Address</legend>
                                            <input type="text" class="form-control" id="servicesaddress" placeholder=" Address" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Work Details
                                            </legend>
                                            <input type="text" class="form-control" id="work" placeholder=" Work Details" required>
                                        </fieldset>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>No. of Employee Needed</legend>
                                            <input type="text" class="form-control" id="noemployee" name="needed" placeholder="No. of Employee Needed" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Timing Details</legend>
                                            <input type="date" class="form-control" id="servicestime" name="time" placeholder="" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Date Details</legend>
                                            <input type="time" class="form-control" id="servicesdate" name="time" placeholder="" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder-range">
                                        <fieldset>
                                            <legend>Choose Available Pay Range</legend>
                                            <input type="range" min="0" max="15000" name="rangeinput" onchange="updateTextInput(this.value);">
                                            <input type="text" id="rangeinput" value="">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h2>
                            <p class="step-icon"><span>02</span></p>
                            <span class="step-text">Book And Pay</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Payment</h3>
                                    <p>Please enter your infomation and proceed to the next step so we can build your accounts.</p>
                                </div>
                                <div class="pay-button">
                                    <button class="btn-13" value=""> <span class="material-icons"> payment </span>Pay With Razor Pay</button>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery.steps.js"></script>
    <script src="../js/main1.js"></script>
    <script src="../php/js/javascript.js"></script>
    <script>
        function updateTextInput(val) {
            document.getElementById('rangeinput').value = val;
        }
    </script>

</body>

</html>