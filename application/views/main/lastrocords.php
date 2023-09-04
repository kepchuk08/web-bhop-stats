<div class="row content">
	<div class="table-home bg-white">
		<p><?=VI_MAIN_LASTRECORDS_LAST_PLAYER?></p>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col"><?=VI_TABLE_NAME?></th>
						<th scope="col"><?=VI_TABLE_MAP?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_DATA?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_TIME?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_TRACK?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_STYLE?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_JUMP?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_STREIF?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_SINH?></th>
						<th scope="col" class="text-center"><?=VI_TABLE_POINT?></th>
					</tr>
				</thead>
				<tbody class="table-tr">
					<?php foreach ($lastrecords as $lastrecordsItem):?>

					    <tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $system->expand_date($lastrecordsItem['date']);?>">
					    	<td><a class="table-a" href="user/<?php echo $lastrecordsItem['auth'];?>"><?php echo $system->userName($lastrecordsItem['auth']);?></a></td>
					        <td><a class="table-a" href="maps/<?php echo $lastrecordsItem['map'];?>"><?php echo $lastrecordsItem['map'];?></a></td>
							<td class="text-center"><?php echo $system->expand_date($lastrecordsItem['date']);?></td>
							<td class="text-center"><?php echo $system->secToStr(round($lastrecordsItem['time']));?></td>
							<td class="text-center"><?php echo $system->track($lastrecordsItem['track']);?></td>
							<td class="text-center">
								<?php 
									if (empty($style[$lastrecordsItem['style']])) {
										echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="'.ERROR_STYLE_TITLE.'"></i>';
									}else{
										echo $style[$lastrecordsItem['style']];
									}
								?>
							</td>
							<td class="text-center"><?php echo $lastrecordsItem['jumps'];?></td>
							<td class="text-center"><?php echo $lastrecordsItem['strafes'];?></td>
							<td class="text-center"><?php echo $lastrecordsItem['sync'];?>%</td>
							<td class="text-center"><?php echo $lastrecordsItem['points'];?></td>

							<?php if (isset($_SESSION['admin'])):?>
								<td class="text-center">
									<button type="button" class="btn btn-danger btn-sm" onclick="delete_record(<?php echo $lastrecordsItem['id']?>)">
										<i class="fas fa-trash-alt"></i>
									</button>
								</td>
							<?php endif?>
							
					    </tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>






