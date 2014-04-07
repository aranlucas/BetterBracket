<!DOCTYPE html>



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
			<h3>All Groups:</h3>
			<p>
			<?php 
				if($groups){
					foreach($groups as $group){
						print "<p><b>GROUP:</b><a href=".base_url()."groups/viewGroup/".$group['id'].">".$group['name']."</p></a>";
							}
							}
			?>
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
