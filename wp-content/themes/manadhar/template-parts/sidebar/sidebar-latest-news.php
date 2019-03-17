<div class="col-sm-12 col-md-4 col-lg-4 fullwidth">


<?php if( is_singular('kmsang_news') ) {
	$arr = ['kmsang_news',  'post']; 
} else {
	$arr = ['post', 'kmsang_news']; 
}


foreach ($arr as $key => $value) {
	$postTYpe = $value; 
	$offset = ( $postTYpe === "kmsang_news") ? 3 : 0; 
	$sectionTitle = ( $postTYpe === "kmsang_news") ? 'Latest News' : 'LATEST BLOGS'; ?>

	<ul class="sidebar">
		<?php

			//Skipping 3 posts using offset which are already loaded on above div
			$args = array(
			'post_type' => $postTYpe,
			'posts_per_page'   => 6,
			'offset'  => $offset
			);
			// The Query
			$the_query = new WP_Query( $args );
		
			if ( $the_query->have_posts() ) { ?>
		<li class="sidebar__heading"><?php echo $sectionTitle ?></li>
		<li class="sidebar__contentHolder wow fadeInRight" data-wow-delay="0.1s">
		<?php
		while ( $the_query->have_posts() ) {
		$the_query->the_post();?>
			<div class="sidebar__inner">
				<?php 
						$image = get_field('b_image');
						if( !empty($image) ): ?>
				<div class="sidebar__innerImg">
					
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
				</div>
				<?php endif; ?>
				<div class="sidebar__innertxt">
					<p class="heading"><?php the_title();?></p>
					<ul class="infotxt">
						<li>By: <span><?php the_author();?></span></li>
						<li><?php echo date('F jS, Y');?></li>
						<li><?php  the_time( 'g:i a' );?></li>
					</ul>
				</div>

			</div>
			<?php }?>
		</li>

		<?php
		/* Restore original Post Data */
		wp_reset_postdata();
		} else {
		// no posts found
		//get_template_part( 'template-parts/content', 'none' );
		}?>
	</ul>

<?php 	
}
?>
	

	<!-- <ul class="sidebar">
		<?php

				//Skipping 3 posts using offset which are already loaded on above div
			$args = array(
				'post_type' => 'kmsang_news',
				'posts_per_page'   => 6,
				'offset' => 3
				
			);
			// The Query
			$the_query = new WP_Query( $args );
			//print_r($the_query);
			// The Loop
			if ( $the_query->have_posts() ) {

			/*$total_post = $the_query->post_count;*/
		?>
		<li class="sidebar__heading">LATEST NEWS</li>
		<li class="sidebar__contentHolder wow fadeInRight" data-wow-delay="0.1s">
		<?php
		while ( $the_query->have_posts() ) {
		$the_query->the_post();?>
			<div class="sidebar__inner">
				<div class="sidebar__innerImg">
					<?php the_post_thumbnail();?>
				</div>
				<div class="sidebar__innertxt">
					<p class="heading"><?php the_title();?></p>
					<ul class="infotxt">
						<li>By: <span><?php the_author();?></span></li>
						<li><?php echo date('F jS, Y');?></li>
						<li><?php  the_time( 'g:i a' );?></li>
					</ul>
				</div>

			</div>
			<?php }?>
		</li>
		<?php
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		/*get_template_part( 'template-parts/content', 'none' );*/
		}?>
	</ul> -->
</div>