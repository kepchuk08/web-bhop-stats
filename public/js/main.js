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


function warningClear()
{
  swal({
  title: "Очистить таблицу рекордов?",
  text: "После очистки данные нельзя будет восстановить!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Да, очистить!",
  closeOnConfirm: false
},
function(){
  swal("Deleted!", "Все рекорды очищены.", "success");
});
}


function check_connection_bd(){
  var host=$('#host').val();
  var bd_name=$('#bd-name').val();
  var bd_user=$('#bd-user').val();
  var bd_password=$('#bd-password').val();
  var json;
  event.preventDefault();
  $.ajax({
    type:"POST",
    url:"ajax",
    data:"&check_connection_bd=1&host="+host+"&bd-name="+bd_name+"&bd_user="+bd_user+"&bd_password="+bd_password,
    contentType: false,
    cache: false,
    processData: false,
    success:function(result){
      console.log(result);
      json = jQuery.parseJSON(result);
      swal({
        text: json.message,
        icon: json.status,
      });
    }
  });
}
