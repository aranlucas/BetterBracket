<!DOCTYPE html>
<?php
$email = $this->session->userdata('email');
?>

<html lang="en">
  <head>
    <?php
    $data = array();
    if(isset($title)){
      $data['title'] = $title;
    }
    $this->load->view('template/header_files',$data);
    ?>

    <!-- custom scripts for the page go here -->

  </head>

  <body>

    
    <?php $this->load->view('template/navbar');?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>My Profile</h1>
        <p>Name: <?php echo $this->User_model->get_name($email);?></p>
        <p> Registered Email: <?php echo $email;?></p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
