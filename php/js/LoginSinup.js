$(document).ready(function () {
    // sinup page Valied  email 
    $("#semail").keypress(function () {
        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
        if (!re) {
            $('#se').show();
            se = "<h6 class=' mt-3  text-danger'> Enter Valid Email ID</h6>";
            $("#se").html(se);
        } else {
            $('#se').hide();
        }
    });
    // Valied Password Input to Sinup
    $("#spassword").keypress(function () {
        let password = $("#spassword").val();
        if (password.length < 5) {
            $('#sp').show();
            sp = "<h6 class=' mt-3  text-danger'> Passwords must be at least 5 characters</h6>";
            $("#sp").html(sp);
        } else if (password.length < 3) {
            $('#sp').show();
            sp = "<h6 class=' mt-3  alert-warning'> Passwords must be at least 5 characters</h6>";
            $("#sp").html(sp);
        } else {
            $('#sp').hide();
        }
    });


    // Valid Mobile Number :
    $("#smobile").keypress(function () {
        let mobile = $("#smobile").val(); // 
        var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
        if (filter.test(mobile)) {
            $("#sm").hide();
        } else {
            $("#sm").show();
            smm = "<h6 class=' mt-3  text-danger'> Enter Valid Mobile Number </h6>";
            $("#sm").html(smm);

        }
    });
    // // Sinup Code
    $("#singupbutton").click(function (e) {
        e.preventDefault();
        let name = $("#sname").val();
        let mobile = $("#smobile").val();
        let email = $("#semail").val();
        let password = $("#spassword").val();
        // console.log(name);
        // console.log(mobile);
        // console.log(email);
        // console.log(password);
        mydata = {
            name: name,
            mobile: mobile,
            email: email,
            password: password
        };
        $.ajax({
            url: "./php/sinupData.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                //console.log(data);
                $("#singupform")[0].reset();
                msg = "<div class='alert alert-danger mt-4'>" + "<h5>" + data + "</h5>" + "</div>";
                $("#sbm").html(msg);
            },
        });
    });
    // login page
    // Valied Email Input to Login
    $("#lemail").keypress(function () {
        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
        if (!re) {
            $("#le").show();
            msg = "<h6 class=' mt-3  text-danger'> Enter Invalid Mobile Number </h6>";
            $("#le").html(msg);
        } else {
            $("#le").hide();
        }
    });

    $("#loginbutton").click(function (e) {
        e.preventDefault();
        let lemail = $("#lemail").val();
        let lpassword = $("#lpassword").val();
        console.log(lemail);
        console.log(lpassword);
        mydata = {
            lemail: lemail,
            lpassword: lpassword
        };
        $.ajax({
            url: "./php/logindata.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                // console.log(data+" LoginFile ");
                $("#loginform")[0].reset();
                Lm = "<div class='alert alert-danger mt-4'>" + "<h5>" + data + " </h5>" + "</div>";
                $("#lmb").html(Lm);
            },
        });
    });
});