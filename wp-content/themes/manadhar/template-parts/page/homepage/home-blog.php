
<!-- Blogs start -->
<section class="blog">
	<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page'   => 4,
		
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
					<h2 class="wow bounceInDown" data-wow-offset="8"><?php the_field('h_blogs_title');?></h2>
					<p class="section__subHead wow fadeInUp"><?php the_field('h_blogs_content');?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<div class="grid homegrid">
					<?php 
					 $c = 1; $i = 1;
					while ( $the_query->have_posts() ) {
					$the_query->the_post();
					?>
					<div class="<?php echo ($c==2)?'grid-item grid-item--height2 grid-item-home':'grid-item grid-item-home'?>">
						<div class="<?php echo ($c==2)?'blogBox blogBox--lg wow flipInX':'blogBox blogBox--sm wow flipInX'?>" data-wow-delay="0.<?php echo $i;?>s">
							<div class="blog__img">
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo $url ?>"/>
								</a>
							</div>
							<div class="blog__details">
								<p class="blog__category">COMMUNITY & INSPIRATION</p>
								<p class="blog__title"><a href="<?php the_permalink(); ?>"><?php echo  the_title();?></a></p>

								<ul class="infotxt">
									<li>By <span><?php echo the_author();?></span></li>
									<li><span class="item__date">July 15, 2018</span></li>
								</ul>
							</div>
						</div>
					</div>
					<?php $c++; $i++;
						if($c == 4){
							$c = 1;
						}} ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4">
				<div class="widget">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-12">
							<div class="widget__container wow flipInX" data-wow-delay="0.3s">
								<div class="widget__weatherForecast">
									<?php echo do_shortcode('[wpc-weather id="321"]'); ?>
								<!-- 	<img src="<?php /*echo KMS_IMG. '/weather.jpg'*/;?>"> -->
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-12">
							<div class="widget__container wow flipInX" data-wow-delay="0.6s">
								<div class="widget__calendar">
								<!-- 	<img src="<?php echo KMS_IMG. '/calendar.jpg';?>"> -->
									<?php echo do_shortcode('[calendar id="331"]'); ?>
								</div>
							</div>
						</div>
					</div>
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

<!-- Blogs end -->