<!DOCTYPE html>
<?php
//$sql  = "select team_name, score, score_2, date_played from GamesScores";
$sql  = "select a.team_name,b.team_name, a.score, a.score_2, a.date_played from GamesScores a,GamesScores b WHERE a.id=b.id AND a.team_name != b.team_name ORDER BY date_played ASC;";
$query = $this->db->query($sql);
$result = $query->result_array();
$i = 1;
print "<h4 align = 'center'><font face='lucida console' size='4'>Games Played from March 20th, 2014 to March 27th, 2014</font></h4>";
print " <table class ='TFtable' align = 'center'><th colspan='2'>Teams</th><th>Score</th><th>Date</th>";
foreach($result as $row){
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
print "</table>";


?>
<html lang="en">
  <title>View Games Played</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <style>
  body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color:#F3F9FF;
}
.TFtable{
		width:50%; 

	}
	.TFtable th{
		text-align:center;
		border:#4e95f4 1px solid;
	}
	.TFtable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	/* provide some minimal visual accomodation for IE8 and below */
	.TFtable tr{
		background: #b8d1f3;
	}
	/*  Define the background color for all the ODD background rows  */
	.TFtable tr:nth-child(odd){ 
		background: #b8d1f3;
	}
	/*  Define the background color for all the EVEN background rows  */
	.TFtable tr:nth-child(even){
		background: #dae5f4;
	}
}
  </style>
  </html>