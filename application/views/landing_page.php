<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author"
	content="Justin Schoeff, Lucas Arango, Jordan Farinas">
<link rel="shortcut icon"
	href="<?php echo base_url();?>assets/ico/favicon.ico">

<title>Better Bracket Sign-In</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css"
	rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url();?>assets/css/signin.css"
	rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<div class="container">
		<div class="col-md-3">
			<img src="<?php echo base_url("/assets/images/logo.png"); ?>"
				alt="StackOverflow" title="StackOverflow is the best!" />
		</div>
		<div class="col-md-offset-6 col-md-3">
			<div class="row">

				<form class="form-signin" role="form" method="POST"
					action="<?php echo base_url();?>landing/">
					<h2 class="form-signin-heading">Please sign in</h2>
					<input type="email" name="email" class="form-control"
						placeholder="Email address" required autofocus> <input
						type="password" name="password" class="form-control"
						placeholder="Password" required> <label class="checkbox"> <input
						type="checkbox" name="remember" value="remember-me">Remember me
					</label>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign
						in</button>
				</form>
			</div>
			<div class="row">

				<form class="form-signin" role="form" method="POST"
					action="<?php echo base_url();?>landing/register">
					<h2 class="form-signin-heading">Register Here:</h2>
					<input type="text" name="first" class="form-control"
						placeholder="First Name" required> <input type="text" name="last"
						class="form-control" placeholder="Last Name" required> <input
						type="email" name="email" class="form-control"
						placeholder="Email address" required> <input type="password"
						name="password" class="form-control" placeholder="Password"
						required>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign
						Up</button>
				</form>
			</div>

		</div>

	</div>
	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
