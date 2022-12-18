<?php  
session_start();
$food_id= $_GET['food_id'];

$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$sql = "SELECT * FROM vikrampur_kitchen_fd WHERE $food_id= food_id";
$result = mysqli_query($conn, $sql);

$fd= mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>car details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="khan's_kitchen_fd_styles.css" class="rel">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <!--Start Nav Bar -->
      <nav>
        <div class="nav-left">
            <a href="canteen_menu.php"><img src="../img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="">Ratings</a></li>
                <li><a href="">Review Foods</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="../img/user.png"></div>
        </div>
    </nav> 

                       <!--End Nav Bar -->
                       <br><br>
     <div class="container">
         <div class="row">
             <div class="col-md-3">
    
             </div>
              <div class="col-md-9">

              <h2> food_details Information </h2>
              
              <table class="table">

              <tr>
              <th width="100" class="text-right"> food_name: </th>
              <td> <?php echo $fd['food_name']; ?> </td>
              </tr>

              <tr>
              <th width="100" class="text-right"> food_type	: </th>
              <td> <?php echo $fd['food_type']; ?> </td>
              </tr>

              <tr>
              <th width="100" class="text-right"> food_price: </th>
              <td> <?php echo $fd['food_price']; ?> </td>
              </tr>

              <?php $_SESSION['food_price']=$fd['food_price'];?>

             </table>
             <a class = "btn btn-info" href="order.php?food_id= <?php echo $food_id; ?>">Order</a>
             <a class = "btn btn-danger" href="vikrampur_kitchen_fd.php">back to food_details list</a>
             </div>
         </div>
     </div>
     
