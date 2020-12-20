<html>
<head></head>
<body>

<?php
$conn=mysqli_connect("localhost","root","","miniproject");
$sql="SELECT Id, Full_Name,Date,Blood_Group,Email,Mobile_no FROM registration_details";
$result=mysqli_query( $conn,$sql);
if($result)
{ echo ".Registered Users";}
else
{echo "failed";}
$total=mysqli_num_rows($result);
if($total!=0)
{

?>

<table border="1" width="1000px" height="600px">
<tr>
     <td><FONT size="5" color="Blue" >ID</FONT></td>
    <td><FONT size="5" color="Blue" >FULL_NAME</FONT></td>
	<td><FONT size="5" color="red">DATE</FONT></td>
	<td><FONT size="5" color="red">BLOOD_GROUP</FONT></td>
	<td><FONT size="5" color="red">EMAIL</FONT></td>
	<td><FONT size="5" color="red">MOBILE_NO</FONT></td>
	
</tr>
<?php

while($res=mysqli_fetch_assoc($result))
{
    echo "<tr>
	      <td>".$res["Id"]."</td>
	      <td>".$res["Full_Name"]."</td>
		  <td>".$res["Date"]."</td>
		  <td>".$res["Blood_Group"]."</td>
		  <td>".$res["Email"]."</td>
		  <td>".$res["Mobile_no"]."</td>
	      
	     
	
	";
	
	
	
}
}
else
{echo "oops!";}


?>
</table>
</body>
</html>