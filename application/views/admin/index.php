<div class="col-12" id="result">
	<div class="row justify-content-center">
		<div class="col-lg-5 col-12">
			<div class="table-home bg-white mg-bottom-20 content">
				<h3 class="text-center"><?=VI_ADMIN_INDEX_TITLE_PAGE?></h3>
				<table class="table">
					<thead id="load-style">
						
					</thead>
				</table>
				<center><button type="button" class="btn_all_records" data-bs-toggle="modal" data-bs-target="#addStyleModal"><?=VI_ADMIN_INDEX_SUBMIT_ADD_STYLE?></button></center>
			</div>
		</div>
	</div>
</div>	
<div class="modal fade" id="addStyleModal" tabindex="-1" aria-labelledby="addStyleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addStyleModalLabel"><?=VI_ADMIN_INDEX_SUBMIT_ADD_STYLE?></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
			</div>

			<div class="modal-body">
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Id:</label>
					<input class="form-control" id="add_styleId" type="text">
				</div>
				<div class="mb-3">
					<label for="message-text" class="col-form-label"><?=VI_ADMIN_INDEX_TABLE_NAME?>:</label>
					<input class="form-control" id="add_styleName" type="text">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?=VI_ADMIN_INDEX_SUBMIT_CLOUS?></button>
				<button data-bs-dismiss="modal" class="btn btn-primary" onclick="add_style()"><?=VI_ADMIN_INDEX_SUBMIT_ADD_STYLE?></button>
			</div>

		</div>
	</div>
</div>
<script>
	load_style();
</script>