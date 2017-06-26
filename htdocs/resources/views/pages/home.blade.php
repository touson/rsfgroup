@extends('master')

@section('content')
<div class="container full">
	<div id="hp-slider">
		<div class="slide">
			<img src="images/slideshow/smiling-plumber.jpg" alt="Certified Plumbers">
			<div class="title">
				<div class="primary">Certified Plumbers</div>
				<div class="secondary">
					<div>All our engineers are fully qualified and work to the highest standards.</div>
				</div>
			</div>
		</div>
		<div class="slide">
			<img src="images/slideshow/customer-signing.jpg" alt="Boiler Servicing">
			<div class="title">
				<div class="primary">Boiler Servicing</div>
				<div class="secondary">
					<div>Domestic boiler servicing to prolong the life of your boiler.</div>
				</div>
			</div>
		</div>
		<div class="slide">
			<img src="images/slideshow/girl-and-dog.jpg" alt="Emergency response 24/7">
			<div class="title">
				<div class="primary">Emergency response 24/7</div>
				<div class="secondary">
					<div>Peace of mind that <strong>your family</strong> stay warm and cosy this winter.</div>
				</div>
			</div>
		</div>
		<div class="slide">
			<img src="images/slideshow/vans.jpg" alt="Landlord Services">
			<div class="title">
				<div class="primary">Landlord Services</div>
				<div class="secondary">
					<div>All work certified to building regulations and at a reasonable price.</div>
				</div>
			</div>
		</div>
	</div>
	<div id="slide-selector">
		<a data-slide-index="0">Certified Plumbers<span></span></a>
		<a data-slide-index="1">Boiler Servicing<span></span></a>
		<a data-slide-index="2">Emergency boiler repairs<span></span></a>
		<a data-slide-index="3">Landlord Services<span></span></a>
	</div>
</div>

