<?php  

session_start();
$canteen_id=$_SESSION['canteen_id'];

$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$sql = "SELECT * FROM canteen";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="canteen_menu_styles.css">
</head>
<body>
    <nav>
        <div class="nav-left">
            <a href="canteen_menu.php"><img src="img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="canteen_food_details.php?canteen_id=<?php echo $canteen_id;?>">Canteens</a></li>
                <li><a href="">Ratings</a></li>
                <li><a href="">Review Foods</a></li>
                <li><a href="canteen_login.php">Logout</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="img/user.png"></div>
        </div>
    </nav> 