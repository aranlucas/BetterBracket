<!DOCTYPE html>
<?php
$email = $this->session->userdata('email');
?>

<html lang="en">
<head>

    <?php $this->load->view('template/header_files');?>
<link href="<?php echo base_url();?>assets/css/bracket.css" rel="stylesheet">
</head>

<body>

    <?php $this->load->view('template/navbar');?>

    <div class="container-fluid">

        <br><br><br>

                <div class="row">
                    <div class="col-md-1">Round of 64</div>
                    <div class="col-md-1">Round of 32</div>
                    <div class="col-md-1">Sweet 16</div>
                    <div class="col-md-1">Elite 8</div>
                    <div class="col-md-1">Final Four</div>
                    <div class="col-md-1">Championship</div>
                    <div class="col-md-1">Championship</div>
                    <div class="col-md-1">Final Four</div>
                    <div class="col-md-1">Elite 8</div>
                    <div class="col-md-1">Sweet 16</div>
                    <div class="col-md-1">Round of 32</div>
                    <div class="col-md-1">Round of 64</div>
                </div>
        <div class="bracket row">
            <?php
      
$counts = array(
    1=>1,
    2=>1,
    3=>1,
    4=>1,
    5=>1
    );
$games = array(
    array("fillergame for index 0")
    ,array(1,16)
    ,array(8,9)
    ,array(5,12)
    ,array(4,13)
    ,array(6,11)
    ,array(3,14)
    ,array(7,10)
    ,array(2,15) );
for($a = 1; $a< 4; $a+=2) {
    $game_counts = array(8,4,2,1,1,0,0,0);
    for ($i=1; $i < 13; $i++) { 
        echo '<div id="round'.(($i<5)? $i : 12-$i +1).'" class="round col-md-1">';
        $count = ($i<6)?$game_counts[$i-1]+1:$game_counts[12-$i]+1;
        for ($j=1; $j < $count; $j++) { 
            
            //calculate filler space for different round
            $round = ($i<6)? $i : 12-$i +1;
            $region = ($i<6)? $a : $a+1;
            //round 2
            if($round==2 ) {
                echo '<div id="" class="filler-'.($j==1?"half":"game").'"></div>';
            }
            //round 3
            if($round==3 ) {
                if($j==1) {
                    echo '<div id="" class="filler-half"></div>';
                    echo '<div id="" class="filler-game"></div>';
                }
                else {
                    echo '<div id="" class="filler-game"></div>';
                    echo '<div id="" class="filler-game"></div>';
                    echo '<div id="" class="filler-game"></div>';
                }
            }
            //round 4
            if($round==4 ) {
                    echo '<div id="" class="filler-half"></div>';
                    echo '<div id="" class="filler-game"></div>';
                    echo '<div id="" class="filler-game"></div>';
                    echo '<div id="" class="filler-game"></div>';
            }
            //round 5
            if($round==5 ) {
                    if($a == 1) {
                        echo '<div id="" class="filler-half"></div>';
                        echo '<div id="" class="filler-game"></div>';
                        echo '<div id="" class="filler-game"></div>';
                        echo '<div id="" class="filler-game"></div>';
                        echo '<div id="" class="filler-game"></div>';
                        echo '<div id="" class="filler-game"></div>';
                        echo '<div id="" class="filler-game"></div>';
                        echo '<div id="" class="filler-game"></div>';
                    }
                    echo '<div id="" class="split-game">';
                    echo '<a href="#"><div id="team1" class="team">';
                    echo '<p class="team-name"><em>'."".'</em>';
                    echo ' round'.$round.'game'.$counts[$round].'team</p>';
                    // echo ' round'.(($i<6)? $i : 12-$i +1).'game'.$j.'team';
                    echo '</div></a>';
                    echo '</div>';
                    $counts[$round]++;


            }
            if($round != 5) {
                echo '<div id="game'.$j.'" class="game">';

                for ($c=0; $c < 2; $c++) { 
                    echo '<a href="#"><div id="team1" class="team">';

                    echo '<p class="team-name"><strong>'.$games[$counts[$round]][$c].'</strong> ';
                    echo $bracket[$region][$games[$counts[$round]][$c]]['team_name'].'</p>';
                    // echo ' round'.$round.'game'.$counts[$round].'</p>';
                    // echo ' round'.(($i<6)? $i : 12-$i +1).'game'.$j.'team';
                    echo '</div></a>';
                }
                echo '</div>';
                $counts[$round]++;
            }
                       
        }
        
            $counts[$round] =1;            
        echo '</div>';
    }
}
            ?>
        </div>

    </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
