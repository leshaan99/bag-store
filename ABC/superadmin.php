<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="admin.css">
  <title>Super Admin</title>
</head>

<body>

<?php
require_once("connection.php");
session_start();
if (!isset($_SESSION["email"]) || $_SESSION["type"] != "superadmin") {
    header("Location: Log_In.php");
  }
?>

<div class="type"><h1>Super Admin View<h1>
  <div class="logas"><p>Welcome, <?php echo $_SESSION["name"]; ?> !</p>
  <a href="view.php"><button>View Users</button></a>
  <a href="home.php"><button>View Products</button></a>
  <a href="add_items.php"><button>Add Products</button></a>
  <a href="logout.php"><button>Log Out</button></a>
</div>
</div>