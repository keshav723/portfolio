<?php 

$conn=mysqli_connect("localhost","root","keshav123","portfolio");
if(isset($_POST['send']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$reg_q="INSERT INTO communi(username,email,subject,message) VALUES ('$name','$email','$subject','$message')";
$z=mysqli_query($conn,$reg_q);
echo $reg_q;

	if ($z==TRUE) {
		echo "<script> alert('registration succsess')</script>";
		header("Location:mypage.html");
	}

}


?>