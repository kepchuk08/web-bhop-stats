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
						<th scope="col">Сенса</th>
						<th scope="col">Очков</th>
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($lastrecords as $lastrecordsItem):?>
					    <tr>
					    	<td><?php echo $sistem->userName($lastrecordsItem['auth']);?></td>
					        <td><?php echo $lastrecordsItem['map'];?></td>
							<td><?php echo $sistem->corectDate($lastrecordsItem['date']);?></td>
							<td><?php echo $lastrecordsItem['time'];?>c</td>
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






