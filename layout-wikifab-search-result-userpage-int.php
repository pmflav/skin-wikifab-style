<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="project-card">
		<a href="<?php echo $url; ?>">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-5">
					<div class="project-thumbnail">
						<img src="<?php echo  WikifabExploreResultFormatter::getImageUrl($Main_Picture);?>"  alt="<?php echo $Main_Picture; ?>"/>
						<div class="project-card-lang-code lang-<?php echo $codeLang; ?>">
							<?php echo $codeLang; ?>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-7">
					<div class="project-card-content">
						<h5 class="project-title">
							<span class="mw-headline"><?php echo $title; ?></span>
						</h5>
						<p class="project-byline">
							<?php if (isset($Area)):?>
							<span class="area-style"><?php echo $Area; ?></span>
							<?php endif; ?>
						</p>
						<?php if (isset($Description)):?>
							<div class="project-blurb"><?php echo $Description; ?></div>
						<?php endif; ?>
						<div class="project-location">
							<ul>
								<?php if (isset($Difficulty)):?>
									<li>
									<i class="fa fa-briefcase"></i>
									<span class="location-name"><?php echo $Difficulty; ?></span>
									</li>
								<?php endif; ?>
								<?php if (isset($Business)):?>
									<li>
									<i class="fa fa-building-o"></i>
									<span class="location-name"><?php echo $Business; ?></span>
									</li>
								<?php endif; ?>
								<?php if (isset($Cost)):?>
									<li>
									<i class="fa fa-money"></i>
									<span class="location-name"><?php echo $Cost; ?> <?php echo $Currency; ?></span>
									</li>
								<?php endif; ?>
								<?php if (isset($Duration)):?>
									<li class="last">
									<i class="fa fa-hourglass-half"></i>
									<span class="location-name"><?php echo $Duration; ?> <?php echo $Duration_type; ?></span>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
</div>