<section>
	<div class="container">
		<div class="col-set hp-panels">
			<div class="col-3">
				<h2>Fully Certified Engineers</h2>
				<img src="images/general/hp-engineer.jpg" alt="">
				<p>Nam sapien risus, convallis in mi at, pretium condimentum ipsum. Donec ut erat a lectus semper convallis. Integer non varius urna, ut rhoncus ligula. Maecenas ac lectus sit amet turpis convallis vestibulum. </p>
			</div>
			<div class="col-3">
				<h2>Emergency Response Service</h2>
				<img src="images/general/hp-man-and-woman.jpg" alt="">
				<p>Donec auctor quam ut neque luctus, et mollis massa cursus. Donec nisi ligula, molestie eu elementum sed, ultricies sit amet dolor. Quisque lobortis magna mauris, id imperdiet nunc ornare sed. </p>
			</div>
			<div class="col-3">
				<h2>Boiler Servicing</h2>
				<img src="images/general/hp-boiler-man.jpg" alt="">
				<p>Pellentesque dictum odio at urna tincidunt pulvinar. In dictum, enim id ullamcorper rhoncus, ex massa viverra tellus, vitae ultrices enim dui eu lacus. Cras congue ex ante, et fringilla tellus interdum vel. </p>
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
		<div class="testimonials">
			<h3>Customer Testimonials</h3>
			<div class="testimonial">
				<span class="open-quote"></span>
				@include('partials.5-stars')
				<div class="testimonial-content">
					<div class="title">We can’t thank him or you enough!</div>
					<div class="body">
						<p>Thank you for the fast and professional service yesterday. This is our second appointment with your company and both have been positive. Your technician Jef was professional, courteous and went above and beyond our expectations. We can’t thank him or you enough! Harris Plumbing was quick to respond and we will gladly recommend you.</p>
						<p class="person"><strong>Mrs Belkin</strong>Wembley</p>
					</div>
				</div>
				<span class="close-quote"></span>
			</div>
			<div class="testimonial">
				<span class="open-quote"></span>
				@include('partials.5-stars')
				<div class="testimonial-content">
					<div class="testimonial-content">
						<div class="title">These guys are very professional</div>
						<div class="body">
							<p>I want to express my gratitude towards the service of Harris Plumbing. These guys are very professional and take pride on the work that they do. I had Jef install a Navien tankless water heater for my home and was very pleased on the workmanship of the installation. He was very thorough and Jef’s main concern was to make sure the job was done right.</p>
							<p>Since then I had a brand new sump pump installed and a few minor issues taken care of. They are a very courteous group of employees and I definitely made the right decision contacting them to do the work in my home.</p>
							<p class="person"><strong>John Simmons</strong>Newbury</p>
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
						<div class="title">We can’t thank him or you enough!</div>
						<div class="body">
							<p>Thank you for the fast and professional service yesterday. This is our second appointment with your company and both have been positive.</p>
							<p class="person"><strong>Mrs Belkin</strong>Wembley</p>
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
						<div class="title">These guys are very professional</div>
						<div class="body">
							<p>I want to express my gratitude towards the service of Harris Plumbing. These guys are very professional and take pride on the work that they do. I had Jef install a Navien tankless water heater for my home and was very pleased on the workmanship of the installation. He was very thorough and Jef’s main concern was to make sure the job was done right.</p>
							<p>Since then I had a brand new sump pump installed and a few minor issues taken care of. They are a very courteous group of employees and I definitely made the right decision contacting them to do the work in my home.</p>
							<p class="person"><strong>John Simmons</strong>Newbury</p>
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
						<div class="title">We can’t thank him or you enough!</div>
						<div class="body">
							<p>Thank you for the fast and professional service yesterday. This is our second appointment with your company and both have been positive.</p>
							<p class="person"><strong>Mrs Belkin</strong>Wembley</p>
						</div>
					</div>
				</div>
				<span class="close-quote"></span>
			</div>
			<div class="testimonial">
				<span class="open-quote"></span>
				@include('partials.5-stars')
				<div class="testimonial-content">
					<div class="title">We can’t thank him or you enough!</div>
					<div class="body">
						<p>Thank you for the fast and professional service yesterday. This is our second appointment with your company and both have been positive. Your technician Jef was professional, courteous and went above and beyond our expectations. We can’t thank him or you enough! Harris Plumbing was quick to respond and we will gladly recommend you.</p>
						<p class="person"><strong>Mrs Belkin</strong>Wembley</p>
					</div>
				</div>
				<span class="close-quote"></span>
			</div>
			<div class="testimonial">
				<span class="open-quote"></span>
				@include('partials.5-stars')
				<div class="testimonial-content">
					<div class="title">We can’t thank him or you enough!</div>
					<div class="body">
						<p>Thank you for the fast and professional service yesterday. This is our second appointment with your company and both have been positive. Your technician Jef was professional, courteous and went above and beyond our expectations. We can’t thank him or you enough! Harris Plumbing was quick to respond and we will gladly recommend you.</p>
						<p class="person"><strong>Mrs Belkin</strong>Wembley</p>
					</div>
				</div>
				<span class="close-quote"></span>
			</div>
			<div class="testimonial">
				<span class="open-quote"></span>
				@include('partials.5-stars')
				<div class="testimonial-content">
					<div class="testimonial-content">
						<div class="title">These guys are very professional</div>
						<div class="body">
							<p>I want to express my gratitude towards the service of Harris Plumbing. These guys are very professional and take pride on the work that they do. I had Jef install a Navien tankless water heater for my home and was very pleased on the workmanship of the installation. He was very thorough and Jef’s main concern was to make sure the job was done right.</p>
							<p>Since then I had a brand new sump pump installed and a few minor issues taken care of. They are a very courteous group of employees and I definitely made the right decision contacting them to do the work in my home.</p>
							<p class="person"><strong>John Simmons</strong>Newbury</p>
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
						<div class="title">We can’t thank him or you enough!</div>
						<div class="body">
							<p>Thank you for the fast and professional service yesterday. This is our second appointment with your company and both have been positive.</p>
							<p class="person"><strong>Mrs Belkin</strong>Wembley</p>
						</div>
					</div>
				</div>
				<span class="close-quote"></span>
			</div>
		</div>
	</div>
</section>

@endsection
