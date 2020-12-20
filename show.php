<html>
<head>

<style>
td{
padding:10px;
}
</style>
</head>

<body background="yello" >
<?php
$conn=mysqli_connect("localhost","root","","miniproject");
if ($conn)
{ 
echo "successfull";
}
else{
echo "Failed";
}
$sql="SELECT * FROM payment";
$result=mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
echo $total;
if ($result)
{ 
echo "successfull";
}
else{
echo "Failed";
}
if($total!=0)
{
?>
<table border="1" width="1000px" height="600px">
<tr>

    <td><FONT size="5" color="red" >PAYMENT_ID</FONT></td>
	<td><FONT size="5" color="red">PAYMENT_STATUS</FONT></td>
	<td><FONT size="5" color="red">PAMENT_REQUEST_ID</FONT></td>
	<td><FONT size="5" color="red">CREATED_AT</FONT></td>
	<td><FONT size="5" color="red">UPDATED_AT</FONT></td>
</tr>



<?php
while($res=mysqli_fetch_assoc($result))
{
 
   echo "<tr>
         <td>".$res['payment_id']."</td>
		  <td>".$res['payment_status']."</td>
		   <td>".$res['payment_request_id']."</td>
		    <td>".$res['created_at']."</td>
			 <td>".$res['updated_at']."</td>
			  <td><a href='delete.php?pi=$res[payment_id]' onclick='return checkdelete()'>Delete</a></td>
         </tr>
   ";
}
}
else
{ echo "no result found";}
?>
</table>
<script>
function checkclick()
{
return confirm ("Are you sure you want to delete data? ");}
</script>
</body>


</html>