<footer class="footer">
	<div class="footer-inner">
		<div class="footer-nav">
			<h6><a href="#">Home</a></h6>
			<h6><a href="#">About</a></h6>
			<h6><a href="#">Contact</a></h6>
		</div>

		<div class="footer-contact">
			<h4>Contact</h4>
			<p>
				<span class="small">EMAIL</span>: email@email.com
				<br>
				<span class="small">PHONE</span>: 123-234-4567
			</p>
		</div>
		
		<div class="footer-legal">
			<h6>
				&copy; ALISON ANIMAL HOSPITAL, 2014
				<br>
				<a href="#" class="privacy-link">privacy policy</a>
			</h6>

			<div class="footer-social">
				<a class="facebook" href="#"></a>
				<a class="twitter" href="#"></a>
			</div>
		</div>
	</div>
	
	<script src="https://maps.googleapis.com/maps/api/js?v=AIzaSyA4v30fV40scJ61KUJEmB0ldxxwBNpt3m0&sensor=false"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		var map_styles = [{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]}];
		var myOptions = {
			zoom: 14,
			center: new google.maps.LatLng(40.652908, -73.9525936),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			styles: map_styles
		};

		if ( $('#map-canvas').length ) {
			var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);
		}
    </script>
</footer>