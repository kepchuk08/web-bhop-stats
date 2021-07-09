<div class="row content">
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
</div>