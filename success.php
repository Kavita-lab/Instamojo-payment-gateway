<?php
session_start();
echo $_SESSION['TID'];
echo "<br>";
print_r($_REQUEST);
$payment_id=$_REQUEST['payment_id'];
$payment_status=$_REQUEST['payment_status'];
$payment_request_id=$_REQUEST['payment_request_id'];


$conn=mysqli_connect("localhost","root","","miniproject");
if($conn)
{
 echo"successfull";
}
else
{
echo "Failed";
}


$sql="INSERT INTO payment (payment_id, payment_status,payment_request_id) VALUES('$payment_id',
'$payment_status','$payment_request_id')";
$query=mysqli_query($conn,$sql);
if($query)
{ header ('location: show.php');
}
?>