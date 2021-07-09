<div class="row content">
	<div class="table-home bg-white">
		<p>Поиск по запросу: <b><?php echo $search;?></b></p>
		<?php if (empty($user)): ?>
			<h1>Игрок не найден</h1>
		<?php else: ?>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Ник</th>
						<th scope="col">Страна</th>
						<th scope="col">Последнее посящение</th>
						<th scope="col">Последнея карта</th>
						<th scope="col">Очков</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($user as $userItem):?>
					    <tr>
							<td><?php echo $userItem['name']; ?></td>
							<td><img src="/public/img/flags/<?php echo mb_strtolower($sxgeo->getCountry($userItem['ip']));?>.png"></td>
							<td><?php echo $sistem->corectDate($userItem['lastlogin']) ;?></td>
							<td><?php echo $sistem->lastMap($userItem['auth']) ;?></td>
							<td><?php echo round($userItem['points']) ;?></td>
					        <td><span class="user-about"><a href="/user/<?php echo $userItem['auth']; ?>">Подробнее</a></span></td>
					    </tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
		<?php endif; ?>
	</div>
</div>