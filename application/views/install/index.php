<div class="row">
	<div class="col-12">
		<div class="login-logo text-center">
			<img src="/public/img/logo-light.svg" width="80" height="80"/>Bhop <span class="text-color-green">Stats</span> 
		</div>
	</div>
	<div class="col-12">
		<div class="row justify-content-center ">
			<div class="col-10 col-lg-4 pd-5 bg-white table-home">
				<form action="install" method="post">
					<h1 class="text-center">Установка</h1>
					<p class="h3">Подключение базы данных таймера</p>
					<div class="row mb-3 justify-content-center">
						<div class="col-sm-10">
							<input type="text" id="host" name="host" class="form-control" placeholder="localhost">
						</div>
						<div class="col-sm-10">
							<input type="text" id="bd-name" name="bd-name" class="form-control" placeholder="Название базы данных">
						</div>
						<div class="col-sm-10">
							<input type="text" id="bd-user" name="bd-user" class="form-control" placeholder="Имя пользователя">
						</div>
						<div class="col-sm-10">
							<input type="password" id="bd-password" name="bd-password" class="form-control" placeholder="Пароль">
						</div>
					</div>
					<p class="h3">Steam Web API Key</p>
					<figcaption class="blockquote-footer">
    					Получить API Key вы можете нажав <a href="https://steamcommunity.com/dev" target="_blank">ЗДЕСЬ</a>
					</figcaption>
					<div class="row mb-3 justify-content-center">
						<div class="col-sm-10">
							<input type="text" name="steamapikey" class="form-control" placeholder="Ключ api стима">
						</div>
					</div>
					<p class="h3">Администратор</p>
					<div class="row mb-3 justify-content-center">
						<div class="col-sm-10">
							<input type="text" name="admin-login" class="form-control" placeholder="Логин">
						</div>
						<div class="col-sm-10">
							<input type="password" name="admin-password" class="form-control" placeholder="Пароль">
						</div>
						<div class="col-sm-10 d-flex">
							<button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Подсказка:</em><br>STEAM_X:X:XXXXX<br>[U:X:XXXXX]<br>STEAMID64"><i class="fas fa-info-circle"></i></button>
							<input type="text" name="admin-steamid" class="form-control" placeholder="SteamID">
						</div>
					</div>
					
					<div class="input-group justify-content-center">
						<button type="submit" class="btn btn-outline-secondary" name="submit">Установить</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

/*function check_connection_bd(){
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
		contentType: true,
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
}*/
</script>