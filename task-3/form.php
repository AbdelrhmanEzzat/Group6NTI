<php 



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
  <form method="post" action="action.php"  enctype ="multipart/form-data">

  

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name" required>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" name="password"   class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="Address" class="form-control" id="inputAddress" placeholder="1234 Main St"required>
  </div>
  
  <div class="form-group">
    <label for="inputUrl">Linkedin Url</label>
    <input type="url" name="Linkedin" class="form-control" id="inputUrl"required>
  </div>

  <label for="inputGender">Gender</label>
      <select id="inputState" class="form-control" name="Gender"required>
        <option selected>Male</option>
        <option>Female</option>
      </select><br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
