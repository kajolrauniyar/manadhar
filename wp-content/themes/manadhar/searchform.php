<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label','manadhar' ); ?></span>
		<input type="search" class="search-field search__input form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit search__icon btn btn--red btnRipple"><i class="fa fa-search"></i><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button','manadhar' ); ?></span></button>
</form> 
