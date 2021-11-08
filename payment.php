<?php
include("connect.php");

   $firstName = $_POST["firstName"];
   $lastName = $_POST["lastName"];
   $date = $_POST["date"];
   $payment = $_POST["payment"];
   $amount = $_POST["amount"];
  
   $sql = "INSERT INTO `payment`(`firstName`, `lastName`, `date`, `payment`, `amount`) VALUES ('$firstName','$lastName','$date','$payment','$amount')";
   $insert = mysqli_query($con,$sql);

   if(!$insert){
      echo "There is a problem while inserting record";
   }else{
      echo"<script type ='javascrip'>You have paid successfully. Press ok to pay again </script>";
      include("payment.html");
   }

?>