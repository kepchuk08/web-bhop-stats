var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})


if (document.querySelector(".error-steam")) {
      Swal.fire({
          title: "Ошибка авторизации!",
          text: "Вы не являетесь администратором!",
          icon: "error",
      });
  }

function langselect(select) {
  /*var string = "";
  var out = "";
  if (select === 1) {
    string = "Русский";
  } else if (select === 2) {
    string = "English";
  } else if (select === 3) {
    string = "Deutsch";
  }*/
  out = document.getElementsByClassName('select-lang');
  out[0].placeholder = select;
  return;
}

function getTrack(select) {
  var out = "";
  out = document.getElementsByClassName('view-track');
  out[0].placeholder = select;
  return; 
}

function getStyle(select) {
  var out = "";
  out = document.getElementsByClassName('view-style');
  out[0].placeholder = select;
  return; 
}

function lselect(select) {
  var json;
  event.preventDefault();
  $.ajax({
    type:"POST",
    url:"/ajax",
    data:{'selectlang':select},
    success:function(result){
      location.reload();
    }
  });
}


$('#oldcss').on('click', function () {
    if ( $(this).is(':checked') ) {
        $("#steamapi").attr("readonly",true);
    } else {
        $("#steamapi").attr("readonly",false);
    }
})