<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title','Live & Learn | Джерело вашого саморизвитку')</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/foundation.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<script type="text/javascript" src="{{ asset('js/foundation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/vendor/modernizr.js') }}"></script>

		<meta name="description" content="@yield('meta_description','Live & Learn | Джерело вашого саморизвитку')"/>
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

			@foreach($posts as $post)
			<article class="article-card">
			<a href="{{ $post->cat_url }}">{{ $post->cat_title }}</a><br>
				<a href="{{ $post->cat_url }}">
					<img src="{{ $post->cat_img }}" width="400px">
					
				</a>
				<br><br>



</article>
			@endforeach	
			</div>
			<aside class="large-4 columns">
				@include('components.nav')
			</aside>
		</div>

		<!-- PAGINATION -->
		<div class="row">
			<div class="large-12 columns text-center" role="content">
			page _navigation
			
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