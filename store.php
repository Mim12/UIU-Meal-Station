<?php
session_start();
$food_name=$_POST['food_name'];
$food_type=$_POST['food_type'];
$food_price=$_POST['food_price'];
$canteen_id = $_REQUEST['canteen_id'];

$conn = mysqli_connect('localhost','root','','uiu_meal_station');


$sql= "INSERT INTO food_details VALUES(NULL, '$food_name', '$food_type', '$food_price',$canteen_id)";

if(mysqli_query($conn, $sql)) {
   echo "Added Successfully.";
   header("Location: canteen_food_details.php");
} else echo "Not Inserted";
?>
