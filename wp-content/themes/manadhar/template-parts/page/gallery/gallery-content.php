<!-- gallery content start-->
<section class="blog">
	<?php
	$args = array(
		'post_type' => 'kmsang_gallery',
		
	);

	// The Query
	$the_query = new WP_Query( $args );
	//print_r($the_query);
	// The Loop
	if ( $the_query->have_posts() ) {
	?>
	<div class="container">
		<div class="grid">
			<?php $c = 1; $i = 1;
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					?>
					<div class="<?php echo ($c==2)?'grid-item grid-item--height2':'grid-item'?> <?php echo ($c==1)?'clear':''?>">
						<div class="<?php echo ($c==2)?'blogBox blogBox--lg wow flipInX':'blogBox blogBox--sm wow flipInX'?>" data-wow-delay="0.<?php echo $i;?>s">
							<div class="blog__img">
								<?php //$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
								$images = get_field('kms_gallery', get_the_ID() );

								if( $images ):
								 $url= $images[0]['url'] ?>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo $url ?>"/>
								</a>
							<?php endif; ?>
							</div>
							<div class="blog__details">
								<p class="blog__category"></p>
								<p class="blog__title"><a href="<?php the_permalink(); ?>"><?php echo  the_title();?></a></p>

								<ul class="infotxt">
									<li>By <span><?php the_author();?></span></li>
									<li><span class="item__date"><?php echo date('F jS, Y');?></span></li>
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
	<?php

	/* Restore original Post Data */
	wp_reset_postdata();
	} else {
	// no posts found
	}
	?>
</section>

<!-- gallery content end -->
