<?php
session_start();
$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login_styles.css">
</head>
<body>

        <?php if(isset($_SESSION['error'])){?>
            <div class="alert alert-warning">
                <strong>warning!</strong>Something wrong
           </div>
           <?php  } ?>

           <?php if(isset($_SESSION['reg_msg'])){?>
            <div class="alert alert-warning">
                <strong>SUCCESS!</strong> <?php echo $_SESSION['reg_msg'];?>
           </div>
         <?php  } ?>
    <nav>
        <div class="nav-left">
            <a href="landing.php"><img src="img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="signup.php">Signup</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="img/user.png"></div>
        </div>
    </nav> 
    <div class="container">
        <div class="left">
            <div class="login-form">
                <h1>Login</h1>
                <form action="confirm_login.php" method="post">
                <input required type="email" placeholder="Student Email, Faculty Email" name="email"><br>
                <input required type="password" placeholder="Password" name="password"><br>
                <button style="color:white;">Login</a></button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer"><img src="img/footer.png"></div>
    </footer>    
</body>
</html>
<?php unset($_SESSION['reg_msg']); ?>