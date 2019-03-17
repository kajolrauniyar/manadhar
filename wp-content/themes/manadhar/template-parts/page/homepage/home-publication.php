<!-- Publications start -->
<section class="publications">
	<?php
		$args = array(
			'post_type' => 'kmsang_publication',
			
		);

		// The Query
		$the_query = new WP_Query( $args );
		//print_r($the_query);
		// The Loop
		if ( $the_query->have_posts() ) {
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section__heading">
					<h2 class="wow bounceInDown" data-wow-offset="8"><?php the_field('h_pub_title');?></h2>
					<p class="section__subHead wow fadeInUp"><?php the_field('h_pub_content');?></p>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="publications__slider row">
					<?php 
						while ( $the_query->have_posts() ) {
						$the_query->the_post();
					?>
					<div class="col-sm-12 col-md-4">
						<div class="publications__sliderItem wow flipInY" data-wow-delay="0.1s">
							<div class="publications__img">
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo $url ?>"/>
								</a>
							</div>
							<div class="publications__details">
								<p class="publications__head"><?php the_title();?></p>
								<p class="publications__by">By <span><?php the_author();?></span></p>
								<div class="publications__btns">
									<a href="<?php the_permalink(); ?>" class="btn btn__readmore btnRipple">READ NOW</a>	
									<div class="publications__share">
										<a href="<?php the_field('facebook', 'option');?>" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
		    		    				<a href="<?php the_field('twitter', 'option');?>" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
		    		    				<a href="<?php the_field('instagram', 'option');?>" title="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			
		</div>
	</div>
	<?php

	/* Restore original Post Data */
	wp_reset_postdata();
	} else {
	// no posts found
	}
	?>
</section>

<!-- Publications end-->