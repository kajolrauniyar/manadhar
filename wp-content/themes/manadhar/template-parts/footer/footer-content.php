	
<!-- Footer content start-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="footer__item">
					<p class="footer__itemTitle">QUICK LINKS</p>
					<ul class="footer__list">
						<li>
				        <?php 
		                     wp_nav_menu([

		                         'menu'            => 'top',

		                         'theme_location'  => 'footer-menu',

		                         'container_class' => '',

		                         'menu_id'         => false,

		                         'items_wrap'      => '<ul id="menu-navigation">%3$s</ul>',

		                         'menu_class'      => 'navbar-nav',

		                         'depth'           => 2,

		                         'fallback_cb'     => 'bs4navwalker::fallback',

		                         'walker'          => new bs4navwalker()
		                    ]);
		                ?>
						</li>
					</ul>
				</div>
			</div>
			<?php

			$args = array(
				'post_type' => 'post',
				'posts_per_page'   => 5,
				
			);

			// The Query
			$the_query = new WP_Query( $args );
			//print_r($the_query);
			// The Loop
			if ( $the_query->have_posts() ) {
				?>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="footer__item">
					<p class="footer__itemTitle">LATEST ARTICLES</p>
					<ul class="footer__list">
						 	<?php
							while ( $the_query->have_posts() ) {
								
								$the_query->the_post();?>
								<li class="title_wrapper"><a href="<?php the_permalink(); ?>"><?php echo  the_title();?></a></li>
								<?php
							}

							/* Restore original Post Data */
							wp_reset_postdata();
						} else {
							// no posts found
						}
						?>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="footer__item">
					<div class="fb__feeds">
						  <a href="<?php the_field('facebook', 'option');?>" title="facebook" target="_blank"><img  src="<?php echo KMS_IMG . '/fb.jpg';?>"></a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="footer__item">
					<p class="footer__itemTitle"><?php the_field('c_title','option');?></p>
					<p class="footer__txt"><i class="fa fa-home"></i><?php the_field('c_address','option');?></p>
					<p class="footer__txt">
						<i class="fa fa-map-marker"></i><?php the_field('c_location','option');?>
					</p>
					<p class="footer__txt">
						<i class="fa fa-phone"></i><?php the_field('c_phone','option');?>
					   	<a href="tel:<?php the_field('c_phone', 'option');?>"><p></a>
					</p>

					<div class="socialNav">
					    <a href="<?php the_field('facebook', 'option');?>" title="facebook" target="_blank"  class="btn--red btnRipple"><i class="fa fa-facebook"></i></a>
		    		    <a href="<?php the_field('twitter', 'option');?>" title="twitter" target="_blank"  class="btn--red btnRipple"><i class="fa fa-twitter"></i></a>
    		    	    <a href="<?php the_field('instagram', 'option');?>" title="instagram" target="_blank"  class="btn--red btnRipple"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer content end -->