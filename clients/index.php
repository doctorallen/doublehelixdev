<div class="clients">
	<a href="fans" class="work">
		<div class="client">
			<img class="thumb" src="../images/logo-150.png">
			<div class="clients-header none">
				<h1 class="work-title">Fans International</h1>
			</div>
		</div>
	</a>
	<a href="fans" class="work">
		<div class="client">
			<img class="thumb" src="../images/logo-150.png">
			<div class="clients-header none">
				<h1 class="work-title">Fans Stuff</h1>
			</div>
		</div>
	</a>
	<a href="fans" class="work">
		<div class="client">
			<img class="thumb" src="../images/logo-150.png">
			<div class="clients-header none">
				<h1 class="work-title">Fans Stuffer</h1>
			</div>
		</div>
	</a>
</div>
<script>
	$(document).ready(function(){
		$('.client').mouseenter( function() {
			var title = $(this).children('.clients-header');
			$(title).fadeIn(200);
			$(title).removeClass('none');
		});
		$('.client').mouseleave( function() {
			var title = $(this).children('.clients-header');
			$(title).fadeOut();
			$(title).addClass('none');
		});
	});
</script>
