<div class="row content">
	<div class="table-home bg-white">
		<p>ПОСТЛЕДНИЕ 100 РЕКОРДОВ</p>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Ник</th>
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
					<?php foreach ($lastrecords as $lastrecordsItem):?>
					    <tr>
					    	<td><a class="table-a" href="user/<?php echo $lastrecordsItem['auth'];?>"><?php echo $sistem->userName($lastrecordsItem['auth']);?></a></td>
					        <td><a class="table-a" href="maps/<?php echo $lastrecordsItem['map'];?>"><?php echo $lastrecordsItem['map'];?></a></td>
							<td><?php echo $sistem->corectDate($lastrecordsItem['date']);?></td>
							<td><?php echo $sistem->secToStr(round($lastrecordsItem['time']));?></td>
							<td><?php echo $track[$lastrecordsItem['track']];?></td>
							<td><?php echo $style[$lastrecordsItem['style']];?></td>
							<td><?php echo $lastrecordsItem['jumps'];?></td>
							<td><?php echo $lastrecordsItem['strafes'];?></td>
							<td><?php echo $lastrecordsItem['sync'];?></td>
							<td><?php echo $lastrecordsItem['points'];?></td>
					    </tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>