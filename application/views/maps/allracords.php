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
						<div class="row justify-content-between">
							<div class="col-4">
								<span class="title_page d-block">
						    		<a href="/maps/<?php echo $this->route['map'];?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Вернуться назад"><i class="fas fa-chevron-circle-left"></i></a> 
						    		<span class="text-color-ced4da">Все рекорды 
						    			
						    		</span>
						    	</span>
							</div>
							<div class="col-5">

								<form class="form-search" action="/maps/<?php echo $this->route['map'];?>/allrecords" method="post">
									<!-- <div class="result-form">
				                    		<?php for ($id = 0; $id < $flstyle['count']; $id++):?>
				                    		<div id="style<?php echo $flstyle['arraystyle'][$id]['id'];?>">Стиль: <?php echo $flstyle['arraystyle'][$id]['name'];?></div>
				                    		<?php endfor;?>
				                    		<br>
				                    		Путь: 
				                    </div> -->
				                    <div class="input-group" id="styleid">
										<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Стиль</button>
										<ul class="dropdown-menu">
											<?php for ($id = 0; $id < $flstyle['count']; $id++):?>
											<li class="dropdown-item">
												<input type="radio" class="btn-check" name="style" id="style<?php echo $flstyle['arraystyle'][$id]['id'];?>" value="<?php echo $flstyle['arraystyle'][$id]['id'];?>" <?php if ($flstyle['arraystyle'][$id]['id'] == 0){echo 'checked';}?>>
												<label class="btn" for="style<?php echo $flstyle['arraystyle'][$id]['id'];?>"><?php echo $flstyle['arraystyle'][$id]['name'];?></label>
											</li>
											<?php endfor;?>
										</ul>
										<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Путь</button>
										<ul class="dropdown-menu">
											<li class="dropdown-item">
												<input type="radio" class="btn-check" name="track" id="track1" value="0" checked>
												<label class="btn" for="track1">Основа</label>
											</li>
											<li class="dropdown-item">
												<input type="radio" class="btn-check" name="track" id="track2" value="1">
												<label class="btn" for="track2">Бонус</label>
											</li>
										</ul>
				                        <button class="btn btn-outline-secondary" type="submit" name="submit">Поиск</button>
				                    </div>
				                </form>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="table-responsive font-300">
							<table class="table table_sort">
								<thead>
									<tr>
										<th scope="col">Игрок</th>
										<th scope="col" class="text-center">Дата</th>
										<th scope="col" class="text-center">Время</th>
										<th scope="col" class="text-center">Путь</th>
										<th scope="col" class="text-center">Стиль</th>
										<th scope="col" class="text-center">Прыжков&nbsp;&nbsp;</th>
										<th scope="col" class="text-center">Стрейф.&nbsp;&nbsp;</th>
										<th scope="col" class="text-center">Синх.&nbsp;&nbsp;</th>
										<th scope="col" class="text-center">Очков</th>
									</tr>
								</thead>
								<tbody class="table-tr">
									<?php foreach ($records as $recordsItem):?>
										<tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $sistem->corectDate($recordsItem['date'])['title'] ;?>">
											<td><?php echo $sistem->userName($recordsItem['auth']);?></td>
											<td class="text-center"><?php echo $sistem->corectDate($recordsItem['date'])['datediff'];?></td>
											<td class="text-center"><?php echo $sistem->secToStr(round($recordsItem['time']));?></td>
											<td class="text-center"><?php echo $sistem->track($recordsItem['track']);?></td>
											<td class="text-center">
												<?php
													if (empty($style[$recordsItem['style']])) {
														echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Данный стиль отсутствует в конфигурации"></i>';
													}else{
														echo $style[$recordsItem['style']]['name'];
													}
												?>
											</td>
											<td class="text-center"><?php echo $recordsItem['jumps'];?></td>
											<td class="text-center"><?php echo $recordsItem['strafes'];?></td>
											<td class="text-center"><?php echo $recordsItem['sync'];?>%</td>
											<td class="text-center"><?php echo $recordsItem['points'];?></td>
										</tr>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
		    	
	      		
			</div>
		</div>
	</div>
</div>