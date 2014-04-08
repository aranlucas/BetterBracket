<!DOCTYPE html>
<?php
$email = $this->session->userdata('email');
?>

<html lang="en">
<head>
<?php
$data = array();
if(isset($title)){
	$data['title'] = $title;
}
$this->load->view('template/header_files',$data);
?>

<!-- custom scripts for the page go here -->

</head>

<body>

	<?php $this->load->view('template/navbar');?>

	<div class="container">
		<div class="jumbotron">
			<h1>Welcome to Better Bracket</h1>
		</div>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Game Stats</h3>
					</div>
					<div class="panel-body">You have correctly guessed 22/64 games
						played so far</div>
				</div>

			</div>
			<!--/span-->
			<div class="col-6 col-sm-6 col-lg-4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
					tellus ac cursus commodo, tortor mauris condimentum nibh, ut
					fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui.</p>

			</div>
			<!--/span-->
			<div class="col-6 col-sm-6 col-lg-4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
					tellus ac cursus commodo, tortor mauris condimentum nibh, ut
					fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui.</p>

			</div>
		</div>
		<!--/row-->
	</div>

	<!-- /container -->

	<?php $this->load->view('template/footer_scripts'); ?>


</body>
</html>
