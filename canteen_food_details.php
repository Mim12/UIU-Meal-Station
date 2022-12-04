<?php
session_start();
if(isset($_REQUEST['canteen_id'])){
    $canteen_id = $_REQUEST['canteen_id'];
  }


  $conn = mysqli_connect('localhost','root','','uiu_meal_station');

  // $admin_id=$_GET['admin_id'];
  $sql = "SELECT * FROM food_details";
  $result = mysqli_query($conn, $sql);
  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fodd Details</title>
    <link rel="stylesheet" href="canteen_food_details_styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
 
<?php
  ?>
    <nav>
        <div class="nav-left">
            <a href="canteen_menu.php"><img src="img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="add_food.php?canteen_id=<?php echo $canteen_id;?>">Add Food</a></li>
                <li><a href="canteen_login.php">Logout</a></li>
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
                     <th> ID</th>
                     <th> Name </th>
                     <th> Type </th>
                     <th> Price </th>
                     <th> Actions </th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { $_SESSION['canteen_id']=$row['canteen_id'];?>
                   <tr>
                     <td><?php echo $row['food_id'] ?> </td>
                     <td><?php echo $row['food_name'] ?></td>
                     <td><?php echo $row['food_type'] ?></td>
                     <td><?php echo $row['food_price'] ?></td>
                     <td>
                         <a class="btn btn-info" href="view.php?food_id= <?php echo $row['food_id']; ?>">View</a>
                         <a class="btn btn-warning" href="edit.php?food_id= <?php echo $row['food_id']; ?>">Edit</a>
                         <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="delete.php?food_id= <?php echo $row['food_id']; ?>"> Delete </a>
                        
                         
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