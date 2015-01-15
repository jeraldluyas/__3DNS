<html>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<head>
<script type='text/javascript' src='https://code.jquery.com/jquery-1.11.1.min.js'></script>

<script type='text/javascript'>
	$(function() {
		$('#area').hide();
		$('#area_seloger').hide();
		$("input[name='radio']").click(function() {
			var value = $(this).val();
			if(value == 1) {
				$('#area').show();
				$('#area_seloger').hide();
			} else {
				$('#area').hide();
				$('#area_seloger').show();
			};
		});
	});
</script>

</head>

<body>

<div id="page">
	<h1>EXTRACT DATA FROM :</h1>
<?php echo form_open('extraction/submit'); ?>	
		<fieldset>
		<BR>
		<input type="radio" name="radio" value="1">Leboncoin
		<input type="radio" name="radio" value="2">Seloger
		<BR>
		<BR>
		<input type="submit" value="Submit" id="submitButton" />
		</fieldset>
<?php echo form_close(); ?>
	<div id="resultsDiv"></div>
</div>
</body>
</html>