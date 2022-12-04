<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<style>
    nav
{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #ffffff;
    padding: 5px 5%;
    position: sticky;
    top: 0;
    z-index: 100;
}
.logo
{
    width: 100px;
    margin-right: 20px;
    margin-left: -35px;
    cursor: pointer;
}
.nav-left, .nav-right, .nav-middle
{
    display: flex;
    align-items: center;
    
}
.nav-middle ul li{
    font-family: 'Poppins';
    font-style: normal;
    font-size: 18px;
    list-style: none;
    display: inline-block;
    margin: 0 15px;
}
.nav-middle a
{
    text-decoration: none;
    color: #161009;

}
.nav-middle a:hover
{
    color: #FF8710;
}
</style>
</head>
<body>
        <div class="nav-left">
            <a href="landing.php"><img src="img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="img/user.png"></div>
        </div>
    </nav> 
</body>
</html>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$con_pass=$_POST['confirm_password'];


$hash=password_hash($pass,PASSWORD_DEFAULT);

if($pass!=$con_pass){
    session_start();
    $_SESSION['error_msg']= "Password & Confirm Password Didn't Match";
    header("Location: signup.php");
}


$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$mail_check= "SELECT * FROM student WHERE email='$email' ";
$result= mysqli_query($conn, $mail_check);

if(mysqli_num_rows($result)>0)
{ 
    echo "Email is already taken"; 
}

else{

    $sql= "INSERT INTO student VALUES(NULL, '$name', '$email', '$hash', 'pending')"; 
    mysqli_query($conn, $sql) ;
    echo "your account is now pending for approval";
}



?>