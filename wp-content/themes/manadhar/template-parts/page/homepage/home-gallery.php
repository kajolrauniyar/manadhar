<!-- Gallery start-->
<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section__heading">
					<h2 class="wow bounceInDown" data-wow-offset="8"><?php the_field('h_gallery_title');?></h2>
					<p class="section__subHead wow fadeInUp"><?php the_field('h_gallery_content');?></p>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="gallery__slider">
			
					<div class="gallery__sliderSilde album">
						<div class="row">
							<div class="col-sm-6 padCustomR">
								<?php

									$args = array(
										'post_type' => 'kmsang_gallery',
										'posts_per_page'=>'1',
									);
									// The Query
									$the_query = new WP_Query( $args );
									//print_r($the_query);
									// The Loop
									if ( $the_query->have_posts() ) {
									
									/*$total_post = $the_query->post_count;*/
								?>

								<div class="album__thumb wow bounceInLeft">
								<?php 
									while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>
								<?php //$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
									$images = get_field('kms_gallery', get_the_ID() );

								if( $images ) :
							 		$url= $images[0]['url'] ?>
								 	<a href="<?php the_permalink(); ?>">
										<img src="<?php echo $url ?>"/>
									</a>
								<?php endif; ?>
									<div class="album__info  wow fadeInRight" data-wow-delay="0.3s">
										<p class="album__heading"><?php the_title(); ?></p>
										<p class="album__date">Uploaded:<?php echo date('F jS, Y');?></p>
									</div>

									<div class="album__share">
									  	<a href="<?php the_field('facebook', 'option');?>" title="facebook" target="_blank"  class="btn--red btnRipple wow zoomIn"><i class="fa fa-facebook"></i></a>
						    		    <a href="<?php the_field('twitter', 'option');?>" title="twitter" target="_blank"  class="btn--red btnRipple wow zoomIn"><i class="fa fa-twitter"></i></a>
				    		   			<a href="<?php the_field('instagram', 'option');?>" title="instagram" target="_blank"  class="btn--red btnRipple"><i class="fa fa-instagram"></i></a>
									</div>

									<div class="album__expand wow swing" data-wow-delay="0.6s">
										<a href="<?php echo site_url();?>/gallery"><i class="fa fa-eye"></i><span>VIEW ALL</span></a>
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
							<div class="col-sm-6 padCustomL">
								<?php

									$args = array(
										'post_type' => 'kmsang_gallery',
										'posts_per_page'=>'4',
										'offset'=>'1',
									);
									// The Query
									$the_query = new WP_Query( $args );
									//print_r($the_query);
									// The Loop
									if ( $the_query->have_posts() ) {
									
									/*$total_post = $the_query->post_count;*/
								?>
							<div class="row">
								<?php 
									while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>
								<div class="col-sm-6 padCustomR"> 
									<div class="album__preview wow bounceInDown" data-wow-delay="0.2">	

										<?php //$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
										$images = get_field('kms_gallery', get_the_ID() );
						
										if( $images ):
										 $url= $images[0]['url'] ?>
										 	<a href="<?php the_permalink(); ?>">
											<img src="<?php echo $url ?>"/>
										</a>
										<?php endif; ?>
									</div>
								</div> 
								<?php } ?>
							</div>
								<?php
									/* Restore original Post Data */
										wp_reset_postdata();
									} else {
									// no posts found
								}?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- gallery end -->