<div class="col-12">
	<div class="row justify-content-center">
		<div class="col-lg-5 col-12">
			<div class="table-home bg-white mg-bottom-20 content">
				<h3 class="text-center"><?=VI_ADMIN_DB_TITLE_PAGE?></h3>
				<div class="row">
					<div class="col-4">
						<div class="list-group" id="list-tab" role="tablist">
							<a class="list-group-item list-group-item-action active" id="list-db-list" data-toggle="list" href="#list-db" role="tab" aria-controls="db"><?=VI_ADMIN_DB_MENU_TIMER?></a>
						</div>
					</div>
					<div class="col-8">
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="list-db" role="tabpanel" aria-labelledby="list-db-list">
								
								<form action="/admin/db" method="POST">
									<div class="mb-3">
										<label for="message-text" class="col-form-label"><?=VI_ADMIN_DB_FORM_SIZE?>:</label>
										<input class="form-control" type="text" placeholder="<?php echo $size;?> MB" aria-label="readonly input example" readonly>

									</div>
									<input type="hidden" name="db-id" value="<?php echo $db['arraydb'][$id]['id'];?>">
									<button type="button" data-bs-toggle="modal" class="btn btn-secondary" data-bs-target="#clearRecordModal"><?=VI_ADMIN_DB_FORM_SYBMIT_CLEAR?></button>
									<div class="modal fade" id="clearRecordModal" tabindex="-1" aria-labelledby="clearRecordModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="addAdminModalLabel"><?=ALERT_ADMIN_DB_TITLE?></h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
												</div>
												
												<div class="modal-body">
														<?=ALERT_ADMIN_DB_CONTENT?>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?=ALERT_ADMIN_DB_CANCEL?></button>
													<button class="btn btn-danger" data-bs-dismiss="modal"><?=ALERT_ADMIN_DB_YES_CLEAR?></button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<script>
load_admin()
</script>