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
</html>
