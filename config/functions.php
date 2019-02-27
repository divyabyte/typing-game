<?php

function register()
{
	global $conn;
	if(isset($_POST['name']) || isset($_POST['mobileno']))

	$password	= $_POST['pass'];
	$username	= $_POST['name'];
	$mobile_no  = $_POST['mobileno'];

	$check = $conn->query("SELECT * FROM userDetails WHERE  username='$username'"); 
	if(mysqli_num_rows($check) > 0)
	{
		echo '<audio controls>
  			<source src="../audio/takenuser.mpeg" type="audio/mpeg">
			</audio>';
 
	}
	elseif(isset($check))
	{
		if(!empty($username))
		{
			$conn->query("INSERT INTO userDetails(username,password,mobile_no) VALUES ('$username','$password','$mobile_no')") or die(mysqli_error($conn)) ; 

		}
	} }  


function login()
{
	global $conn;

	$password = $_POST['pass'];
	$username = $_POST['name'];

	$check = "SELECT * FROM userDetails where username='$username'";

	$query = mysqli_query($conn,$check) or die(mysqli_error($conn));

	$result = mysqli_fetch_array($query);

	if ($result['password'] != $password) {

		echo '<audio controls>
  			<source src="../audio/passnot.mpeg" type="audio/mpeg">
			</audio>';
	}
}
?>