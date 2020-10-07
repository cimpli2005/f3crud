<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<!-- CSS -->
	<!-- Add Material font (Roboto) and Material icon as needed -->
	
<?php \Assets::instance()->addNode(array('href'=>'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700','rel'=>'stylesheet','type'=>'css',)); ?>

	
<?php \Assets::instance()->addNode(array('href'=>'https://fonts.googleapis.com/icon?family=Material+Icons','rel'=>'stylesheet','type'=>'css',)); ?>

	<!-- Add Material CSS, replace Bootstrap CSS -->
	
<?php \Assets::instance()->addNode(array('href'=>'ui/css/material.min.css','rel'=>'stylesheet','type'=>'css',)); ?>

	<title>Document</title>
<!-- assets-head -->
</head>
<body>
	<div class="container" id="main">
		<h1>Hello, world!</h1>
		
<?php if ($ERROR && $ERROR['code'] != 400) echo $this->render('templates/error.html',NULL,get_defined_vars(),0); ?>

		
<?php if (isset($SUBPART)) echo $this->render('templates/'.$SUBPART,NULL,get_defined_vars(),0); ?>

	</div>
	<div class="container">
		<div class="row">
			<p class="stats"><?= (\Base::instance()->format('Page rendered using {0} in {1} msecs / Memory usage {2} KB',$CONFIG->ACTIVE_DB,round(1e3*(microtime(TRUE)-$TIME),2),round(memory_get_usage(TRUE)/1e3,1))) ?></p>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
<?php \Assets::instance()->addNode(array('src'=>'https://code.jquery.com/jquery-3.5.1.slim.min.js','type'=>'js',)); ?>

	
<?php \Assets::instance()->addNode(array('src'=>'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js','type'=>'js',)); ?>

	
<?php \Assets::instance()->addNode(array('src'=>'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js','type'=>'js',)); ?>

	<!-- Then Material JavaScript on top of Bootstrap JavaScript -->
	
<?php \Assets::instance()->addNode(array('src'=>'ui/js/material.min.js','type'=>'js',)); ?>


<!-- assets-footer -->
</body>
</html>