<?php
  
  require './helpers/dbConnection.php';
  require './helpers/checkLogin.php';
/*
if($_SESSION['User']['role'] == 1){

  $sql = "select * from students";

}elseif($_SESSION['User']['role'] == 2){

    $sql = "select * from students where id=".$_SESSION['User']['id'];
    
}*/
$sql = "select * from task";
  $op  =  mysqli_query($con,$sql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
<div class="page-header">
            <h1>Read Users </h1>   Welcome , <?php echo $_SESSION['User']['name'];?>
            <br>
            <a href="addtask.php" style="font-size: 25px;"> Add New Task </a><br>

     <?php 
     
        if(isset($_SESSION['Message'])){
            echo $_SESSION['Message'];
            unset($_SESSION['Message']);
        }
     
     ?>
        <a href="logout.php">LogOut</a>
        </div>


<?php 
    while ($data = mysqli_fetch_assoc($op)) {
?>


<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $data['title'];?></h5>
        <p class="card-text"><?php echo $data['description'];?></p>
        <p class="card-text"><?php echo $data['start_date'];?></p>
        <p class="card-text"><?php echo $data['end_date'];?></p>
        
        <a href='taskdelete.php?id=<?php echo $data['id'];?>' class='btn btn-danger m-r-1em'>Delete</a>
      </div>
    </div>
  </div>
  <?php } ?>

</div>



</body>
</html>

