<!-- Banner start-->
<div class="mainBanner  wow bounceInUp">
		<div class="row">
			<div class="col-sm-12">
				<div class="mainBanner__slider ">
					<?php 

						$images = get_field('home_banner');
						$size ='full';
						// var_dump($images);
						if( $images ): ?>
						            <?php foreach( $images as $image ): ?>
						            	<div class="mainBanner__content">
					                	<div class="mainBanner__imgHolder">
						                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				                      	</div>
						                <div class="mainBanner__intro wow fadeInLeft" data-wow-delay="1s">
											<p class="mainBanner__introHead"><?php echo $image['title']; ?></p>
											<p class="mainBanner__introtxt"><?php echo $image['caption']; ?>	</p>
										</div>
						              </div>
						            <?php endforeach; ?>
						<?php endif; ?>
					</div>
			</div>
		</div>
</div>
<!-- Banner end-->