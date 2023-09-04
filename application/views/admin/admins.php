<div class="col-12" id="view">
	<div class="row justify-content-center">
		<div class="col-lg-5 col-12">
			<div class="table-home bg-white mg-bottom-20 content">
				<h3 class="text-center"><?=VI_ADMIN_ADMINS_TITLE_PAGE?></h3>
				<div class="row" id="load_admin">
					
				</div>
			</div>
		</div>
	</div>
</div>	
	
<div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addAdminModalLabel"><?=ALERT_ADMIN_ADMINS_TITLE?></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
			</div>

			<div class="modal-body">
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label"><?=VI_ADMIN_ADMINS_FORM_LOGIN?>:</label>
					<input class="form-control" id="addAdmin-nik" type="text" autocomplete="off">
				</div>
				<div class="mb-3">
					<label for="message-text" class="col-form-label"><?=VI_ADMIN_ADMINS_FORM_PASS?>:</label>
					<input class="form-control" id="addAdmin-pass" type="password" autocomplete="off">
				</div>
				<div class="mb-3">
					<button class="btn btn-outline-secondary" type="button" data-container="body" data-toggle="popover" data-placement="top" data-content="<em>Подсказка:</em><br><b>STEAM_x:x:xxxxx<br>[U:x:xxxxx]<br>STEAMID64"><i class="fas fa-info-circle"></i></button>
					<label for="message-text" class="col-form-label"><?=VI_ADMIN_ADMINS_FORM_STEAMID?>:</label>
					<input class="form-control" id="addAdmin-steam" type="text" autocomplete="off">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?=ALERT_ADMIN_ADMINS_SYBMIT_CANCEL?></button>
				<button data-bs-dismiss="modal" class="btn btn-primary" onclick="add_admin()"><?=ALERT_ADMIN_ADMINS_SYBMIT_ADD_ADMIN?></button>
			</div>
		</div>
	</div>
</div>

<script>
	load_admin();
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>