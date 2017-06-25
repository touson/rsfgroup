@extends('master')

@section('content')
<div class="page-header plumbing">
	<h1>Plumbing</h1>
</div>

<section>
	<div class="container">
		<div class="col-set">
			<div class="col-2">
				<h3>What we offer</h3>
				<p>Plumbing is the core service we have been offering for more than 30 years, with an established reputation for quality, service, and customer satisfaction.</p>
				<p>We offer a highly professional service across London and use a team of experienced and qualified plumbers who are available 24 hours a day and we guarantee to solve everything from a plumbing related problem to the design and creation of new bathrooms.</p>
				<p>Tradesmen undertake complete or part refurbishments and we use specialist tilers for that exclusive finish.</p>
				<p><strong class="highlight">Workmanship carries a full written 12 month guarantee</strong> and appointments are made at a time to suit the customer.</p>
				@include('partials.telephone-block')
			</div>
			<div class="col-2">
				<h3>What are the costs</h3>
				<p>Below is our rate card outlining our hourly rate for specific time periods throughout the week.</p>
				<table class="top-and-side">
					<thead>
						<tr>
							<th>Timeslot</th>
							<th>Rate</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="timeslot"><span>Mon–Fri</span>7am–6pm</th>
							<td>£130.00</td>
						</tr>
						<tr>
							<th class="timeslot"><span>Mon–Fri</span>6pm–12am</th>
							<td>£160.00</td>
						</tr>
						<tr>
							<th class="timeslot"><span>Saturday</span>7am–6pm</th>
							<td>£160.00</td>
						</tr>
						<tr>
							<th class="timeslot"><span>Saturday</span>6pm–12am</th>
							<td>£170.00</td>
						</tr>
						<tr>
							<th class="timeslot"><span>Sunday</span>7am–6pm</th>
							<td>£170.00</td>
						</tr>
						<tr>
							<th class="timeslot"><span>Sunday</span>6pm–12am</th>
							<td>£180.00</td>
						</tr>
						<tr>
							<th class="timeslot"><span>Mon–Sun</span>12am–7am</th>
							<td>£200.00</td>
						</tr>
					</tbody>
				</table>

				<h3>We are approved contractors for</h3>
				<img src="/images/general/essex-and-suffolk-water-logo.jpg" alt="We are approved contractors for Essex and Suffolk Water">

			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="col-set">
			<div class="col-1">
				<h3>Heating services we provide</h3>
				<ul class="columns arrow blue">
					<li>Airlocks</li>
					<li>Ball valves</li>
					<li>Bathroom refurbishment</li>
					<li>Bidets</li>
					<li>Blocked toilets</li>
					<li>Sinks pipes &amp; drains</li>
					<li>Burst pipes</li>
					<li>Floods</li>
					<li>Gutters &amp; downpipes</li>
					<li>Hot cylinder installations</li>
					<li>Hot water problems</li>
					<li>Immersion heaters</li>
					<li>Kitchen refurbishment</li>
					<li>Leaks</li>
					<li>Overflows</li>
					<li>Pipework replacement</li>
					<li>Plumbing installations</li>
					<li>Pumps</li>
					<li>Radiator &amp; values</li>
					<li>Repairs</li>
					<li>Saniflo repairs &amp; installs</li>
					<li>Showers &amp; pressure adjustments</li>
					<li>Stopcocks</li>
					<li>Tap repairs &amp; installations</li>
					<li>Thermostat problems</li>
					<li>Toilet repairs &amp; installs</li>
					<li>Unvented water cylinders</li>
					<li>Waste disposals</li>
					<li>Water heater repairs &amp; installs</li>
					<li>Water tank installs</li>
					<li>Wet room refurbishment</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>

@endsection
