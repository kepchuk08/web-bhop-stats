<div class="col-12" id="view">
	<div class="row justify-content-center">
		<div class="col-lg-5 col-12">
			<div class="table-home bg-white mg-bottom-20 content">
				<h3 class="text-center">Администраторы</h3>
				<div class="row">
					<div class="col-4">
						<div class="list-group" id="list-tab" role="tablist">
							<button type="button" class="list-group-item list-group-item-action"role="tab" data-bs-toggle="modal" data-bs-target="#addAdminModal">Добавить администратора</button>
							<?php for ($id = 0; $id < $admins['count']; $id++):?>
								<a class="list-group-item list-group-item-action <?php if ($admins['arrayadmin'][$id]['id'] == 0){echo 'active';}?>" id="list-<?php echo $admins['arrayadmin'][$id]['login'];?>-list" data-toggle="list" href="#list-<?php echo $admins['arrayadmin'][$id]['login'];?>" role="tab" aria-controls="<?php echo $admins['arrayadmin'][$id]['login'];?>"><?php echo $admins['arrayadmin'][$id]['login'];?></a>
							<?php endfor;?>
						</div>
					</div>
					<div class="col-8">
						<div class="tab-content" id="nav-tabContent">
							<?php for ($id = 0; $id < $admins['count']; $id++):?>
								<div class="tab-pane fade show <?php if ($admins['arrayadmin'][$id]['id'] == 0){echo 'active';}?>" id="list-<?php echo $admins['arrayadmin'][$id]['login'];?>" role="tabpanel" aria-labelledby="list-<?php echo $admins['arrayadmin'][$id]['login'];?>-list">
									<form action="/admin/admins" method="POST">
										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Ник:</label>
											<input class="form-control" name="admin-Login" type="text" value="<?php echo $admins['arrayadmin'][$id]['login'];?>">
										</div>
										<div class="mb-3">
											<label for="message-text" class="col-form-label">Пароль:</label>
											<input class="form-control" name="admin-Pass" type="password" value="<?php echo $admins['arrayadmin'][$id]['pass'];?>">
										</div>
										<div class="mb-3">
											<button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="" data-bs-original-title="<em>Подсказка:</em><br><b>STEAM_x:x:xxxxx<br>[U:x:xxxxx]<br>STEAMID64"><i class="fas fa-info-circle"></i></button>
											<label for="message-text" class="col-form-label">Индификатор:</label>
											<input class="form-control" name="admin-Steam" type="text" value="<?php echo $admins['arrayadmin'][$id]['steamid'];?>">
											<input type="hidden" name="admin-Id" value="<?php echo $admins['arrayadmin'][$id]['id'];?>">
											<input type="hidden" name="edit" value="edit">
										</div>
										<br>
										<a class="btn btn-danger" href="admins/delete/<?php echo $admins['arrayadmin'][$id]['id'];?>">Удалить</a>
										<button type="sybmit" data-bs-dismiss="modal" class="btn btn-secondary">Изменить</button>
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
	
<div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addAdminModalLabel">Добавить администратора</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
			</div>
			<form action="/admin/admins" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Ник:</label>
						<input class="form-control" name="addAdmin-nik" type="text" autocomplete="off">
					</div>
					<div class="mb-3">
						<label for="message-text" class="col-form-label">Пароль:</label>
						<input class="form-control" name="addAdmin-pass" type="password" autocomplete="off">
					</div>
					<div class="mb-3">
						<button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="" data-bs-original-title="<em>Подсказка:</em><br><b>STEAM_x:x:xxxxx<br>[U:x:xxxxx]<br>STEAMID64"><i class="fas fa-info-circle"></i></button>
						<label for="message-text" class="col-form-label">Индификатор:</label>
						<input class="form-control" name="addAdmin-steam" type="text" autocomplete="off">
						<input type="hidden" name="add" value="add">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
					<button type="sybmit" data-bs-dismiss="modal" class="btn btn-primary">Добавить админа</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){  
    $('#trigger').click(function(){  
        $('#refresh').load('/admin/admins'); 
        location.reload();
    });    
});
</script>