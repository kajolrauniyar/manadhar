<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-lg-8">
				<?php
				while ( have_posts() ) {
					the_post();?>
				<div class="news__details">

					<p class="heading"><?php the_title();?></p>
					<p class="location">Kathmandu, Nepal</p>
					<ul class="infotxt">
						<li class="news__published">Published By: <span><?php the_author();?></span></li>
						<li class="news__date"><span><?php echo date('F jS, Y');?></span></li>
						<li class="news__time"><?php  the_time( 'g:i a' );?></li>
					</ul>
				</div>
				<div class="news__img">
					<div class="wow fadeIn">
						<?php the_post_thumbnail();?>
					</div>
				</div>
				<div class="news__img">
					<div class="wow fadeIn">
						<?php the_content();?>
					</div>
				</div>
				<?php }?>
			</div>
			<?php get_template_part( 'template-parts/sidebar/sidebar', 'latest-news' );?>	
		</div>
	</div>
</section>
<script>
$( "#menu-item-27" ).add( ".menu-item-27" ).css( "background", "#493B93" );
</script>
<?php get_footer(); ?>

