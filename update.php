<?php
$food_id= $_GET['food_id'];

$food_name=$_POST['food_name'];
$food_type=$_POST['food_type'];
$food_price=$_POST['food_price'];

$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$sql= "UPDATE food_details SET food_name='$food_name', food_type='$food_type', food_price='$food_price' WHERE food_id='$food_id' ";

if(mysqli_query($conn, $sql)) {
   echo "Added Successfully.";
   header("Location: canteen_food_details.php");
} else echo "Not Inserted";
?>