

var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};


$(window).on("load", function(){

  $('.save-button').on('click', save_onclick);
  // $('.cancel-button').on('click', cancel_onclick);
  $('.edit-button').on('click', edit_onclick);

  $('.edit-button').hide();
  // $('.save-button').hide();
});

function edit_onclick(){
  setFormMode($(this).closest("form"), 'edit');

  // document.querySelector(".fullname-user").value = localStorage.getItem("fullname-user");
  // document.querySelector(".number-user").value = localStorage.getItem("number-user");
  // document.querySelector(".email-user").value = localStorage.getItem("email-user");
  //  document.getElementById("gender-user").value = localStorage.getItem("gender-user");
  //  document.getElementById("dateofbirth-user").value = localStorage.getItem("dateofbirth-user");
}


function save_onclick(){
  setFormMode($(this).closest("form"), 'view');


  // localStorage.setItem("fullname-user", u);
  // localStorage.setItem("number-user", v);
  // localStorage.setItem("email-user", x);
  // localStorage.setItem("gender-user", y);
  // localStorage.setItem("dateofbirth-user", z);
}


function setFormMode($form, mode){
  switch(mode){
      case 'view':
          $form.find('.save-button').hide();
          $form.find('.edit-button').show();
          $form.find("input, select").prop("disabled", true);
          break;
      case 'edit':
          $form.find('.save-button').show();
          $form.find('.edit-button').hide();
          $form.find("input, select").prop("disabled", false);
          break;
  }
}