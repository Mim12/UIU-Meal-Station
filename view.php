<?php  

$food_id= $_GET['food_id'];

$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$sql = "SELECT * FROM food_details WHERE $food_id= food_id";
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

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="container">
         <div class="row">
             <div class="col-md-3">
             <br><br>
             <a class = "btn btn_info" href="canteen_food_details.php">back to food list</a>
             </div>
              <div class="col-md-9">

              <h2> Food Information </h2>
              
              <table class="table">

              <tr>
              <th width="100" class="text-right"> Food Name	: </th>
              <td> <?php echo $fd['food_name']; ?> </td>
              </tr>

              <tr>
              <th width="100" class="text-right"> Food Type	: </th>
              <td> <?php echo $fd['food_type']; ?> </td>
              </tr>

              <tr>
              <th width="100" class="text-right"> Price	: </th>
              <td> <?php echo $fd['food_price']; ?> </td>
              </tr>
             
             </table>
             </div>
         </div>
     </div>