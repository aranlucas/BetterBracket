<!DOCTYPE html>
<?php
//var_dump($gmemb);
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
		action="<?php echo base_url();?>groups/addmember/<?php echo $gid;?>"
		method="post">
		Member Email: <input type="text" name="memberemail"><br>
		<p></p>
		<input type="submit" value="Add Member">
	</form>

	<a href="<?php echo base_url();?>groups/"
		style="position: fixed; bottom: 0; text-align: center">Back to Groups</a>
		

<?php $this->load->view('template/footer_scripts'); ?>
<!-- custom script --><script>
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
