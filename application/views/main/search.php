<div class="row content">
	<div class="table-home bg-white">
		<p>Поиск по запросу: <b><?php echo $search;?></b></p>
<<<<<<< Updated upstream
=======
		<?php //debug($user);?>
>>>>>>> Stashed changes
		<?php if (empty($user)): ?>
			<h1>Игрок не найден</h1>
		<?php else: ?>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Ник</th>
<<<<<<< Updated upstream
						<th scope="col">Страна</th>
						<th scope="col">Последнее посящение</th>
						<th scope="col">Последнея карта</th>
						<th scope="col">Очков</th>
						<th scope="col"></th>
=======
						<th scope="col" class="text-center">Страна</th>
						<th scope="col" class="text-center">Последнее посещение</th>
						<th scope="col" class="text-center">Последнея карта</th>
						<th scope="col" class="text-center">Очков</th>
						<th scope="col" class="text-center"></th>
>>>>>>> Stashed changes
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($user as $userItem):?>
<<<<<<< Updated upstream
					    <tr>
							<td><?php echo $userItem['name']; ?></td>
							<td><img src="/public/img/flags/<?php echo mb_strtolower($sxgeo->getCountry($userItem['ip']));?>.png"></td>
							<td><?php echo $sistem->corectDate($userItem['lastlogin']) ;?></td>
							<td><?php echo $sistem->lastMap($userItem['auth']) ;?></td>
							<td><?php echo round($userItem['points']) ;?></td>
					        <td><span class="user-about"><a href="/user/<?php echo $userItem['auth']; ?>">Подробнее</a></span></td>
=======
					    <tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $sistem->corectDate($userItem['lastlogin'])['title'] ;?>">
							<td><?php echo $userItem['name']; ?></td>
							<td class="text-center"><img src="/public/img/flags/<?php echo mb_strtolower($sxgeo->getCountry($userItem['ip']));?>.png"></td>
							<td class="text-center"><?php echo $sistem->corectDate($userItem['lastlogin'])['datediff'] ;?></td>
							<td class="text-center"><?php echo $sistem->lastMap($userItem['auth']) ;?></td>
							<td class="text-center"><?php echo round($userItem['points']) ;?></td>
					        <td class="text-center"><span class="user-about"><a href="/user/<?php echo $userItem['auth']; ?>">Подробнее</a></span></td>
>>>>>>> Stashed changes
					    </tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
		<?php endif; ?>
	</div>
<<<<<<< Updated upstream
</div>
=======
</div>
		





>>>>>>> Stashed changes
