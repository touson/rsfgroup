<!doctype html>
<html>
	<head>
        <title>RSF Group - Domestic and COmmercial gas and plumbing services</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="" />
		<meta name="keywords" content="plumbing, gas, electrician, boiler service, boiler install, electrical work" />
		<meta name="robots" content="NOINDEX,NOFOLLOW" />

		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon-precomposed" href="touch_icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="touch_icon_ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="touch_icon_iphone_retina.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="touch_icon_ipad_retina.png" />

		<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	</head>
	<body class="{{ $page }}">
		@include('include.header')
		<div class="main-container">
			@yield('content')
		</div>

		@if (Request::is('/'))
			@include('include.homepage-footer')
		@else
			@include('include.footer')
		@endif

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="/js/all.js"></script>

		@yield('scripts')
	</body>
</html>
