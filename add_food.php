<?php
session_start();
$conn = mysqli_connect('localhost','root','','uiu_meal_station');
$sql= "SELECT * FROM food_details";
$result= mysqli_query($conn, $sql);
$canteen_id = $_REQUEST['canteen_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Adding Car</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    


<div class= "container">
  <div class= "row">
    
     <div class= "col-md-6 col-md-offset-3">

         <?php if(isset($_SESSION['error_msg']))  { ?>
            <div class= "alert alert-warning">
                 <strong> Warning! </strong> <?php echo $_SESSION['error_msg'];?> 
         </div>
     <?php }  ?>
    
     <h2> Adding food </h2>
     <hr>
      <form action="store.php" method="POST">

        <div class="form-group">
        
            <input required type="text" class="form-control" name= "food_name" placeholder= "food_name">
         </div>

         <div class="form-group">
        
        <input required type="text" class="form-control" name= "food_type" placeholder= "food_type">
        </div>

        <div class="form-group">
        
        <input required type="text" class="form-control" name= "food_price" placeholder= "food_price">
     </div>
         <input type="hidden" name="canteen_id" value="<?php echo $canteen_id;?>" id="">

         <button type="submit" class="btn btn-default"> Submit </button><br>
         </form>

       

         </div>
     </div>   
     

     
        

         </div>
     </div>   
 </div>

<?php unset($_SESSION['error_msg']); ?>

</body>
</html>

 