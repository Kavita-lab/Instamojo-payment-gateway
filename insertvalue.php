<?php
$name=$_POST['fname'];
$hname=$_POST['hname'];
$dob=$_POST['date'];
$blood=$_POST['blood'];
$qualification=$_POST['qualification'];
$village=$_POST['vill'];
$po=$_POST['po'];
$ps=$_POST['ps'];
$dist=$_POST['dist'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$adhar_no=$_POST['adhar_no'];
$panno=$_POST['pan_no'];
$email=$_POST['email'];
$mobile=$_POST['mobile_no'];

$conn=mysqli_connect("localhost","root","","miniproject");
$sql=" INSERT INTO registration_details VALUES ('$name','$hname','$dob','$blood','$qualification','$village',
'$po','$ps','$dist','$state','$pin','$adhar_no','$panno','$email','$mobile')";
$query=mysqli_query($conn,$sql);
if($query)
{
echo "data inserted";
}
else
{ echo "failed";}
?>