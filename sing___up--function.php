<?php
session_start();
include("config\connection.php");
 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
   $user_fname=$_POST['fisrt_name'];
   $user_lname=$_POST['lastname'];
  $user_email= $_POST['email'];
   $user_department=$_POST['department'];
  $user_password1= $_POST['password'];
   $user_password2=$_POST['Re-type_password'];
   //rememeber that you need to chech if the password and the re_type one are identical
   if(!$user_password1 === $user_password2)
   {
    echo "please verify your password the are not identical !";
   }else {
     $user_password = $user_password2;
     if (!empty($user_fname) && !empty($user_lname) && !empty($user_email) && !empty($user_department) && !empty($user_password1) && !empty($user_password2))
      {
       // save to database
       $query="INSERT INTO `user`( `fname`, `lname`, `email`, `department`, `password`) VALUES ('$user_fname','$user_lname','$user_email','$user_department','$user_password')";

       mysqli_query($connection6, $query);
        header("location:http://localhost/www.ispa.cm/dms/sign__in.php");
        die;
     }else {
       echo "please fill in valide information sir/madam !";
     }
   }
 }

 ?>
