<!-- Intro start-->
<div class="siteIntro" >
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="siteIntro__img">
					<div class="wow pulse" data-wow-delay="0.5s">
						<?php 

						$image = get_field('h_image');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>
					</div>
				</div>
			</div> 
			<div class="col-sm-8">
				<div class="siteIntro__content" >
					<h1 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
						<?php the_field('h_title'); ?>
					</h1>
					<p class="wow fadeIn" data-wow-delay="0.5s">
						<?php the_field('h_contents'); ?>
					</p>
					</div>								
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Intro end-->