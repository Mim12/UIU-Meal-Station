<?php
session_start();
$student_id= $_SESSION['student_id'];
$severname="localhost";
$username="root";
$password="";
$database="uiu_meal_station";
$conn=mysqli_connect($severname,$username,$password,$database);
if(!$conn){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "SELECT * FROM student where student_id='$student_id'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="" >    
</head>
<body>

<nav>
        <div class="nav-left">
            <a href="menu.php"><img src="../img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="../img/user.png"></div>
        </div>
    </nav> 

<div class="">
<h3 class="">User Profile</h3>

    <div class="row">
        <div class="">
            <div class="">
               <form action="" method="POST" >
               
            </div>
        </div>
        <?php while ($row = mysqli_fetch_assoc($result))  {  $_SESSION['student_id']=$row['student_id'];?>
        <div class="">
            <div class="">
                <div class="row mt-2">
                
                <div class="col-md-12"><label class="labels">Name</label><input readonly type="text" class="form-control" name="student_name" value="<?php echo $row['student_name']; ?>"></div>
                <div class="col-md-12"><label class="labels">Email</label><input readonly type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>"></div>
                  
                <div class="mt-5 text-center"><a class="btn btn-primary" href="">Update Profile</a></div>
                 </div>
        </div>
       
    </form>
    </div>
</div>
<?php } ?>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>