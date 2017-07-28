@extends('master')

@section('content')

<div class="page-header contact-us">
	@include('include.es-water-approved')
	<h1>Contact Us</h1>
</div>

<section>
	<div class="container">
		<div class="col-set">
			<div class="col-2">
				<h2>Thank you</h2>
				<p>Your enquiry has been sent to our highly qualified team, one of whom will contact you shortly to discuss your requirements further</p>
			</div>
			<div class="col-2 map-container">
				<p class="call-us-on">Call us today on <strong>01708 444 355</strong></p>
				<div id="contact-map"></div>
				<address><strong>RSF Group</strong> - 9-11 Butts Green Road, Hornchurch, Essex, RM11 2JR</address>
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
	<script>
		function initMap() {
			// Create a map object and specify the DOM element for display.
			var rsfLocation = {lat: 51.5635955, lng: 0.2153466};
			var map = new google.maps.Map(document.getElementById('contact-map'), {
				center: rsfLocation,
				zoom: 11
			});
			var marker = new google.maps.Marker({
				position: rsfLocation,
				map: map
			});
		}

	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_5tkaqCLsd_iyaugy10dmfUdyAyuQBQg&callback=initMap" async defer></script>
@endsection
