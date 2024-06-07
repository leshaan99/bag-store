<?php

@include 'connection.php';

session_start();

if(isset($_POST['submit'])){

   $name =  $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $type = $_POST['type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($connection, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['type'] == 'admin'){

         $_SESSION['name'] = $row['name'];
         $_SESSION['id']=$row['id'];
         header('location:admin.php');

      }elseif($row['type'] == 'user'){

         $_SESSION['name'] = $row['name'];
         $_SESSION['id']=$row['id'];
         header('location:home.php');

      }
      elseif($row['type'] == 'superadmin'){
         
         $_SESSION['name'] = $row['name'];
         $_SESSION['email'] = $row['email'];
          $_SESSION['type'] = $row['type'];
         $_SESSION['id']=$row['id'];
         header('location:superadmin.php');
      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<head>
   <title>Log In</title>
   <link rel="stylesheet" href="Log_In.css">
</head>
<body>
   
<div class="container">

   <form action="" method="post">
      <h1>Log In</h1>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Log In">
      <p>don't have an account? <a href="Register_Now.php">register now</a></p>
   </form>

</div>

</body>
</html>