<div class="row content">
	<div class="col-12 table-home bg-white">
		<div class="row">
			<div class="col-12 col-lg-3">
				<div class="row block-map-info">
					<div class="col-12 p-0">
						<p><h4><?php echo $mapname;?></h4></p>
						<div class="block-inform">
							<span>информация</span>
							<ul class="list-group text-color-112365">
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    Рекордов
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['AllRecords'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    Основа рекордов
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['BaseRecords'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    Бонус рекордов
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['BonusRecords'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    Прыжков
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['AllJumps'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    Стрейфов
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['AllStrafes'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    Ср. синхронизация
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['AllSync'];?>%</span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    Сложность карты
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['MapsTier'];?></span>
							  	</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-9 pd-20">
				<div class="row">
					<div class="col-12">
						<div class="row">
						  	<div class="col-12">
							    <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
							      	<a class="list-group-item list-group-item-action active" id="list-base-list" data-toggle="list" href="#base" role="tab" aria-controls="home">Основа</a>
							      	<a class="list-group-item list-group-item-action" id="list-bonus-list" data-toggle="list" href="#bonus" role="tab" aria-controls="bonus">Бонус</a>
							      	<a class="list-group-item list-group-item-action" id="list-lastrecords-list" data-toggle="list" href="#lastrecords" role="tab" aria-controls="lastrecords">Последние рекорды</a>
							    </div>
						  	</div>
						  	<div class="col-12">
						    	<div class="tab-content" id="nav-tabContent">
      								<div class="tab-pane fade show active" id="base" role="tabpanel" aria-labelledby="list-base-list">
      									<div class="row">
      										<h3>ТОП РЕКОРДЫ</h3>
      										<?php foreach ($stylemapbase as $stylerecordItem):?>
				      							<div class="col-3 col-lg-2 pd-5">
				      								<div class="section">
				      									<div class="row block-info">
				      										<div class="col-12 block-info-text"><?php echo $style[$stylerecordItem['style']];?> <span><?php echo $stylerecordItem['count_style'];?></span></div>
				      										<div class="col-12 block-info-value">
				      											<?php 
				      											echo $sistem->userName($sistem->toprecbase($mapname, $stylerecordItem['style'])['auth']);
				      											echo '<br>'.$sistem->secToStr(round($sistem->toprecbase($mapname, $stylerecordItem['style'])['time']));
				      											?>
				      										</div>
				      									</div>
				      								</div>
				      							</div>
				      						<?php endforeach;?>
			      						</div>
      								</div>
      								<div class="tab-pane fade" id="bonus" role="tabpanel" aria-labelledby="list-bonus-list">
      									<div class="row">
      										<?php if (empty($stylemapbonus)): ?>
      											<h2>Нет ни одного бонусного рекорда</h2>
      										<?php else: ?>
				      						<?php foreach ($stylemapbonus as $stylemapbonusItem):?>
				      						<div class="col-3 col-lg-2 pd-5">
				      								<div class="section">
				      									<div class="row block-info">
				      										<div class="col-12 block-info-text"><?php echo $style[$stylemapbonusItem['style']];?></div>
				      										<div class="col-12 block-info-value">
				      											<?php 
				      											echo $sistem->userName($sistem->toprecbase($mapname, $stylemapbonusItem['style'])['auth']);
				      											echo '<br>'.$sistem->secToStr(round($sistem->toprecbase($mapname, $stylemapbonusItem['style'])['time']));
				      											?>
				      										</div>
				      									</div>
				      								</div>
				      							</div>
				      						<?php endforeach;?>
				      						<?php endif; ?>
			      						</div>
      								</div>
      								<div class="tab-pane fade" id="lastrecords" role="tabpanel" aria-labelledby="list-lastrecords-list">
      									<div class="row padding-20 section_last">
				      						<span>Последние рекорды</span>
				      						<div class="table-responsive font-300">
									      		<table class="table">
										            <thead>
										              	<tr>
										              		<th scope="col">Игрок</th>
										              		<th scope="col">Время</th>
										              		<th scope="col">Стиль</th>
											                <th scope="col">Прыжков</th>
											                <th scope="col">Стрефов</th>
											                <th scope="col">Синх.</th>
											                <th scope="col">Очков</th>
										              	</tr>
										            </thead>
										            <tbody class="table-tr">
										            	<?php foreach ($lastRecordsMap as $lastRecordsMapItem):?>
											              	<tr>
													            <td><?php echo $sistem->userName($lastRecordsMapItem['auth']);?></td>
													            <td><?php echo $sistem->secToStr(round($lastRecordsMapItem['time']));?></td>
													            <td><?php echo $style[$lastRecordsMapItem['style']];?></td>
													            <td><?php echo $lastRecordsMapItem['jumps'];?></td>
													            <td><?php echo $lastRecordsMapItem['strafes'];?></td>
													            <td><?php echo $lastRecordsMapItem['sync'];?>%</td>
													            <td><?php echo $lastRecordsMapItem['points'];?></td>
											              	</tr>
										              	<?php endforeach;?>
										            </tbody>

									          	</table>
									          	<center><a href="<?php echo $this->route['map']; ?>/allrecords" class="btn_all_records">все рекорды</a></center>
								        	</div>
			      						</div>
      								</div>
						    	</div>
						  	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>