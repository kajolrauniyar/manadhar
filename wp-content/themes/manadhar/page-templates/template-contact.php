<?php
/**
 * Template Name: Contact Layout
 */
get_header();?>
<!-- Map  start-->
<section class="wow zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php
						$map_lat = get_field('map_lat');
						$map_long = get_field('map_lon');
				?>
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
<?php
    /* KMS_homepage_content hook */
    do_action( 'KMS_contact_content' );
?>

<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
<script type="text/javascript">

var geoCoords = '[' + <?php echo $map_lat;?> + ', ' + <?php echo $map_long;?> + ']';
var map = L.map('map', {
    center: JSON.parse(geoCoords),
    zoom: 14
});
var marker = L.marker(JSON.parse(geoCoords)).addTo(map);
marker.bindPopup("<b>Kendriya Manadhar Sang</b>").openPopup();
map.scrollWheelZoom.disable();

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiYW1pdC1tYWhhcnhhbiIsImEiOiJjanJ1cGZxZ3UwNnhsNGFsNTAzcWtsanpsIn0.tnq36qhYA87WJb2nR7_KIw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1Ijoia2VuZHJpeWEiLCJhIjoiY2p0NzF5eTV2MDczczQ0bW96Yjk1bWhtdiJ9.lKNlZGrIx5-slVhZUM-L9Q'
}).addTo(map);

</script>

<?php get_footer(); ?>

