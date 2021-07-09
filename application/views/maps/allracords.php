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
				<span>Все рекорды</span>
	      		<div class="table-responsive font-300">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Игрок</th>
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
							<?php foreach ($records as $recordsItem):?>
								<tr>
									<td><?php echo $sistem->userName($recordsItem['auth']);?></td>
									<td><?php echo $sistem->corectDate($recordsItem['date']);?></td>
									<td><?php echo $sistem->secToStr(round($recordsItem['time']));?></td>
									<td><?php echo $track[$recordsItem['track']];?></td>
									<td><?php echo $style[$recordsItem['style']];?></td>
									<td><?php echo $recordsItem['jumps'];?></td>
									<td><?php echo $recordsItem['strafes'];?></td>
									<td><?php echo $recordsItem['sync'];?>%</td>
									<td><?php echo $recordsItem['points'];?></td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>