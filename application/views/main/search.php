<div class="row content">
	<div class="table-home bg-white">
		<p>Поиск по запросу: <b><?php echo $search;?></b></p>
		<?php //debug($user);?>
		<?php if (empty($user)): ?>
			<h1>Игрок не найден</h1>
		<?php else: ?>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Ник</th>
						<th scope="col" class="text-center">Страна</th>
						<th scope="col" class="text-center">Последнее посещение</th>
						<th scope="col" class="text-center">Последнея карта</th>
						<th scope="col" class="text-center">Очков</th>
						<th scope="col" class="text-center"></th>
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($user as $userItem):?>
					    <tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $sistem->corectDate($userItem['lastlogin'])['title'] ;?>">
							<td><?php echo $userItem['name']; ?></td>
							<td class="text-center"><img src="/public/img/flags/<?php echo mb_strtolower($sxgeo->getCountry($userItem['ip']));?>.png"></td>
							<td class="text-center"><?php echo $sistem->corectDate($userItem['lastlogin'])['datediff'] ;?></td>
							<td class="text-center"><?php echo $sistem->lastMap($userItem['auth']) ;?></td>
							<td class="text-center"><?php echo round($userItem['points']) ;?></td>
					        <td class="text-center"><span class="user-about"><a href="/user/<?php echo $userItem['auth']; ?>">Подробнее</a></span></td>
					    </tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
		<?php endif; ?>
	</div>
</div>
		





