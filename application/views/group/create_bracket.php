<!DOCTYPE html>
<?php
$email = $this->session->userdata('email');
?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Better Bracket Home Page</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="navbar-fixed-top.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/css/bracket.css" rel="stylesheet">



<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="<?php echo base_url();?>assets/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <?php $this->load->view('main/navbar');?>

    <div class="container">

        <br><br><br>
        <table class="table bracket"> 
            <tbody>
                <tr>
                    <th>Round of 64</th>
                    <th>Round of 32</th>
                    <th>Sweet 16</th>
                    <th>Elite 8</th>
                    <th>Final Four</th>
                    <th>Championship</th>
                    <th>Final Four</th>
                    <th>Elite 8</th>
                    <th>Sweet 16</th>
                    <th>Round of 32</th>
                    <th>Round of 64</th>
                </tr>
<?php
    $endl = "\n";
    $tabs = "\t\t\t\t\t\t\t";
    $round2_blank = 1;
    for($x =1; $x < 33; $x++) {
        echo "\t\t\t\t\t\t<tr>\n";
        for($r=0; $r < 11; $r++){
            echo $tabs.'<td>';
            //round 1 (of 64)
            if($r == 0 || $r == 10) {
              echo "team".($r == 10 ? $x+32 : $x);
            }

            //round 2 (of32)
            if($r == 1 || $r == 9) {
                if($round2_blank > 1)
              echo " winner of team".($r == 9 ? $x+32 : $x);                
            }
            echo '</td>'.$endl;
        }

        $round2_blank++;
        if( $round2_blank == 4)
        $round2_blank = 0;

    }

?>
            </tbody>
            <!-- 8 team block --> 
            <!-- game block -->
            <tbody class="game">
                <tr>
                    <td>Home Team1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Home Team</td>
                </tr>
                <tr>
                    <td>Away Team1</td>
                    <td class="round32">Winner of Game 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="round32">Winner of Game 1<br> region 2</td>
                    <td>Away Team</td>
                </tr>
            </tbody>
            <tbody class="game">
                <tr>
                    <td>Home Team2</td>
                    <td class="round32">Winner of Game 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="round32">Winner of Game 2<br> region 2</td>
                    <td>Home Team</td>
                </tr>
                <tr>
                    <td>Away Team2</td>
                    <td></td>
                    <td class="round16">Winner of round 32 game 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="round16">Winner of round 32 game 2</td>
                    <td></td>
                    <td>Away Team</td>
                </tr>
            </tbody>
            <!-- end game block 1-->
            <!-- game block 2-->
            <tbody class="game">
                <tr>
                    <td>Home Team</td>
                    <td></td>
                    <td class="round16">Winner of round 32 game 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="round16">Winner of round 32 game 2</td>
                    <td></td>
                    <td>Home Team</td>
                </tr>
                <tr>
                    <td>Away Team</td>
                    <td>Winner of Game 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Winner of Game 1<br> region 2</td>
                    <td>Away Team</td>
                </tr>
            </tbody>
            <tbody class="game">
                <tr>
                    <td>Home Team</td>
                    <td>Winner of Game 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Winner of Game 2<br> region 2</td>
                    <td>Home Team</td>
                </tr>
                <tr>
                    <td>Away Team</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Away Team</td>
                </tr>
            </tbody>
            <!-- end game block -->
            <!-- 8 team block --> 
            <!-- game block -->
            <tbody class="game">
                <tr>
                    <td>Home Team1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Home Team</td>
                </tr>
                <tr>
                    <td>Away Team1</td>
                    <td class="round32">Winner of Game 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="round32">Winner of Game 1<br> region 2</td>
                    <td>Away Team</td>
                </tr>
            </tbody>
            <tbody class="game">
                <tr>
                    <td>Home Team2</td>
                    <td class="round32">Winner of Game 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="round32">Winner of Game 2<br> region 2</td>
                    <td>Home Team</td>
                </tr>
                <tr>
                    <td>Away Team2</td>
                    <td></td>
                    <td class="round16">Winner of round 32 game 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="round16">Winner of round 32 game 2</td>
                    <td></td>
                    <td>Away Team</td>
                </tr>
            </tbody>
            <!-- end game block 1-->
            <!-- game block 2-->
            <tbody class="game">
                <tr>
                    <td>Home Team</td>
                    <td></td>
                    <td class="round16">Winner of round 32 game 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="round16">Winner of round 32 game 2</td>
                    <td></td>
                    <td>Home Team</td>
                </tr>
                <tr>
                    <td>Away Team</td>
                    <td>Winner of Game 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Winner of Game 1<br> region 2</td>
                    <td>Away Team</td>
                </tr>
            </tbody>
            <tbody class="game">
                <tr>
                    <td>Home Team</td>
                    <td>Winner of Game 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Winner of Game 2<br> region 2</td>
                    <td>Home Team</td>
                </tr>
                <tr>
                    <td>Away Team</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Away Team</td>
                </tr>
            </tbody>
        <!-- end game block -->
        </table>

    </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
