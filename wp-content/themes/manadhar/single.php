<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-lg-8">
				<?php
				while ( have_posts() ) {
					the_post();?>
				<div class="blogs__details">
					<p class="single-heading"><?php the_title();?></p>
					<p class="author">By:<?php echo   get_the_author()?></p>
<!-- 					<p class="date"><?php the_date();?></p> -->
				</div>
				<div class="blogs__img wow fadeIn single-image">
					<?php 
						$image = get_field('b_image');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="blogs__img wow fadeIn single-content">
						<?php the_content();?>
				</div>
				<div class="author-heading">
					<h2>About the Author</h2>
				</div>
				<div class="row author">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="author-image">
							<?php
							$author_id = get_the_author_meta('ID');
							$author_badge = get_field('photo', 'user_'. $author_id );
							?>
							<img src="<?php echo $author_badge; ?>"  />
						</div>
					</div>
					<div class="col-sm-12 col-md-8 col-lg-8">
						<div class="author-description">
							<?php $user_info = get_userdata(2);
							?> 
							<p class="author-name">
								<?php echo $user_info->first_name .  "  " . $user_info->last_name . "\n"; ?>
							</p>
							
						</div>
					</div>
				</div>
				<?php 
					// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) {
					comments_template();
				//}
				}?>
				
			</div>
			<?php get_template_part( 'template-parts/sidebar/sidebar', 'latest-news' );?>	
		</div>
	</div>
</section>
<?php get_footer(); ?>