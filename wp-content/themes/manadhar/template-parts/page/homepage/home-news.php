<!-- News & Events start -->
<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section__heading">
					<h2 class="wow bounceInDown" data-wow-offset="8"><?php the_field('h_news_title');?></h2>
					<p class="section__subHead wow fadeInUp"><?php the_field('h_news_content');?></p>
				</div>
			</div>
			<div class="col-sm-12 col-md-8 col-lg-8 fullwidth">				
				<?php

				$args = array(
					'post_type' => 'kmsang_news',
					'posts_per_page'   => 3,
					
				);
				// The Query
				$the_query = new WP_Query( $args );
				//print_r($the_query);
				// The Loop
				if ( $the_query->have_posts() ) {
				
		/*		$total_post = $the_query->post_count;*/
				?>
				<div class="newsSlider">					
					<?php
					while ( $the_query->have_posts() ) {
					$the_query->the_post();?>
					<div class="newsSlider__item">
						<div class="news__details">
							<p class="heading"><a href="<?php the_permalink(); ?>"><?php echo  the_title();?></a></p>
							<p class="location">Kathmandu, Nepal</p>
							<ul class="infotxt">
								<li class="news__published">Published By: <span><?php the_author();?></span></li>
								<li class="news__date"><span><?php echo date('F jS, Y');?></span></li>
								<li class="news__time"><?php  the_time( 'g:i a' );?></li>
							</ul>
						</div>
						
						<div class="news__img">
							<div class="wow fadeIn">
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo $url ?>"/>
								</a>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
				<?php
					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					// no posts found
				}?>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<ul class="sidebar">
		<?php

				//Skipping 3 posts using offset which are already loaded on above div
			$args = array(
				'post_type' => 'kmsang_news',
				'posts_per_page'   => 6,
				'offset' => 3
				
			);
			// The Query
			$the_query = new WP_Query( $args );
			//print_r($the_query);
			// The Loop
			if ( $the_query->have_posts() ) {

			/*$total_post = $the_query->post_count;*/
		?>
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
		<?php
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		/*get_template_part( 'template-parts/content', 'none' );*/
		}?>
	</ul>
			</div>					
		</div>
	</div>
</section>
<!-- News & Events end -->