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
			<h1>Profile page</h1>
		</div>


		<div class="row">
			<div class="col-md-8">
				<img alt=""
					src="http://leadersinheels.com/wp-content/uploads/facebook-default.jpg">
			</div>
			<div class="col-md-4">
				<h2>Name</h2>
				<p>
					<?php echo $this->User_model->get_name($email);?>
				</p>

				<h2>Email</h2>
				<p>
					<?php echo $email;?>
				</p>
				<h2>Description</h2>
				<p>Hello World</p>
			</div>

		</div>
		<!--/row-->
	</div>

	</div>



	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
