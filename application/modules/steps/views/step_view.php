<!--Author Joakim Danielsson-->
<!doctype html>
<html>
	<head>
		<title>Make a step</title>
		<meta charset='utf-8'>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
    	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    	<script src="code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
	</head>
	<body>
		<div style="margin-top: 5px; margin-right: 50%;">
		<form action="Steps">
			Title <input name="title" type="text">
			<br>
			<br>
			<textarea name="steps" cols="30" rows="10"></textarea>
			<br>
			<br>
			<button id="submit"type="submit">Submit</button>
		</form
		</div>
		<div>
				<?php 			
			

   					echo $result;
				

				 ?>


		</div>
	</body>
</html>