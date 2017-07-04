@extends('master')

@section('content')
	<div id="hp-slider">
		<div class="slide plumbing">
			@include('include.es-water-approved', ['id'=>'hp-es-water'])
			<div class="title">
				<div class="primary">Certified Plumbers</div>
				<div class="secondary">
					<div>All our engineers are fully qualified and work to the highest standards.</div>
				</div>
			</div>
		</div>
		<div class="slide boiler-servicing">
			@include('include.es-water-approved', ['id'=>'hp-es-water'])
			<div class="title">
				<div class="primary">Boiler Servicing</div>
				<div class="secondary">
					<div>Domestic boiler servicing to prolong the life of your boiler.</div>
				</div>
			</div>
		</div>
		<div class="slide emergency">
			@include('include.es-water-approved', ['id'=>'hp-es-water'])
			<div class="title">
				<div class="primary">Emergency response 24/7</div>
				<div class="secondary">
					<div>Peace of mind that <strong>your family</strong> stay warm and cosy this winter.</div>
				</div>
			</div>
		</div>
		<div class="slide landlord-services">
			@include('include.es-water-approved', ['id'=>'hp-es-water'])
			<div class="title">
				<div class="primary">Landlord Services</div>
				<div class="secondary">
					<div>All work certified to building regulations and at a reasonable price.</div>
				</div>
			</div>
		</div>
	</div>

<section>
	<div class="container">
		<div class="col-set hp-panels">
			<div class="col-3">
				<h2>Fully Certified Engineers</h2>
				<img src="images/general/side-of-van.jpg" alt="">
			</div>
			<div class="col-3">
				<h2>Emergency Response Service</h2>
				<img src="images/general/hp-house-flood.jpg" alt="">
			</div>
			<div class="col-3">
				<h2>Boiler Servicing</h2>
				<img src="images/general/hp-man-boiler.jpg" alt="">
			</div>
		</div>
	</div>
</section>

<div class="full-width b-lgrey request-a-callback">
	<div class="container">
		<p>Need your boiler serviced? Need some help plumbing in your new washing machine?</p>
		<a class="button-with-icon" href="/contact-us">Request a callback</a>
	</div>
</div>

<section>
	<div class="container">
		<h3>Some of the boiler brands we work with</h3>
		<div class="boiler-brands">
			<div class="brand-container">
				<div class="cell">
					<img src="images/boiler-brands/worcester.jpg" alt="Worcester">
				</div>
			</div>
			<div class="brand-container">
				<div class="cell">
					<img src="images/boiler-brands/vokera.jpg" alt="Vokera">
				</div>
			</div>
			<div class="brand-container">
				<div class="cell">
					<img src="images/boiler-brands/viesmann.jpg" alt="Viemann">
				</div>
			</div>
			<div class="brand-container">
				<div class="cell">
					<img src="images/boiler-brands/vaillant.jpg" alt="Vaillant">
				</div>
			</div>
			<div class="brand-container">
				<div class="cell">
					<img src="images/boiler-brands/potterton.jpg" alt="Potterton">
				</div>
			</div>
			<div class="brand-container">
				<div class="cell">
					<img src="images/boiler-brands/glow-worm.jpg" alt="Glow Worm">
				</div>
			</div>
			<div class="brand-container">
				<div class="cell">
					<img src="images/boiler-brands/baxi.jpg" alt="Essex and suffolk water">
				</div>
			</div>
			<div class="brand-container">
				<div class="cell">
					<img src="images/boiler-brands/worcester.jpg" alt="Baxi">
				</div>
			</div>
		</div>
	</div>
</section>

<div class="full-width b-lgrey qualified-engineers-promo">
	<div class="container">
		<div class="col-set">
			<div class="col-2">
				<p>All our engineers are fully qualified and work to the highest standards to ensure your work is carried out quickly and reliably.</p>
				<div class="accreditations">
					<div class="accreditation">
						<img src="images/accreditations/nic-eic.png" alt="">
					</div>
					<div class="accreditation">
						<img src="images/accreditations/iphe.png" alt="">
					</div>
					<div class="accreditation">
						<img src="images/accreditations/city-and-guilds.png" alt="">
					</div>
					<div class="accreditation">
						<img src="images/accreditations/gas-safe.png" alt="">
					</div>
					<div class="accreditation">
						<img src="images/accreditations/corgi.png" alt="">
					</div>
					<div class="accreditation">
						<img src="images/accreditations/which.png" alt="">
					</div>
				</div>
			</div>
			<div class="col-2">
				<img src="images/general/andy.jpg" alt="All RSF Group engineers are fully qualified">
				<h4>Call us today on <strong>01708 444 355</strong></h4>
			</div>
		</div>
	</div>
</div>

