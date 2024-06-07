<?php
require_once("connection.php");
session_start();
if(!isset($_SESSION['id'])){

    header("location: Log_In.php");
  
  }
  
   $query = " SELECT * FROM bag ";
	$bag = mysqli_query($connection,$query);

    $row=mysqli_fetch_assoc($bag);
    
?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="home.css">
  <title>Home Page</title>
</head>

<body>
  <div class="name"><h1>Welcome, <?php echo $_SESSION["name"]; ?> !</h1>
  <a href="logout.php"><button>Log Out</button></a>
</div>

<div class="bag">

    <div class="content">
        <img src="images/1.jpg">
        <h3>LKR2,182.27</h3>
        <p>Extra 5% off with coins</p>
        <p>1,000+ sold</p>
        <p>Fengdong primary school bags for boys lightweight backpack large capacity bookbag waterproof backpack elementary student bagpack</p>
    </div>

    <div class="content">
        <img src="images/2.png">
        <h3>LKR1,340.44</h3>
        <p>Extra 10% off with coins</p>
        <p>90+ sold</p>
        <p>Anti-Lost Cute Children Bag School Unisex Softback Cartoon Dinosaur Baby Backpacks Boys Girls Unisex fashion kindergarten</p>
    </div>

    <div class="content">
        <img src="images/3.png">
        <h3>LKR5,776.21</h3>
        <p>Extra 5% off with coins</p>
        <p>474 sold</p>
        <p>One Shoulder Bag Men Document Cross Body Portable Large Capacity New Casual Trendn</p>
    </div>

    <div class="content">
        <img src="images/4.png">
        <h3>LKR3,684.6</h3>
        <p>Extra 2% off with coins</p>
        <p>33 sold</p>
        <p>Durable Travel Duffel Bag for Men and Women Solid Color Travel Duffel Bag with Shoes Compartment Suitable for Travel Fitness</p>
    </div>

</div>

<div class="contentadd">
    <img class="image" src="<?php echo $row["image"]; ?>">
    <div class="price"><?php echo $row["price"]; ?></div>
    <div class="discount"><?php echo $row["discount"]; ?></div>
    <div class="discription"><?php echo $row["discription"];?></div>
</div>

</body>
</html>