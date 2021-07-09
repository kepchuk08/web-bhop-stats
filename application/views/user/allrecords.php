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
	      				<?php echo $steam->userStatus($steamapi['personastate']);?>
	      				<?php echo $steam->VacBanInfo($vac);?>
	      				<p><a class="text-color-green" href="<?php echo $steamapi['profileurl'];?>" target="_blank"><i class="fab fa-steam"></i> Профиль</p></a>
	      			</div>
	      		</div>
		    </div>
		    <div class="col-12 col-lg-10 indent section_last">
		    	<span>Все рекорды</span>
	      		<div class="table-responsive font-300">

					<table class="table">
						<thead>
							<tr>
								<th scope="col">Карта</th>
								<th scope="col">Дата</th>
								<th scope="col">Время</th>
								<th scope="col">Путь</th>
								<th scope="col">Стиль</th>
								<th scope="col">Прыжков</th>
								<th scope="col">Стрейфов</th>
								<th scope="col">Синх.</th>
								<th scope="col">Очков</th>
							</tr>
						</thead>

						<tbody class="table-tr">
							<?php foreach ($allrecords as $allrecordsItem):?>
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
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
      	</div>
    </div>	      	
</div>