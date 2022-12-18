<?php  

session_start();

if(!isset($_SESSION['login']))
{
// echo "please login";
 //header("Location: login.php");
}
$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$sql = "SELECT * FROM olympic_kitchen_fd";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>khan's kitchen food detaills</title>

    <!--<link rel="stylesheet" href="css/style.css" class="rel">-->
    <link rel="stylesheet" href="khan's_kitchen_fd_styles1.css" class="rel">
    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js
"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js
"></script>
    <![endif]-->
  </head>
  <body>
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
            <form action="ok_search.php" method="POST">
      <input class="input" type="text" name="foods" placeholder="Search By Name/Type">
      <button Type="submit" name="search" class ="btn btn-info">Submit</button>
    </form>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="../img/user.png"></div>
        </div>
    </nav> 
    
                       <!--End Nav Bar -->
     <div class="container">
         <div class="row">
             <div class="col-md-3">
            <!-- <a class = "btn btn_info" href="home.php">Back to home page</a>
             <a class = "btn btn_info" href="add_new_carwash.php">add new carwash</a> <br>-->
             <br><br><br><br>
             </div>
              <div class="col-md-9">

              <table class="table">
                 <thead>
                   <tr>
                     <th>food_id </th>
                     <th>food_name </th>
                     <th>food_type </th>
                     <th>food_price </th>
                     <th> Actions </th>
                   </tr>
                 </thead>

                 <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { $_SESSION['food_id']=$row['food_id']; ?>
                   <tr>
                     <td><?php echo $row['food_id'] ?> </td>
                     <td><?php echo $row['food_name'] ?></td>
                     <td><?php echo $row['food_type'] ?></td>
                     <td><?php echo $row['food_price'] ?></td>
                     <td>
                     <a class="btn btn-info" href="ok_view.php?food_id= <?php echo $row['food_id']; ?>">View</a>
                     
                         
                     </td>
                  </tr>
                  <?php } ?>
                 </tbody>
             </table>
             
             </div>
         </div>
     </div>
