<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
	<link href="css/floating-labels.css" rel="stylesheet">
</head>
<body>
	<form action="<?= ($CONFIG['ssl_backend']?'https://'.$HOST.$BASE.'/login':'login') ?>" method="post" id="login-form" class="form-signin">
		<div class="text-center mb-4">
			<img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
			<h1 class="h3 mb-3 font-weight-normal">Login</h1>
		</div>
		<div class="form-label-group">
			<input type="text" id="inputUser" class="form-control" placeholder="Username" required autofocus>
			<label for="inputUser">Username</label>
		</div>
		<div class="form-label-group">
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus>
			<label for="inputPassword">Password</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
	</form>
</body>
</html>