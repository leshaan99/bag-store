<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="admin.css">
  <title>Admin</title>
</head>

<body>

<?php
require_once("connection.php");
session_start();
if(!isset($_SESSION['id'])){

    header("location:Login_In.php");
  
  }
?>

<div class="type"><h1>Admin View<h1>
  <div class="logas"><p>Welcome, <?php echo $_SESSION["name"]; ?> !</p>
  <a href="home.php"><button>View Products</button></a>
  <a href="add_items.php"><button>Add Products</button></a>
  <a href="logout.php"><button>Log Out</button></a>
</div>
</div>