$(document).ready(function () {
    // sinup page Valied  email 
    $("#pemail").keypress(function () {
        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
        if (!re) {
            $('#pe').show();
            se = "<h6 class=' mt-3  text-danger'> Enter Valid Email ID</h6>";
            $("#pe").html(se);
        } else {
            $('#pe').hide();
        }
    });
    // Valied Password Input to Sinup
    $("#ppassword").keypress(function () {
        let password = $("#ppassword").val();
        if (password.length < 5) {
            $('#pp').show();
            sp = "<h6 class=' mt-3  text-danger'> Passwords must be at least 5 characters</h6>";
            $("#pp").html(sp);
        } else if (password.length < 3) {
            $('#pp').show();
            sp = "<h6 class=' mt-3  alert-warning'> Passwords must be at least 5 characters</h6>";
            $("#pp").html(sp);
        } else {
            $('#pp').hide();
        }
    });

    // Valid Mobile Number :
    $("#pmobile").keypress(function () {
        let mobile = $("#smobile").val(); // 
        var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
        if (filter.test(mobile)) {
            $("#pm").hide();
        } else {
            $("#pm").show();
            smm = "<h6 class=' mt-3  text-danger'> Enter Valid Mobile Number </h6>";
            $("#pm").html(smm);

        }
    });
    // // Sinup Code
    $("#pbutton").click(function (e) {
        e.preventDefault();
        let name = $("#pname").val();
        let mobile = $("#pmobile").val();
        let email = $("#pemail").val();
        let password = $("#ppassword").val();
        let gender = $("#gender-user option:selected").val();
        let DOB = $("#dateofbirth-user").val();
        // console.log(name);
        // console.log(mobile);
        // console.log(email);
        // console.log(password);
        // console.log(gender);
        // console.log(DOB);
        mydata = {
            name: name,
            mobile: mobile,
            email: email,
            password: password,
            gender:gender,
            DOB:DOB
        };
        $.ajax({
            url: "../php/UserProfileData.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                //console.log(data);
                $("#userform")[0].reset();
                msg = "<div class='alert alert-danger mt-4'>" + "<h5>" + data + "</h5>" + "</div>";
                $("#pbm").html(msg);
            },
        });
    });
});