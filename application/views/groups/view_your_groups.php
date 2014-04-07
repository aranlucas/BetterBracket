<!DOCTYPE html>
<?php
//var_dump($query);
?>


<html lang="en">
	<head>
		<?php
		$data['title'] = " BB : View Your Current Groups";
		$this->load->view('template/header_files',$data);
		?>

	</head>

<body>
	<?php $this->load->view('template/navbar');?>

	<div class="container">

		<div class="jumbotron">
			<?php if(isset($_POST['groupname'])){
				echo "<p><b>You made a group!</b></p>";
}?>
			<h3>Groups You are currently a part of:</h3>
			<p>
				<?php 
				if($query){
	foreach($query as $group){
		print "<p><b>GROUP:</b><a href=".base_url()."groups/viewGroup/".$group['id'].">".$group['name']."</p></a>";
	}
}?>
			</p>

		</div>
	</div>
<?php $this->load->view('template/footer_scripts'); ?>
<!-- custom script -->
<script>
		$(document).ready(
		function(){
		  $('form').hide()
		  $("button").click(function(){
		    $("form").toggle();
		  });
		}
		);
		</script>
</body>
</html>
