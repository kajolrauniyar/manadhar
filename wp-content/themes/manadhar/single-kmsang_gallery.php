<?php get_header(); 
while ( have_posts() ) {
		the_post();?>
<section>
	<div class="container">
		<div class="row">
			<?php 
			$images = get_field('kms_gallery');

			if( $images ): 
			 	foreach( $images as $image ): ?>
			<div class="col-sm-12 col-md-4 col-lg-4">
			
				<div class="gallery__img">
					<div class="wow fadeIn">
					
		                <a href="<?php echo $image['url']; ?>" data-lightbox="kms_gallery"><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

					</div>
				</div>
				<div class="gallery__details">
					<h2 class="gallery__title"><?php echo $image['title']; ?></h2>
				</div>
			</div>
			  	<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<script>
$( "#menu-item-33" ).add( ".menu-item-33" ).css( "background", "#493B93" );
</script>
<?php }  get_footer(); ?>

