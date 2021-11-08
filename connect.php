<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mwangaza";

$con = new mysqli($host,$user,$pass,$db);

if(!$con){
   echo "Connection failed check server side code";
}
?>