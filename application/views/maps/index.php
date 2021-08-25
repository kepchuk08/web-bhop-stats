<div class="row content">
<<<<<<< Updated upstream
		<div class="table-home bg-white">
			<p>ВСЕ КАРТЫ СЕРВЕРА</p>
			<div class="table-responsive">
				<table class="table">
					<thead>
					    <tr>
					    	<th scope="col"></th>
						    <th scope="col">Карта</th>
						    <th scope="col"><center>Количество рекордов</center></th>
						    <th scope="col"><center>Популярный стиль</center></th>
						    <th scope="col"><center>Прыжков</center></th>
						    <th scope="col"><center>Стрейфов</center></th>
						    <th scope="col"></th>
					    </tr>
					</thead>
					<tbody class="table-tr">
						<?php foreach ($maps as $mapItem):?>
					        <tr>
					        	<th scope="col"></th>
							    <th scope="row"><?php echo $mapItem['map'];?></th>
							    <td align="center"><?php echo $mapItem['count_map_rec'];?></td>
							    <td align="center"><?php echo $sistem->popularStyle($mapItem['map']);?></td>
							    <td align="center"><?php echo $mapItem['jumps'];?></td>
							    <td align="center"><?php echo $mapItem['strafes'];?></td>
					            <td align="center"><span class="user-about"><a href="/maps/<?php echo $mapItem['map'];?>">Подробнее</a></span></td>
					        </tr>
					    <?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
=======
	<div class="table-home bg-white">
		<p>ВСЕ КАРТЫ СЕРВЕРА</p>
		<div class="table-responsive">
			<table class="table table_sort">
				<thead>
					<tr>
						<th scope="col">Карта</th>
						<th scope="col" class="text-center">Количество рекордов</th>
						<th scope="col" class="text-center">Популярный стиль</th>
						<th scope="col" class="text-center">Прыжков</th>
						<th scope="col" class="text-center">Стрейфов</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($maps as $mapItem):?>
					    <tr>
							<th scope="row"><?php echo $mapItem['map'];?></th>
							<td class="text-center"><?php echo $mapItem['count_map_rec'];?></td>
							<td class="text-center">
								<?php
									if (empty($style[$sistem->popularStyle($mapItem['map'])])) {
										echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="Данный стиль отсутствует в конфигурации"></i>';
									}else{
										echo $style[$sistem->popularStyle($mapItem['map'])]['name'];
									}
								?>
							</td>
							<td class="text-center"><?php echo $mapItem['jumps'];?></td>
							<td class="text-center"><?php echo $mapItem['strafes'];?></td>
					        <td class="text-center"><span class="user-about"><a href="/maps/<?php echo $mapItem['map'];?>">Подробнее</a></span></td>
					    </tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
>>>>>>> Stashed changes
</div>