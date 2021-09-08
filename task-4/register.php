<?php
session_start();
require'helperFun.php';

if ($_SERVER['REQUEST_METHOD']== "POST"){
    $name = CleanInputs($_POST['name']);
    $email = CleanInputs($_POST['email']);
    $password = CleanInputs($_POST['password']);
    $address = CleanInputs($_POST['address']);
    $gender = CleanInputs($_POST['gender']);
    $linkedin = CleanInputs($_POST['linkedin']);


   $image_tmp_path = $_FILES['image']['tmp_name'];
   $image_name     = $_FILES['image']['name'];
   $image_size     = $_FILES['image']['size'];
   $image_type     = $_FILES['image']['type'];

   $errors = [];
    if (!validate($name,2)){
        $errors['name'] = "Field Required";

    }elseif(!validate($name,1)){
        $errors['name'] = "Invalid String";
       }

       if(!validate($email,2)){
        $errors['Email'] = "Field Required";
      
       }elseif(!validate($email,5)){
        $errors['Email'] = "Invalid Email";
       }

       if(!validate($image_name,2)){
        $errors['image'] = "Field Required";
      
       }elseif(!validate($image_type,8)){
        $errors['image'] = "Invalid Extension";
       }


       if(!validate($address,2)){
        $errors['address'] = "Field Required";
      
       }elseif(!validate($address,7)){
        $errors['address'] = "Length Must be 10 or more char <br>";
       }
       
       if(!validate($password,2)){
        $errors['password'] = "Field Required";
      
       }elseif(!validate($password,6)){
        $errors['password'] = "Length Must be 6 or more char <br>";
       }

       if(!validate($linkedin,2)){
        $errors['linkedin'] = "Field Required";
      
       }elseif(!validate($linkedin,4)){
        $errors['linkedin'] = "must be linkedin  URL<br>";
       }

 if(count($errors) > 0){

    foreach($errors as $key => $value){
        echo '* '.$key.' : '.$value.'<br>';
    }
}else{
       


    $extArray = explode('/',$image_type);
    $finalName =   rand().time().'.'.$extArray[1];


    $desPath = './uploads/'.$finalName;
     
     if(move_uploaded_file($image_tmp_path,$desPath)){

      $_SESSION['REG'] = ['name' => $name , 'email' => $email,'address' => $address ,'linkedin' => $linkedin ,'password' => $password ,'gender' => $gender, 'image' => $finalName ];

     }else{
         echo 'Error In Uploading Try Again';
     }

}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"enctype ="multipart/form-data">

  

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" name="password"   class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St"required>
  </div>
  
  <div class="form-group">
    <label for="inputUrl">Linkedin Url</label>
    <input type="url" name="linkedin" class="form-control" id="inputUrl"required>
  </div>

  <label for="inputGender">Gender</label>
      <select id="inputState" class="form-control" name="gender"required>
        <option selected>Male</option>
        <option>Female</option>
      </select><br>

  
  <div class="form-group">
    <label for="exampleInputPassword1">Upload Image</label>
    <input type="file" name="image" >
  </div>
 
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



</body>
</html>