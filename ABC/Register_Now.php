<?php

@include 'connection.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $user_type = $_POST['type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($connection, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user( type , name , email , password ) VALUES('$user_type','$name','$email','$pass')";
         mysqli_query($connection, $insert);
         header('location: home.php');
      }
   }

};

?>


<!DOCTYPE html>
<head>
   <title>Register Now</title>
   <link rel="stylesheet" href="Register_Now.css">
</head>
<body>
   
<div class="container">
    <form action="" method="post">
      
    <h1>Register Now</h1>

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="type" class="dropdown">
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>
      <br>
      <input type="submit" name="submit" value="Register Now">
      <p>Already have an account? <a href="Log_In.php">login Now</a></p>
   </form>
</div>

</body>
</html>