@extends('master')

@section('content')

<div class="page-header container">
	<img src="/images/banners/contact-picture.jpg" alt="" />
	<h1>Contact Us</h1>
</div>

<section>
	<div class="container">
		<div class="col-set">
			<div class="col-2">
				<p>If your looking for a quote, need emergency assistance or would simply like to ask a question, we are always happy to help.</p>
				<p>Simply enter your enquiry details below and one of our highly experienced team will contact you as soon as possible with a response.</p>
				<form action="/contact-us" method="post" id="contact-form">
					<div class="form-group">
						<input type="text" name="name" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="text" name="email" placeholder="Email address">
					</div>
					<div class="form-group">
						<input type="text" name="telephone" placeholder="Contact number">
					</div>
					<div class="form-group">
						<textarea name="enquiry" placeholder="How can we help....?"></textarea>
					</div>
					<div class="form-group">
						<button>Submit enquiry</button>
					</div>
				</form>
			</div>
			<div class="col-2 map-container">
				<p class="call-us-on">Call us today on <strong>01708 444 355</strong></p>
				<div id="contact-map"></div>
				<address><strong>RSF Group</strong> - 9-11 Butts Breen Road, Hornchurch, Essex, RM11 2JR</address>
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
