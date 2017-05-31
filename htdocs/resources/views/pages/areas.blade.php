@extends('master')

@section('content')
<div class="page-header" id="map"></div>

<section>
	<div class="container">
		<div class="col-set">
			<div class="col-2">
				<p>We are based in Rainham and cover London and Essex, however if you are further afield, please don't hesitate to get in touch as we may still be able to help you.</p>
			</div>
			<div class="col-2">
				@include('partials.telephone-block')
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
<script>
	function initMap() {

		var areaOverlay = [
		{lat: 51.624837, lng: 0.521851},
		{lat: 51.669148, lng: 0.477905},
		{lat: 51.710012, lng: 0.406494},
		{lat: 51.713416, lng: 0.291138},
		{lat: 51.689585, lng: 0.214233},
		{lat: 51.686180, lng: 0.104370},
		{lat: 51.686180, lng: 0.010986},
		{lat: 51.774638, lng: 0.000000},
		{lat: 51.818803, lng: 0.120850},
		{lat: 51.866316, lng: 0.175781},
		{lat: 51.947651, lng: 0.164795},
		{lat: 51.957807, lng: 0.060425},
		{lat: 52.028838, lng: 0.060425},
		{lat: 52.106505, lng: 0.060425},
		{lat: 52.133488, lng: 0.274658},
		{lat: 52.116626, lng: 0.357056},
		{lat: 52.089633, lng: 0.505371},
		{lat: 52.123371, lng: 0.554810},
		{lat: 52.133488, lng: 0.703125},
		{lat: 52.096382, lng: 0.774536},
		{lat: 52.049112, lng: 0.774536},
		{lat: 51.998410, lng: 0.791016},
		{lat: 52.001792, lng: 0.867920},
		{lat: 51.995028, lng: 0.966797},
		{lat: 51.988263, lng: 1.065674},
		{lat: 51.954422, lng: 1.071167},
		{lat: 51.944265, lng: 1.148071},
		{lat: 51.944265, lng: 1.285400},
		{lat: 51.900223, lng: 1.252441},
		{lat: 51.883273, lng: 1.257935},
		{lat: 51.866316, lng: 1.290894},
		{lat: 51.828988, lng: 1.257935},
		{lat: 51.805218, lng: 1.164551},
		{lat: 51.778037, lng: 1.131592},
		{lat: 51.767840, lng: 1.032715},
		{lat: 51.805218, lng: 0.999756},
		{lat: 51.778037, lng: 0.900879},
		{lat: 51.761040, lng: 0.856934},
		{lat: 51.733833, lng: 0.796509},
		{lat: 51.744038, lng: 0.928345},
		{lat: 51.706608, lng: 0.939331},
		{lat: 51.665741, lng: 0.933838},
		{lat: 51.638476, lng: 0.939331},
		{lat: 51.624837, lng: 0.917358},
		{lat: 51.611195, lng: 0.950317},
		{lat: 51.580483, lng: 0.944824},
		{lat: 51.566827, lng: 0.895386},
		{lat: 51.556582, lng: 0.840454},
		{lat: 51.518998, lng: 0.785522},
		{lat: 51.518998, lng: 0.714111},
		{lat: 51.525834, lng: 0.664673},
		{lat: 51.515580, lng: 0.620728},
		{lat: 51.512161, lng: 0.609741},
		{lat: 51.508742, lng: 0.587769},
		{lat: 51.508742, lng: 0.488892},
		{lat: 51.498485, lng: 0.428467},
		{lat: 51.464275, lng: 0.433960},
		{lat: 51.450584, lng: 0.422974},
		{lat: 51.471119, lng: 0.291138},
		{lat: 51.469408, lng: 0.271912},
		{lat: 51.454007, lng: 0.255432},
		{lat: 51.433464, lng: 0.241699},
		{lat: 51.416338, lng: 0.241699},
		{lat: 51.392351, lng: 0.214233},
		{lat: 51.354631, lng: 0.162048},
		{lat: 51.313447, lng: 0.159302},
		{lat: 51.292841, lng: 0.156555},
		{lat: 51.280817, lng: 0.087891},
		{lat: 51.272226, lng: 0.046692},
		{lat: 51.270508, lng: 0.002747},
		{lat: 51.267071, lng: 0.049438},
		{lat: 51.270508, lng: 0.131836},
		{lat: 51.263634, lng: 0.211487},
		{lat: 51.284253, lng: 0.269165},
		{lat: 51.311730, lng: 0.326843},
		{lat: 51.308296, lng: 0.390015},
		{lat: 51.323747, lng: 0.458679},
		{lat: 51.361492, lng: 0.519104},
		{lat: 51.448872, lng: 0.532837},
		{lat: 51.477962, lng: 0.513611},
		{lat: 51.510452, lng: 0.497131},
		{lat: 51.546335, lng: 0.505371},
		{lat: 51.587310, lng: 0.535583},
		{lat: 51.612900, lng: 0.527344},
		{lat: 51.628248, lng: 0.52734}
		];

		// Create a map object and specify the DOM element for display.
		var rsfLocation = {lat: 51.5635955, lng: 0.2153466};
		var map = new google.maps.Map(document.getElementById('map'), {
			center: rsfLocation,
			zoom: 11
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
