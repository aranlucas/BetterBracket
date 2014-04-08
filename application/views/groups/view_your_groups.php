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
			<h1>My Groups</h1>


		</div>




		<?php 

		if($query){
			foreach($query as $group){
				print "<div class=\"panel panel-primary\">
		<div class=\"panel-heading\">
		<h3 class=\"panel-title\"><a href=".base_url()."groups/viewGroup/".$group['id'].">".$group['name']."</a></h3>
			</div>";
				print "<div class=\"panel-body\"><button>Add Member to Group</button>
			<form
			method='post' id='addmember'>
			Member Email: <input type='text' name='memberemail'><br>
			<p></p>
			<input type=\"submit\" value=\"Add Member\">
			</form></div></div>
			";
			}
}?>




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
