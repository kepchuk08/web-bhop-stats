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
						<div class="row justify-content-between">
							<div class="col-4">
								<span class="title_page d-block">
						    		<a href="/maps/<?php echo $this->route['map'];?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?=VI_USER_ALLREC_TITLE_BACK?>"><i class="fas fa-chevron-circle-left"></i></a> 
						    		<span class="text-color-ced4da"><?=VI_USER_INDEX_SYBMIT_ALLREC?>
						    			
						    		</span>
						    	</span>
							</div>
							<div class="col-8">
								<form class="form-search" action="/maps/<?php echo $this->route['map'];?>/allrecords" method="post">
				                    <div class="input-group" id="styleid">
				                    	<input type="text" class="form-control view-style" placeholder="<?=VI_TABLE_STYLE?>" readonly>
				                    	<input type="text" class="form-control view-track" placeholder="<?=VI_TABLE_TRACK?>" readonly> 
										<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?=VI_TABLE_STYLE?></button>
										<ul class="dropdown-menu">
											<?php foreach ($flstyle as $key => $value): ?>
												<li class="dropdown-item">
													<input type="radio" class="btn-check" id="style<?php echo $key;?>" value="<?php echo $key;?>" <?php if ($key == 0){echo 'checked';}?>>
													<label class="btn" for="style<?php echo $key;?>" onclick="getStyle(<?php echo $key;?>)" id="style-<?php echo $key;?>"><?php echo $value;?></label>
												</li>
											<?php endforeach ?>
										</ul>
										<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?=VI_TABLE_TRACK?></button>
										<ul class="dropdown-menu">
											<li class="dropdown-item">
												<input type="radio" class="btn-check" id="track1" value="0" checked >
												<label class="btn" for="track1" onclick="getTrack('<?=VI_MAP_TRACK_BASE?>', 0)"><?=VI_MAP_TRACK_BASE?></label>
											</li>
											<li class="dropdown-item">
												<input type="radio" class="btn-check" id="track2" value="1">
												<label class="btn" for="track2" onclick="getTrack('<?=VI_MAP_TRACK_BONUS?>', 1)"><?=VI_MAP_TRACK_BONUS?></label>
											</li>
										</ul>
										<input type="hidden" id="track" value="">
				                        <button class="btn btn-outline-secondary" onclick="allrecords_search('<?php echo $this->route['map'];?>', <?php echo $key;?>)"><?=HED_SEARCH_submit?></button>
				                    </div>
				                </form>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="table-responsive font-300">
							<table class="table table_sort">
								<thead>
									<tr>
										<th scope="col"><?=VI_TABLE_NAME?></th>
										<th scope="col" class="text-center"><?=VI_TABLE_DATA?></th>
										<th scope="col" class="text-center"><?=VI_TABLE_TIME?></th>
										<th scope="col" class="text-center"><?=VI_TABLE_TRACK?></th>
										<th scope="col" class="text-center"><?=VI_TABLE_STYLE?></th>
										<th scope="col" class="text-center"><?=VI_TABLE_JUMP?>&nbsp;&nbsp;</th>
										<th scope="col" class="text-center"><?=VI_TABLE_STREIF?>&nbsp;&nbsp;</th>
										<th scope="col" class="text-center"><?=VI_TABLE_SINH?>&nbsp;&nbsp;</th>
										<th scope="col" class="text-center"><?=VI_TABLE_POINT?></th>
									</tr>
								</thead>
								<tbody class="table-tr" id="load_allrecords">
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	load_allrecords('<?php echo $this->route['map'];?>');
</script>