<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?= ($SCHEME.'://'.$HOST.$BASE.'/') ?>"/>
	<meta charset="<?= (@$ENCODING) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	
<?php \Assets::instance()->addNode(array('rel'=>'stylesheet','href'=>'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css','type'=>'css',)); ?>

	
<style type="text/css">
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>

	
<?php \Assets::instance()->addNode(array('href'=>'ui/css/floating-labels.css','rel'=>'stylesheet','type'=>'css',)); ?>

<!-- assets-head -->
</head>
<body>
	
	<form role="form" method="post" action="<?= ($CONFIG['ssl_backend']?'https://'.$HOST.$BASE.'/login':'login') ?>" id="login-form" class="form-signin">
		<div class="text-center mb-4">
			<img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
			<h1 class="h3 mb-3 font-weight-normal">Login</h1>
		</div>
		
<?php foreach ((\Flash::instance()->getMessages()?:[]) as $msg): ?>
			<div class="alert alert-<?= ($msg['status']) ?> alert-dismissible fade show" role="alert">
				<?= ($msg['text'])."
" ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endforeach; ?>

		<div class="form-label-group">
			
<input type="text" name="username" id="inputUser" class="form-control" placeholder="Username" required autofocus value="<?= (isset($POST['username'])?$POST['username']:'') ?>" />

			<label for="inputUser">Username</label>
		</div>
		<div class="form-label-group">
			
<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus />

			<label for="inputPassword">Password</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		<p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
	</form>

	<!-- JS, Popper.js, and jQuery -->
	
<?php \Assets::instance()->addNode(array('src'=>'https://code.jquery.com/jquery-3.5.1.slim.min.js','type'=>'js',)); ?>

	
<?php \Assets::instance()->addNode(array('src'=>'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js','type'=>'js',)); ?>

	
<?php \Assets::instance()->addNode(array('src'=>'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js','type'=>'js',)); ?>

	
<script>
		$('.alert').alert()
	</script>


<!-- assets-footer -->
</body>
</html>