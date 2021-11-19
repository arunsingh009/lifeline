$(document).ready(function () {
    //  Featch Address User
    function showdata() {
        out = "";
        $.ajax({
            url: "../php/FetchAddress.php",
            method: "GET",
            dataType: "json",
            success: function (data) {
                // console.log(data);
                if (data) {
                    x = data;
                } else {
                    x = "";
                }
                for (i = 0; i < x.length; i++) {
                    out += "<tr><td>" + x[i].country + "</td><td>" + x[i].state +
                        "</td><td>" + x[i].city + "</td><td>" + x[i].address +
                        "</td><td>" + x[i].pincode + "</td><td>" + x[i].homeno +
                        + "</td><td>" +
                        "<button class='btn btn-danger btn-sm btn-del'  data-sid=" + x[i].addressid + "> Delete.</button>" + "</td></tr>";
                }
                $("#tbody").html(out);
            },
        });
    }
    // end show data function
    showdata();
    // // User Address Save
    $("#UserButton").click(function (e) {
        e.preventDefault();
        let country = $("#countryId").val();
        let state = $("#stateId").val();
        let city = $("#cityId").val();
        let address = $("#UserAddress").val();
        let pincode = $("#UserPinCode").val();
        let homeno = $("#UserHome").val();
        // console.log(country);
        // console.log(state);
        // console.log(city);
        // console.log(address);
        // console.log(pincode);
        // console.log(homeno);
        mydata = {
            country: country,
            state: state,
            city: city,
            address: address,
            pincode: pincode,
            homeno: homeno
        };
        $.ajax({
            url: "../php/UserAddress.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                //console.log(data);
                msgg = "<div class='alert alert-danger mt-3'>" + "<h5>" + data + "</h5>" + "</div>";
                $("#userm").html(msgg);
                $("#UserFormAddress")[0].reset();
                showdata();
            },
        });
    });
    //////////////////////////////////////////////////
    // this function is delete address
    $("#tbody").on("click", ".btn-del", function () {
        //console.log("Delete button ok sior");
        let id = $(this).attr("data-sid")
        console.log(id);
        mydata = { sid: id };
        // mythis=this;
        $.ajax({
            url: "../php/DeleteAddress.php",
            method: "post",
            data: JSON.stringify(mydata),
            success: function (data) {
                // console.log(data);  
                showdata();
                msg = "<div class='alert alert-danger mt-4'>" + "<h1>" + data + "</h1>" + "</div>";
                $("#msg").html(msg);

                //$(mythis).closest("tr").fadeOut();
            },
        });

    });

    //  edit function
    $("#tbody").on("click", ".btn-edit", function () {
        //   console.log("Edit  button ok sior");
        let id = $(this).attr("data-sid")
        // console.log(id);
        mydata = { sid: id };
        // mythis=this;
        $.ajax({
            url: "../php/EditAddress",
            method: "post",
            dataType: "json",
            data: JSON.stringify(mydata),
            success: function (data) {
                // console.log(data);  
                // msg = "<div class='alert alert-danger mt-4'>" + "<h1>" + data + "</h1>" + "</div>";
                // $("#msg").html(msg);

                // $("#idid").val(data.id);

                showdata();
                //$(mythis).closest("tr").fadeOut();
            },
        });

    });

});