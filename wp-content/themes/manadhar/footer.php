<?php
/**
 * Footer Template
 *
 * @package KENDRIYA MANADHAR
 */
?>
	
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
					  	<a href="<?php the_field('facebook', 'option');?>" title="facebook" target="_blank">
							<?php 

								$image = get_field('facebook_image','option');

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>

						</a>
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

<!-- footer copyright start -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6 ">
				<p>&copy;<?php the_field('f_title','option');?></p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 ">
				<p class="text-right">Site By: <a href="#"><?php the_field('f_site','option');?></a></p>
			</div>
		</div>
	</div>	
</div>
<!-- footercopyright end -->
<!-- footer sidemenu start -->
<div class="slideMenu">
	<a href="#" class="menuToggle"><i class="fa fa-list"></i></a>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<div class="slideMenu-logo">
		<div class="logo">
			<div class="logo__img" width="110" height="113" alt="logo">
				<?php 

					$image = get_field('logo','option');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
		
				<p class="logo__heading"><?php the_field('logo_m_title','option');?><br>
				<?php the_field('logo_title','option');?></p>
			</div>
		</div>
	</div>
	<ul>
	    <?php 
             wp_nav_menu([

                 'menu'            => 'top',

                 'theme_location'  => 'header-menu',

                 'container_class' => '',

                 'menu_id'         => false,

                 'items_wrap'      => '<ul id="menu-navigation">%3$s</ul>',

                 'menu_class'      => 'navbar-nav',

                 'depth'           => 2,

                 'fallback_cb'     => 'bs4navwalker::fallback',

                 'walker'          => new bs4navwalker()
            ]);
        ?>
	</ul>
	<div class="slideMenu__footer">
		<p>&copy;<?php the_field('f_title','option');?></p>
		<p>Site By: <a href="#"><?php the_field('f_site','option');?></a></p>
	</div>
</div>
<!-- footer sidemenu end -->
</div>
<?php wp_footer(); ?>

</body>
<script>
	new WOW().init();
</script>
<script type="text/javascript">
	$('.grid').isotope({
		itemSelector: '.grid-item',
		layoutMode: 'masonry'
	})
</script>
</html>
