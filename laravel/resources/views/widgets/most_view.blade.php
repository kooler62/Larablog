<div class="row">
	<div class="large-12 columns">
	<h5>Лідери переглядів:</h5>
@foreach($most_view_posts as $mvp)
<a href="{{ $mvp->post_url }}">{{ $mvp->post_title }}</a>
<br>

<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
{{ $mvp->post_views }}


<hr>
@endforeach



	</div>
	</div>

