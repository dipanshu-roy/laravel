<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="{{ config('app.name', 'Dashboard') }} - ">
		<meta name="author" content="{{ config('app.name', 'Dashboard') }}">
		<meta name="keywords" content="">

		<!-- Favicon -->
		<link rel="icon" href="{{ asset(config('app.images.favicon'))}}" type="image/x-icon"/>

		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dashboard') }}</title>

		<!-- Bootstrap css-->
		<link  id="style" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="{{ asset('plugins/web-fonts/icons.css') }}" rel="stylesheet"/>
		<link href="{{ asset('plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('plugins/web-fonts/plugin.css') }}" rel="stylesheet"/>

		<!-- Style css-->
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	</head>

	<body class="ltr main-body leftmenu error-1">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset(config('app.images.loader'))}}" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
                    @yield('content')
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

		<!-- Jquery js-->
		<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

		<!-- Bootstrap js-->
		<script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!-- Select2 js-->
		<script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
		<script src="{{ asset('js/select2.js') }}"></script>

		<!-- Perfect-scrollbar js -->
		<script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

		<!-- Color Theme js -->
		<script src="{{ asset('js/themeColors.js') }}"></script>

		<!-- Custom js -->
		<script src="{{ asset('js/custom.js') }}"></script>

	</body>
</html>