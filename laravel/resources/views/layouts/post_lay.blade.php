<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title','Live & Learn | Джерело вашого саморизвитку')</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/foundation.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-glyf.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<script type="text/javascript" src="{{ asset('js/foundation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/vendor/modernizr.js') }}"></script>
		<meta name="description" content="@yield('meta_description','Live & Learn | Джерело вашого саморизвитку')"/>
		<meta name="_token" content="{!! csrf_token() !!}"/>
		<meta property="og:title" content="" />
		<meta property="og:image" content="" />
		<meta property="og:description" content="" />
	</head>
	<body>

@include('components.metrika')



		<div class="row">
			<div class="large-12 columns text-center">
				@include('components.header')
			</div> 
		</div>

		<div class="row">
			<div class="large-8 columns" role="content">
				@include('components.content')

@include('components.social_share')
	<hr>
@include('components.hypercoment')	
 @include('components.randompost')  

			</div>
			
			<aside class="large-4 columns">
				@include('components.nav')	
			</aside>


	<hr>

@include('components.post_next_prew')

		</div>
	 

		<!-- PAGINATION -->
		<div class="row">
			<div class="large-12 columns text-center" role="content">
				

				
		</div>
			
			</div>
		</div>
		<!-- END PAGINATION -->




		<div class="row">
			<div class="large-12 columns" role="content">
				@include('components.footer')
			</div>
		</div>

	</body>
</html>