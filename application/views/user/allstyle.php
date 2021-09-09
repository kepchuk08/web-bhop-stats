<div class="row content">
    <div class="col user-content bg-white">
      	<div class="row">
      		<div class="col-12 col-lg-2">
      			<?php if (empty($nosteam)):?>
			      	<?php if (empty($steamapi['personaname'])):?>
		      			<div class="row">
			      			<div class="col-12 user-name">
			      				<?php echo $nosteam;?>
			      			</div>
			      			<div class="col-12 user-img">
			      				<img src="/public/img/no-image.png" class="rounded mx-auto d-block">
			      			</div>
			      			<div class="col-12 user-info">
			      				<p><?=VI_USER_INDEX_NOSTEAM_TEXT?></p>
			      			</div>
			      		</div>
		      		<?php else: ?>
			      		<div class="row">
			      			<div class="col-12 user-name">
			      				<?php echo $steamapi['personaname'];?>
			      			</div>
			      			<div class="col-12 user-img">
			      				<img src="<?php echo $steamapi['avatarfull'];?>" class="rounded mx-auto d-block">
			      			</div>
			      			<div class="col-12 user-info">
			      				<?php echo $sistem->userStatus($steamapi['personastate']);?>
			      				<?php echo $sistem->VacBanInfo($vac);?>
			      				<p><a class="text-color-green" href="<?php echo $steamapi['profileurl'];?>" target="_blank"><i class="fab fa-steam"></i><?=VI_USER_INDEX_PROFILE?></a></p>
			      			</div>
			      		</div>
		      		<?php endif; ?>
				<?php else: ?>
					<div class="row">
			      		<div class="col-12 user-name">
			      			<?php echo $nosteam;?>
			      		</div>
			      		<div class="col-12 user-img">
			      			<img src="/public/img/no-image.png" class="rounded mx-auto d-block">
			      		</div>
			      	</div>
			    <?php endif; ?>
		    </div>
		    <div class="col-12 col-lg-10 indent section_last">
		    	<span class="title_page">
		    		<a href="/user/<?php echo $this->route['auth'];?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?=VI_USER_ALLREC_TITLE_BACK?>"><i class="fas fa-chevron-circle-left"></i></a> 
		    		<span class="text-color-ced4da"><?=VI_USER_ALLRECSTYLE?></span> 
		    		<b>
		    			<?php 
			    			if (empty($sistem->style()[$this->route['style']])) {
			    				echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="'.ERROR_STYLE_TITLE.'"></i>';;
			    			}else{
			    				echo $sistem->style()[$this->route['style']]['name'];
			    			}
		    			?>
		    		</b>
		    	</span>
	      		<div class="table-responsive font-300">
					<table class="table table_sort">
						<thead>
							<tr>
								<th scope="col">Карта<?=VI_TABLE_MAP?></th>
								<th scope="col" class="text-center"><?=VI_TABLE_DATA?></th>
								<th scope="col" class="text-center"><?=VI_TABLE_TIME?></th>
								<th scope="col" class="text-center"><?=VI_TABLE_TRACK?></th>
								<th scope="col" class="text-center"><?=VI_TABLE_JUMP?></th>
								<th scope="col" class="text-center"><?=VI_TABLE_STREIF?></th>
								<th scope="col" class="text-center"><?=VI_TABLE_SINH?></th>
								<th scope="col" class="text-center"><?=VI_TABLE_POINT?></th>
							</tr>
						</thead>
						<tbody class="table-tr">
							<?php foreach ($allrecords as $allrecordsItem):?>
								<tr data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<?php echo $sistem->corectDate($allrecordsItem['date'])['title'] ;?>">
									<td><a class="table-a" href="/maps/<?php echo $allrecordsItem['map'];?>"><?php echo $allrecordsItem['map'];?></a></td>
									<td class="text-center"><?php echo $sistem->corectDate($allrecordsItem['date'])['datediff'];?></td>
									<td class="text-center"><?php echo $sistem->secToStr(round($allrecordsItem['time']));?></td>
									<td class="text-center"><?php echo $sistem->track($allrecordsItem['track']);?></td>
									<td class="text-center"><?php echo $allrecordsItem['jumps'];?></td>
									<td class="text-center"><?php echo $allrecordsItem['strafes'];?></td>
									<td class="text-center"><?php echo $allrecordsItem['sync'];?></td>
									<td class="text-center"><?php echo $allrecordsItem['points'];?></td>	
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
      	</div>
    </div>	      	
</div>