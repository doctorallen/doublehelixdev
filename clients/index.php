<div class="clients">
	<a href="fans" class="work">
		<div class="client">
			<img class="thumb" src="../images/logo-150.png">
			<div class="clients-header">
				<h1 class="work-title">Fans International</h1>
			</div>
		</div>
	</a>
	<a href="fans" class="work">
		<div class="client">
			<img class="thumb" src="../images/logo-150.png">
			<div class="clients-header">
				<h1 class="work-title">Fans Stuff</h1>
			</div>
		</div>
	</a>
	<a href="fans" class="work">
		<div class="client">
			<img class="thumb" src="../images/logo-150.png">
			<div class="clients-header">
				<h1 class="work-title">Fans Stuffer</h1>
			</div>
		</div>
	</a>
</div>
<script>
	$(document).ready(function(){
		$('.client').hover(
			function(){
				var client = $(this);
				client.find('.clients-header').stop(true,true).animate({opacity:1}, 400);
			},
			function(){
				var client = $(this);
				client.find('.clients-header').stop(true,true).animate({opacity:0}, 400);
			}
		).find('.clients-header').css('opacity',0);
	});
</script>
