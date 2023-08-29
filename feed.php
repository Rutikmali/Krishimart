<?php
session_start();
$con=mysqli_connect("localhost","root","","ecom");

$name=$_POST['name'];
$sugg=$_POST['suggesition'];
$rating=$_POST['rating'];


$q="INSERT INTO feedback VALUES('$name','$sugg','$rating')";

if(mysqli_query($con,$q)){
    echo "<h4> thank you for your valueable feedback </h4>";
    header("Location: index.php");
   

}








?>


