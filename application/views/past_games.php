<!DOCTYPE html>
<html
	lang="en">
<title>View Games Played</title>
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css"
	rel="stylesheet">

<!-- Custom styles for this template -->
<style>
</style>


<body>
	<?php $this->load->view('template/navbar');?>
	<div class="container">
		<div class="jumbotron">
			<h1 align='center'>
				Games Played from March 20th, 2014 to March 27th, 2014</font>
			</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8 ">

				<table class='table table-striped table-hover' align='center'>
					<th colspan='2'>Teams</th>
					<th>Score</th>
					<th>Date</th>

					<?php
					$i = 1;

					foreach($games as $row){
	if ($i % 2 === 0)
	{
		print "</td><td align = 'center'>".$row['team_name']."</td><td align = 'center'>".$row['score_2']."-".$row['score']."</td><td align = 'center'>".$row['date_played']."</td></tr>";
	}
	else if ($i % 1 === 0)
	{
		print "<tr><td align = 'center'>".$row['team_name'];
	}
	$i++;
}

?>
				</table>
			</div>
		</div>

	</div>

	<?php $this->load->view('template/footer_scripts'); ?>

</body>
</html>
