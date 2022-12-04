<?php  

$food_id= $_GET['food_id'];
$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$sql = "DELETE FROM food_details WHERE food_id= $food_id";

if(mysqli_query($conn, $sql)) {
    header("Location:canteen_food_details.php");
 } else {
     echo "Not Deleted";
 }
 ?>
 