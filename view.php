<?php  
session_start();
//include'rating_process.php';
//$student_name= $_SESSION['student_name'];
$food_id= $_GET['food_id'];
$conn = mysqli_connect('localhost','root','','uiu_meal_station');

$sql = "SELECT * FROM food_details WHERE $food_id= food_id";
$result = mysqli_query($conn, $sql);

$fd= mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>food details + rating & review</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="rr.css">
    
    <link rel="stylesheet" href="rnr.js">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>

  
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous' >
	<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'>
	<script src='https://code.jquery.com/jquery-3.6.0.min.js' integrity='sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=' crossorigin='anonymous'> </script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'> </script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmY1' crossorigin='anonymous'> </script>

  




  </head>
  <body>
    
     <div class="container">
         <div class="row">
             <div class="col-md-3">
             <br><br>
             <a class = "btn btn_info" href="menu.php">back to menu</a>
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
              <td> <a class="btn btn-info" href="order.php">Order</a> </td>
             </table>
             </div>
         </div>
     </div>



     <div class="container">
      <h1 class="mt-5 mb-5"> User Rating with Review System </h1>
        <div class="card">
            <div class="card-header"> Sample Product </div>
            <div class="card-body">
                <div class="row">
                     <div class="col-sm-4 text-center">
                        <h1 class="text-warning mt-4 mb-4"> 
                          <b> <span id="average_rating">0.0 </span> /5 </b>
                        </h1>
                            <div class="mb-3">
                              <i class="fas fa-star star-light mr-1  main star"> </i>
                              <i class="fas fa-star star-light mr-1  main star"> </i>
                              <i class="fas fa-star star-light mr-1  main star"> </i>
                              <i class="fas fa-star star-light mr-1  main star"> </i>
                              <i class="fas fa-star star-light mr-1  main star"> </i>
                            </div>


                     <div class="col-sm-4">
                      <p>
                        <div class="progress-label-left"><b> 5</b> <i class="fas fa-star text-warning"> </i> </div>
                        <div class="progress-label-right">(<span id="total_five_star_review">0</span>) </div>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" 
                          id="five_star_progress" > </div>
                        </div>
                      </p>

                      <p>
                        <div class="progress-label-left"><b> 4</b> <i class="fas fa-star text-warning"> </i> </div>
                        <div class="progress-label-right">(<span id="total_four_star_review">0</span>) </div>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" 
                          id="four_star_progress" > </div>
                        </div>
                      </p>

                      <p>
                        <div class="progress-label-left"><b> 3</b> <i class="fas fa-star text-warning"> </i> </div>
                        <div class="progress-label-right">(<span id="total_three_star_review">0</span>) </div>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" 
                          id="three_star_progress" > </div>
                        </div>
                      </p>

                      <p>
                        <div class="progress-label-left"><b> 2</b> <i class="fas fa-star text-warning"> </i> </div>
                        <div class="progress-label-right">(<span id="total_two_star_review">0</span>) </div>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" 
                          id="two_star_progress" > </div>
                        </div>
                      </p>

                      <p>
                        <div class="progress-label-left"><b> 1</b> <i class="fas fa-star text-warning"> </i> </div>
                        <div class="progress-label-right">(<span id="total_one_star_review">0</span>) </div>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" 
                          id="one_star_progress" > </div>
                        </div>
                      </p>
                      
                      </div>

                      <div class="col-sm-4 text-center">
                       <h3 class="mt-4 mb-3"> Write Review Here</h3> 
                       <button type="button" name="add_review" id="add_review" class="btn btn-primary"> Review </button>
                      </div>
                </div>
              </div>
           </div>
           <div class="mt-5" id="review_content">
       </div>




      




</body>
</html>




<div id="review_modal" class="modal" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
      <h5 class="modal-title"> Submit Review</h5> 
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
        <span aria-hidden="true">&times; </span>
      </button>
</div>

<div class="modal-body">
      <h4 class="text-center mt-2 mb-4"> 
          <i class="fas fa-star star-light mr-1" id="submit_star_1" data-rating="1"> </i>
          <i class="fas fa-star star-light mr-1" id="submit_star_2" data-rating="2"> </i>
          <i class="fas fa-star star-light mr-1" id="submit_star_3" data-rating="3"> </i>
          <i class="fas fa-star star-light mr-1" id="submit_star_4" data-rating="4"> </i>
          <i class="fas fa-star star-light mr-1" id="submit_star_5" data-rating="5"> </i>
      </h4> 
<div class="form-group">
  <textarea name="user_review" id="user_review" class="form-control" placeholder="Type your review here!"> </textarea>
</div>
             <div class="form-group text-center mt-4">
                  <button type="button" class="btn btn-primary" id="save_review"> Submit </button>
             </div>
         </div>
      </div>
   </div>
</div>
