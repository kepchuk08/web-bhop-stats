<div class="row content">
	<div class="table-home bg-white">
		<p><?=VI_MAP_TITLE?></p>
		<div class="table-responsive">
			<table class="table table_sort">
				<thead>
					<tr>
						<th scope="col"><?=VI_TABLE_MAP?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_NUMBER_OF_RECORDS?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_POPULAR_STYLE?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_JUMP?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_STREIF?></th>
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
									if (empty($style[$system->popularStyle($mapItem['map'])])) {
										echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="'.ERROR_STYLE_TITLE.'"></i>';
									}else{
										echo $style[$system->popularStyle($mapItem['map'])];
									}
								?>
							</td>
							<td class="text-center"><?php echo $mapItem['jumps'];?></td>
							<td class="text-center"><?php echo $mapItem['strafes'];?></td>
					        <td class="text-center"><span class="user-about"><a href="/maps/<?php echo $mapItem['map'];?>"><?=VI_MAIN_INDEX_MORE_DETAILED?></a></span></td>
					    </tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>