<section>
	<div class="container">
		<div class="col-set testimonials">
			<h3>Customer Testimonials</h3>
			<div class="col-2">
				<div class="testimonial">
					<span class="open-quote"></span>
					@include('partials.5-stars')
					<div class="testimonial-content">
						<div class="title">We can’t thank him or you enough!</div>
						<div class="body">
							<p>Thank you for the fast and professional service yesterday. This is our second appointment with your company and both have been positive. Your technician Ricky was professional, courteous and went above and beyond our expectations. We can’t thank him or you enough! RSF Group was quick to respond and we will gladly recommend you.</p>
							<p class="person"><strong>Mrs Naylor</strong>Hornchurch</p>
						</div>
					</div>
					<span class="close-quote"></span>
				</div>
				<div class="testimonial">
					<span class="open-quote"></span>
					@include('partials.5-stars')
					<div class="testimonial-content">
						<div class="testimonial-content">
							<div class="title">Great job</div>
							<div class="body">
								<p>Great job, carried out a new installation for our heating system and bathroom, spoke to the company and they recommended we visit the bathroom showroom in Emerson Park in Hornchurch.worth the trip</p>
								<p>Thanks for an excellent job, very clean and tidy - Dave and Lee</p>
								<p class="person"><strong>Mr Jenkins</strong>Emerson Park – Hornchurch</p>
							</div>
						</div>
					</div>
					<span class="close-quote"></span>
				</div>
				<div class="testimonial">
					<span class="open-quote"></span>
					@include('partials.5-stars')
					<div class="testimonial-content">
						<div class="testimonial-content">
							<div class="title">Very impressed with service from start to finish</div>
							<div class="body">
								<p>Boiler exchange for £1495.00- very impressed with service from start to finish. completed in one day as promised and with 7 year warranty – to many cups of tea though – thanks Danny</p>
								<p class="person"><strong>Pete Jones</strong>Brentwood</p>
							</div>
						</div>
					</div>
					<span class="close-quote"></span>
				</div>
				<div class="testimonial">
					<span class="open-quote"></span>
					@include('partials.5-stars')
					<div class="testimonial-content">
						<div class="title">We are over the moon</div>
						<div class="body">
							<p>Designed and installed my bathroom – wow– from entering there showroom they advised me of all the brands and i explained what i wanted out of my budget and they guided me through all the options, Andy the showroom manger was very helpful and showed me a CAD drawing of my bathroom and was in budget- we are over the moon with the finished bathroom and looks lovely, workers – Steve and Chris was so polite and tidy and explained every stage to us.Showroom well worth a visit if you looking for a nice bathroom, and all there guys work for them direct. thank you – WILL BE BACK FOR MY ENSUITE</p>
							<p class="person"><strong>Kate Beale</strong>Hornchurch</p>
						</div>
					</div>
					<span class="close-quote"></span>
				</div>
			</div>
			<div class="col-2">
				<div class="testimonial">
					<span class="open-quote"></span>
					@include('partials.5-stars')
					<div class="testimonial-content">
						<div class="testimonial-content">
							<div class="title">These guys are very professional</div>
							<div class="body">
								<p>I want to express my gratitude towards the service of RSF Group, These guys are very professional and take pride on the work that they do. I had Danny install a Vaillent boiler for my home and was very pleased on the workmanship of the installation. He was very thorough and Danny main concern was to make sure the job was done right.finished clean and tidy and on time</p>
								<p>Since then I had a brand new sump pump installed and a few minor issues taken care of. They are a very courteous group of employees and I definitely made the right decision contacting them to do the work in my home.</p>
								<p class="person"><strong>Jean Potter</strong>Romford</p>
							</div>
						</div>
						<span class="close-quote"></span>
					</div>
				</div>
				<div class="testimonial">
					<span class="open-quote"></span>
					@include('partials.5-stars')
					<div class="testimonial-content">
						<div class="testimonial-content">
							<div class="title">Quick to respond to my emergency</div>
							<div class="body">
								<p>Thank you RSF Group for turning up quickly and stopping which could have been a major flood - called you at 1.45pm and plumber turned up at 3.15pm – water coming through light fitting – carried out work and repaired the damaged pipe and replaced carpets</p>
								<p>Total cost £125.00 – very happy</p>
								<p class="person"><strong>Julie</strong>Chelmsford</p>
							</div>
						</div>
						<span class="close-quote"></span>
					</div>
				</div>
				<div class="testimonial">
					<span class="open-quote"></span>
					@include('partials.5-stars')
					<div class="testimonial-content">
						<div class="title">RSF thanks for a great job</div>
						<div class="body">
							<p>Called out RSF Group for noisy boiler, they power flushed my heating system and installed water treatment and magna clean to my pipework and everything now working fine,British Gas quoted me £590 more than RSF THANKS FOR A GREAT JOB.</p>
							<p class="person"><strong>Mrs Long</strong>Hutton</p>
						</div>
					</div>
					<span class="close-quote"></span>
				</div>
				<div class="testimonial">
					<span class="open-quote"></span>
					@include('partials.5-stars')
					<div class="testimonial-content">
						<div class="testimonial-content">
							<div class="title">At last a decent Gas Company</div>
							<div class="body">
								<p>tried 3 Companies who wanted silly money for a small gas run. Done with 3 hours and a reasonable charge</p>
								<p class="person"><strong>Mr Swallow</strong>Billericay</p>
							</div>
						</div>
						<span class="close-quote"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
