<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-lg-8">
				<?php
				 $args = array(
					'posts_per_page'   => 5,
					'orderby'          => 'date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					's' => $s
					);
				$query1 = new WP_Query( $args );

				if ( $query1->have_posts() ) {
					// The Loop
					while ( $query1->have_posts() ) {
						$query1->the_post();

						?>
				<div class="blogs__details search-title">
					<p class="heading"><?php the_title();?></p>
				</div>
				<div class="blogs__img wow fadeIn">
					<!-- 	<?php the_post_thumbnail();?> -->
				</div>
				<div class="blogs__img wow fadeIn search-content">
						<?php the_excerpt(); ?>
				</div>
				<?php }?>
					<?php
						/* Restore original Post Data */
						wp_reset_postdata();
					} else {
						// no posts found
						get_template_part( 'template-parts/content', 'none' );
					}?>
				
			</div>
				<?php get_template_part( 'template-parts/sidebar/sidebar', 'latest-news' );?>
		</div>
	</div>
</section>