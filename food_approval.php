<?php
session_start();

  $conn = mysqli_connect('localhost','root','','uiu_meal_station');

  $sql = "SELECT vk_food_order.*, vikrampur_kitchen_fd.*, student.*  FROM vk_food_order INNER JOIN vikrampur_kitchen_fd ON vk_food_order.food_id=vikrampur_kitchen_fd.food_id INNER JOIN student ON vk_food_order.student_id=student.student_id WHERE vk_food_order.status= 'pending' ORDER BY vk_food_order.id ASC";
  $result = mysqli_query($conn, $sql);
  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canteen approval</title>
    <link rel="stylesheet" href="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
 
<?php
  ?>
    <nav>
        <div class="nav-left">
            <a href="admin_approval.php"><img src="../img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="vk_login.php">Logout</a></li>
                <li><a href="canteen_menu.php">Back to Administration</a></li>
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
                     <th> Food Name </th>
                     <th> Food Price </th>
                     <th> Student ID</th>
                    
                     <th> Order Time </th>
                     <th> Action</th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  {?>
                   <tr>
                     <td><?php echo $row['food_name'];?> </td>
                     <td><?php echo $row['food_price'];?></td>
                     <td><?php echo $row['student_id'];?></td>
                     <td><?php echo $row['time'];?></td>
                     <td>
                         <form action="" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
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
    $order_id=$_POST['id'];

    $sql = "UPDATE vk_food_order SET status= 'approved' WHERE id =$order_id";
    $result = mysqli_query($conn, $sql);
    
    echo '<script type="text/javascript">';
    echo 'alert("Approved.")';


    echo 'window.location.href="notification.php"';
    
    echo '</script>';
    
}
?>

<?php
if(isset($_POST['deny'])){
    $order_id=$_POST['id'];

    $sql = "DELETE FROM vk_food_order WHERE id =$order_id";
    $result = mysqli_query($conn, $sql);

    echo '<script type="text/javascript">';
    echo 'alert("User Denied.")';

    echo 'window.location.href="admin_approval.php"';
    echo '</script>';
}
?>

    <footer>
        <div class="footer"><img src="../img/footer.png"></div>
    </footer>  

  
</body>
</html>