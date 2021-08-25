<div class="row content">
    <div class="col user-content bg-white">
      	<div class="row">
      		<div class="col-12 col-lg-2">
      			<?php if (empty($steamapi['personaname'])): ?>
	      			<div class="row">
		      			<div class="col-12 user-name">
		      				<?php echo $nosteam;?>
		      			</div>
		      			<div class="col-12 user-img">
		      				<img src="/public/img/no-image.png" class="rounded mx-auto d-block">
		      			</div>
		      			<div class="col-12 user-info">
		      				<p>Игрок играет с пиратской версией игры</p>
		      			</div>
		      		</div>
	      		<?php else: ?>
		      		<div class="row">
		      			<div class="col-12 user-name">
		      				<?php echo $steamapi['personaname'];?>
		      			</div>
		      			<div class="col-12 user-img">
		      				<img src="<?php echo $steamapi['avatarfull'];?>" class="rounded mx-auto d-block">
		      			</div>
		      			<div class="col-12 user-info">
		      				<?php echo $sistem->userStatus($steamapi['personastate']);?>
		      				<?php echo $sistem->VacBanInfo($vac);?>
		      				<p><a class="text-color-green" href="<?php echo $steamapi['profileurl'];?>" target="_blank"><i class="fab fa-steam"></i> Профиль</a></p>
		      			</div>
		      		</div>
	      		<?php endif; ?>
		    </div>
		    <div class="col-12 col-lg-10 indent">
		      	<div class="row ">
		      		<?php if (empty($data)): ?>
		      			<p>Игрок не поставил ни одного рекорда</p>
            		<?php else: ?>
			      		<div class="col-12">
			      			<div class="row">
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text">Всего рекордов</div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['maps'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text">Рекордов основа</div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['base'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text">Бонусных рекордов</div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['bonus'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text">Прыжков</div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['jumps'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text">Стрейфов</div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['strafes'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>
			      			</div>
<<<<<<< Updated upstream
			      		</div>
			      		<div class="col-12 col-lg-6">
			      			<div class="row padding-20 section">
			      				<span>Рекордов по стилям</span>
			      				<?php foreach ($styleRecord as $styleItem):?>
				      				<div class="col-6">
				      					<div class="row ">
				      						<a href="<?php echo $this->route['auth']; ?>/style-<?php echo $styleItem['style']; ?>" class="right-col">
					      						<div class="col-6 font-300">
					      							<?php echo $style[$styleItem['style']];?>
					      						</div>
					      						<div class="col-6 section-value">
					      							<span><?php echo $styleItem['count_style'];?></span>
					      						</div>
				      						</a>
				      					</div>
				      				</div>
			      				<?php endforeach;?>
			      			</div>
			      		</div>
			      		<div class="col-12 col-lg-6">
			      			<div class="row padding-20 section_last">
			      				<span>Последние рекорды</span>
			      				<div class="table-responsive font-300">
								    <table class="table">
									    <thead>
									        <tr>
										        <th scope="col">Карта</th>
										        <th scope="col">Время</th>
										        <th scope="col">Очков</th>
									        </tr>
									    </thead>
									    <tbody class="table-tr">
									        <?php foreach ($lastrecords as $lastrecordsItem):?>
										        <tr>
												    <td><?php echo $lastrecordsItem['map'];?></td>
												    <td><?php echo $sistem->secToStr(round($lastrecordsItem['time']));?></td>
												    <td><?php echo $lastrecordsItem['points'];?></td>
										        </tr>
									        <?php endforeach;?>
									    </tbody>
								    </table>
								    <center><a href="<?php echo $this->route['auth']; ?>/allrecords" class="btn_all_records">все рекорды</a></center>
							    </div>
=======
			      			<div class="col-12 col-lg-6">
			      					<div class="row padding-20 section">
			      						<span>Рекордов по стилям</span>
			      						
			      						<?php foreach ($styleRecord as $styleItem):?>
				      						<div class="col-6">
				      							<div class="row">
				      								<div class="col-12">
				      									<div class="row">
				      										<a href="<?php echo $this->route['auth']; ?>/style-<?php echo $styleItem['style']; ?>" class="right-col">
					      										<div class="col-7 font-300">
							      									<?php 
													    			if (empty($style[$styleItem['style']])) {
													    				echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Данный стиль отсутствует в конфигурации"></i>';
													    			}else{
													    				echo $style[$styleItem['style']]['name'];
													    			}
							      									?>
							      								</div>
							      								<div class="col-5 section-value">
							      									<span><?php echo $styleItem['count_style'];?></span>
							      								</div>
							      							</a>
				      									</div>
				      								</div>
				      							</div>
				      						</div>
			      						<?php endforeach;?>
			      					</div>
			      			</div>
			      			<div class="col-12 col-lg-6">
			      					<div class="row padding-20 section_last">
			      						<span>Последние рекорды</span>
			      						<div class="table-responsive font-300">
								      		<table class="table">
									            <thead>
									              	<tr>
										                <th scope="col">Карта</th>
										                <th scope="col">Время</th>
										                <th scope="col">Очков</th>
									              	</tr>
									            </thead>
									            <tbody class="table-tr">
									            	<?php foreach ($lastrecords as $lastrecordsItem):?>
										              	<tr>
												            <td><?php echo $lastrecordsItem['map'];?></td>
												            <td><?php echo $sistem->secToStr(round($lastrecordsItem['time']));?></td>
												            <td><?php echo $lastrecordsItem['points'];?></td>
										              	</tr>
									              	<?php endforeach;?>
									            </tbody>

								          	</table>
								          	<center><a href="<?php echo $this->route['auth']; ?>/allrecords" class="btn_all_records">все рекорды</a></center>
							        	</div>
			      					</div>
>>>>>>> Stashed changes
			      			</div>
			      		</div>
		      		<?php endif; ?>
		      	</div>
		    </div>
      	</div>
    </div>
</div>