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
			      				<?php echo $system->userStatus($steamapi['personastate']);?>
			      				<?php echo $system->VacBanInfo($vac);?>
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
		    <div class="col-12 col-lg-10 indent">
		      	<div class="row ">
		      		<?php if (empty($data)): ?>
		      			<p><?=VI_USER_INDEX_THERE_IS_NO_RECORD?></p>
            		<?php else: ?>
			      		<div class="col-12">
			      			<div class="row">
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text"><?=VI_USER_INDEX_ALLREC?></div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['maps'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text"><?=VI_USER_INDEX_REC_BASE?></div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['base'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text"><?=VI_USER_INDEX_REC_BONUS?></div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['bonus'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text"><?=VI_USER_INDEX_ALLJUMPS?></div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['jumps'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>
			      				<div class="col">
			      					<div class="padding-20">
			      						<div class="section">
			      							<div class="row block-info">
			      								<div class="col-12 block-info-text"><?=VI_USER_INDEX_ALLSTREIF?></div>
			      								<div class="col-12 block-info-value"><?php echo $userstatsmaps['strafes'];?></div>
			      							</div>
			      						</div>
			      					</div>
			      				</div>		
			      			</div>
			      		</div>
			      		<div class="col-12 col-lg-6">
			      			<div class="row padding-20 section">
			      				<span><?=VI_USER_INDEX_RECORDS_BY_STYLE?></span>
			      				<?php foreach ($styleRecord as $styleItem):?>
				      				<div class="col-6">
				      					<div class="row">
				      						<div class="col-12">
				      							<div class="row">
				      								<a href="<?php echo $this->route['auth']; ?>/style-<?php echo $styleItem['style']; ?>" class="right-col">
					      								<div class="col-7 font-300">
							      							<?php 
													    		if (empty($style[$styleItem['style']])) {
													    			echo '<i class="fas fa-frog" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="'.ERROR_STYLE_TITLE.'"></i>';
													    		}else{
													    			echo $style[$styleItem['style']];
													    		}
							      							?>
							      						</div>
							      						<div class="col-5 section-value">
							      							<span><?php echo $styleItem['count_style'];?></span>
							      						</div>
							      					</a>
				      							</div>
				      						</div>
				      					</div>
				      				</div>
			      				<?php endforeach;?>
			      			</div>
			      		</div>
			      		<div class="col-12 col-lg-6">
			      			<div class="row padding-20 section_last">
			      				<span><?=LASTRECORDS?></span>
			      				<div class="table-responsive font-300">
								    <table class="table">
										<thead>
									        <tr>
										        <th scope="col"><?=VI_TABLE_MAP?></th>
										        <th scope="col"><?=VI_TABLE_TIME?></th>
										        <th scope="col"><?=VI_TABLE_POINT?></th>
									        </tr>
									    </thead>
									    <tbody class="table-tr">
									        <?php foreach ($lastrecords as $lastrecordsItem):?>
										        <tr>
												    <td><?php echo $lastrecordsItem['map'];?></td>
												    <td><?php echo $system->secToStr(round($lastrecordsItem['time']));?></td>
												    <td><?php echo $lastrecordsItem['points'];?></td>
										        </tr>
									        <?php endforeach;?>
									    </tbody>
									</table>
								    <center><a href="<?php echo $this->route['auth']; ?>/allrecords" class="btn_all_records"><?=VI_USER_INDEX_SYBMIT_ALLREC?></a></center>
							    </div>
			      			</div>
			      		</div>
		      		<?php endif; ?>
		      	</div>
		    </div>
      	</div>
    </div>
</div>
<script type="text/javascript">
	if (document.querySelector(".error-steamapi")) {
	  	Swal.fire({
	    	title: "<?=VI_USER_STEAMAPI_ERROR_TITLE?>",
	    	text: "<?=VI_USER_STEAMAPI_ERROR_CONTENT?>",
	    	icon: "error",
	    });
  	}
</script>