<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9 col-lg-9">
				<?php
				while ( have_posts() ) {
					the_post();?>
				<div class="news__details">
					<p class="heading"><?php the_field('p_title'); ?></p>
					<ul class="infotxt">
						<li class="news__published">Published By: <span><?php the_author();?></span></li>
						<li class="news__date"><span><?php echo date('F jS, Y');?></span></li>
						<li class="news__time"><?php  the_time( 'g:i a' );?></li>
					</ul>
				</div>
				<div class="news__img">
					<div class="wow fadeIn">
						<?php 
							$image = get_field('p_image');

							if( !empty($image) ): ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>
					</div>
				</div>
				<?php }?>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="download">
					<?php 
						$file = get_field('p_file');
						if( $file ) {
							$url = wp_get_attachment_url( $file );							
							?><a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
						<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
$( "#menu-item-27" ).add( ".menu-item-27" ).css( "background", "#493B93" );
</script>

<?php  get_footer(); ?>
