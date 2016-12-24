<div class="row">
	<div class="large-12 columns">
	<h5>Цитата дня:</h5>
		<div class="callout-card">
			<div class="callout-card-content">
	  			<h3 class="lead"></h3>
				<blockquote>
					<span id="excerption">{!! $ex[0]->excerption_text !!}</span>

				<a id="link" title="Лінк" href="/excerptions/{{ $ex[0]->excerption_id }}"><span class="glyphicon glyphicon-link" aria-hidden="true"></span></a>

					<cite id="author">{{ $ex[0]->excerption_author }} 
					</cite>

  					
				</blockquote>
<script type="text/javascript">
	document.write('<a id="getRequest"><span title="Оновити" class="glyphicon glyphicon-refresh"  aria-hidden="true"></span></a>');
</script>
<noscript> <a href="/excerptions">
	<span class="glyphicon glyphicon-refresh"  aria-hidden="true"></span>
 </a></noscript>
{{-- 
 <a href="" title="поділитися"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></a>
 --}}
			</div>




		
				
	
		</div>
	</div>
 </div>



<script>
  $('#getRequest').click( function() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
          url: '/excerptions',
          type: 'POST',
          data: {_token: CSRF_TOKEN},
          //data:{gege: danet},
          dataType: 'json',
          success: function (data) {
      $("#excerption")[0].innerHTML = data.text;
      $("#author")[0].innerHTML = data.author;    
      $("#link").attr('href','/excerptions/'+data.id);
        }     
        });
    });
</script>


 <style type="text/css">
.callout-card {
background: white;
border: 1px solid #333;
box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
margin: 1rem 0;
overflow: hidden; }
.callout-card .callout-card-content {
padding: 0.5rem 1.5rem 0.875rem; }
</style>