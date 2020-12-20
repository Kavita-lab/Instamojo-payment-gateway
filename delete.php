<?php

$pi=$_GET["pi"];

$conn=mysqli_connect("localhost","root","","miniproject");
if($conn)
{ 
echo "successfull";
}
else{
echo "Failed";
}
$query="DELETE FROM payment WHERE payment_id='$pi'";
$result=mysqli_query($conn,$query);
if($result)
{ echo "Record Deleted from table";}
else
{ echo "process Failed";}
?>