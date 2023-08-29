


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href=ad.css>
<html>
<body>
<h1 > ALL  ORDERS</h1>

</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","ecom");


$q="select * from orders ";


$res=mysqli_query($con,$q);


if($res>NULL){
    echo"</br>";
    echo"</br>";
    echo"</br>";
    echo"</br>";

    

echo"<table border=1 >";
echo "<tr>";

echo "<td>"."ID"."</td>";
echo "<td>"." NAME"."</td>";
echo "<td>"." EMAIL"."</td>";

echo "<td>"."MOBILE NUIMBER"."</td>";
echo "<td>"." ADDRESS"."</td>";
echo "<td>"."PAYMENT MODE"."</td>";
echo "<td>"."PRODUCTS"."</td>";
echo "<td>"."AMOUNT PAID"."</td>";


while($row=mysqli_fetch_assoc($res)){
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$row['id'] ."</td>";
    echo "<td>".$row['name'] ."</td>";
    echo "<td>".$row['email'] ."</td>";
    echo "<td>".$row['phone'] ."</td>";
    echo "<td>".$row['address'] ."</td>";
    echo "<td>".$row['pmode'] ."</td>";
    echo "<td>".$row['products'] ."</td>";
    echo "<td>".$row['amount_paid'] ."</td>";

    echo "</tr>";






}









echo"</table >";


}



?>

