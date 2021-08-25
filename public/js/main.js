var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
<<<<<<< Updated upstream
})
=======
})


if (document.querySelector(".error-steam")) {
  Swal.fire({
    title: "Ошибка авторизации!",
      text: "Вы не являетесь администратором!",
      icon: "error",
  });
}

>>>>>>> Stashed changes
