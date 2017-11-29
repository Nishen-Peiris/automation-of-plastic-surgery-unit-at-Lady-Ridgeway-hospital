<?php

//To start the session and if not login to the system, redirect to the index page 
include("../../common/session_handling.php");

$role_id=$_SESSION['psc_user_role_id'];

//data con
require_once("../../common/dbconnection_inc.php"); 
$sql="SELECT * FROM user_role";
$result=mysqli_query($conn,$sql);
$sql="SELECT * FROM user_title";
$result1=mysqli_query($conn,$sql);
?> 


<html>
    <head> 
        <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
        <link rel="icon" href="../../images/title.png" />
        <link rel="stylesheet" type="text/css" 
              href="../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" 
          href="../../css/mainlayout.css" />
     
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js">
     
    </script>
    <script type="text/javascript">
function checkUserName(str)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("show").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getUserName.php?id="+str,true);
xmlhttp.send();
}
</script>
<script>
function checkForm(){
	var pass=document.getElementById('pass').value;
	var cpass=document.getElementById('cpass').value;
	
	if(pass.length<6){
	 	document.getElementById('msg').innerHTML="Password should be more than 6 characters";
		document.getElementById('pass').focus();
		document.getElementById('pass').select();
		return false;
	} 
	
	if(pass!=cpass){
		document.getElementById('msg').innerHTML="Password are not matching";
		document.getElementById('cpass').focus();
		document.getElementById('cpass').select();
		return false;
		
		}
		return true;
	}
</script>
 
    </head>
    <body>
        <div id="main">
            <div id="header">
               <?php include '../../common/header.php'; ?>      
              
            </div>
            <div id="navi">
                <?php include '../../common/navi.php'; ?>
                
                &nbsp;</div>
            <div id="contents">
                <div>
                    <ol class="breadcrumb">
                                <li>
     <a href="../login/dashboard.php">               
         Dashboard </a></li>
         <li> <a href="../user/userManagement.php">User Management</a></li>
        
         <li class="font1" class="active">Add User</li>
                    </ol>
                   
                    <h3 align="center">Add <small class="font1">User</small></h3>
                    
                </div>
                <HR />
                <div>
                    <style type="text/css"> #msg{color:#F00; font-style:italic;} </style>
                   <!--Start Table-->
                   <form name="addUser" method="post" action="adduserprocess" onsubmit="return checkForm()">
                       <div class="row">
                       <div><span id="msg"></span> &nbsp;</div>
                       </div>   
                   <div class="row">
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                       <div class="col-lg-1 col-sm-1 col-md-1"> 
                      Name:
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">
                           <select id ="utitle" name="utitle" class="btn dropdown-toggle">
                                       <?php while($row=mysqli_fetch_array($result1)){ ?>
                                       <option value="<?php echo $row['user_title_id']; ?>">
                                       <?php echo $row['user_title_name']; ?>
                                       </option>
                                       <?php } ?>
                                   </select>
                       </div>
                           
                           
                           
                         
                          
                           
                     
                       <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="flname" id="flname" placeholder=" Name" class="form-control"/>   
                       </div>
                        
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                   </div>
                       
                       
                   
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      
                      
                    
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       
                       
                       <div class="row">
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       E - mail :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="email" id="email"  placeholder="E-mail" class="form-control"/>
                           
                       </div>
                       
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       </div>
                           <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                             <div class="row">
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                      User Designation :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                         
                           <select name="urole" id="urole" class="btn dropdown-toggle">
                            <?php while($row=mysqli_fetch_array($result)){ ?>
                            <option value="<?php echo $row['user_role_id']; ?>">
                            <?php echo $row['user_role_name']; ?>
                            </option>
                            <?php } ?>
                            </select>
                           
                       </div>
                       
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       </div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div> 
                           <div class="row">
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       User Telephone No :
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">
                        Mobile No 1 :   
                       </div>
                         <div class="col-lg-2 col-sm-2 col-md-2">
                         <input name="mobile_no_1" id="mobile_no_1" placeholder="Mobile No 1" class="form-control"/>  
                         </div>  
                        
                       
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       </div> 
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div> 
                           <div class="row">
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       &nbsp;
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">
                        Mobile No 2 :   
                       </div>
                         <div class="col-lg-2 col-sm-2 col-md-2">
                         <input name="mobile_no_2" id="mobile_no_2" placeholder="Mobile No 2" class="form-control"/>  
                         </div>  
                        
                       
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       </div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div> 
                           <div class="row">
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                        &nbsp;
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">
                        Home :   
                       </div>
                         <div class="col-lg-2 col-sm-2 col-md-2">
                         <input name="home" id="home" placeholder="Home" class="form-control"/>  
                         </div>  
                        
                       
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       </div>
                           <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div> 
                            <div class="row">
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       User Name :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="uname" id="uname"  placeholder="User Name" class="form-control"onkeyup="checkUserName(this.value)"/>&nbsp; <span id="show"> </span>
                           
                       </div>
                       
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       </div>
                           <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                           
                            <div class="row">
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       Password :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="pass" id="pass"  placeholder="Password" class="form-control" />
                           
                       </div>
                       
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       </div>
                           <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     <div class="row">
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       Confirm Password:
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="cpass" id="cpass"  placeholder="Confirm Password" class="form-control"/>
                           
                       </div>
                       
                       <div class="col-lg-3 col-sm-3 col-md-3">&nbsp; </div>
                       </div>
                           <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                         <div class="row">
                       
                       <div class="col-lg-4 col-sm-4 col-md-4"> 
                           &nbsp;
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <button type="submit" class="btn btn-primary">
                               <i class="glyphicon glyphicon-save"></i>
                               Save</button>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                           &nbsp;
                       </div>
                     
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <button type="reset" class="btn btn-primary">
                               <i class="glyphicon glyphicon-refresh"></i>
                               Reset</button>
                           
                       </div>
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                        &nbsp; 
                       </div>
                       
                       
                       
                       
                   </div>
                       
                   </form>  
                    
                    <!--End-->
                    
                    
                    
                </div>
                
                
                
                
                
             </div>
                   
                
            </div>     
                
                
                
                
                
                            <div id="footer">
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
               <?php include '../../common/footer.php'; ?> 
            </div>            
       
        
    </body>
    
</html>

