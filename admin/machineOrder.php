


<link rel="stylesheet" href=ad.css>


<html>
<body>
<h1 > ALL MACHINE ORDERS</h1>

</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","ecom");


$q="select * from machineorders ";


$res=mysqli_query($con,$q);


if($res>NULL){
    echo"</br>";
    echo"</br>";
    echo"</br>";
    echo"</br>";

    

echo"<table border=1>";
echo "<tr>";

echo "<td>"."ID"."</td>";
echo "<td>"." NAME"."</td>";
echo "<td>"."Email"."</td>";
echo "<td>"."MOBILE NUIMBER"."</td>";
echo "<td>"." FROM DURATION"."</td>";
echo "<td>"."TO DURATION"."</td>";
echo "<td>"."ADDRESS"."</td>";
echo "<td>"."PAYMENT MODE"."</td>";
echo "<td>"."AMOUNT PAID"."</td>";


while($row=mysqli_fetch_assoc($res)){
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$row['id'] ."</td>";
    echo "<td>".$row['name'] ."</td>";
    echo "<td>".$row['email'] ."</td>";
    echo "<td>".$row['phone'] ."</td>";
    echo "<td>".$row['fduration'] ."</td>";
    echo "<td>".$row['tduration'] ."</td>";
    echo "<td>".$row['address'] ."</td>";
    echo "<td>".$row['pmode'] ."</td>";
    echo "<td>".$row['amount_paid'] ."</td>";

    echo "</tr>";






}









echo"</table >";


}



?>

