<?php
include("connect.php");

   $username = $_POST["username"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $password1 = $_POST["password1"];
   $password2 = $_POST["password2"];

   $sql = "INSERT INTO `register`(`username`, `email`, `phone`, `password1`, `password2`) VALUES ('$username','$email','$phone','$password1','$password2')";
   $insert  = mysqli_query($con,$sql);

   if(!$insert){
      echo "There is a problem while inserting record";
   }else{
      include ("index.php");
   }

?>