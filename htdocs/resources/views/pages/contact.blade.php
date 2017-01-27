@extends('master')

@section('content')
<section>
	<div class="container">
		<div class="col-set">
			<div class="col-2">
				<h1>Contact Us</h1>
				<p>If your looking for a quote, need emergency assistance or would simply like to ask a question, we are always happy to help.</p>
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
				<p class="call-us-on">Call us today on <strong>01708 444 355</strong></p>
			</div>
			<div class="col-2">
				<div id="contact-map"></div>
				<address>Concept House, 23 Billet Lane, Hornchurch, Essex, RM11 1XP</address>
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
	<script>
		function initMap() {
			// Create a map object and specify the DOM element for display.
			var map = new google.maps.Map(document.getElementById('contact-map'), {
				center: {lat: -34.397, lng: 150.644},
				zoom: 8
			});
		}

	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_5tkaqCLsd_iyaugy10dmfUdyAyuQBQg&callback=initMap" async defer></script>
@endsection
