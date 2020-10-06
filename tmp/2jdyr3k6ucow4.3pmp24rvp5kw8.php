<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<div class="container" id="main">
		<?php if ($ERROR && $ERROR['code'] != 400) echo $this->render('templates/error.html',NULL,get_defined_vars(),0); ?>
		<?php if (isset($SUBPART)) echo $this->render('templates/'.$SUBPART,NULL,get_defined_vars(),0); ?>		
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>