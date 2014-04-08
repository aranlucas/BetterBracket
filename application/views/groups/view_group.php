<!DOCTYPE html>
<?php
$email  = $this->session->userdata('email');
?>

<html lang="en">
<head>
<?php
$data['title'] = " BB : View Group";
$this->load->view('template/header_files',$data);
?>

</head>

<body>
	<?php $this->load->view('template/navbar');?>
	<div class='container'>

		<div class='jumbotron'>
			<p>
				<?php 
				foreach ($ginfo as $group) {
					print "<p>Group Name: ".$group['name']."</p>";
					print "<p>Group ID: ".$group['id']."</p>";
					print "<p>Group Date Created: ".$group['date_created']."</p>";
				}
				foreach ($gprof as $prof) {
print "<p>Description: ".$prof['description']."</p>";
print "<p>Caption: ".$prof['caption']."</p>";
}
print "<h4>Current Members:</h4>";
foreach ($gmemb as $member) {
print "<p>".$member['first']."</p>";
}
?>
			</p>
			<button>Add Member to Group</button>
			<form
				action='<?php echo base_url();?>groups/addmember/<?php echo $gid;?>'
				method='post' id='addmember'>
				Member Email: <input type='text' name='memberemail'><br>
				<p></p>
				<input type="submit" value="Add Member">
			</form>
			<p>
			
			
			<form
				action='<?php echo base_url();?>groups/addmember/<?php echo $gid;?>'
				method='post'>
				<input type="hidden" name='memberemail' value="<?php echo $email;?>">
				<input type="submit" value="Join Group!">
			</form>
			</p>


			<?php $this->load->view('template/footer_scripts'); ?>
			<!-- custom script -->
			<script>
		$(document).ready(
		function(){
		  $('#addmember').hide()
		  $("button").click(function(){
		    $("#addmember").toggle();
		  });
		}
		);
		</script>
		</div>
	</div>

</body>

</html>
