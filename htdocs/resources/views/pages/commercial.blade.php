@extends('master')

@section('content')
<div class="page-header commercial">
	<h1>Commercial</h1>
</div>

<section>
	<div class="container">
		<div class="col-set">
			<div class="col-2">
				<h4>RSF GROUP has a dedicated accounts team to deal with all enquiries</h4>
				<p>We can offer account facilities to domestic and business customers that use us on a regular basis over a period of years, and meet with our strict credit criteria.</p>
			</div>
			<div class="col-2">
				<p>Our straight forward accounting procedure provides a convenient, easy and quick way to pay for your plumbing and maintenance services.</p>
				<p>If your application for a credit account is successful, you will be informed in writing and given an account number. Account facilities are subject to terms and conditions.</p>
			</div>
		</div>
		<div class="col-set">
			<div class="col-1">
				<h2>Terms and Conditions</h2>
				<ul class="tick">
					<li>A strict £5,000 credit limit is available.</li>
					<li>Strictly 30 days credit available from date of invoice.</li>
					<li>Monthly itemised invoicing.</li>
					<li>Credit facilities will only be granted to those that have used Pimlico on a regular basis, over a long period of time.</li>
					<li>Credit checks will be carried out and acceptance is subject to receipt of satisfactory references and approval.</li>
					<li>Exceeding your account limit, or missing a payment, will result in the account being suspended until payment is received.</li>
					<li>Personal information is held in strict confidence and not passed onto other organisations except for credit purposes.</li>
					<li>Pimlico reserves the right to withdraw credit facilities if the account becomes overdue or the monthly credit limit is exceeded.</li>
				</ul>
			</div>
			<div class="col-1">
				<h2>Applications</h2>
			</div>
			<div class="col-2">
				<p>To apply for credit account please write to our Accounts Manager:</p>
				<p>Mr Andy White RSF Group .9 – 11 Butts Green Rd Hornchurch Essex RM11 2JR</p>
			</div>
			<div class="col-2">
				@include('partials.telephone-block')
			</div>
		</div>
	</div>
</div>
</section>

@endsection
