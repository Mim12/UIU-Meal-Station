<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu_styles.css">
</head>
<body>
    <nav>
        <div class="nav-left">
            <a href="menu.php"><img src="img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="">Canteens</a></li>
                <li><a href="">Ratings</a></li>
                <li><a href="">Review Foods</a></li>
                <li><a href="logout.php">Logout</a></li>
                
            </ul>
            <form action="search.php" method="POST">
      <input class="input" type="text" name="foods" placeholder="Search By Name/Type">
      <button Type="submit" name="search" class ="btn btn-info">Submit</button>
    </form>
        </div>
        <div class="nav-right">
            <div class="user online"><a href="user_profile.php"><img src="img/user.png"></a></div>
        </div>
    </nav> 
    


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

    <div class="container">
        <div class="row">
        <div class="col-md-3">
             </div>
              <div class="col-md-9">
              <table class="table">
                 <thead>
                 <tr>
                     <th> Name </th>
                     <th> Type </th>
                     <th> Price </th>
                     <th> Actions </th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { ?>
                   <tr>
                     <td><?php echo $row['food_name'] ?></td>
                     <td><?php echo $row['food_type'] ?></td>
                     <td><?php echo $row['food_price'] ?></td>
                     <td>
                         <a class="btn btn-info" href="order.php">Order</a>
                         
                         
                     </td>
                  </tr>
                  <?php } ?>
                 </tbody>
             </table>
             
             </div>
        </div>
        </div>
    </div> 




</body>
</html>