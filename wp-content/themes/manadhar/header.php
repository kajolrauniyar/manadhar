<?php
/**
 * Header Template
 * 
 * @package KENDRIYA MANADHAR
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale= 1.0">
	<title></title>
	<?php 

    // Keep it for plugins.
	wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<div class="sitebg">
			<!-- Header -->
			<header>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-6">
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
						<div class="col-sm-6 col-md-6">
							<div class="content-right">
								<div class="search form-group">
								<?php get_search_form(); ?>
								</div>
								<div class="socialNav">
								  	<a href="<?php the_field('facebook', 'option');?>" title="facebook" target="_blank"  class="btn--red btnRipple"><i class="fa fa-facebook"></i></a>
					    		    <a href="<?php the_field('twitter', 'option');?>" title="twitter" target="_blank"  class="btn--red btnRipple"><i class="fa fa-twitter"></i></a>
			    		   			<a href="<?php the_field('instagram', 'option');?>" title="instagram" target="_blank"  class="btn--red btnRipple"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

<!-- Menuy -->
<div class="navMenu">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="navMenu__holder">
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
				</div>
			</div>
		</div>
	</div>
</div>
<!-- banner start -->
<?php if(!is_page_template(array('page-templates/template-homepage.php', 'index.php'))){ ?>
	<section class="banner">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">	
				<span class="banner__img">
					<?php 

					$image = get_field('banner_img','option');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
				</span>
				<span class="breadcrumb-wrapper">
					<div class="breadcrumbs">
					
					</div>
				</span> 
				<div class="banner__heading">
					<h2 class="wow bounceInDown" data-wow-offset="8"><?php echo the_title();;?></h2>
					<p class="section__subHead wow fadeInUp"></p>
				</div>
			</div>
		</div>
	</section>
<?php } ?>	
<!-- banner end -->
<!-- if(!is_page_template('page-templates/template-homepage.php')) -->