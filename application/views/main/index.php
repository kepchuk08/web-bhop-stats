<div class="row content">
	<div class="table-home bg-white mg-bottom-20">
		<p><?=VI_MAIN_INDEX_TOP_PLAYER?></p>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col"><?=VI_TABLE_NAME?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_COUNTRY?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_LAST_VISIT?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_LAST_MAP?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_POINT?></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($users as $userItem):?>
					    <tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $sistem->corectDate($userItem['lastlogin'])['title'] ;?>">
							<th scope="row"><?php echo $id; ?></th>
							<td><?php echo $userItem['name']; ?></td>
							<td class="text-center"><img src="/public/img/flags/<?php echo mb_strtolower($sxgeo->getCountry($userItem['ip']));?>.png"></td>
							<td class="text-center"><?php echo $sistem->corectDate($userItem['lastlogin'])['datediff'] ;?></td>
							<td class="text-center"><?php echo $sistem->lastMap($userItem['auth']) ;?></td>
							<td class="text-center"><?php echo round($userItem['points']) ;?></td>
					        <td class="text-center"><span class="user-about"><a href="/user/<?php echo $userItem['auth']; ?>"><?=VI_MAIN_INDEX_MORE_DETAILED?></a></span></td>
					    </tr>
					    <?php $id++;?>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	<?php echo $pagination; ?>
</div>