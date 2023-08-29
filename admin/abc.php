         
<?php

echo " failed";
$userid = $_POST['emailid'];
$pass = $_POST['password'];

if ($userid = "rutik@gmail.com" && $pass = "rutik@1234") {

   header("Location: adminIndex.php");
   

} else {
  echo "Login Failed";
}

?>
