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
					<h1 class="text-center"><?=VI_INSTALL_HEAD_TITLE?></h1>
					<p class="h3"><?=VI_INSTALL_LANG_TEXT?></p>
					<div class="input-group mb-3 justify-content-center">
						<div class="col-sm-10 d-flex">
							<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?=VI_INSTALL_LANG_SYBMIT?></button>
							<ul class="dropdown-menu">
								<li>
									<input type="radio" class="btn-check" name="getlanguage" id="ru" value="ru" required>
									<label class="btn" for="ru" onclick="langselect('Русский')">Русский</label>
								</li>
								<li>
									<input type="radio" class="btn-check" name="getlanguage" id="en" value="en">
									<label class="btn" for="en" onclick="langselect('English')">English</label>
								</li>
								<li>
									<input type="radio" class="btn-check" name="getlanguage" id="de" value="de">
									<label class="btn" for="de" onclick="langselect('Deutsch')">Deutsch</label>
								</li>
							</ul>
							<input type="text" class="form-control select-lang" placeholder="..." readonly>
						</div>
						
					</div>
					<p class="h3"><?=VI_INSTALL_CONNECT_DB_TEXT?></p>
					<div class="row mb-3 justify-content-center">
						<div class="col-sm-10">
							<input type="text" id="host" name="host" class="form-control" placeholder="<?=VI_INSTALL_FORM_HOST?>" required>
						</div>
						<div class="col-sm-10">
							<input type="text" id="bd-name" name="bd-name" class="form-control" placeholder="<?=VI_INSTALL_FORM_NAME?>" required>
						</div>
						<div class="col-sm-10">
							<input type="text" id="bd-user" name="bd-user" class="form-control" placeholder="<?=VI_INSTALL_FORM_USER?>" required>
						</div>
						<div class="col-sm-10">
							<input type="password" id="bd-password" name="bd-password" class="form-control" placeholder="<?=VI_INSTALL_FORM_PASS?>" required>
						</div>
					</div>
					<p class="h3">Steam Web API Key</p>
					<figcaption class="blockquote-footer">
    					<?=VI_INSTALL_TEXT_STEAMAPI?>
					</figcaption>
					<div class="row mb-3 justify-content-center">
						<div class="col-sm-10">
							<input type="checkbox" class="btn-check" id="oldcss" name="oldcss" value="1" autocomplete="off">
							<label class="btn btn-outline-secondary" for="oldcss" data-bs-toggle="tooltip" title="<?=VI_INSTALL_CSSOLD_TITLE?>">CS:S v34</label><br>
						</div>
					</div>
					<div class="row mb-3 justify-content-center">
						<div class="col-sm-10">
							<input type="text" id="steamapi" name="steamapikey" class="form-control" placeholder="<?=VI_INSTALL_FORM_STEAMAPI?>" >
						</div>
					</div>
					<p class="h3"><?=VI_INSTALL_ADD_ADMIN_TEXT?></p>
					<div class="row mb-3 justify-content-center">
						<div class="col-sm-10">
							<input type="text" name="admin-login" class="form-control" placeholder="<?=VI_INSTALL_FORM_ADMIN_LOGIN?>" required>
						</div>
						<div class="col-sm-10">
							<input type="password" name="admin-password" class="form-control" placeholder="<?=VI_INSTALL_FORM_ADMIN_PASS?>" required>
						</div>
						<div class="col-sm-10 d-flex">

							<button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-html="true" title="<?=HED_SEARCH_TITLE?>"><i class="fas fa-info-circle"></i></button>
							<input type="text" name="admin-steamid" class="form-control" placeholder="<?=VI_INSTALL_FORM_ADMIN_STEAMID?>">
						</div>
					</div>
					
					<div class="input-group justify-content-center">
						<button type="submit" class="btn btn-outline-secondary" name="submit"><?=VI_INSTALL_FORM_SYBMIT?></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>