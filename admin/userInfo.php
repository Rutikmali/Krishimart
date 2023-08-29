<link rel="stylesheet" href=ad.css>

<html>
<body>
<h1 sytle="text-align :'center'"> ALL CUSTOMER LOGIN DETAILS</h1>

</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","ecom");


$q="select * from ecomlogin ";


$res=mysqli_query($con,$q);


if($res>NULL){
    echo"</br>";
    echo"</br>";
    echo"</br>";
    echo"</br>";

    

echo"<table border=1>";
echo "<tr border=1 >";

echo "<td>"."ID"."</td>";
echo "<td>"."FIRST NAME"."</td>";
echo "<td>"."LAST  NAME"."</td>";
echo "<td>"."MOBILE NUIMBER"."</td>";
echo "<td>"."EMAIL"."</td>";
echo "<td>"."PASSWORD"."</td>";
echo "<td>"."ADDRESS"."</td>";

while($row=mysqli_fetch_assoc($res)){
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$row['id'] ."</td>";
    echo "<td>".$row['fname'] ."</td>";
    echo "<td>".$row['lname'] ."</td>";
    echo "<td>".$row['mobile'] ."</td>";
    echo "<td>".$row['email'] ."</td>";
    echo "<td>".$row['password'] ."</td>";
    echo "<td>".$row['address'] ."</td>";
    echo "</tr>";






}









echo"</table >";


}



?>
