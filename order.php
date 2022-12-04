<?php 
//check food id
if(isset($_GET['food_id']))
{
    $food_id = $_GET['food_id'];
    $sql ="SELECT * FROM food_details WHERE food_id= '$food_id' ";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if($count==1){
        $row = mysqli_fetch_assoc($res);
        $food_name = $row['food_name'];
        $food_type= $row['food_type'];
        $food_price = $row['food_price'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="order_styles.css">
</head>
<body>
    <nav>
        <div class="nav-left">
            <a href="landing.html"><img src="img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="canteen_menu.php">Canteens</a></li>
                <li><a href="">Ratings</a></li>
                <li><a href="">Review Foods</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="user online"><img src="img/user.png"></div>
        </div>
    </nav> 
    <section class="food-search">
        <div class="container">
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
            <form action="order.php" method="POST"class="order">
                <fieldset>
                    <legend>selected food</legend>
                  
                      
                    <div class="food-menu-desc">
                        <h3></h3>
                        <input type="hidden" name="food_name" value="<?php echo $food_name;?>">
                        <input type="hidden" name="food_type" value="<?php echo $food_type;?>">
                        <input type="hidden" name="food_price" value="<?php echo $food_price;?>">

                        <div class="order-lebel">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                    </div>
    
                </fieldset>
                <br>
                <fieldset class="delivery_details">
                    <legend>Delivery details</legend>
                    <div class="order-lebel">Student_id</div>
                    <input type="text" name="id" placeholder="" class="input-responsive" required>
                    <div class="order-lebel">Order_date</div>
                    <input type="date" name="date" placeholder="" class="input-responsive" required>
                    <div class="order-lebel">Order_time</div>
                    <input type="time" name="time" placeholder="" class="input-responsive" required>
                    
                    
                    <input type="submit" name="submit" value="confirm-order" class="btn" required>
                </fieldset>
            </form>
            <?php 
            if(isset($_POST['submit']))
            {
                $food_title = $_POST['food_title'];
                $price = $_POST['price'];
                $qty = $_POST['qty'];
                $total= $price * $qty;
                $order_date =date("Y-m-d h:i:sa");
                //$status = "ordered";
                $student_id =$_POST['id'];


                $sql2 = "INSERT INTO food_order VALUES ('', '$qty', '$total', '$order_date', 'pending')";
                //echo $sql2;die();

                $res2 = mysqli_query($conn,$sql2);
                if($res2 == true)
                {
                    $_SESSION['food_order'] ="<div class='success text-center'>Food ordered Sucessfully.</div>";
                    header('location:canteen_food_details.php');

                }
                else
                {
                    $_SESSION['food_order'] ="<div class='error text-center'> Failed to order Food.</div>";
                    header('location: canteen_food_details.php');
                }
            }
            ?>
            
    
            
    </section>
    <footer>
        <div class="footer"><img src="img/footer.png"></div>
    </footer>  
</body>
</html>


