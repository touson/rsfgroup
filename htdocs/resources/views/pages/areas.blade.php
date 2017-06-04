@extends('master')

@section('content')
<div class="page-header" id="map"></div>

<section>
	<div class="container">
		<div class="col-set">
			<div class="col-2">
				<p>We are based in Rainham and cover London and Essex, however if you are further afield, please don't hesitate to get in touch as we may still be able to help you.</p>
				@include('partials.telephone-block')
			</div>
			<div class="col-2">
				@include('partials.es-water-block')
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
<script>
	function initMap() {

		var areaOverlay = [
			{lat: 51.682774, lng: 0.005493},
			{lat: 51.781436, lng: 0.000000},
			{lat: 51.828988, lng: 0.115356},
			{lat: 51.905307, lng: 0.192261},
			{lat: 51.952729, lng: 0.175781},
			{lat: 51.974730, lng: 0.079651},
			{lat: 52.108192, lng: 0.063171},
			{lat: 52.152029, lng: 0.274658},
			{lat: 52.098070, lng: 0.494385},
			{lat: 52.138546, lng: 0.546570},
			{lat: 52.152029, lng: 0.736084},
			{lat: 52.114939, lng: 0.815735},
			{lat: 52.044045, lng: 0.807495},
			{lat: 51.996719, lng: 0.834961},
			{lat: 51.991646, lng: 1.068420},
			{lat: 51.949344, lng: 1.062927},
			{lat: 51.939185, lng: 1.117859},
			{lat: 51.939185, lng: 1.145325},
			{lat: 51.947651, lng: 1.172791},
			{lat: 51.939185, lng: 1.194763},
			{lat: 51.949344, lng: 1.227722},
			{lat: 51.947651, lng: 1.252441},
			{lat: 51.942572, lng: 1.268921},
			{lat: 51.942572, lng: 1.293640},
			{lat: 51.929025, lng: 1.290894},
			{lat: 51.923943, lng: 1.260681},
			{lat: 51.888359, lng: 1.246948},
			{lat: 51.881578, lng: 1.263428},
			{lat: 51.864620, lng: 1.293640},
			{lat: 51.828988, lng: 1.260681},
			{lat: 51.805218, lng: 1.219482},
			{lat: 51.788232, lng: 1.170044},
			{lat: 51.771239, lng: 1.120605},
			{lat: 51.769540, lng: 1.038208},
			{lat: 51.798424, lng: 1.018982},
			{lat: 51.793328, lng: 1.005249},
			{lat: 51.774638, lng: 0.950317},
			{lat: 51.774638, lng: 0.900879},
			{lat: 51.761040, lng: 0.884399},
			{lat: 51.742337, lng: 0.920105},
			{lat: 51.711714, lng: 0.947571},
			{lat: 51.679368, lng: 0.939331},
			{lat: 51.629952, lng: 0.939331},
			{lat: 51.618017, lng: 0.953064},
			{lat: 51.580483, lng: 0.914612},
			{lat: 51.554874, lng: 0.854187},
			{lat: 51.522416, lng: 0.791016},
			{lat: 51.534377, lng: 0.711365},
			{lat: 51.534377, lng: 0.601501},
			{lat: 51.512161, lng: 0.648193},
			{lat: 51.512161, lng: 0.549316},
			{lat: 51.507033, lng: 0.491638},
			{lat: 51.447160, lng: 0.538330},
			{lat: 51.364921, lng: 0.535583},
			{lat: 51.323747, lng: 0.455933},
			{lat: 51.303145, lng: 0.381775},
			{lat: 51.311730, lng: 0.310364},
			{lat: 51.263634, lng: 0.208740},
			{lat: 51.272226, lng: 0.024719},
			{lat: 51.272226, lng: -0.019226},
			{lat: 51.253321, lng: -0.046692},
			{lat: 51.256758, lng: -0.112610},
			{lat: 51.267071, lng: -0.151062},
			{lat: 51.251601, lng: -0.208740},
			{lat: 51.261915, lng: -0.249939},
			{lat: 51.291124, lng: -0.318604},
			{lat: 51.310013, lng: -0.335083},
			{lat: 51.301428, lng: -0.406494},
			{lat: 51.323747, lng: -0.480652},
			{lat: 51.351201, lng: -0.488892},
			{lat: 51.376924, lng: -0.513611},
			{lat: 51.400919, lng: -0.535583},
			{lat: 51.483093, lng: -0.502625},
			{lat: 51.534377, lng: -0.502625},
			{lat: 51.556582, lng: -0.532837},
			{lat: 51.587310, lng: -0.538330},
			{lat: 51.628248, lng: -0.519104},
			{lat: 51.664038, lng: -0.494385},
			{lat: 51.684477, lng: -0.447693},
			{lat: 51.706608, lng: -0.439453},
			{lat: 51.715118, lng: -0.365295},
			{lat: 51.710012, lng: -0.335083},
			{lat: 51.715118, lng: -0.274658},
			{lat: 51.687882, lng: -0.225220},
			{lat: 51.686180, lng: -0.181274},
			{lat: 51.687882, lng: -0.112610},
			{lat: 51.689585, lng: -0.076904},
			{lat: 51.681071, lng: -0.008240},
			{lat: 51.681071, lng: 0.008240}
		];

		// Create a map object and specify the DOM element for display.
		var rsfLocation = {lat: 51.5635955, lng: 0.2153466};
		var map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 51.6935955, lng: 0.2153466},
			zoom: 8
		});
		var marker = new google.maps.Marker({
			position: rsfLocation,
			map: map
		});
		var area = new google.maps.Polygon({
			path: areaOverlay,
			fillColor: '#0E5A94',
			fillOpacity: 0.35,
			strokeColor: '#0A3E64',
			strokeOpacity: 0.6,
			strokeWeight: 2
		});
		area.setMap(map);
	}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_5tkaqCLsd_iyaugy10dmfUdyAyuQBQg&callback=initMap" async defer></script>
	@endsection
