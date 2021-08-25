<div class="row content">
	<div class="table-home bg-white">
		<p>ПОСТЛЕДНИЕ 100 РЕКОРДОВ</p>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Ник</th>
						<th scope="col">Карта</th>
						<th scope="col" class="text-center">Дата</th>
						<th scope="col" class="text-center">Время</th>
						<th scope="col" class="text-center">Путь</th>
						<th scope="col" class="text-center">Стиль</th>
						<th scope="col" class="text-center">Прыжков</th>
						<th scope="col" class="text-center">Стрейфов</th>
						<th scope="col" class="text-center">Синх.</th>
						<th scope="col" class="text-center">Очков</th>
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($lastrecords as $lastrecordsItem):?>
					    <tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $sistem->corectDate($lastrecordsItem['date'])['title'] ;?>">
					    	<td><a class="table-a" href="user/<?php echo $lastrecordsItem['auth'];?>"><?php echo $sistem->userName($lastrecordsItem['auth']);?></a></td>
					        <td><a class="table-a" href="maps/<?php echo $lastrecordsItem['map'];?>"><?php echo $lastrecordsItem['map'];?></a></td>
							<td class="text-center"><?php echo $sistem->corectDate($lastrecordsItem['date'])['datediff'];?></td>
							<td class="text-center"><?php echo $sistem->secToStr(round($lastrecordsItem['time']));?></td>
							<td class="text-center"><?php echo $sistem->track($lastrecordsItem['track']);?></td>
							<td class="text-center">
								<?php 
									if (empty($style[$lastrecordsItem['style']])) {
										echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Данный стиль отсутствует в конфигурации"></i>';
									}else{
										echo $style[$lastrecordsItem['style']]['name'];
									}
								?>
							</td>
							<td class="text-center"><?php echo $lastrecordsItem['jumps'];?></td>
							<td class="text-center"><?php echo $lastrecordsItem['strafes'];?></td>
							<td class="text-center"><?php echo $lastrecordsItem['sync'];?>%</td>
							<td class="text-center"><?php echo $lastrecordsItem['points'];?></td>
					    </tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>






