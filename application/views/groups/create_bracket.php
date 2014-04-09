<!DOCTYPE html>
<?php
$email = $this->session->userdata('email');
?>

<html lang="en">
<head>

<?php $this->load->view('template/header_files');?>
<link href="<?php echo base_url();?>assets/css/bracket.css"
	rel="stylesheet">
</head>

<body>

	<?php $this->load->view('template/navbar');?>

	<div class="container-fluid">

		<div class="jumbotron">
			<h1>Create Your Bracket!</h1>
			<p class="lead">Just click on a team to choose the winner of that game!</p>
		</div>

		<div class="row picks-button">
			<a href="#" class="btn btn-primary pull-right submit-picks">Submit Your Picks!</a>
		</div>
		<?php 
			$this->bracket->create_bracket();
		?>
		<div class="row picks-button">
			<a href="#" class="btn btn-primary pull-right submit-picks">Submit Your Picks!</a>
		</div>
	</div>
	<!-- /container -->


	<?php $this->load->view('template/footer_scripts'); ?>
	<script src="<?php echo base_url();?>assets/js/bracket.js"></script>
</body>
</html>
