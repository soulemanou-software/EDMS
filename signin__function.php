<?php
include('config\connection.php');
session_start();
// create a function call "check_login"which is a php type library using this syntax bellow
function check_login($connection6){
// check if the sessions actually have the user data in  using this syntax bellow
if (!isset($_session['user_email'])) {
  // here you need to create variables that will be used in the query variable that will also be actually created
  $email = $_SESSION['user_email'];
  $query = "SELECT * FROM `user` where email='$email'";
  $result = mysqli_query($connection6,$query);
  // here you check if the result variable and the rows in the databaser actually exist then you process the next result
  if($result && mysqli_num_rows($result) > 0)
   {
    $user_data = mysqli_fetch_assoc($result);
    return $user_data;
  }

}
// rediret to check_login
header("location:http://localhost/www.ispa.cm/dms/sign__in.php");
die;
}
 ?>
