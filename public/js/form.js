$(document).ready(function() {
	$('form').submit(function(event) {
		var json;
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
<<<<<<< Updated upstream
				json = jQuery.parseJSON(result);
				if (json.url) {
					window.location.href = '/' + json.url;
=======
				console.log(result);
				json = jQuery.parseJSON(result);

				if (json.url) {
					window.location.href = '/' + json.url;
				}else if(json.status == 'install'){
					Swal.fire({
						icon: json.status,
						text: json.message,
					});
					const swalWithBootstrapButtons = Swal.mixin({
						customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn btn-danger'
						},
						buttonsStyling: false
					});

					swalWithBootstrapButtons.fire({
						title: 'Установка завершена',
						text: "Теперь вы можете пользоваться Bhop Stats, так же вы можете перейти в админ панель и добавить новые стили",
						icon: 'success',
						showCancelButton: true,
						confirmButtonText: 'Перейти на сайт',
						cancelButtonText: 'Админ панель',
						reverseButtons: true
					}).then((result) => {
						if (result.isConfirmed) {
							window.location.href = '/';
						} else if (result.dismiss === Swal.DismissReason.cancel) {
							window.location.href = '/admin';
						}
					});
				}else{
					Swal.fire({
						icon: json.status,
						text: json.message,
					});
>>>>>>> Stashed changes
				}
			},
		});
	});
<<<<<<< Updated upstream
});
=======
});
>>>>>>> Stashed changes
