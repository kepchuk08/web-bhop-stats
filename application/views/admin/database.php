<div class="col-12">
	<div class="row justify-content-center">
		<div class="col-lg-5 col-12">
			<div class="table-home bg-white mg-bottom-20 content">
				<h3 class="text-center">Базы данных</h3>
				<div class="row">
					<div class="col-4">
						<div class="list-group" id="list-tab" role="tablist">
							<?php for ($id = 0; $id < $db['count']; $id++):?>
								<a class="list-group-item list-group-item-action <?php if ($db['arraydb'][$id]['id'] == 0){echo 'active';}?>" id="list-<?php echo $db['arraydb'][$id]['id'];?>-list" data-toggle="list" href="#list-<?php echo $db['arraydb'][$id]['id'];?>" role="tab" aria-controls="<?php echo $db['arraydb'][$id]['id'];?>">БД Таймера</a>
							<?php endfor;?>
						</div>
					</div>
					<div class="col-8">
						<div class="tab-content" id="nav-tabContent">
							<?php for ($id = 0; $id < $db['count']; $id++):?>
								<div class="tab-pane fade show <?php if ($db['arraydb'][$id]['id'] == 1){echo 'active';}?>" id="list-<?php echo $db['arraydb'][$id]['id'];?>" role="tabpanel" aria-labelledby="list-<?php echo $db['arraydb'][$id]['id'];?>-list">
									
									<form action="/admin/db" method="POST">
										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Хост:</label>
											<input class="form-control" name="db-host" type="text" value="<?php echo $db['arraydb'][$id]['host'];?>">
										</div>
										<div class="mb-3">
											<label for="message-text" class="col-form-label">База данных:</label>
											<input class="form-control" name="db-name" type="text" value="<?php echo $db['arraydb'][$id]['dbname'];?>">
										</div>
										<div class="mb-3">
											<label for="message-text" class="col-form-label">Пользователь:</label>
											<input class="form-control" name="db-user" type="text" value="<?php echo $db['arraydb'][$id]['user'];?>">
										</div>
										<div class="mb-3">
											<label for="message-text" class="col-form-label">Пароль:</label>
											<input class="form-control" name="db-pass" type="password" value="<?php echo $db['arraydb'][$id]['password'];?>">
										</div>
										
										<br>
										<div class="mb-3">
											<label for="message-text" class="col-form-label">Размер базы данных:</label>
											<input class="form-control" type="text" placeholder="<?php echo $size;?> МБ" aria-label="readonly input example" readonly>

										</div>
										<input type="hidden" name="db-id" value="<?php echo $db['arraydb'][$id]['id'];?>">
										<button type="button" data-bs-toggle="modal" class="btn btn-secondary" data-bs-target="#clearRecordModal">Очистить рекорды</button>
										<div class="modal fade" id="clearRecordModal" tabindex="-1" aria-labelledby="clearRecordModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="addAdminModalLabel">Очистить рекорды?</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
													</div>
													
													<div class="modal-body">
															При очистке таблицы данные невозможно восстановить, так же будут обнулены все очки игроков!!!
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
														<button class="btn btn-danger" data-bs-dismiss="modal">Да, очистить таблицу</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							<?php endfor;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	