
<!-- Contact Form  start-->
<section>
	<div class="container">
		<div class="row">
			<?php 
				$images = get_field('contact_image');
				$size ='full';
				// var_dump($images);
				?>
			<div class="col-sm-6">
				<div class="contactHolder">
						<div class="contactHolder__logo">
						  	<a href="<?php echo $images['url']; ?>">
		                     	<img src="<?php echo $images['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
			                </a>
						</div>
						<p class="contactHolder__name"><?php echo $images['title']; ?></p>
						<p><?php echo $images['caption']; ?></p>
				</div>
			</div>
			<?php 
				$form = get_field('contact_form');
				$size ='full';
				// var_dump($images);
				?>		
			<div class="col-sm-6">
				<form class="contactForm">
					<div class="row">
						<div class="col-sm-12">
							<h3><?php the_field('contact_form'); ?></h3>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<?php echo do_shortcode('[contact-form-7 id="10" title="contact"]') ?>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Contact Form  end-->