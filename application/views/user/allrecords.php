<div class="row content">
    <div class="col user-content bg-white">
      	<div class="row">
      		<div class="col-12 col-lg-2">
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
	      				<p><a class="text-color-green" href="<?php echo $steamapi['profileurl'];?>" target="_blank"><i class="fab fa-steam"></i> Профиль</p></a>
	      			</div>
	      		</div>
		    </div>
		    <div class="col-12 col-lg-10 indent section_last">
		    	<span class="title_page">
		    		<a href="/user/<?php echo $this->route['auth'];?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Вернуться назад"><i class="fas fa-chevron-circle-left"></i></a> 
		    		<span class="text-color-ced4da">Все рекорды</span>
		    	</span>
	      		<div class="table-responsive font-300">
					<table class="table table_sort">
						<thead>
							<tr>
								<th scope="col">Карта</th>
<<<<<<< Updated upstream
								<th scope="col">Дата</th>
								<th scope="col">Время</th>
								<th scope="col">Путь</th>
								<th scope="col">Стиль</th>
								<th scope="col">Прыжков</th>
								<th scope="col">Стрейфов</th>
								<th scope="col">Синх.</th>
								<th scope="col">Очков</th>
=======
								<th scope="col" class="text-center">Дата</th>
								<th scope="col" class="text-center">Время</th>
								<th scope="col" class="text-center">Путь</th>
								<th scope="col" class="text-center">Стиль</th>
								<th scope="col" class="text-center">Прыжков</th>
								<th scope="col" class="text-center">Стрейфов</th>
								<th scope="col" class="text-center">Синх.</th>
								<th scope="col" class="text-center">Очков</th>
>>>>>>> Stashed changes
							</tr>
						</thead>
						<tbody class="table-tr">
							<?php foreach ($allrecords as $allrecordsItem):?>
<<<<<<< Updated upstream
								<tr>
									<td><?php echo $allrecordsItem['map'];?></td>
									<td><?php echo $sistem->corectDate($allrecordsItem['date']);?></td>
									<td><?php echo $sistem->secToStr(round($allrecordsItem['time']));?></td>
									<td><?php echo $track[$allrecordsItem['track']];?></td>
									<td><?php echo $style[$allrecordsItem['style']];?></td>
									<td><?php echo $allrecordsItem['jumps'];?></td>
									<td><?php echo $allrecordsItem['strafes'];?></td>
									<td><?php echo $allrecordsItem['sync'];?>%</td>
									<td><?php echo $allrecordsItem['points'];?></td>
=======
								<tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $sistem->corectDate($allrecordsItem['date'])['title'] ;?>">
									<td><a class="table-a" href="maps/<?php echo $allrecordsItem['map'];?>"><?php echo $allrecordsItem['map'];?></a></td>
									<td class="text-center"><?php echo $sistem->corectDate($allrecordsItem['date'])['datediff'];?></td>
									<td class="text-center"><?php echo $sistem->secToStr(round($allrecordsItem['time']));?></td>
									<td class="text-center"><?php echo $sistem->track($allrecordsItem['track']);?></td>
									<td class="text-center">
										<?php
							    			if (empty($style[$allrecordsItem['style']])) {
							    				echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Данный стиль отсутствует в конфигурации"></i>';
							    			}else{
							    				echo $style[$allrecordsItem['style']]['name'];
							    			}
										?>
											
									</td>
									<td class="text-center"><?php echo $allrecordsItem['jumps'];?></td>
									<td class="text-center"><?php echo $allrecordsItem['strafes'];?></td>
									<td class="text-center"><?php echo $allrecordsItem['sync'];?>%</td>
									<td class="text-center"><?php echo $allrecordsItem['points'];?></td>
>>>>>>> Stashed changes
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
      	</div>
    </div>	      	
</div>