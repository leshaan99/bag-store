<?php

session_start();
require_once("connection.php");
if (!isset($_SESSION["email"]) || $_SESSION["type"] != "superadmin") {
    header("Location: Log_In.php");
  }

?>

<?php 
	
	$user_list = '';

	$query = "SELECT * FROM user WHERE id>= 0 ";
	$users = mysqli_query($connection,$query);
 
	{
		while ($user = mysqli_fetch_assoc($users)) {
			$user_list .= "<tr>";
			$user_list .= "<td>{$user['name']}</td>";
			$user_list .= "<td>{$user['email']}</td>";
			$user_list .= "<td>{$user['type']}</td>";
			$user_list .= "<td> <a href=\"edit.php?user_id={$user['id']}\">Edit</a> </td>";
			$user_list .= "</tr>";
		}
	}

?>
 
<!DOCTYPE html>
<head>
	<title>Users</title>
	<link rel="stylesheet" href="view.css">
</head>
<body>
	
	<main>
	<table class="user">
		<tr>
		<th>Name</th>
		<th>Username</th>
		<th>Type</th>
		<th>Edit</th>
		</tr>
			<?php echo $user_list; ?>
		</table>
	</main>
	
</body>
</html>