<?php
session_start();

//Connect to DB
include ('../dbconnect.php');

//Retrieve data from form
$username = $_POST['username'];
$password = $_POST['password'];

//Get user data based on login information (RETRIEVE) operation
$sql = "SELECT * FROM tb_user WHERE u_username='$username' AND u_pwd='$password'";

//Execute SQL
$result= mysqli_query($con, $sql);  //Execute SQL statement
$row = mysqli_fetch_array($result); //Retrieve result 
$count = mysqli_num_rows($result);  //Count result found

//Check login
if($count == 1) //User found
{
	//set session
	$_SESSION['u_username'] = session_id() ;
	$_SESSION['u_username'] = $username ;


	if($row['u_type'] == 1) //Admin
	{
		header ('Location: ../employer/employer.php');
	}
	else if($row['u_type'] == 2)//Employee
	{
		header ('Location: ../employee/employee.php');
	}
	else if($row['u_type'] == 3)//Customer
	{
		header ('Location: ../customer/customer.php');
	}

}
else //User not found
{
	header ('Location: signin.php?alert=notexist');
}

//Close connection
mysqli_close($con);


?>