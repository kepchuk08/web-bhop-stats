<div class="row content">
	<div class="table-home bg-white">
		<p><?=VI_MAIN_SEARCH_RESULT_TRUE?><b><?php echo $search;?></b></p>
		<?php if (empty($user)): ?>
			<h1><?=VI_MAIN_SEARCH_RESULT_FALSE?></h1>
		<?php else: ?>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col"><?=VI_TABLE_NAME?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_COUNTRY?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_LAST_VISIT?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_LAST_MAP?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_POINT?></th>
						<th scope="col" class="text-center"></th>
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($user as $userItem):?>
					    <tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $system->expand_date($userItem['lastlogin']) ;?>">
							<td><?php echo $userItem['name']; ?></td>
							<td class="text-center"><img src="/public/img/flags/<?php echo mb_strtolower($sxgeo->getCountry($userItem['ip']));?>.png"></td>
							<td class="text-center"><?php echo $system->expand_date($userItem['lastlogin'], 5) ;?></td>
							<td class="text-center"><?php echo $system->lastMap($userItem['auth']) ;?></td>
							<td class="text-center"><?php echo round($userItem['points']) ;?></td>
					        <td class="text-center"><span class="user-about"><a href="/user/<?php echo $userItem['auth']; ?>"><?=VI_MAIN_INDEX_MORE_DETAILED?></a></span></td>
					    </tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
		<?php endif; ?>
	</div>
</div>
		





