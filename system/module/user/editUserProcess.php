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
$password=$_POST['password'];
$user_id=$_REQUEST['user_id'];
$NewPassword=sha1($password);


$sql="UPDATE user SET  user_title_id='$utitle' flname='$flname',email='$email',user_role_id='$urole',mobile_no_1='$mobile_no_1',mobile_no_2='$mobile_no_2',home='$home' WHERE user_id='$user_id'";
mysqli_query($conn,$sql);

if($password!=""){
$sql1="UPDATE login SET password='$NewPassword' WHERE user_id='$user_id'";
mysqli_query($conn,$sql1);
}


$msg="A record has been successfully updated";

header("Location:userManagement.php?msg=$msg");


?>
