<div class="row">
	<div class="col-12">
		<div class="login-logo text-center">
			<img src="/public/img/logo-light.svg" width="80" height="80"/>Bhop <span class="text-color-green">Stats</span> <?=VI_ADMIN_LOGO_TEXT_AUTH?> 
		</div>
	</div>
	<div class="col-12">
		<div class="row justify-content-center">
			<div class="col-10 col-lg-4 pd-5">
				<form action="/admin/login" method="post">
					<div class="row mb-3">
						<label for="inputLogin3" class="col-sm-2 col-form-label text-light"><?=VI_ADMIN_FORM_LOGIN?></label>
						<div class="col-sm-10">
							<input type="text" name="login" class="form-control">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword3" class="col-sm-2 col-form-label text-light"><?=VI_ADMIN_FORM_PASS?></label>
						<div class="col-sm-10">
							<input type="password" name="password" class="form-control">
						</div>
					</div>
					<div class="input-group justify-content-center">
						<button type="submit" class="btn btn-outline-secondary" name="submit"><?=VI_ADMIN_SYBMIT_ENTER?></button>
						<?php if($check):?><a href="/auth" class="btn btn-outline-secondary"><?=VI_ADMIN_SYBMIT_STEAM?></a><?php endif?>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php if (isset($this->route['status'])) {
	echo '<div class="error-steam"></div>';
}?>
<script type="text/javascript">
	if (document.querySelector(".error-steam")) {
	    Swal.fire({
	        title: "<?=VI_ADMIN_ALERT_AUTH_TITLE?>",
	        text: "<?=VI_ADMIN_ALERT_AUTH_TEXT?>",
	        icon: "error",
	    });
	}
</script>