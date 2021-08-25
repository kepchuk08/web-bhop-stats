<div class="col-12" id="result">
	<div class="row justify-content-center">
		<div class="col-lg-5 col-12">
			<div class="table-home bg-white mg-bottom-20 content">
				<h3 class="text-center">Стили</h3>
				<table class="table">
					<thead>
						<tr>
							<th scope="col" class="text-center">Id</th>
							<th scope="col">Название</th>
							<th scope="col" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						<?php for ($id = 0; $id < $style['count']; $id++):?>
							<tr>
								<th scope="row" class="text-center id-style"><?php echo $style['arraystyle'][$id]['id'];?></th>
								<form action="/admin" method="post">
									<td>
										<input class="form-control" value="<?php echo $style['arraystyle'][$id]['name'];?>" type="text" name="name-style">
										<input type="hidden" name="id-style" value="<?php echo $style['arraystyle'][$id]['id'];?>">
									</td>
									<td class="text-center">
										<button type="sybmit" class="btn btn-outline-secondary">Изменить</button>
									</td>
								</form>
							</tr>
						<?php endfor;?>
					</tbody>
				</table>
				<center><button type="button" class="btn_all_records" data-bs-toggle="modal" data-bs-target="#addStyleModal">Добавить стиль</button></center>
			</div>
		</div>
	</div>
</div>	
<div class="modal fade" id="addStyleModal" tabindex="-1" aria-labelledby="addStyleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addStyleModalLabel">Добавить стиль</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
			</div>
			<form action="/admin" method="POST">
				<div class="modal-body">
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Id:</label>
						<input class="form-control" name="add-styleId" type="text" value="<?php echo $style['count'];?>" placeholder="<?php echo $style['count'];?>" readonly>
					</div>
					<div class="mb-3">
						<label for="message-text" class="col-form-label">Название:</label>
						<input class="form-control" name="add-styleName" type="text">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
					<button type="sybmit" data-bs-dismiss="modal" class="btn btn-primary" id="trigger">Добавить стиль</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){  
    $('#trigger').click(function(){  
        $('#refresh').load('/admin'); 
    });    
});
</script>