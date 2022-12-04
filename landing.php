<?php  

session_start();

$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIU Meal Station</title>
    <link rel="stylesheet" href="landing_styles.css">
</head>
<body>
    <nav>
        <div class="nav-left">
           <a href="landing.php"><img src="img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="img/user.png"></div>
        </div>
    </nav>
    <div class="container">
        <p>Ordering? Need to</p>
        <h1> <a href="signup.php">Sign Up!</a></h1>
        <small>Already a member? <a href="login.php">Login here.</a></small>
    </div>
    <footer>
        <div class="footer"><img src="img/footer.png"></div>
    </footer> 
</body>
</html>