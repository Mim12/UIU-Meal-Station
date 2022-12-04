<?php
session_start();
$conn = mysqli_connect('localhost','root','','uiu_meal_station');
$sql= "SELECT * FROM admin";
$result= mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup_styles.css">
</head>
<body>
 
<?php if(isset($_SESSION['error_msg']))  { ?>
            <div class= "alert alert-warning">
                 <strong> Warning! </strong> <?php echo $_SESSION['error_msg'];?> 
         </div>
     <?php }  ?>
    


      
    <nav>
        <div class="nav-left">
            <a href="admin_signup.php"><img src="img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="admin_login.php">Login</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="img/user.png"></div>
        </div>
    </nav> 
    <div class="container">
        <div class="left">
            <div class="signup-form">
                <h1>Sign Up</h1>
                <form action="admin_confirm_signup.php" method="POST">
                <input required type="text" placeholder="Name" name="name"><br>
                <input required type="email" placeholder="Email" name="email"><br>
                <input required type="password" placeholder="Password" name="password"><br>
                <input required type="password" placeholder="Confirm Password" name="password"><br>
                <button style="color:white;">Submit</a></button>
                </form>
            </div>
        </div>
    </div> 
    <footer>
        <div class="footer"><img src="img/footer.png"></div>
    </footer>  

    <?php unset($_SESSION['error_msg']); ?>

</body>
</html>