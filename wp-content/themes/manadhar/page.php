<?php get_header();  ?>
<section>
	<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-8 col-lg-8">
			<?php

				if ( have_posts() ) :
						while ( have_posts() ) : the_post();
						?>
						<div class="paragraph_wrapper">
							<?php the_post_thumbnail();?>
							<?php the_content();?></div>			
						<?php 
				endwhile;

					/* Restore original Post Data */
					wp_reset_postdata();
				else:
					// no posts found
				endif;
			?>			
		</div>
		<div class="col-sm-12 col-md-4 col-lg-4 fullwidth">
			<?php

				//Skipping 3 posts using offset which are already loaded on above div
			$args = array(
				'post_type' => 'kmsang_news',
/*					'posts_per_page'   => 6,
				'offset' => 3*/
				
			);
			// The Query
			$the_query = new WP_Query( $args );
			//print_r($the_query);
			// The Loop
			if ( $the_query->have_posts() ) {
			
	/*		$total_post = $the_query->post_count;*/
			?>
			<ul class="sidebar">
				<li class="sidebar__heading">LATEST NEWS</li>
				<li class="sidebar__contentHolder wow fadeInRight" data-wow-delay="0.1s">
				<?php
				while ( $the_query->have_posts() ) {
				$the_query->the_post();?>
					<div class="sidebar__inner">
						<div class="sidebar__innerImg">
							<?php the_post_thumbnail();?>
						</div>
						<div class="sidebar__innertxt">
							<p class="heading"><?php the_title();?></p>
							<ul class="infotxt">
								<li>By: <span><?php the_author();?></span></li>
								<li><?php echo date('F jS, Y');?></li>
								<li><?php  the_time( 'g:i a' );?></li>
							</ul>
						</div>

					</div>
					<?php }?>
				</li>
			</ul>
			<?php
					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					// no posts found
				}?>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>
