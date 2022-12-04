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
$email =$_POST['email'];
$pass=$_POST['password'] ;


$conn=mysqli_connect('localhost','root','','uiu_meal_station');

$sql="SELECT * FROM student WHERE email='$email' AND status='approved' ";

$result =mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);

if($rowcount==1)
{ while ($row=mysqli_fetch_assoc($result)) {
    if (password_verify($pass, $row['password'])) {
        session_start();
   $_SESSION['login']==true;
   $_SESSION['student_id']=$row['student_id'];
   header("Location: menu.php");
    }
  }
}
else{
    echo 'wrong email and password or your account is still pending';
}
?>