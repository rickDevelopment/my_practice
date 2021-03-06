<html>
<body>

<form class="well" id="jquery-submit-ajax" method="post">
	<label>Your Name</label>
	<input type="text" class="span7" name="yourName" placeholder="Type something…">
	
	<label>Your Email</label>
	<input type="text" class="span7" name="yourEmail" placeholder="Type something…">
	<span class="help-block">When this form is submitted it will be sent via jQuery/AJAX.</span>

	<input class="btn btn-primary" type="submit" value="Submit & Test Form">
	<br /><br />
	<div class="alert alert-success hide">
		<p>Form successfully submitted! The data sent is below:</p>
		<div id="success-output" class="prettyprint"></div>
	</div>
	<div class="alert alert-error hide">
		<p>Oh shit! Error below:</p>
		<div id="error-output" class="prettyprint"></div>
	</div>
</form>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script>
$(document).ready(function(){

$("#jquery-submit-ajax").submit(function(e) {
	$.ajax({
		type: "POST",
		url: "jquery-ajax-control.php",
		data: $(e.target).serialize(),
		dataType: "json",
		beforeSend:function(){
			$('.alert-error,.alert-success').hide();
		},
		error: function(jqXHR, textStatus, errorThrown){
			$('.alert-error').fadeIn();
			$('#error-output').html(errorThrown);
		},
		success: function(data){
			$('.alert-success').fadeIn();
			$('#success-output').html(data);
		}
	});
	return false;
});
});

</script>
</body>
</html>
