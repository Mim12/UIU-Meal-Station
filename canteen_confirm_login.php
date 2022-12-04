<?php
//ob_start();
//$value = isset($_POST['value']) ? $_POST['value'] : '';
//$email = "";
//$pass="";
$email =$_POST['email'];
$pass=$_POST['password'] ;
//$email =array_key_exists('email',$array) ? $array['email']: '';
//$pass=array_key_exists('password',$array) ? $array['password']: '';


$conn=mysqli_connect('localhost','root','','uiu_meal_station');

$sql="SELECT * FROM canteen WHERE email='$email' ";

$result =mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);

if($rowcount==1)
{ while ($row=mysqli_fetch_assoc($result)) {
    if (password_verify($pass, $row['password'])) {
        session_start();
   $_SESSION['login']==true;
   $_SESSION['canteen_id']=$row['canteen_id'];
   header("Location: canteen_menu.php");
    }
  }
}
else{
    echo 'wrong email and password';
}
?>