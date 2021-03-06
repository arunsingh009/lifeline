<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Employees</title>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- styles/css -->
    <link rel="stylesheet" href="../UserExplore/explore.css">
    <link rel="stylesheet" href="../css/index.css">

</head>

<body>
    <!-- Add Nav Bar : -->
    <?php
    include('./userNavBar.php');
    ?>
    <!-- End navbar -->
    <div class="explore-container">
        <div class="search-section">

            <header>
                <h1>Services</h1>
                <!-- <div class="search-box">
                    <form action="" onsubmit="return false">
                        <input type="text" id="search" placeholder="Search Services">
                    </form>
                </div> -->
                <div class="filter-box">
                    <!-- <a href="#" class="btn active" data-filter="all"> ALL </a>
                    <a href="#" class="btn" data-filter="carpenter"> CARPENTER </a>
                    <a href="#" class="btn" data-filter="electrician"> ELECTRICIAN </a>
                    <a href="#" class="btn" data-filter="laundry"> LAUNDRY </a>
                    <a href="#" class="btn" data-filter="cook"> COOK </a>
                    <a href="#" class="btn" data-filter="homecare"> HOMECARE </a>
                    <a href="#" class="btn" data-filter="cleaner"> CLEANER </a>
                    <a href="#" class="btn" data-filter="babysitter"> BABYSITTER </a>
                    <a href="#" class="btn" data-filter="technician"> TECHNICIAN </a>
                    <a href="#" class="btn" data-filter="touristguide"> TOURISTGUIDE </a>
                    <a href="#" class="btn" data-filter="security"> SECURITY </a>
                    <a href="#" class="btn" data-filter="painter"> PAINTER </a>
                    <a href="#" class="btn" data-filter="carpenter"> CARPENTER </a>
                    <a href="#" class="btn" data-filter="electrician"> ELECTRICIAN </a>
                    <a href="#" class="btn" data-filter="laundry"> LAUNDRY </a>
                    <a href="#" class="btn" data-filter="cook"> COOK </a>
                    <a href="#" class="btn" data-filter="homecare"> HOMECARE </a>
                    <a href="#" class="btn" data-filter="cleaner"> CLEANER </a>
                    <a href="#" class="btn" data-filter="babysitter"> BABYSITTER </a>
                    <a href="#" class="btn" data-filter="technician"> TECHNICIAN </a>
                    <a href="#" class="btn" data-filter="touristguide"> TOURISTGUIDE </a> -->

                    <button onclick="myFun()" class="services-dropbtn">Select Sevice</button>
                    <div id="services-myDropdown" class="services-dropdown-content services-show">
                        <input type="text" placeholder="Search Service" id="services-myInput" onkeyup="filterFun()">
                        <li class="btn active" data-filter="all"> ALL </li>
                        <li class="btn" data-filter="carpenter"> CARPENTER </li>
                        <li class="btn" data-filter="electrician"> ELECTRICIAN </li>
                        <li class="btn" data-filter="laundry"> LAUNDRY </li>
                        <li class="btn" data-filter="cook"> COOK </li>
                        <li class="btn" data-filter="homecare"> HOME CARE </li>
                        <li class="btn" data-filter="cleaner"> BABYSITTER </li>
                        <li class="btn" data-filter="technician"> TECHNICIAN </li>
                        <li class="btn" data-filter="touristguide"> TOURIST GUIDE </li>
                        <li class="btn" data-filter="security"> SECURITY GUARD </li>
                        <li class="btn" data-filter="painter"> PAINTER </li>
                        <li class="btn" data-filter="legalservices"> LEGAL SERVICES </li>
                        <li class="btn" data-filter="eventplanner"> EVENT PLANNER </li>
                        <li class="btn" data-filter="interiordesign"> INTERIOR DESIGN </li>
                        <li class="btn" data-filter="construction&enginner"> CONSTRUCTION & ENGINEER </li>
                        <li class="btn" data-filter="financial&accountiong"> FINANCIAL & ACCOUNTIONG </li>
                        <li class="btn" data-filter="houseshifting"> HOUSE SHIFTING </li>
                        <li class="btn" data-filter="mechanic"> MECHANIC </li>
                        <li class="btn" data-filter="repairman"> REPAIRMAN </li>
                        <li class="btn" data-filter="housecleaner"> HOUSE CLEANER </li>
                        <li class="btn" data-filter="plumber"> PLUMBER </li>
                    </div>
                </div>
            </header>

            <div class="price-range">
                <h2> Price </h2>
                <input type="range" id="myRange" class="slider" min="100" max="1000" value="500">
                <p> Value: <span id="value"></span> </p>
            </div>

            <div class="location">
                <h2>Location</h2>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Select Your City</button>
                    <div id="myDropdown" class="dropdown-content show">
                        <input type="text" placeholder="Search Location" id="myInput" onkeyup="filterFunction()">
                        <li>Andheri</li>
                        <li>Bandra</li>
                        <li>Bhubaneshwar</li>
                        <li>Borivali</li>
                        <li>Cuttack</li>
                        <li>Dahisar</li>
                        <li>Eachur Munderi</li>
                        <li>Firozobad</li>
                        <li>Goregaon</li>
                        <li>Guwahati</li>
                        <li>Haldia</li>
                        <li>Itwa, Uttar Pradesh</li>
                        <li>Jogeshwari</li>
                        <li>Juhu</li>
                        <li>Kochi</li>
                        <li>Kozhikode</li>
                        <li>Lakhanpur, Jammu And Kashmir</li>
                        <li>Maharastra</li>
                        <li>Manglaur Nagar Palika Parishad</li>
                        <li>New Delhi</li>
                        <li>Noida</li>
                        <li>Nagaon</li>
                        <li>Odaipatti</li>
                        <li>Other</li>
                        <li>Puri</li>
                        <li>Palasha</li>
                        <li>Rourkela</li>
                        <li>Shahjahanabad</li>
                        <li>Siri</li>
                        <li>Shahjahanabad</li>
                        <li>Thiruvananthapuram</li>
                        <li>Tughlqabad</li>
                        <li>Udaipur, Rajasthan</li>
                        <li>Vadali, Andhra Pradesh</li>
                        <li>Washi(Osmanabad)</li>
                        <li>Yenne Hole Marne</li>
                        <li>Zaheerabad</li>
                    </div>
                </div>
            </div>

            <div class="emp-available">
                <h2>Employee Available</h2>
                <div class="choice-emp">
                    <label class="employees" for="employee">Choose needed employee</label>
                    <select id="emp">
                        <option class="employe" value="employee">1</option>
                        <option class="employe" value="employee">2</option>
                        <option class="employe" value="employee">3</option>
                        <option class="employe" value="employee">4</option>
                        <option class="employe" value="employee">5</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="filtered-section">
            <main>
                <div class="slide-container">
                    <section class="container" id="employees">
                        <div class="employee carpenter">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Steve Johns </p>
                                <h2> CARPENTER </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee carpenter">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Kai Parker </p>
                                <h2> CARPENTER </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee carpenter">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Paul Johns </p>
                                <h2> CARPENTER </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee electrician">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Luis Merry </p>
                                <h2> ELECTRICIAN </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee laundry">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Ashok Mehra </p>
                                <h2> LAUNDRY </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee cook">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Samantha Kaur </p>
                                <h2> COOK </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee cook">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Samantha Kaur </p>
                                <h2> COOK </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee homecare">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Tony Stark </p>
                                <h2> HOME CARE </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee cleaner">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Rebekha Mikelson </p>
                                <h2> HOUSE CLEANER </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee babysitter">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Klause Mikelson </p>
                                <h2> BABYSITTER </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee technician">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Damon Salvator </p>
                                <h2> TECHNICIAN </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee touristguide">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Stefen Megas </p>
                                <h2> TOURIST GUIDE </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee touristguide">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Cardi Megas </p>
                                <h2> TOURIST GUIDE </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee security">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Stefen Salvator </p>
                                <h2> SECURITY GUARD </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                        <div class="employee painter">
                            <img src="../UserExplore/images/s1.jpg" alt="">
                            <div class="employee-details">
                                <p> Stefen Salvator </p>
                                <h2> PAINTER </h2>
                                <a href="#"> Book Now </a>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>

    <script src="../UserExplore/explore.js"></script>

</body>

</html>