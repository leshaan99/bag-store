<?php 

require_once("connection.php");

// Get the values 
if(isset($_POST['submit'])) {
    $image= $_POST['image'];
    $price= $_POST['price'];
    $discount= $_POST['discount'];
    $discription=$_POST['discription'];

    $query= "INSERT INTO bag (image , price , discount ,discription) VALUES ('$image','$price','$discount','$discription')";

    mysqli_query($connection, $query);
}
?>

<!DOCTYPE html>
<head>
    <title>Add Items</title>
    <link rel="stylesheet" href="add_items.css">
</head>
<body>

<main>
    <div class="container">
    <h1>Add Items</h1>
    <form class="additems" action="add_items.php" method="post">
        <input type="text" name="image" placeholder="Enter your image link"><br>
        <input type="text" name="price" placeholder="Enter item price"><br>
        <input type="text" name="discount" placeholder="Enter item discount"><br>
        <input type="text" name="discription" placeholder="Enter item discription"><br>

        <button type="submit" name="submit" value="add" class="form-btn">Add Item</button>

       <button><a href="home.php">View Items</a></button>
     </form>
     </div>
     </main>

</body>
</html>