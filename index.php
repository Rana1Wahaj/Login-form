<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Login Form</title>
  </head>




  <body>
<?php

  

session_start();

//checking the variable is set or not

  if(isset($_POST['submit'])){

    require 'connect.php';

    $userName = $_POST['userName']; 

    $password = $_POST['password'];

    $result = mysqli_query($conn, 'SELECT  * from login where username="'.$userName.'" and password="'.$password.'"');

    
    if(mysqli_num_rows($result)>0){

    $_SESSION ['userName']="$userName";

    header('Location: welcome.php');
 }

  else

  echo "User is not registered";


 } 


?>




<!-- form  ---->


    <div class="container">
      

  <h1 class = "text-center">Please enter your name and password</h1>
  <form action="index.php" method = "post"> 
  <div class="form-group">
    <label for="userName">Name</label>
    <input name="userName"  type="userName" class="form-control" id="userName" aria-describedby="userName" placeholder="Enter Your User Name" Required>
  </div>
  
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password" Required>
  </div>


  <button name="submit" type="submit" class="btn btn-primary">Submit</button>

</form>

</div>

  </body>

</html>