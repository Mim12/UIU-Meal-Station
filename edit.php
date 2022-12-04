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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>editing</title>
</head>
<body>
    
</body>
</html>

<div class= "container">
  <div class= "row">
    
     <div class= "col-md-6 col-md-offset-3">

         <?php if(isset($_SESSION['error_msg']))  { ?>
            <div class= "alert alert-warning">
                 <strong> Warning! </strong> <?php echo $_SESSION['error_msg'];?> 
         </div>
     <?php }  ?>
    


     <h2> Editing Food Details</h2>
     <hr>

      <form action="update.php?food_id=<?php echo $food_id ?>" method="POST">

        <div class="form-group">
            <input required type="text" class="form-control" name= "food_name" placeholder= "food_name" value="<?php echo $fd['food_name']?>">
         </div>

         <div class="form-group">
          
            <input required type="text" class="form-control" name= "food_type" placeholder= "food_type" value="<?php echo $fd['food_type']?>">
         </div>

         <div class="form-group">
            
            <input required type="text" class="form-control" name= "food_price" placeholder= "price" value="<?php echo $fd['food_price']?>">
         </div>


         <button type="submit" class="btn btn-default"> Submit </button><br>
         </form>

        

         </div>
     </div>   
 </div>