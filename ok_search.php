<?php
session_start();
$conn = mysqli_connect('localhost','root','','uiu_meal_station');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="olympic_kitchen_fd_styles.css">
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

<?php


    if(isset($_POST['search']) && isset($_POST['foods']) && strlen($_POST['foods'])>0 ){
        $keyword=$_POST['foods'];
        $keywordsql="SELECT * FROM olympic_kitchen_fd WHERE food_name LIKE '%".$keyword."%' OR food_type LIKE '%".$keyword."%'";
        $keywordsqlresult=mysqli_query($conn,$keywordsql);
        ?>
        <div class="container">
        <h4>Search result: <?php echo $keyword ?></h4><br>
        <hr>
        <div class="">
        <?php
          while($keyword_row=mysqli_fetch_assoc($keywordsqlresult)){
                echo "<h4> <b>".$keyword_row['food_name']."</b></h4> <br>";
                echo "<p> Food Type: ".$keyword_row['food_type']."</p>";
                echo "<p> Food Price: ".$keyword_row['food_price']."</p> <br>";
                echo "<a class ='btn btn-info' href='?food_id=".$keyword_row['food_id']."'>Order</a> <br>";
              
              
            }
            echo "<hr>";
        echo "</div>";
        echo "</div>";    
      }
      if(isset($_POST['search']) && isset($_POST['foods']) && strlen($_POST['foods'])==0){
        echo "<div class=search>";
        echo "<h4>Search result: Please enter any food name or type. </h4> ";
        echo "<hr>";
        echo "<div class=result>";
        echo "<h5>Nothing to show</h5>";
        echo "</div>";
        echo "</div>"; 
      }
  
 
?>