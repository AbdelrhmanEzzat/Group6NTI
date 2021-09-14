<?php
 require  './helpers/dbConnection.php';
 require './helpers/helpers.php';
 
if($_SERVER['REQUEST_METHOD'] == "POST"){

    # Logic ... 
    $title         = CleanInputs($_POST['title']);
    $description   = CleanInputs($_POST['description']);
    $start_date    = $_POST['start_date'];
    $end_date      = $_POST['end_date'];
    # Validate Inputs ... 
    $errors = [];

    if(!validate($title,1)){
     $errors['Name'] = "Field Required.";
    }elseif(!validate($title,2)){
        $errors['Name'] = "Invalid String.";  
    }
    if(!validate($description,1)){
        $errors['Name'] = "Field Required.";
       }elseif(!validate($description,2)){
           $errors['Name'] = "Invalid String.";  
       }
/*
       if(!validate($start_date,1)){
        $errors['Name'] = "Field Required.";
       }elseif(!validate($start_date,7)){
           $errors['Name'] = "Invalid date.";  
       }

       if(!validate($end_date,1)){
        $errors['Name'] = "Field Required.";
       }elseif(!validate($end_date,7)){
           $errors['Name'] = "Invalid date.";  
       }
   
*/



    if(count($errors) > 0){

        foreach($errors as $key => $value)
        {
            echo '* '.$key.' : '.$value.'<br>';
        }
    }else{

     $sql = "insert into task (title,description,start_date,end_date) values ('$title','$description','$start_date','$end_date')";

     $op = mysqli_query($con,$sql);

     if($op){
         echo 'Task Adding done';
     }else{
         echo 'Error in Adding';
       }
    }

}



?>

        
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Task</h2>
  <a href="index.php" style="font-size: 25px;"> Show tasks </a><br>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"enctype ="multipart/form-data">

  

  <form method="post" style="padding: 20px" action="./performadd.php">
            <div class="form-group">
                <label for="summary" class="text-primary">Title</label>
                <input class="form-control" id="summary" name="title">

                <label for="details" class="text-primary">Description</label>
                <textarea class="form-control" id="details" rows="3" name="description"></textarea>

                <label for="dueDate" class="text-primary">Start date:</label>
                <input type="date" class="form-control" id="dueDate" name="start_date">
                <input id="isComplete" name="isComplete" type="hidden" value="false">

                <label for="dueDate" class="text-primary">End Date:</label>
                <input type="date" class="form-control" id="dueDate" name="end_date">
                <input id="isComplete" name="isComplete" type="hidden" value="false">
            </div>
                <input  type="submit" class="btn btn-primary" name="submit" value="Add Task">
        </form>
      
</div>



</body>
</html>