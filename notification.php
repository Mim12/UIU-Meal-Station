<?php
session_start();
if(isset($_REQUEST['canteen_id'])){
    $canteen_id = $_REQUEST['canteen_id'];
  }


  $conn = mysqli_connect('localhost','root','','uiu_meal_station');

  // $admin_id=$_GET['admin_id'];
  $sql = "SELECT vk_food_order.*, vikrampur_kitchen_fd.*, student.*  FROM vk_food_order INNER JOIN vikrampur_kitchen_fd ON vk_food_order.food_id=vikrampur_kitchen_fd.food_id INNER JOIN student ON vk_food_order.student_id=student.student_id WHERE vk_food_order.status= 'pending' ORDER BY vk_food_order.id ASC";
  $result = mysqli_query($conn, $sql);
  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="canteen_food_details_styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
 
<?php
$canteen_id=$_SESSION['canteen_id'];
  ?>
    <nav>
        <div class="nav-left">
            <a href="canteen_menu.php"><img src="../img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="add_food.php?canteen_id=<?php echo $canteen_id;?>">Add Food</a></li>
                <li><a href="canteen_login.php">Logout</a></li>
              
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="../img/user.png"></div>
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
                     <th> Student Name</th>
                     <th> Food Name </th>
                     <th> Food Type </th>
                     <th> Order Time </th>
                     <th> Price </th>
                     <th> Actions </th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { $_SESSION['canteen_id']=$row['canteen_id'];?>
                   <tr>
                     <td><?php echo $row['student_id'] ?> </td>
                     <td><?php echo $row['student_name'] ?> </td>
                     <td><?php echo $row['food_name'] ?></td>
                     <td><?php echo $row['food_type'] ?></td>
                     <td><?php echo $row['time'] ?></td>
                     <td><?php echo $row['amount'] ?></td>
                     <td>
                         <a class="btn btn-info" href="../vikrampur_kitchen/notification_process.php?student_id= <?php echo $row['student_id'] ?>">Notification</a>
         
                     </td>
                  </tr>
                  <?php } ?>
                 </tbody>
             </table>
             
             </div>
        </div>
        </div>
    </div> 
    <footer>
        <div class="footer"><img src="img/footer.png"></div>
    </footer>  

  
</body>
</html>