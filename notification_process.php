<?php
session_start();
if(isset($_REQUEST['canteen_id'])){
    $canteen_id = $_REQUEST['canteen_id'];
  }


  $conn = mysqli_connect('localhost','root','','uiu_meal_station');

  $sql = "SELECT vk_food_order.*, vikrampur_kitchen_fd.*, student.*  FROM vk_food_order INNER JOIN vikrampur_kitchen_fd ON vk_food_order.food_id=vikrampur_kitchen_fd.food_id INNER JOIN student ON vk_food_order.student_id=student.student_id WHERE vk_food_order.status= 'pending' ORDER BY vk_food_order.id ASC";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  ?>

<!DOCTYPE html>

<html>

<head>

 <title>Notification using PHP Ajax Bootstrap</title>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

 <br /><br />

 <div class="container">

  

  <br />

  <form method="post" id="comment_form">

   <div class="form-group">

    <label>Enter Subject</label>

    <input type="text" name="subject" id="subject" class="form-control">

   </div>

   <div class="form-group">

    <label>Enter Comment</label>

    <textarea name="comment" id="comment"  class="form-control" rows="5"></textarea>

   </div>

   <div class="form-group">

    <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />

   </div>

  </form>


 </div>

</body>

</html>
<script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});
</script>