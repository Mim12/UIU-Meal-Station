<?php
session_start();
if(isset($_REQUEST['canteen_id'])){
    $canteen_id = $_REQUEST['canteen_id'];
  }


  $conn = mysqli_connect('localhost','root','','uiu_meal_station');

  $sql = "SELECT * FROM student WHERE status= 'pending' ORDER BY student_id ASC";
  $result = mysqli_query($conn, $sql);
  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin approval</title>
    <link rel="stylesheet" href="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
 
<?php
  ?>
    <nav>
        <div class="nav-left">
            <a href="admin_approval.php"><img src="img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="admin_login.php">Logout</a></li>
                <li><a href="menu.php">Food Menu View</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="img/user.png"></div>
        </div>
    </nav> 
    <div class="container">
        <div class="row">
        <div class="col-md-3">
             </div>
              <div class="col-md-9">
              <table class="table">
                 <thead>
                 <tr>
                     <th> Student ID</th>
                     <th> Name </th>
                     <th> Email </th>
                     <th> Action</th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  {?>
                   <tr>
                     <td><?php echo $row['student_id'];?> </td>
                     <td><?php echo $row['student_name'];?></td>
                     <td><?php echo $row['email'];?></td>
                     <td>
                         <form action="admin_approval.php" method="POST">
                <input type="hidden" name="student_id" value="<?php echo $row['student_id'];?>"/>
                <input type="submit" name="approve" value="approve"/>
                <input type="submit" name="deny" value="deny"/>
                </form>     
                     </td>
                  </tr>
                  <?php } ?>
                 </tbody>
             </table>
             
             </div>
        </div>
        </div>
    </div> 

<?php
if(isset($_POST['approve'])){
    $student_id=$_POST['student_id'];

    $sql = "UPDATE student SET status= 'approved' WHERE student_id =$student_id";
    $result = mysqli_query($conn, $sql);

    echo '<script type="text/javascript">';
    echo 'alert("Approved. Now you can log in.")';
    echo 'window.location.href="admin_approval.php"';
    echo '</script>';
}
?>

<?php
if(isset($_POST['deny'])){
    $student_id=$_POST['student_id'];

    $sql = "DELETE FROM student WHERE student_id =$student_id";
    $result = mysqli_query($conn, $sql);

    echo '<script type="text/javascript">';
    echo 'alert("User Denied.")';
    echo 'window.location.href="admin_approval.php"';
    echo '</script>';
}
?>

    <footer>
        <div class="footer"><img src="img/footer.png"></div>
    </footer>  

  
</body>
</html>