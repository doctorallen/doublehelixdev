<?php include('includes/header.html'); ?>
<?php //require_once('includes/contact-validate.php'); ?>
<form id="contact-form" name="contact-form" method ="POST" class="form-horizontal">
	<div class="control-group">
		<label class="control-label" for="inputName">Name</label>
		<div class="controls">
			<input type="text" id="inputName" placeholder="Name">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputEmail">Email</label>
		<div class="controls">
			<input type="text" id="inputEmail" placeholder="Email">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputMessage">Message</label>
		<div class="controls">
			<textarea id="inputMessage" placeholder="Type your message here.."></textarea>
			<button disabled = "true" type="submit" id="submit" class="btn btn-danger disabled" name="submit">Submit</button>
		</div>
	</div>
</form>
<script type="text/javascript" src="validation.js"></script>
<script>
$(document).ready( function (e){
if(!$('#submit').hasClass('disabled')){
	$('form').on('submit', function(e){
		e.preventDefault();
		if( validateForm() ){
			alert('Validated!');
		}
		//$.post('/contact-submit', $('contact-form').serialize(), function(response){
		//	console.log(response);
		//});
	});
}
});
</script>
<?php include('includes/footer.html'); ?>


