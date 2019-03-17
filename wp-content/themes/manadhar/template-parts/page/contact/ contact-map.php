<!-- Map  start-->
<section class="wow zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section__heading">
					<?php 

						$location = get_field('contact_map');

						if( !empty($location) ):
					?>
					<h2 class="wow bounceInDown" data-wow-offset="8"><?php the_title();?></h2>
					<p class="section__subHead wow fadeInUp" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="map">
					<div class="locationInfo">
						<div class="locationInfo--box">
							<h3>Quick Contact</h3>
							<p><i class="fa fa-home"></i><?php the_field('title');?></p>
							<p><i class="fa fa-map-marker"></i><?php the_field('location'); ?></p>
							<p><i class="fa fa-phone"></i><?php the_field('phone'); ?></p>
						</div>
						<div class="locationInfo--box">
							<h3>Follow Us On</h3>
						  	 <a href="<?php the_field('facebook', 'option');?>" title="facebook" target="_blank"  class="btn--red btnRipple"><i class="fa fa-facebook"></i></a>
			    		    <a href="<?php the_field('twitter', 'option');?>" title="twitter" target="_blank"  class="btn--red btnRipple"><i class="fa fa-twitter"></i></a>
	    		      	 	<a href="<?php the_field('instagram', 'option');?>" title="instagram" target="_blank"  class="btn--red btnRipple"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- map end -->