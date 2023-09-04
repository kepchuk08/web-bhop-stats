<div class="row content">
	<div class="col-12 table-home bg-white">
		<div class="row">
			<div class="col-12 col-lg-3">
				<div class="row block-map-info">
					<div class="col-12 p-0">
						<p><h4><?php echo $mapname;?></h4></p>
						<div class="block-inform">
							<span><?=VI_MAP_INFO_TITLE?></span>
							<ul class="list-group text-color-112365">
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=VI_MAP_ALLREC?>
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['AllRecords'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=VI_MAP_REC_BASE?>
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['BaseRecords'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=VI_MAP_REC_BONUS?>
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['BonusRecords'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=VI_MAP_ALLJUMP?>
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['AllJumps'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=VI_MAP_ALLSTREIF?>
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['AllStrafes'];?></span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=VI_MAP_AVERAGE_SYNCHRONIZATION?>
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['AllSync'];?>%</span>
							  	</li>
							  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=VI_MAP_TIER?>
								    <span class="badge background-color-212529 rounded-pill"><?php echo $mapinfo['MapsTier'];?></span>
							  	</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-9 pd-20">
				<div class="row">
					<div class="col-12">
						<div class="row">
						  	<div class="col-12">
							    <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
							      	<a class="list-group-item list-group-item-action active" id="list-base-list" data-toggle="list" href="#base" role="tab" aria-controls="home"><?=VI_MAP_TRACK_BASE?></a>
							      	<a class="list-group-item list-group-item-action" id="list-bonus-list" data-toggle="list" href="#bonus" role="tab" aria-controls="bonus"><?=VI_MAP_TRACK_BONUS?></a>
							      	<a class="list-group-item list-group-item-action" id="list-lastrecords-list" data-toggle="list" href="#lastrecords" role="tab" aria-controls="lastrecords"><?=LASTRECORDS?></a>
							    </div>
						  	</div>
						  	<div class="col-12">
						  		
						    	<div class="tab-content" id="nav-tabContent">
      								<div class="tab-pane fade show active" id="base" role="tabpanel" aria-labelledby="list-base-list">
      									<div class="row">
      										<h3><?=VI_MAP_TOP_REC?></h3>
      										<?php foreach ($stylemapbase as $stylerecordItem):?>
				      							<div class="col-3 col-lg-2 pd-5">
				      								<div class="section">
				      									<div class="row block-info">
				      										<div class="col-12 block-info-text">
				      											<?php
				      											if (empty($style[$stylerecordItem['style']])) {
												    				echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="'.ERROR_STYLE_TITLE.'"></i>';
												    			}else{
												    				echo $style[$stylerecordItem['style']];
												    			}
				      											?> 
				      											<span><?php echo $stylerecordItem['count_style'];?></span>
				      										</div>
				      										<div class="col-12 block-info-value">
				      											<?php 
				      											echo $system->userName($system->toprecbase($mapname, $stylerecordItem['style'])['auth']);
				      											echo '<br>'.$system->secToStr(round($system->toprecbase($mapname, $stylerecordItem['style'])['time']));
				      											?>
				      										</div>
				      									</div>
				      								</div>
				      							</div>
				      						<?php endforeach;?>
			      						</div>
      								</div>
      								<div class="tab-pane fade" id="bonus" role="tabpanel" aria-labelledby="list-bonus-list">
      									<div class="row">
      										<?php if (empty($stylemapbonus)): ?>
      											<h2><?=VI_MAP_MAPINFO_NO_REC_BONUS?></h2>
      										<?php else: ?>
				      						<?php foreach ($stylemapbonus as $stylemapbonusItem):?>
				      						<div class="col-3 col-lg-2 pd-5">
				      								<div class="section">
				      									<div class="row block-info">
				      										<div class="col-12 block-info-text">
				      											<?php
				      											if (empty($style[$stylemapbonusItem['style']])) {
												    				echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="'.ERROR_STYLE_TITLE.'"></i>';
												    			}else{
												    				echo $style[$stylemapbonusItem['style']];
												    			}
				      											?>
				      										</div>
				      										<div class="col-12 block-info-value">
				      											<?php 
				      											echo $system->userName($system->toprecbonus($mapname, $stylemapbonusItem['style'])['auth']);
				      											echo '<br>'.$system->secToStr(round($system->toprecbonus($mapname, $stylemapbonusItem['style'])['time']));
				      											?>
				      										</div>
				      									</div>
				      								</div>
				      							</div>
				      						<?php endforeach;?>
				      						<?php endif; ?>
			      						</div>
      								</div>
      								<div class="tab-pane fade" id="lastrecords" role="tabpanel" aria-labelledby="list-lastrecords-list">
      									<div class="row padding-20 section_last">
				      						<span><?=LASTRECORDS?></span>
				      						<div class="table-responsive font-300">
									      		<table class="table">
										            <thead>
										              	<tr>
										              		<th scope="col"><?=VI_TABLE_NAME?></th>
										              		<th scope="col" class="text-center"><?=VI_TABLE_TIME?></th>
										              		<th scope="col" class="text-center"><?=VI_TABLE_STYLE?></th>
											                <th scope="col" class="text-center"><?=VI_TABLE_JUMP?></th>
											                <th scope="col" class="text-center"><?=VI_TABLE_STREIF?></th>
											                <th scope="col" class="text-center"><?=VI_TABLE_SINH?></th>
											                <th scope="col" class="text-center"><?=VI_TABLE_POINT?></th>
										              	</tr>
										            </thead>
										            <tbody class="table-tr">
										            	<?php foreach ($lastRecordsMap as $lastRecordsMapItem):?>
											              	<tr>
													            <td><?php echo $system->userName($lastRecordsMapItem['auth']);?></td>
													            <td class="text-center"><?php echo $system->secToStr(round($lastRecordsMapItem['time']));?></td>
													            <td class="text-center">
													            	<?php
																		if (empty($style[$lastRecordsMapItem['style']])) {
														    				echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="'.ERROR_STYLE_TITLE.'"></i>';
														    			}else{
														    				echo $style[$lastRecordsMapItem['style']];
														    			}
													            	?>
													            </td>
													            <td class="text-center"><?php echo $lastRecordsMapItem['jumps'];?></td>
													            <td class="text-center"><?php echo $lastRecordsMapItem['strafes'];?></td>
													            <td class="text-center"><?php echo $lastRecordsMapItem['sync'];?>%</td>
													            <td class="text-center"><?php echo $lastRecordsMapItem['points'];?></td>
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
									          	<center><a href="<?php echo $this->route['map']; ?>/allrecords" class="btn_all_records"><?=VI_USER_INDEX_SYBMIT_ALLREC?></a></center>
								        	</div>
			      						</div>
      								</div>
						    	</div>
						  	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



