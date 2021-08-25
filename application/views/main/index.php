<div class="row content">
<<<<<<< Updated upstream
	<div class="table-home bg-white">
=======
	<div class="table-home bg-white mg-bottom-20">
>>>>>>> Stashed changes
		<p>ТОП ИГРОКИ</p>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Ник</th>
<<<<<<< Updated upstream
						<th scope="col">Страна</th>
						<th scope="col">Последнее посящение</th>
						<th scope="col">Последнея карта</th>
						<th scope="col">Очков</th>
=======
						<th scope="col" class="text-center">Страна</th>
						<th scope="col" class="text-center">Последнее посещение</th>
						<th scope="col" class="text-center">Последнея карта</th>
						<th scope="col" class="text-center">Очков</th>
>>>>>>> Stashed changes
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($users as $userItem):?>
<<<<<<< Updated upstream
					    <tr>
							<th scope="row"><?php echo $id; ?></th>
							<td><?php echo $userItem['name']; ?></td>
							<td><img src="/public/img/flags/<?php echo mb_strtolower($sxgeo->getCountry($userItem['ip']));?>.png"></td>
							<td><?php echo $sistem->corectDate($userItem['lastlogin']) ;?></td>
							<td><?php echo $sistem->lastMap($userItem['auth']) ;?></td>
							<td><?php echo round($userItem['points']) ;?></td>
					        <td><span class="user-about"><a href="/user/<?php echo $userItem['auth']; ?>">Подробнее</a></span></td>
=======
					    <tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $sistem->corectDate($userItem['lastlogin'])['title'] ;?>">
							<th scope="row"><?php echo $id; ?></th>
							<td><?php echo $userItem['name']; ?></td>
							<td class="text-center"><img src="/public/img/flags/<?php echo mb_strtolower($sxgeo->getCountry($userItem['ip']));?>.png"></td>
							<td class="text-center"><?php echo $sistem->corectDate($userItem['lastlogin'])['datediff'] ;?></td>
							<td class="text-center"><?php echo $sistem->lastMap($userItem['auth']) ;?></td>
							<td class="text-center"><?php echo round($userItem['points']) ;?></td>
					        <td class="text-center"><span class="user-about"><a href="/user/<?php echo $userItem['auth']; ?>">Подробнее</a></span></td>
>>>>>>> Stashed changes
					    </tr>
					    <?php $id++;?>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	<?php echo $pagination; ?>
</div>