<?php

//To start the session and if not login to the system, redirect to the index page 
include("../../common/session_handling.php");

//data con
require_once("../../common/dbconnection_inc.php");
$utitle=$_POST['utitle'];
$flname=$_POST['flname'];
$email=$_POST['email'];
$urole=$_POST['urole'];
$mobile_no_1=$_POST['mobile_no_1'];
$mobile_no_2=$_POST['mobile_no_2'];
$home=$_POST['home'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];



$sql="SELECT * FROM login WHERE username='$uname'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count!=0){
		$msg="User Name is exsiting...";
		header("location:userManagement.php?msg=$msg");
	} else{
		$sqlin="INSERT INTO user VALUES('','$utitle','$flname','$email', '$urole', '$mobile_no_1', '$mobile_no_2', '$home')";
		mysqli_query($conn,$sqlin);
		$user_id=mysqli_insert_id($conn); //mysqli_insert_id - > id of last record
		$epass=sha1($pass);
		$sqlinlog="INSERT INTO login VALUES('$uname', '$epass','$user_id')";
		mysqli_query($conn,$sqlinlog);
		$msg="User Name is exsiting...";
		header("Location:userManagement.php");
		}

?>
