<!DOCTYPE html>
<?php
//var_dump($query);
?>


<html lang="en">
	<head>
		<?php
		$data['title'] = " BB : View All Current Groups";
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

			<a href="<?php echo base_url();?>"
				style="position: fixed; bottom: 0; text-align: center">Back to Home</a>

			<button>Create a Group</button>
			<form action="<?php echo base_url();?>groups/addgroup" method="post">
				Group Name: <input type="text" name="groupname"> Description: <input
					type="text" name="description"> Caption: <input type="text"
					name="caption">
				<p></p>
				<input type="submit" value="Create Group">
			</form>
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
